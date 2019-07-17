<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SujetsRepository")
 */
class Sujets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $sujet_texte;

    /**
     * @ORM\Column(type="boolean")
     */
    private $valide;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\reunions", inversedBy="sujets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reunion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujetTexte(): ?string
    {
        return $this->sujet_texte;
    }

    public function setSujetTexte(string $sujet_texte): self
    {
        $this->sujet_texte = $sujet_texte;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getReunion(): ?reunions
    {
        return $this->reunion;
    }

    public function setReunion(?reunions $reunion): self
    {
        $this->reunion = $reunion;

        return $this;
    }
}
