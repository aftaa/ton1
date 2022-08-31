<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 * @ORM\Table(name="TripArticles")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="ArticleID")
     */
    private $ArticleID;

    /**
     * @ORM\Column(type="text")
     */
    private $Title;

    /**
     * @ORM\Column(type="text", name="TitleEN")
     */
    private $TitleEN;

    /**
     * @ORM\Column(type="text")
     */
    private $Content;

    /**
     * @ORM\Column(type="text", name="ContentEN")
     */
    private $ContentEN;

    /**
     * @ORM\Column(type="datetime")
     */
    private $added;

    /**
     * @ORM\Column(type="boolean")
     */
    private $display;

    /**
     * @ORM\Column(type="integer")
     */
    private $sort;

    public function getArticleID(): ?int
    {
        return $this->ArticleID;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getTitleEN(): ?string
    {
        return $this->TitleEN;
    }

    public function setTitleEN(string $TitleEN): self
    {
        $this->TitleEN = $TitleEN;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getContentEN(): ?string
    {
        return $this->ContentEN;
    }

    public function setContentEN(string $ContentEN): self
    {
        $this->ContentEN = $ContentEN;

        return $this;
    }

    public function getAdded(): ?\DateTimeInterface
    {
        return $this->added;
    }

    public function setAdded(\DateTimeInterface $added): self
    {
        $this->added = $added;

        return $this;
    }

    public function isDisplay(): ?bool
    {
        return $this->display;
    }

    public function setDisplay(bool $display): self
    {
        $this->display = $display;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }
}
