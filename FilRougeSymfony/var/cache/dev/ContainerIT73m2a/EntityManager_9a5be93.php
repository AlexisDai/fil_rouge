<?php

namespace ContainerIT73m2a;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7ae5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer35da7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9dd1a = [
        
    ];

    public function getConnection()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getConnection', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getMetadataFactory', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getExpressionBuilder', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'beginTransaction', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getCache', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'transactional', array('func' => $func), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'commit', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->commit();
    }

    public function rollback()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'rollback', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getClassMetadata', array('className' => $className), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'createQuery', array('dql' => $dql), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'createNamedQuery', array('name' => $name), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'createQueryBuilder', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'flush', array('entity' => $entity), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'clear', array('entityName' => $entityName), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->clear($entityName);
    }

    public function close()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'close', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->close();
    }

    public function persist($entity)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'persist', array('entity' => $entity), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'remove', array('entity' => $entity), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'refresh', array('entity' => $entity), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'detach', array('entity' => $entity), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'merge', array('entity' => $entity), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'contains', array('entity' => $entity), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getEventManager', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getConfiguration', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'isOpen', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getUnitOfWork', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getProxyFactory', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'initializeObject', array('obj' => $obj), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'getFilters', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'isFiltersStateClean', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'hasFilters', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return $this->valueHoldera7ae5->hasFilters();
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

        $instance->initializer35da7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera7ae5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera7ae5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera7ae5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, '__get', ['name' => $name], $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        if (isset(self::$publicProperties9dd1a[$name])) {
            return $this->valueHoldera7ae5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ae5;

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

        $targetObject = $this->valueHoldera7ae5;
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
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ae5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7ae5;
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
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, '__isset', array('name' => $name), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ae5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7ae5;
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
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, '__unset', array('name' => $name), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7ae5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7ae5;
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
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, '__clone', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        $this->valueHoldera7ae5 = clone $this->valueHoldera7ae5;
    }

    public function __sleep()
    {
        $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, '__sleep', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;

        return array('valueHoldera7ae5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer35da7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer35da7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer35da7 && ($this->initializer35da7->__invoke($valueHoldera7ae5, $this, 'initializeProxy', array(), $this->initializer35da7) || 1) && $this->valueHoldera7ae5 = $valueHoldera7ae5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7ae5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7ae5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
