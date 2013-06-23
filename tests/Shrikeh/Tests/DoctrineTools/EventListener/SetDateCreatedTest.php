<?php
namespace Shrikeh\Tests\DoctrineTools\EventListener;

use \DateTime;
use \Shrikeh\Tests\DoctrineTools\TestAbstract;
use \Shrikeh\Tests\DoctrineTools\Stubs\EventListener\UpdateLastModifiedCreated;
use \Shrikeh\Tests\DoctrineTools\Stubs\Mapper\ModifiedCreated;

class SetDateCreatedTest extends TestAbstract
{
    public function testEventListener()
    {
        $dateTime = new DateTime();

        $stub = new ModifiedCreated();

        $eventListener = new UpdateLastModifiedCreated();
        $eventListener->setDateCreated($stub, $dateTime);

        $this->assertEquals($dateTime, $stub->getDateCreated());
    }
}
