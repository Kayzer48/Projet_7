<?php

namespace App\Entity;

use App\Repository\PaiementModeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaiementModeRepository::class)
 */
class PaiementMode
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
    private $paiement_libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaiementLibelle(): ?string
    {
        return $this->paiement_libelle;
    }

    public function setPaiementLibelle(?string $paiement_libelle): self
    {
        $this->paiement_libelle = $paiement_libelle;

        return $this;
    }
}
