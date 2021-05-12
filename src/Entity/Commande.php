<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $com_libelle;

    /**
     * @ORM\Column(type="datetime")
     */
    private $com_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComLibelle(): ?string
    {
        return $this->com_libelle;
    }

    public function setComLibelle(?string $com_libelle): self
    {
        $this->com_libelle = $com_libelle;

        return $this;
    }

    public function getComDate(): ?\DateTimeInterface
    {
        return $this->com_date;
    }

    public function setComDate(\DateTimeInterface $com_date): self
    {
        $this->com_date = $com_date;

        return $this;
    }
}
