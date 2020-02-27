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

class UploaderHelper
{
    private $params;
    private $em; 

    public function __construct(ContainerBagInterface $params, EntityManagerInterface $em)
    {
        $this->params = $params;
        $this->em = $em;
    } 

    public function uploadTrickFile(array $files, Trick $trick): string
    {
        /**
         * @var UploadedFile $file
         */
        foreach ($files as $file) { 

        $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFileName);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $mediaDirectory = $this->params->get('media_directory');
            $file->move($mediaDirectory, $fileName);
        } catch (FileException $e) {
            throw new Exception("Erreur de chargement du fichier", 1);   
        }

        $media = new Media();
        $media->setName($fileName);
        $media->setCaption($originalFileName);
        $media->setDateAdd(new \Datetime('+ 1 hour'));
        $media->setTrick($trick);

        $this->em->persist($media);
        $this->em->flush();

        }

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }  
}
