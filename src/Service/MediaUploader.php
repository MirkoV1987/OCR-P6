<?php

// src/Service/MediaUploader

namespace App\Service;

use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\ErrorHandler\ErrorHandler;
use App\Entity\Media;
use App\Entity\Trick;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class MediaUploader
{
    private $params;
    private $em;
    private $uploadsPath;

    public function __construct(string $uploadsPath, ContainerBagInterface $params, EntityManagerInterface $em)
    {
        $this->params = $params;
        $this->em = $em;
        $this->uploadsPath = $uploadsPath;
    }

    public function uploadTrickMedia(UploadedFile $uploadedFile)
    {
        $destination = $this->uploadsPath.'/public/uploads/images/tricks';
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();

        try {
            $uploadedFile->move($destination, $fileName);
        } catch (FileException $e) {
            throw new Exception("Erreur de chargement du fichier");
        }

        return $fileName;
    }

    public function manageMedia(array $medias, Trick $trick)
    {
        $medias = $trick->getMedias();
        foreach ($medias as $media) {
            $media->setTrick($trick);
            $media->setName($media->getName());
            //$media->setImageFile($media->getImageFile());
            $media->setCaption($media->getCaption());
            $now = new \DateTime('+ 1 hour');
            $media->getDateAdd($now);
            $this->em->persist($media);
            $this->em->flush();
        }

        return $medias;
    }
}
