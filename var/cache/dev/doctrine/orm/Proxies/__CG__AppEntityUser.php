<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'stockTransactions', '' . "\0" . 'App\\Entity\\User' . "\0" . 'battlesAsAttacker', '' . "\0" . 'App\\Entity\\User' . "\0" . 'battlesAsDefender', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lostBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'winnedBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ownedStocks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'numberOfWinnedBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'numberOfLostBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'stockAssets', '' . "\0" . 'App\\Entity\\User' . "\0" . 'picture'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'stockTransactions', '' . "\0" . 'App\\Entity\\User' . "\0" . 'battlesAsAttacker', '' . "\0" . 'App\\Entity\\User' . "\0" . 'battlesAsDefender', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lostBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'winnedBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ownedStocks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'numberOfWinnedBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'numberOfLostBattles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'stockAssets', '' . "\0" . 'App\\Entity\\User' . "\0" . 'picture'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockTransactions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockTransactions', []);

        return parent::getStockTransactions();
    }

    /**
     * {@inheritDoc}
     */
    public function addStockTransaction(\App\Entity\StockTransaction $stockTransaction): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStockTransaction', [$stockTransaction]);

        return parent::addStockTransaction($stockTransaction);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStockTransaction(\App\Entity\StockTransaction $stockTransaction): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStockTransaction', [$stockTransaction]);

        return parent::removeStockTransaction($stockTransaction);
    }

    /**
     * {@inheritDoc}
     */
    public function getBattlesAsAttacker(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBattlesAsAttacker', []);

        return parent::getBattlesAsAttacker();
    }

    /**
     * {@inheritDoc}
     */
    public function addBattlesAsAttacker(\App\Entity\Battle $battlesAsAttacker): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBattlesAsAttacker', [$battlesAsAttacker]);

        return parent::addBattlesAsAttacker($battlesAsAttacker);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBattlesAsAttacker(\App\Entity\Battle $battlesAsAttacker): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBattlesAsAttacker', [$battlesAsAttacker]);

        return parent::removeBattlesAsAttacker($battlesAsAttacker);
    }

    /**
     * {@inheritDoc}
     */
    public function getBattlesAsDefender(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBattlesAsDefender', []);

        return parent::getBattlesAsDefender();
    }

    /**
     * {@inheritDoc}
     */
    public function addBattlesAsDefender(\App\Entity\Battle $battlesAsDefender): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBattlesAsDefender', [$battlesAsDefender]);

        return parent::addBattlesAsDefender($battlesAsDefender);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBattlesAsDefender(\App\Entity\Battle $battlesAsDefender): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBattlesAsDefender', [$battlesAsDefender]);

        return parent::removeBattlesAsDefender($battlesAsDefender);
    }

    /**
     * {@inheritDoc}
     */
    public function getLostBattles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLostBattles', []);

        return parent::getLostBattles();
    }

    /**
     * {@inheritDoc}
     */
    public function addLostBattle(\App\Entity\Battle $lostBattle): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLostBattle', [$lostBattle]);

        return parent::addLostBattle($lostBattle);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLostBattle(\App\Entity\Battle $lostBattle): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLostBattle', [$lostBattle]);

        return parent::removeLostBattle($lostBattle);
    }

    /**
     * {@inheritDoc}
     */
    public function getWinnedBattles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWinnedBattles', []);

        return parent::getWinnedBattles();
    }

    /**
     * {@inheritDoc}
     */
    public function addWinnedBattle(\App\Entity\Battle $winnedBattle): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addWinnedBattle', [$winnedBattle]);

        return parent::addWinnedBattle($winnedBattle);
    }

    /**
     * {@inheritDoc}
     */
    public function removeWinnedBattle(\App\Entity\Battle $winnedBattle): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeWinnedBattle', [$winnedBattle]);

        return parent::removeWinnedBattle($winnedBattle);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnedStocks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnedStocks', []);

        return parent::getOwnedStocks();
    }

    /**
     * {@inheritDoc}
     */
    public function addOwnedStock(\App\Entity\Stock $ownedStock): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOwnedStock', [$ownedStock]);

        return parent::addOwnedStock($ownedStock);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOwnedStock(\App\Entity\Stock $ownedStock): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOwnedStock', [$ownedStock]);

        return parent::removeOwnedStock($ownedStock);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfWinnedBattles(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfWinnedBattles', []);

        return parent::getNumberOfWinnedBattles();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberOfWinnedBattles(?int $numberOfWinnedBattles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberOfWinnedBattles', [$numberOfWinnedBattles]);

        return parent::setNumberOfWinnedBattles($numberOfWinnedBattles);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfLostBattles(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfLostBattles', []);

        return parent::getNumberOfLostBattles();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberOfLostBattles(?int $numberOfLostBattles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberOfLostBattles', [$numberOfLostBattles]);

        return parent::setNumberOfLostBattles($numberOfLostBattles);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockAssets(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockAssets', []);

        return parent::getStockAssets();
    }

    /**
     * {@inheritDoc}
     */
    public function addStockAsset(\App\Entity\StockAsset $stockAsset): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStockAsset', [$stockAsset]);

        return parent::addStockAsset($stockAsset);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStockAsset(\App\Entity\StockAsset $stockAsset): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStockAsset', [$stockAsset]);

        return parent::removeStockAsset($stockAsset);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture(string $picture): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

}
