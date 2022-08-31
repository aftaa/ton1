<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 * @ORM\Table(name="TripProducts")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="ProductID")
     */
    private $ProductID;

    /**
     * @ORM\Column(type="integer")
     */
    private $CategoryID;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DBDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NameEN;

    /**
     * @ORM\Column(type="boolean")
     */
    private $display_ru;

    /**
     * @ORM\Column(type="boolean")
     */
    private $display_en;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Visible;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Marked;

    /**
     * @ORM\Column(type="datetime")
     */
    private $MarkedTime;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="text")
     */
    private $DescriptionEN;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageLO;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageHI;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageFL;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageHB;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageFB;

    /**
     * @ORM\Column(type="integer")
     */
    private $Price;

    /**
     * @ORM\Column(type="integer")
     */
    private $PriceEN;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Articul;

    /**
     * @ORM\Column(type="integer", name="TypeID")
     */
    private $TypeID;

    /**
     * @ORM\Column(type="integer")
     */
    private $DesignID;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $Sale;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Search;

    /**
     * @ORM\Column(type="text")
     */
    private $keywords;

    /**
     * @ORM\Column(type="text")
     */
    private $meta_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }

    public function setCategoryID(int $CategoryID): self
    {
        $this->CategoryID = $CategoryID;

        return $this;
    }

    public function getDBDate(): ?\DateTimeInterface
    {
        return $this->DBDate;
    }

    public function setDBDate(\DateTimeInterface $DBDate): self
    {
        $this->DBDate = $DBDate;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getNameEN(): ?string
    {
        return $this->NameEN;
    }

    public function setNameEN(string $NameEN): self
    {
        $this->NameEN = $NameEN;

        return $this;
    }

    public function isDisplayRu(): ?bool
    {
        return $this->display_ru;
    }

    public function setDisplayRu(bool $display_ru): self
    {
        $this->display_ru = $display_ru;

        return $this;
    }

    public function isDisplayEn(): ?bool
    {
        return $this->display_en;
    }

    public function setDisplayEn(bool $display_en): self
    {
        $this->display_en = $display_en;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->Visible;
    }

    public function setVisible(bool $Visible): self
    {
        $this->Visible = $Visible;

        return $this;
    }

    public function isMarked(): ?bool
    {
        return $this->Marked;
    }

    public function setMarked(bool $Marked): self
    {
        $this->Marked = $Marked;

        return $this;
    }

    public function getMarkedTime(): ?\DateTimeInterface
    {
        return $this->MarkedTime;
    }

    public function setMarkedTime(\DateTimeInterface $MarkedTime): self
    {
        $this->MarkedTime = $MarkedTime;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDescriptionEN(): ?string
    {
        return $this->DescriptionEN;
    }

    public function setDescriptionEN(string $DescriptionEN): self
    {
        $this->DescriptionEN = $DescriptionEN;

        return $this;
    }

    public function getImageLO(): ?string
    {
        return $this->ImageLO;
    }

    public function setImageLO(string $ImageLO): self
    {
        $this->ImageLO = $ImageLO;

        return $this;
    }

    public function getImageHI(): ?string
    {
        return $this->ImageHI;
    }

    public function setImageHI(string $ImageHI): self
    {
        $this->ImageHI = $ImageHI;

        return $this;
    }

    public function getImageFL(): ?string
    {
        return $this->ImageFL;
    }

    public function setImageFL(string $ImageFL): self
    {
        $this->ImageFL = $ImageFL;

        return $this;
    }

    public function getImageHB(): ?string
    {
        return $this->ImageHB;
    }

    public function setImageHB(string $ImageHB): self
    {
        $this->ImageHB = $ImageHB;

        return $this;
    }

    public function getImageFB(): ?string
    {
        return $this->ImageFB;
    }

    public function setImageFB(string $ImageFB): self
    {
        $this->ImageFB = $ImageFB;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(int $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getPriceEN(): ?int
    {
        return $this->PriceEN;
    }

    public function setPriceEN(int $PriceEN): self
    {
        $this->PriceEN = $PriceEN;

        return $this;
    }

    public function getArticul(): ?string
    {
        return $this->Articul;
    }

    public function setArticul(string $Articul): self
    {
        $this->Articul = $Articul;

        return $this;
    }

    public function getTypeID(): ?int
    {
        return $this->TypeID;
    }

    public function setTypeID(int $TypeID): self
    {
        $this->TypeID = $TypeID;

        return $this;
    }

    public function getDesignID(): ?int
    {
        return $this->DesignID;
    }

    public function setDesignID(int $DesignID): self
    {
        $this->DesignID = $DesignID;

        return $this;
    }

    public function getSale(): ?string
    {
        return $this->Sale;
    }

    public function setSale(string $Sale): self
    {
        $this->Sale = $Sale;

        return $this;
    }

    public function isSearch(): ?bool
    {
        return $this->Search;
    }

    public function setSearch(bool $Search): self
    {
        $this->Search = $Search;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->meta_description;
    }

    public function setMetaDescription(string $meta_description): self
    {
        $this->meta_description = $meta_description;

        return $this;
    }
}
