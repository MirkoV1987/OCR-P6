<?php

// src/Service/MediaUploader

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Entity\Media;

class MediaUploader
{
    public function manageMedia(Media $media): Media
    {
        /** @var UploadedFile $file */
        $file = $media->getFile();

        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
       
        $path = 'uploads/images/tricks';
        $file->move($path, $fileName);

        $media->setName($fileName);

        return $media;
    }
}
