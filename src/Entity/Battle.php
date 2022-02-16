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
    private $Defender;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'lostBattles')]
    #[ORM\JoinColumn(nullable: true)]
    private $Loser;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'winnedBattles')]
    #[ORM\JoinColumn(nullable: true)]
    private $Winner;

    #[ORM\Column(type: 'string', length: 255)]
    private $State;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $Accepted;

    #[ORM\ManyToOne(targetEntity: Stock::class, inversedBy: 'battles')]
    #[ORM\JoinColumn(nullable: false)]
    private $Stock;

    #[ORM\Column(type: 'string', length: 255)]
    private $stockDirectionPrediction;

    #[ORM\Column(type: 'integer')]
    private $Stock_percentage_prediction;

    #[ORM\Column(type: 'date')]
    private $predictionDate;

    #[ORM\Column(type: 'datetime')]
    private $battleDate;

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
        return $this->Defender;
    }

    public function setDefender(?User $Defender): self
    {
        $this->Defender = $Defender;

        return $this;
    }

    public function getLoser(): ?User
    {
        return $this->Loser;
    }

    public function setLoser(?User $Loser): self
    {
        $this->Loser = $Loser;

        return $this;
    }

    public function getWinner(): ?User
    {
        return $this->Winner;
    }

    public function setWinner(?User $Winner): self
    {
        $this->Winner = $Winner;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->State;
    }

    public function setState(string $State): self
    {
        $this->State = $State;

        return $this;
    }

    public function getAccepted(): ?bool
    {
        return $this->Accepted;
    }

    public function setAccepted(?bool $Accepted): self
    {
        $this->Accepted = $Accepted;

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

    public function getStockDirectionPrediction(): ?string
    {
        return $this->stockDirectionPrediction;
    }

    public function setStockDirectionPrediction(string $stockDirectionPrediction): self
    {
        $this->stockDirectionPrediction = $stockDirectionPrediction;

        return $this;
    }

    public function getStockPercentagePrediction(): ?int
    {
        return $this->Stock_percentage_prediction;
    }

    public function setStockPercentagePrediction(int $Stock_percentage_prediction): self
    {
        $this->Stock_percentage_prediction = $Stock_percentage_prediction;

        return $this;
    }

    public function getPredictionDate(): ?\DateTimeInterface
    {
        return $this->predictionDate;
    }

    public function setPredictionDate(\DateTimeInterface $predictionDate): self
    {
        $this->predictionDate = $predictionDate;

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
}
