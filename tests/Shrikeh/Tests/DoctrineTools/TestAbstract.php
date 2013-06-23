<?php
namespace Shrikeh\Tests\DoctrineTools;

use \PHPUnit_Framework_TestCase as TestCase;
use \Pimple;
use \Doctrine\Common\ClassLoader;
use \Doctrine\Common\Cache\ApcCache;
use \Doctrine\MongoDB\Connection;
use \Doctrine\ODM\MongoDB\Configuration;
use \Doctrine\ODM\MongoDB\DocumentManager;
use \Doctrine\ODM\MongoDB\SchemaManager;
use \Doctrine\ODM\MongoDB\Mapping\Driver\YamlDriver;

abstract class TestAbstract extends TestCase
{
    /**
     * The service container.
     *
     * @var \Pimple;
     */
    protected $container;

}

