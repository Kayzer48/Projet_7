<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $prod_nom;

    /**
     * @ORM\Column(type="text")
     */
    private $prod_description;

    /**
     * @ORM\Column(type="text")
     */
    private $prod_quantite_stock;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private $prod_prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdNom(): ?string
    {
        return $this->prod_nom;
    }

    public function setProdNom(string $prod_nom): self
    {
        $this->prod_nom = $prod_nom;

        return $this;
    }

    public function getProdDescription(): ?string
    {
        return $this->prod_description;
    }

    public function setProdDescription(string $prod_description): self
    {
        $this->prod_description = $prod_description;

        return $this;
    }

    public function getProdQuantiteStock(): ?string
    {
        return $this->prod_quantite_stock;
    }

    public function setProdQuantiteStock(string $prod_quantite_stock): self
    {
        $this->prod_quantite_stock = $prod_quantite_stock;

        return $this;
    }

    public function getProdPrix(): ?string
    {
        return $this->prod_prix;
    }

    public function setProdPrix(string $prod_prix): self
    {
        $this->prod_prix = $prod_prix;

        return $this;
    }
}
