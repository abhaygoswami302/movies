<?php

namespace Container685CrfM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1d6cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3a4c9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc9227 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getConnection', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getMetadataFactory', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getExpressionBuilder', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'beginTransaction', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getCache', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'transactional', array('func' => $func), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'commit', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->commit();
    }

    public function rollback()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'rollback', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getClassMetadata', array('className' => $className), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'createQuery', array('dql' => $dql), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'createNamedQuery', array('name' => $name), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'createQueryBuilder', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'flush', array('entity' => $entity), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'clear', array('entityName' => $entityName), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->clear($entityName);
    }

    public function close()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'close', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->close();
    }

    public function persist($entity)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'persist', array('entity' => $entity), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'remove', array('entity' => $entity), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'refresh', array('entity' => $entity), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'detach', array('entity' => $entity), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'merge', array('entity' => $entity), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'contains', array('entity' => $entity), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getEventManager', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getConfiguration', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'isOpen', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getUnitOfWork', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getProxyFactory', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'initializeObject', array('obj' => $obj), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'getFilters', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'isFiltersStateClean', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'hasFilters', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return $this->valueHolder1d6cd->hasFilters();
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

        $instance->initializer3a4c9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1d6cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1d6cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1d6cd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, '__get', ['name' => $name], $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        if (isset(self::$publicPropertiesc9227[$name])) {
            return $this->valueHolder1d6cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d6cd;

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

        $targetObject = $this->valueHolder1d6cd;
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
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d6cd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1d6cd;
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
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, '__isset', array('name' => $name), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d6cd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1d6cd;
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
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, '__unset', array('name' => $name), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d6cd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1d6cd;
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
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, '__clone', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        $this->valueHolder1d6cd = clone $this->valueHolder1d6cd;
    }

    public function __sleep()
    {
        $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, '__sleep', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;

        return array('valueHolder1d6cd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3a4c9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3a4c9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3a4c9 && ($this->initializer3a4c9->__invoke($valueHolder1d6cd, $this, 'initializeProxy', array(), $this->initializer3a4c9) || 1) && $this->valueHolder1d6cd = $valueHolder1d6cd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1d6cd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1d6cd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
