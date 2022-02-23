<?php

namespace App\Entity;

use App\Repository\StockAssetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockAssetRepository::class)]
class StockAsset
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Stock::class, inversedBy: 'stockAssets')]
    #[ORM\JoinColumn(nullable: false)]
    private $stock;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'stockAssets')]
    private $owner;

    #[ORM\OneToMany(mappedBy: 'stockAsset', targetEntity: StockTransaction::class)]
    private $stockTransactions;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $quantity;

    public function __construct()
    {
        $this->stockTransactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return Collection|StockTransaction[]
     */
    public function getStockTransactions(): Collection
    {
        return $this->stockTransactions;
    }

    public function addStockTransaction(StockTransaction $stockTransaction): self
    {
        if (!$this->stockTransactions->contains($stockTransaction)) {
            $this->stockTransactions[] = $stockTransaction;
            $stockTransaction->setStockAsset($this);
        }

        return $this;
    }

    public function removeStockTransaction(StockTransaction $stockTransaction): self
    {
        if ($this->stockTransactions->removeElement($stockTransaction)) {
            // set the owning side to null (unless already changed)
            if ($stockTransaction->getStockAsset() === $this) {
                $stockTransaction->setStockAsset(null);
            }
        }

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
