<?php
namespace Shrikeh\Tests\DoctrineTools\Stubs\EventListener;

use \DateTime;
use \Doctrine\ODM\MongoDB\Event\LifecycleEventArgs;
use \Shrikeh\DoctrineTools\EventListener\Traits\SetDateCreated;
use \Shrikeh\DoctrineTools\EventListener\Traits\SetLastModified;

class UpdateLastModifiedCreated
{
    use SetDateCreated;
    use SetLastModified;


    protected $dateTime;

    public function __construct(DateTime $dateTime = null)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * Listen for pre-persist events and update the last modified
     * timestamp on pre-persist.
     *
     * @param LifecycleEventArgs $eventArgs
     */
    public function prePersist(LifecycleEventArgs $eventArgs)
    {
        $document = $eventArgs->getDocument();
        $this->setDateCreated($document, $this->dateTime);
        $this->setLastModified($document, $this->dateTime);
    }
}
