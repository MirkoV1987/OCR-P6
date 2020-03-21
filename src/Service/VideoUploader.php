<?php

// src/Service/UploaderHelper

namespace App\Service;

use App\Entity\Trick;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class VideoUploader
{
    private $params;
    private $em;

    public function __construct(ContainerBagInterface $params, EntityManagerInterface $em)
    {
        $this->params = $params;
        $this->em = $em;
    }

    public function uploadTrickVideo(array $videos, Trick $trick)
    {
        $videos = $trick->getVideos();
        foreach ($videos as $video) {
            $video->setTrick($trick);
            $video->setUrl($video->getUrl());
            $this->em->persist($video);
            $this->em->flush();
        }

        return $videos;
    }
}
