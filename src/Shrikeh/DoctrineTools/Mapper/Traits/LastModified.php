<?php
namespace Shrikeh\DoctrineTools\Mapper\Traits;

use \DateTime;

trait LastModified
{
    /**
     * The datetime this record was last modified.
     *
     * @var DateTime
     */
    protected $lastModified;

    /**
     * Set the last modified date for the auth record.
     *
     * @param DateTime
     * @return \Popshack\ODM\Model\Auth
     */
    public function setLastModified(DateTime $lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Return the last modified date of the auth record.
     *
     * @return DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }
}

