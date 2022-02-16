<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Company_name;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $CurrentPrice;

    #[ORM\OneToMany(mappedBy: 'Stock', targetEntity: OwnedStock::class)]
    private $ownedStocks;

    #[ORM\OneToMany(mappedBy: 'Stock', targetEntity: StockTransaction::class)]
    private $stockTransactions;

    #[ORM\OneToMany(mappedBy: 'Stock', targetEntity: Battle::class)]
    private $battles;

    public function __construct()
    {
        $this->ownedStocks = new ArrayCollection();
        $this->stockTransactions = new ArrayCollection();
        $this->battles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->Company_name;
    }

    public function setCompanyName(string $Company_name): self
    {
        $this->Company_name = $Company_name;

        return $this;
    }

    public function getCurrentPrice(): ?string
    {
        return $this->CurrentPrice;
    }

    public function setCurrentPrice(string $CurrentPrice): self
    {
        $this->CurrentPrice = $CurrentPrice;

        return $this;
    }

    /**
     * @return Collection|OwnedStock[]
     */
    public function getOwnedStocks(): Collection
    {
        return $this->ownedStocks;
    }

    public function addOwnedStock(OwnedStock $ownedStock): self
    {
        if (!$this->ownedStocks->contains($ownedStock)) {
            $this->ownedStocks[] = $ownedStock;
            $ownedStock->setStock($this);
        }

        return $this;
    }

    public function removeOwnedStock(OwnedStock $ownedStock): self
    {
        if ($this->ownedStocks->removeElement($ownedStock)) {
            // set the owning side to null (unless already changed)
            if ($ownedStock->getStock() === $this) {
                $ownedStock->setStock(null);
            }
        }

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
            $stockTransaction->setStock($this);
        }

        return $this;
    }

    public function removeStockTransaction(StockTransaction $stockTransaction): self
    {
        if ($this->stockTransactions->removeElement($stockTransaction)) {
            // set the owning side to null (unless already changed)
            if ($stockTransaction->getStock() === $this) {
                $stockTransaction->setStock(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Battle[]
     */
    public function getBattles(): Collection
    {
        return $this->battles;
    }

    public function addBattle(Battle $battle): self
    {
        if (!$this->battles->contains($battle)) {
            $this->battles[] = $battle;
            $battle->setStock($this);
        }

        return $this;
    }

    public function removeBattle(Battle $battle): self
    {
        if ($this->battles->removeElement($battle)) {
            // set the owning side to null (unless already changed)
            if ($battle->getStock() === $this) {
                $battle->setStock(null);
            }
        }

        return $this;
    }
}
