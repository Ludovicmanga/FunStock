<?php

namespace ContainerP7lmFXT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3a12f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer25510 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf55b8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getConnection', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getMetadataFactory', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getExpressionBuilder', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'beginTransaction', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getCache', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'transactional', array('func' => $func), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'commit', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->commit();
    }

    public function rollback()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'rollback', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getClassMetadata', array('className' => $className), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'createQuery', array('dql' => $dql), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'createNamedQuery', array('name' => $name), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'createQueryBuilder', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'flush', array('entity' => $entity), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'clear', array('entityName' => $entityName), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->clear($entityName);
    }

    public function close()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'close', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->close();
    }

    public function persist($entity)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'persist', array('entity' => $entity), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'remove', array('entity' => $entity), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'refresh', array('entity' => $entity), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'detach', array('entity' => $entity), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'merge', array('entity' => $entity), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'contains', array('entity' => $entity), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getEventManager', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getConfiguration', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'isOpen', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getUnitOfWork', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getProxyFactory', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'initializeObject', array('obj' => $obj), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'getFilters', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'isFiltersStateClean', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'hasFilters', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return $this->valueHolder3a12f->hasFilters();
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

        $instance->initializer25510 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3a12f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3a12f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3a12f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, '__get', ['name' => $name], $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        if (isset(self::$publicPropertiesf55b8[$name])) {
            return $this->valueHolder3a12f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a12f;

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

        $targetObject = $this->valueHolder3a12f;
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
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a12f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3a12f;
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
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, '__isset', array('name' => $name), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a12f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3a12f;
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
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, '__unset', array('name' => $name), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a12f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3a12f;
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
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, '__clone', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        $this->valueHolder3a12f = clone $this->valueHolder3a12f;
    }

    public function __sleep()
    {
        $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, '__sleep', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;

        return array('valueHolder3a12f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer25510 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer25510;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer25510 && ($this->initializer25510->__invoke($valueHolder3a12f, $this, 'initializeProxy', array(), $this->initializer25510) || 1) && $this->valueHolder3a12f = $valueHolder3a12f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3a12f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3a12f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
