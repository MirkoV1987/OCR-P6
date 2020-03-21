<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoRepository")
 * @UniqueEntity(
 *     fields={"url"},
 *     message="Cet URL existe déjà !"
 * )
 */
class Video
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $caption;

    /**
     * @ORM\JoinColumn(onDelete="set null")
     * @ORM\ManyToOne(targetEntity="App\Entity\Trick", inversedBy="videos", cascade={"persist", "remove"})
     */
    private $trick;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

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
