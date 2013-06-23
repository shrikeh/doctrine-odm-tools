<?php
namespace Shrikeh\DoctrineTools\EventListener\Traits;

use \DateTime;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\DateCreated;

trait SetDateCreated
{
    public function setDateCreated(
        $mapper,
        DateTime $dateTime = null
    ) {
        if ($mapper instanceof DateCreated) {
            if (!$mapper->getDateCreated()) {
                if (!$dateTime) {
                    $dateTime = new DateTime();
                }
                $mapper->setDateCreated($dateTime);
            }
        }
        return $mapper;
    }
}
