<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $cl_nom;

    /**
     * @ORM\Column(type="text")
     */
    private $cl_prenom;

    /**
     * @ORM\Column(type="text")
     */
    private $cl_adresse;

    /**
     * @ORM\Column(type="text")
     */
    private $cl_email;

    /**
     * @ORM\Column(type="integer")
     */
    private $cl_tel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClNom(): ?string
    {
        return $this->cl_nom;
    }

    public function setClNom(string $cl_nom): self
    {
        $this->cl_nom = $cl_nom;

        return $this;
    }

    public function getClPrenom(): ?string
    {
        return $this->cl_prenom;
    }

    public function setClPrenom(string $cl_prenom): self
    {
        $this->cl_prenom = $cl_prenom;

        return $this;
    }

    public function getClAdresse(): ?string
    {
        return $this->cl_adresse;
    }

    public function setClAdresse(string $cl_adresse): self
    {
        $this->cl_adresse = $cl_adresse;

        return $this;
    }

    public function getClEmail(): ?string
    {
        return $this->cl_email;
    }

    public function setClEmail(string $cl_email): self
    {
        $this->cl_email = $cl_email;

        return $this;
    }

    public function getClTel(): ?int
    {
        return $this->cl_tel;
    }

    public function setClTel(int $cl_tel): self
    {
        $this->cl_tel = $cl_tel;

        return $this;
    }
}
