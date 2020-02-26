<?php

// src/Entity/Trick.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrickRepository")
 * @UniqueEntity(
 *     fields={"name"},
 *     message="Ce Trick existe déjà !"
 * )
 */
class Trick
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(min=3,
     *     minMessage="Le nom doit contenir au moins 3 caractères")
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(min=20,
     *     minMessage="La description doit contenir au moins 20 caractères")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     * @Assert\Type("\DateTime")
     * @var string A "Y-m-d H:i:s" formatted value
     */
    private $date_add;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\Type("\DateTime")
     * @var string A "Y-m-d H:i:s" formatted value
     */
    private $date_update;

    /**
     * @ORM\JoinColumn(nullable=true, onDelete="set null")
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="name", cascade={"persist"})
     */
    private $category;

    /**
     * @ORM\JoinColumn(nullable=false, onDelete="set null")
     * @ORM\OneToMany(targetEntity="App\Entity\Media", mappedBy="trick", orphanRemoval=true, cascade={"persist", "remove"})
     */
    private $medias;

    /**
     * @ORM\JoinColumn(nullable=false, onDelete="set null")
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="trick", orphanRemoval=true, cascade={"persist", "remove"})
     */
    private $comments;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="tricks", cascade={"persist"})
     */
    private $author;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getDateUpdate()
    {
        return $this->date_update;
    }

    public function setDateUpdate(\DateTimeInterface $date_update): self
    {
        $this->date_update = $date_update;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function __construct()
    {
        $this->medias = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->date_add = new \Datetime('+ 1 hour');
        $this->date_update = new \Datetime('+ 1 hour');
    }

    public function addMedia(Media $media)
    {
       $this->medias[] = $media;
    }

    public function deleteMedia(Media $media)
    {
       $this->medias->deleteMedia($media);
    }

    public function getMedias() 
    {
        return $this->medias;
    }

    public function addComment(Comment $comment)
    {
       $this->comments[] = $comment;
    }

    public function deleteComment(Comment $comment)
    {
       $this->comments->deleteComment($comment);
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }
}