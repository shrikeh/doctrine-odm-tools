<?php
namespace Shrikeh\DoctrineTools\Mapper\Interfaces;

use \DateTime;

interface LastModified
{
    /**
     * Set the last modified date for the auth record.
     *
     * @param DateTime
     * @return \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified
     */
    public function setLastModified(DateTime $lastModified);

    /**
     * Return the last modified date of the auth record.
     *
     * @return \DateTime
     */
    public function getLastModified();
}
