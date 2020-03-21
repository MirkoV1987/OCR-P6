<?php

// src/Service/UploaderHelper

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

    public function __construct(ContainerBagInterface $params, EntityManagerInterface $em)
    {
        $this->params = $params;
        $this->em = $em;
    }

    public function uploadTrickFile(array $medias, Trick $trick): string
    {
        /**
         * @var UploadedFile $medias
         */
        foreach ($medias as $media) {

        $caption = pathinfo($media->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $caption);
        $name = $safeFilename.'-'.uniqid().'.'.$media->guessExtension();

            try {
                $mediaDirectory = $this->params->get('/uploads/images');
                $media->move($mediaDirectory, $name);
            } catch (FileException $e) {
                throw new Exception("Erreur de chargement du fichier", 1);
            }

        }

        $medias = $trick->getMedias();
        foreach($medias as $media) {

            $media->setTrick($trick);

            $media->setName($media->getName());
            $media->setCaption($media->getCaption());
            $now = new \DateTime('+ 1 hour');
            $media->getDateAdd($now);
            $this->em->persist($media);
            $this->em->flush();
                
        }

        return $medias;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}
