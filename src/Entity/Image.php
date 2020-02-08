<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 * @UniqueEntity(
 *     fields={"name"},
 *     message="Ce nom de fichier est déjà utilisé !"
 * )
 */
class Image
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
     * @Assert\NotBlank()
     */
    private $caption;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageUrl;

    /**
     * @Assert\Image(
     *     mimeTypes = {"image/jpg", "image/jpeg", "image/tif", "image/png" },
     *     mimeTypesMessage = "Extension du fichier invalide ! Veuillez télécharger des fichiers dans les formats .jpg, .jpeg, .png, .tif",
     *     minWidth = 400,
     *     minWidthMessage = "La largeur de l'image est trop petite",
     *     maxWidth = 2000,
     *     maxWidthMessage = "La largeur de l'image est trop grande",
     *     minHeight = 400,
     *     minHeightMessage = "La hauteur de l'image est trop petite",
     *     maxHeight = 2000,
     *     maxHeightMessage = "La hauteur de l'image est trop grande" 
     *  )
     * 
     * @Assert\File(
     *     maxSize = "3000k",
     *     maxSizeMessage = "La taille du fichier ne peut pas dépasser 3Mo"
     * )
     */
    private $file;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Type("\DateTime")
     * @var string A "Y-m-d H:i:s" formatted value
     */
    private $date_add;

    /**
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @ORM\ManyToOne(targetEntity="App\Entity\Trick", inversedBy="images")
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

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(?UploadedFile $file): self
    {
        $this->file = $file;

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