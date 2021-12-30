<?php

namespace ContainerR4tv9W2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4853b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1d411 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9f50d = [
        
    ];

    public function getConnection()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getConnection', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getMetadataFactory', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getExpressionBuilder', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'beginTransaction', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getCache', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'transactional', array('func' => $func), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'commit', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->commit();
    }

    public function rollback()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'rollback', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getClassMetadata', array('className' => $className), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'createQuery', array('dql' => $dql), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'createNamedQuery', array('name' => $name), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'createQueryBuilder', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'flush', array('entity' => $entity), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'clear', array('entityName' => $entityName), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->clear($entityName);
    }

    public function close()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'close', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->close();
    }

    public function persist($entity)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'persist', array('entity' => $entity), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'remove', array('entity' => $entity), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'refresh', array('entity' => $entity), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'detach', array('entity' => $entity), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'merge', array('entity' => $entity), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'contains', array('entity' => $entity), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getEventManager', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getConfiguration', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'isOpen', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getUnitOfWork', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getProxyFactory', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'initializeObject', array('obj' => $obj), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'getFilters', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'isFiltersStateClean', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'hasFilters', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return $this->valueHolder4853b->hasFilters();
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

        $instance->initializer1d411 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4853b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4853b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4853b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, '__get', ['name' => $name], $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        if (isset(self::$publicProperties9f50d[$name])) {
            return $this->valueHolder4853b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4853b;

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

        $targetObject = $this->valueHolder4853b;
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
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4853b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4853b;
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
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, '__isset', array('name' => $name), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4853b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4853b;
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
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, '__unset', array('name' => $name), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4853b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4853b;
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
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, '__clone', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        $this->valueHolder4853b = clone $this->valueHolder4853b;
    }

    public function __sleep()
    {
        $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, '__sleep', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;

        return array('valueHolder4853b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1d411 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1d411;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1d411 && ($this->initializer1d411->__invoke($valueHolder4853b, $this, 'initializeProxy', array(), $this->initializer1d411) || 1) && $this->valueHolder4853b = $valueHolder4853b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4853b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4853b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
