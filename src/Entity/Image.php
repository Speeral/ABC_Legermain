<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
         * @ORM\Column(type="string", length=255)
         */
        private $name;

    /**
         * @ORM\ManyToOne(targetEntity="App\Entity\Article", inversedBy="images")
         */
        private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Pagedacceuil::class, inversedBy="galerie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pagedacceuil;

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

    public function getArticle(): ?Article
        {
            return $this->article;
        }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getPagedacceuil(): ?Pagedacceuil
    {
        return $this->pagedacceuil;
    }

    public function setPagedacceuil(?Pagedacceuil $pagedacceuil): self
    {
        $this->pagedacceuil = $pagedacceuil;

        return $this;
    }
}
