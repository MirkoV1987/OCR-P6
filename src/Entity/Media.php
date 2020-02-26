<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @UniqueEntity(
 *     fields={"name"},
 *     message="Ce nom de fichier est déjà utilisé !"
 * )
 */
class Media
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $caption;

    /**
     * @Assert\File(
     *     maxSize = "10000k",
     *     maxSizeMessage = "La taille du fichier ne peut pas dépasser 10Mo",
     *     mimeTypes = {
     *         "application/jpg",
     *         "application/jpeg",
     *         "application/png",
     *         "application/tif",
     *         "application/mp4",
     *         "application/avi",
     *         "application/mov"
     *     },
     *     mimeTypesMessage = "Le format du fichier n'est pas valide !"
     * )
     */
    private $mediaFile;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Type("\DateTime")
     * @var string A "Y-m-d H:i:s" formatted value
     */
    private $date_add;

    /**
     * @ORM\JoinColumn(onDelete="set null")
     * @ORM\ManyToOne(targetEntity="App\Entity\Trick", inversedBy="medias", cascade={"persist", "remove"})
     */
    private $trick;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function getMediaUrl(): ?string
    {
        return $this->mediaUrl;
    }

    public function setMediaUrl(string $mediaUrl): self
    {
        $this->mediaUrl = $mediaUrl;

        return $this;
    }

    public function getMediaFile()
    {
        return $this->mediaFile;
    }

    public function setMediaFile(?UploadedFile $mediaFile): self
    {
        $this->mediaFile = $mediaFile;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->date_add;
    }

    public function setDateAdd(\DateTimeInterface $date_add): self
    {
        $this->date_add = $date_add;

        return $this;
    }

    public function getTrick(): ?Trick
    {
        return $this->trick;
    }

    public function setTrick(?Trick $trick): self
    {
        $this->trick = $trick;

        return $this;
    }
}