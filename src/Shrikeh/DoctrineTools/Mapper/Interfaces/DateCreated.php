<?php
namespace Shrikeh\DoctrineTools\Mapper\Interfaces;

use \DateTime;

interface DateCreated
{
    /**
     * Set the last modified date for the auth record.
     *
     * @param \DateTime
     * @return \Shrikeh\DoctrineTools\Mapper\Interfaces\DateCreated
     */
    public function setDateCreated(DateTime $dateCreated);

    /**
     * Return the last modified date of the auth record.
     *
     * @return \DateTime
     */
    public function getDateCreated();
}
