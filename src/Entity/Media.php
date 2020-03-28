<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @UniqueEntity(
 *     fields={"id"},
 *     message="Ce fichier existe déjà !"
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
    * @ORM\Column(type="string", length=125)
    */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $caption;

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

    /**
     * @var UploadedFile
     */
    protected $file;

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

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function __construct()
    {
        $this->date_add = new \Datetime('+ 1 hour');
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

    public function addTrick(Trick $trick)
    {
        if (!$this->tricks->contains($trick)) {
            $this->tricks->add($trick);
        }
    }

    public function getTrick(): Trick
    {
        return $this->trick;
    }

    public function setTrick(Trick $trick): Trick
    {
        $this->trick = $trick;

        return $this->trick;
    }
}
