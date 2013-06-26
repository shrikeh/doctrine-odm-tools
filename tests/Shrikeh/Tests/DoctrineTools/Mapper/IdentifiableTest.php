<?php
namespace Shrikeh\Tests\DoctrineTools\Mapper;

use \Shrikeh\Tests\DoctrineTools\TestAbstract;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Identifiable;
use \Shrikeh\Tests\DoctrineTools\Stubs\Mapper\ModifiedCreated;

class IdentifiableTest extends TestAbstract
{
    public function testSetName()
    {
        $stub = new ModifiedCreated;

        $this->assertTrue(
            $stub instanceof Identifiable,
           'The stub does not implement the required interface'
        );
        $id = 12;
        $stub->setId($id);
        $this->assertSame($id, $stub->getId());
    }
}
