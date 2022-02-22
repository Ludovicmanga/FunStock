<?php

namespace App\Entity;

use App\Repository\BattleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BattleRepository::class)]
class Battle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'battlesAsAttacker')]
    #[ORM\JoinColumn(nullable: false)]
    private $attacker;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'battlesAsDefender')]
    #[ORM\JoinColumn(nullable: false)]
    private $defender;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'lostBattles')]
    #[ORM\JoinColumn(nullable: true)]
    private $loser;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'winnedBattles')]
    #[ORM\JoinColumn(nullable: true)]
    private $winner;

    #[ORM\Column(type: 'string', length: 255)]
    private $state;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $accepted;

    #[ORM\ManyToOne(targetEntity: Stock::class, inversedBy: 'battles')]
    #[ORM\JoinColumn(nullable: false)]
    private $stock;
    
    #[ORM\Column(type: 'datetime')]
    private $battleDate;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $amount;

    #[ORM\Column(type: 'string', length: 255)]
    private $stockVariationDirectionPrediction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttacker(): ?User
    {
        return $this->attacker;
    }

    public function setAttacker(?User $attacker): self
    {
        $this->attacker = $attacker;

        return $this;
    }

    public function getDefender(): ?User
    {
        return $this->defender;
    }

    public function setDefender(?User $defender): self
    {
        $this->defender = $defender;

        return $this;
    }

    public function getLoser(): ?User
    {
        return $this->loser;
    }

    public function setLoser(?User $Loser): self
    {
        $this->loser = $loser;

        return $this;
    }

    public function getWinner(): ?User
    {
        return $this->winner;
    }

    public function setWinner(?User $winner): self
    {
        $this->winner = $winner;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getAccepted(): ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(?bool $accepted): self
    {
        $this->accepted = $accepted;

        return $this;
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

    public function getBattleDate(): ?\DateTimeInterface
    {
        return $this->battleDate;
    }

    public function setBattleDate(\DateTimeInterface $battleDate): self
    {
        $this->battleDate = $battleDate;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStockVariationDirectionPrediction(): ?string
    {
        return $this->stockVariationDirectionPrediction;
    }

    public function setStockVariationDirectionPrediction(string $stockVariationDirectionPrediction): self
    {
        $this->stockVariationDirectionPrediction = $stockVariationDirectionPrediction;

        return $this;
    }
}
