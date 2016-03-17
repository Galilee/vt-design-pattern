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
use Behavior\State\Bat\Status\Validated as ValidatedState;
use SplSubject;

class Validated implements \SplObserver
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
            && $subject->getBat()->getStatus() instanceof ValidatedState
        ) {
            $this->_emailAdv($subject->getBat());
        }
    }

    protected function _emailAdv(BatObserved $bat)
    {
        echo '<b>' . get_class($this) .  '</b> : Email ADV to alert that BAT is validated<br />';
    }
} 