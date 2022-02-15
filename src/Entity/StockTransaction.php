<?php

namespace App\Entity;

use App\Repository\StockTransactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockTransactionRepository::class)]
class StockTransaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'stockTransactions')]
    #[ORM\JoinColumn(nullable: false)]
    private $User;

    #[ORM\ManyToOne(targetEntity: Stock::class, inversedBy: 'stockTransactions')]
    #[ORM\JoinColumn(nullable: false)]
    private $Stock;

    #[ORM\Column(type: 'integer')]
    private $Quantity;

    #[ORM\Column(type: 'datetime')]
    private $Date;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
