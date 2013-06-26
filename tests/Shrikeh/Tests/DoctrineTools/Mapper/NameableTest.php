<?php
namespace Shrikeh\Tests\DoctrineTools\Mapper;

use \Shrikeh\Tests\DoctrineTools\TestAbstract;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;
use \Shrikeh\Tests\DoctrineTools\Stubs\Mapper\ModifiedCreated;

class NameableTest extends TestAbstract
{
    public function testSetName()
    {
        $stub = new ModifiedCreated;

        $this->assertTrue(
            $stub instanceof Nameable,
           'The stub does not implement the required interface'
        );
        $name = 'Shrikeh';
        $stub->setName($name);
        $this->assertSame($name, $stub->getName());
    }
}
