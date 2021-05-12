<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VilleRepository::class)
 */
class Ville
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
    private $ville_cp;

    /**
     * @ORM\Column(type="text")
     */
    private $ville_nom_commune;

    /**
     * @ORM\Column(type="text")
     */
    private $ville_nom_departement;

    /**
     * @ORM\Column(type="text")
     */
    private $ville_nom_region;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVilleCp(): ?string
    {
        return $this->ville_cp;
    }

    public function setVilleCp(string $ville_cp): self
    {
        $this->ville_cp = $ville_cp;

        return $this;
    }

    public function getVilleNomCommune(): ?string
    {
        return $this->ville_nom_commune;
    }

    public function setVilleNomCommune(string $ville_nom_commune): self
    {
        $this->ville_nom_commune = $ville_nom_commune;

        return $this;
    }

    public function getVilleNomDepartement(): ?string
    {
        return $this->ville_nom_departement;
    }

    public function setVilleNomDepartement(string $ville_nom_departement): self
    {
        $this->ville_nom_departement = $ville_nom_departement;

        return $this;
    }

    public function getVilleNomRegion(): ?string
    {
        return $this->ville_nom_region;
    }

    public function setVilleNomRegion(string $ville_nom_region): self
    {
        $this->ville_nom_region = $ville_nom_region;

        return $this;
    }
}
