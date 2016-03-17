<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State\Bat\Observer\Status;

use Behavior\State\Bat\Event\StatusChanged;
use Behavior\State\BatObserved;
use Behavior\State\Bat\Status\PendingValidation as PendingValidationState;
use SplSubject;

class PendingValidation implements \SplObserver
{
    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     */
    public function update(SplSubject $subject)
    {
        if ($subject instanceof StatusChanged
            && $subject->getBat()->getStatus() instanceof PendingValidationState
        ) {
            $this->_emailCustomer($subject->getBat());
        }
    }

    protected function _emailCustomer(BatObserved $bat)
    {
        echo '<b>' . get_class($this) .  '</b> : Email customer to alert that BAT is pending validation<br />';
    }
} 