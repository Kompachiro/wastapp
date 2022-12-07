<?php

namespace ContainerZNMiXeo;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderde47b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9c211 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesec768 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getConnection', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getMetadataFactory', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getExpressionBuilder', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'beginTransaction', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getCache', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'transactional', array('func' => $func), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'commit', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->commit();
    }

    public function rollback()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'rollback', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getClassMetadata', array('className' => $className), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'createQuery', array('dql' => $dql), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'createNamedQuery', array('name' => $name), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'createQueryBuilder', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'flush', array('entity' => $entity), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'clear', array('entityName' => $entityName), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->clear($entityName);
    }

    public function close()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'close', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->close();
    }

    public function persist($entity)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'persist', array('entity' => $entity), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'remove', array('entity' => $entity), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'refresh', array('entity' => $entity), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'detach', array('entity' => $entity), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'merge', array('entity' => $entity), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'contains', array('entity' => $entity), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getEventManager', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getConfiguration', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'isOpen', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getUnitOfWork', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getProxyFactory', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'initializeObject', array('obj' => $obj), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'getFilters', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'isFiltersStateClean', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'hasFilters', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return $this->valueHolderde47b->hasFilters();
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

        $instance->initializer9c211 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderde47b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde47b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderde47b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, '__get', ['name' => $name], $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        if (isset(self::$publicPropertiesec768[$name])) {
            return $this->valueHolderde47b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde47b;

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

        $targetObject = $this->valueHolderde47b;
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
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde47b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderde47b;
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
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, '__isset', array('name' => $name), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde47b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderde47b;
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
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, '__unset', array('name' => $name), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde47b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderde47b;
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
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, '__clone', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        $this->valueHolderde47b = clone $this->valueHolderde47b;
    }

    public function __sleep()
    {
        $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, '__sleep', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;

        return array('valueHolderde47b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9c211 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9c211;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9c211 && ($this->initializer9c211->__invoke($valueHolderde47b, $this, 'initializeProxy', array(), $this->initializer9c211) || 1) && $this->valueHolderde47b = $valueHolderde47b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde47b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde47b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
