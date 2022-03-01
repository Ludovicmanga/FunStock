<?php

namespace ContainerErW0h9T;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc1213 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2a0d5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties26f74 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getConnection', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getMetadataFactory', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getExpressionBuilder', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'beginTransaction', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getCache', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'transactional', array('func' => $func), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'commit', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->commit();
    }

    public function rollback()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'rollback', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getClassMetadata', array('className' => $className), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'createQuery', array('dql' => $dql), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'createNamedQuery', array('name' => $name), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'createQueryBuilder', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'flush', array('entity' => $entity), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'clear', array('entityName' => $entityName), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->clear($entityName);
    }

    public function close()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'close', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->close();
    }

    public function persist($entity)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'persist', array('entity' => $entity), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'remove', array('entity' => $entity), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'refresh', array('entity' => $entity), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'detach', array('entity' => $entity), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'merge', array('entity' => $entity), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'contains', array('entity' => $entity), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getEventManager', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getConfiguration', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'isOpen', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getUnitOfWork', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getProxyFactory', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'initializeObject', array('obj' => $obj), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'getFilters', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'isFiltersStateClean', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'hasFilters', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return $this->valueHolderc1213->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2a0d5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc1213) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc1213 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc1213->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, '__get', ['name' => $name], $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        if (isset(self::$publicProperties26f74[$name])) {
            return $this->valueHolderc1213->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1213;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc1213;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1213;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc1213;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, '__isset', array('name' => $name), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1213;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc1213;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, '__unset', array('name' => $name), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1213;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc1213;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, '__clone', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        $this->valueHolderc1213 = clone $this->valueHolderc1213;
    }

    public function __sleep()
    {
        $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, '__sleep', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;

        return array('valueHolderc1213');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2a0d5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2a0d5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2a0d5 && ($this->initializer2a0d5->__invoke($valueHolderc1213, $this, 'initializeProxy', array(), $this->initializer2a0d5) || 1) && $this->valueHolderc1213 = $valueHolderc1213;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc1213;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc1213;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
