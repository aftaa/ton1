<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 * @ORM\Table(name="TripTypes")
 */
class Type
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="TypeID")
     */
    private $TypeID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeName;

    /**
     * @ORM\Column(type="string", length=255, name="TypeNameEN")
     */
    private $TypeNameEN;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Visible;

    /**
     * @ORM\Column(type="integer", name="MenuOrder")
     */
    private $MenuOrder;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="smallint")
     */
    private $SexID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seo_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Text2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seo_uri;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeName(): ?string
    {
        return $this->TypeName;
    }

    public function setTypeName(string $TypeName): self
    {
        $this->TypeName = $TypeName;

        return $this;
    }

    public function getTypeNameEN(): ?string
    {
        return $this->TypeNameEN;
    }

    public function setTypeNameEN(string $TypeNameEN): self
    {
        $this->TypeNameEN = $TypeNameEN;

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

    public function getMenuOrder(): ?int
    {
        return $this->MenuOrder;
    }

    public function setMenuOrder(int $MenuOrder): self
    {
        $this->MenuOrder = $MenuOrder;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getSexID(): ?int
    {
        return $this->SexID;
    }

    public function setSexID(int $SexID): self
    {
        $this->SexID = $SexID;

        return $this;
    }

    public function getSeoTitle(): ?string
    {
        return $this->seo_title;
    }

    public function setSeoTitle(string $seo_title): self
    {
        $this->seo_title = $seo_title;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->Text2;
    }

    public function setText2(string $Text2): self
    {
        $this->Text2 = $Text2;

        return $this;
    }

    public function getSeoUri(): ?string
    {
        return $this->seo_uri;
    }

    public function setSeoUri(string $seo_uri): self
    {
        $this->seo_uri = $seo_uri;

        return $this;
    }
}
