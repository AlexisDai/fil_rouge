<?php

namespace Container13rLKU5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7f1ba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0e8c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties407d6 = [
        
    ];

    public function getConnection()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getConnection', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getMetadataFactory', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getExpressionBuilder', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'beginTransaction', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getCache', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getCache();
    }

    public function transactional($func)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'transactional', array('func' => $func), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'wrapInTransaction', array('func' => $func), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'commit', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->commit();
    }

    public function rollback()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'rollback', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getClassMetadata', array('className' => $className), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'createQuery', array('dql' => $dql), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'createNamedQuery', array('name' => $name), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'createQueryBuilder', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'flush', array('entity' => $entity), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'clear', array('entityName' => $entityName), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->clear($entityName);
    }

    public function close()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'close', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->close();
    }

    public function persist($entity)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'persist', array('entity' => $entity), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'remove', array('entity' => $entity), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'refresh', array('entity' => $entity), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'detach', array('entity' => $entity), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'merge', array('entity' => $entity), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'contains', array('entity' => $entity), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getEventManager', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getConfiguration', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'isOpen', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getUnitOfWork', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getProxyFactory', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'initializeObject', array('obj' => $obj), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'getFilters', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'isFiltersStateClean', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'hasFilters', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return $this->valueHolder7f1ba->hasFilters();
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

        $instance->initializera0e8c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7f1ba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7f1ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7f1ba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, '__get', ['name' => $name], $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        if (isset(self::$publicProperties407d6[$name])) {
            return $this->valueHolder7f1ba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f1ba;

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

        $targetObject = $this->valueHolder7f1ba;
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
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f1ba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7f1ba;
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
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, '__isset', array('name' => $name), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f1ba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7f1ba;
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
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, '__unset', array('name' => $name), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f1ba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7f1ba;
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
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, '__clone', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        $this->valueHolder7f1ba = clone $this->valueHolder7f1ba;
    }

    public function __sleep()
    {
        $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, '__sleep', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;

        return array('valueHolder7f1ba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0e8c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0e8c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera0e8c && ($this->initializera0e8c->__invoke($valueHolder7f1ba, $this, 'initializeProxy', array(), $this->initializera0e8c) || 1) && $this->valueHolder7f1ba = $valueHolder7f1ba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7f1ba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7f1ba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
