<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\Column(type: 'string', length: 255)]
    private $FirstName;

    #[ORM\Column(type: 'string', length: 255)]
    private $LastName;

    #[ORM\OneToMany(mappedBy: 'User', targetEntity: StockTransaction::class)]
    private $stockTransactions;

    #[ORM\OneToMany(mappedBy: 'attacker', targetEntity: Battle::class)]
    private $battlesAsAttacker;

    #[ORM\OneToMany(mappedBy: 'Defender', targetEntity: Battle::class)]
    private $battlesAsDefender;

    #[ORM\OneToMany(mappedBy: 'Loser', targetEntity: Battle::class)]
    private $lostBattles;

    #[ORM\OneToMany(mappedBy: 'Winner', targetEntity: Battle::class)]
    private $winnedBattles;

    #[ORM\OneToMany(mappedBy: 'Owner', targetEntity: Stock::class)]
    private $ownedStocks;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $wins;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $defeats;

    public function __construct()
    {
        $this->stockTransactions = new ArrayCollection();
        $this->battlesAsAttacker = new ArrayCollection();
        $this->battlesAsDefender = new ArrayCollection();
        $this->lostBattles = new ArrayCollection();
        $this->winnedBattles = new ArrayCollection();
        $this->ownedStocks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

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
            $stockTransaction->setUser($this);
        }

        return $this;
    }

    public function removeStockTransaction(StockTransaction $stockTransaction): self
    {
        if ($this->stockTransactions->removeElement($stockTransaction)) {
            // set the owning side to null (unless already changed)
            if ($stockTransaction->getUser() === $this) {
                $stockTransaction->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Battle[]
     */
    public function getBattlesAsAttacker(): Collection
    {
        return $this->battlesAsAttacker;
    }

    public function addBattlesAsAttacker(Battle $battlesAsAttacker): self
    {
        if (!$this->battlesAsAttacker->contains($battlesAsAttacker)) {
            $this->battlesAsAttacker[] = $battlesAsAttacker;
            $battlesAsAttacker->setAttacker($this);
        }

        return $this;
    }

    public function removeBattlesAsAttacker(Battle $battlesAsAttacker): self
    {
        if ($this->battlesAsAttacker->removeElement($battlesAsAttacker)) {
            // set the owning side to null (unless already changed)
            if ($battlesAsAttacker->getAttacker() === $this) {
                $battlesAsAttacker->setAttacker(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Battle[]
     */
    public function getBattlesAsDefender(): Collection
    {
        return $this->battlesAsDefender;
    }

    public function addBattlesAsDefender(Battle $battlesAsDefender): self
    {
        if (!$this->battlesAsDefender->contains($battlesAsDefender)) {
            $this->battlesAsDefender[] = $battlesAsDefender;
            $battlesAsDefender->setDefender($this);
        }

        return $this;
    }

    public function removeBattlesAsDefender(Battle $battlesAsDefender): self
    {
        if ($this->battlesAsDefender->removeElement($battlesAsDefender)) {
            // set the owning side to null (unless already changed)
            if ($battlesAsDefender->getDefender() === $this) {
                $battlesAsDefender->setDefender(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Battle[]
     */
    public function getLostBattles(): Collection
    {
        return $this->lostBattles;
    }

    public function addLostBattle(Battle $lostBattle): self
    {
        if (!$this->lostBattles->contains($lostBattle)) {
            $this->lostBattles[] = $lostBattle;
            $lostBattle->setLoser($this);
        }

        return $this;
    }

    public function removeLostBattle(Battle $lostBattle): self
    {
        if ($this->lostBattles->removeElement($lostBattle)) {
            // set the owning side to null (unless already changed)
            if ($lostBattle->getLoser() === $this) {
                $lostBattle->setLoser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Battle[]
     */
    public function getWinnedBattles(): Collection
    {
        return $this->winnedBattles;
    }

    public function addWinnedBattle(Battle $winnedBattle): self
    {
        if (!$this->winnedBattles->contains($winnedBattle)) {
            $this->winnedBattles[] = $winnedBattle;
            $winnedBattle->setWinner($this);
        }

        return $this;
    }

    public function removeWinnedBattle(Battle $winnedBattle): self
    {
        if ($this->winnedBattles->removeElement($winnedBattle)) {
            // set the owning side to null (unless already changed)
            if ($winnedBattle->getWinner() === $this) {
                $winnedBattle->setWinner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Stock[]
     */
    public function getOwnedStocks(): Collection
    {
        return $this->ownedStocks;
    }

    public function addOwnedStock(Stock $ownedStock): self
    {
        if (!$this->ownedStocks->contains($ownedStock)) {
            $this->ownedStocks[] = $ownedStock;
            $ownedStock->setOwner($this);
        }

        return $this;
    }

    public function removeOwnedStock(Stock $ownedStock): self
    {
        if ($this->ownedStocks->removeElement($ownedStock)) {
            // set the owning side to null (unless already changed)
            if ($ownedStock->getOwner() === $this) {
                $ownedStock->setOwner(null);
            }
        }

        return $this;
    }

    public function getWins(): ?int
    {
        return $this->wins;
    }

    public function setWins(?int $wins): self
    {
        $this->wins = $wins;

        return $this;
    }

    public function getDefeats(): ?int
    {
        return $this->defeats;
    }

    public function setDefeats(?int $defeats): self
    {
        $this->defeats = $defeats;

        return $this;
    }
}
