<?php
namespace Shrikeh\Tests\DoctrineTools\Stubs\Mapper;

use \Shrikeh\DoctrineTools\Mapper\Traits\DateCreated as DateCreatedTrait;
use \Shrikeh\DoctrineTools\Mapper\Traits\LastModified as LastModifiedTrait;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\DateCreated as DateCreatedInterface;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified as LastModifiedInterface;

class ModifiedCreated implements DateCreatedInterface, LastModifiedInterface
{
    use DateCreatedTrait;
    use LastModifiedTrait;
}
