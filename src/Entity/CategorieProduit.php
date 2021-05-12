<?php

namespace App\Entity;

use App\Repository\CategorieProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieProduitRepository::class)
 */
class CategorieProduit
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
    private $cat_libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatLibelle(): ?string
    {
        return $this->cat_libelle;
    }

    public function setCatLibelle(string $cat_libelle): self
    {
        $this->cat_libelle = $cat_libelle;

        return $this;
    }
}
