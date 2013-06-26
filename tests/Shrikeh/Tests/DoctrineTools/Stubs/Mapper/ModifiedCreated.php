<?php
namespace Shrikeh\Tests\DoctrineTools\Stubs\Mapper;

use \Shrikeh\DoctrineTools\Mapper\Interfaces\DateCreated;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Identifiable;

class ModifiedCreated implements
    DateCreated,
    LastModified,
    Nameable,
    Identifiable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\DateCreated;
    use \Shrikeh\DoctrineTools\Mapper\Traits\LastModified;
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;
    use \Shrikeh\DoctrineTools\Mapper\Traits\Identifiable;
}
