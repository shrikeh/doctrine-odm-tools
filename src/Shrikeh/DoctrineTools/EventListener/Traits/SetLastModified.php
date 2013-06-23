<?php
namespace Shrikeh\DoctrineTools\EventListener\Traits;

use \DateTime;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified;

trait SetLastModified
{
    public function setLastModified(
        $mapper,
        DateTime $dateTime = null
    ) {
        if ($mapper instanceof LastModified) {
            if (!$dateTime) {
                $dateTime = new DateTime();
            }
            $mapper->setLastModified($dateTime);

        }
        return $mapper;
    }
}
