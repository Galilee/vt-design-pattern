<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State;

use Behavior\State\Bat\Event\StatusChanged;
use Behavior\State\Bat\StatusAbstract;
use Behavior\State\Bat\Observer\Status\PendingValidation;
use Behavior\State\Bat\Observer\Status\Unvalidated;
use Behavior\State\Bat\Observer\Status\Validated;
use Behavior\State\Bat\Observer\Status\ValidatedAnnotated;

class BatObserved extends Bat
{
    /**
     * @param StatusAbstract $status
     */
    public function setStatus(StatusAbstract $status)
    {
        $result = parent::setStatus($status);

        $event = new StatusChanged($this);
        $event->attach(new PendingValidation());
        $event->attach(new Validated());
        $event->attach(new ValidatedAnnotated());
        $event->attach(new Unvalidated());
        $event->notify();

        return $result;
    }
}