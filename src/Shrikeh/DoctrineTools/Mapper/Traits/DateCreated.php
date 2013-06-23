<?php
namespace Shrikeh\DoctrineTools\Mapper\Traits;

use \DateTime;

trait DateCreated
{
    /**
     * The datetime this record was created.
     *
     * @var DateTime
     */
    protected $dateCreated;

    /**
     * Set the last modified date for the auth record.
     *
     * @param \DateTime
     * @return object
     */
    public function setDateCreated(DateTime $dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Return the last modified date of the auth record.
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}
