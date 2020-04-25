<?php

// src/Service/MediaUploader

namespace App\Service;

use App\Entity\Media;
use App\Entity\Trick;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MediaUploader
{
    public function manageMedia(Media $media): Media
    {
        /** @var UploadedFile $file */
        $file = $media->getFile();

        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
       
        $path = '../assets/img/tricks';
        $file->move($path, $fileName);

        $media->setName($fileName);

        return $media;
    }

    public function coverImage(Trick $trick): Trick
    {
        /** @var UploadedFile $file */
        $file = $trick->getFile();
        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
        $path = '../assets/img/tricks';
        $file->move($path, $fileName);

        $trick->setFileName($fileName);

        return $trick;
    }
}
