<?php
namespace Shrikeh\Tests\DoctrineTools\Mapper;

use \DateTime;
use \Shrikeh\Tests\DoctrineTools\TestAbstract;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified;
use \Shrikeh\Tests\DoctrineTools\Stubs\Mapper\ModifiedCreated;

class LastModifiedTest extends TestAbstract
{
    public function testSetLastModified()
    {
        $stub = new ModifiedCreated;

        $this->assertTrue(
            $stub instanceof LastModified,
           'The stub does not implement the required interface'
        );

        $dateTime = new DateTime();

        $stub->setLastModified($dateTime);
        $this->assertSame($dateTime, $stub->getLastModified());
    }
}
