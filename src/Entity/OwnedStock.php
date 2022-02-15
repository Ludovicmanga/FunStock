<?php

namespace App\Entity;

use App\Repository\OwnedStockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OwnedStockRepository::class)]
class OwnedStock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'ownedStocks')]
    #[ORM\JoinColumn(nullable: false)]
    private $User;

    #[ORM\ManyToOne(targetEntity: Stock::class, inversedBy: 'ownedStocks')]
    #[ORM\JoinColumn(nullable: false)]
    private $Stock;

    #[ORM\Column(type: 'integer')]
    private $Quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getStock(): ?Stock
    {
        return $this->Stock;
    }

    public function setStock(?Stock $Stock): self
    {
        $this->Stock = $Stock;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }
}
