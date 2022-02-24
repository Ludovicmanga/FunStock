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
    private $companyName;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $currentPrice;

    #[ORM\OneToMany(mappedBy: 'Stock', targetEntity: StockTransaction::class)]
    private $stockTransactions;

    #[ORM\OneToMany(mappedBy: 'Stock', targetEntity: Battle::class)]
    private $battles;

    #[ORM\Column(type: 'string', length: 255)]
    private $symbol;

    #[ORM\OneToMany(mappedBy: 'Stock', targetEntity: StockAsset::class)]
    private $stockAssets;

    #[ORM\Column(type: 'string', length: 255)]
    private $logo;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    public function __construct()
    {
        $this->stockTransactions = new ArrayCollection();
        $this->battles = new ArrayCollection();
        $this->stockAssets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCurrentPrice(): ?string
    {
        return $this->currentPrice;
    }

    public function setCurrentPrice(string $currentPrice): self
    {
        $this->currentPrice = $currentPrice;

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

    public function __toString() {
        return $this->companyName;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * @return Collection|StockAsset[]
     */
    public function getStockAssets(): Collection
    {
        return $this->stockAssets;
    }

    public function addStockAsset(StockAsset $stockAsset): self
    {
        if (!$this->stockAssets->contains($stockAsset)) {
            $this->stockAssets[] = $stockAsset;
            $stockAsset->setStock($this);
        }

        return $this;
    }

    public function removeStockAsset(StockAsset $stockAsset): self
    {
        if ($this->stockAssets->removeElement($stockAsset)) {
            // set the owning side to null (unless already changed)
            if ($stockAsset->getStock() === $this) {
                $stockAsset->setStock(null);
            }
        }

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

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
