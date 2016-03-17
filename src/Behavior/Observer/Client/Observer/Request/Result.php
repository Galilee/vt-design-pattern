<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\Observer\Client\Observer\Request;

use Behavior\Observer\Client\Event\Request\Result as ResultSubject;
use Behavior\Observer\Client\ObserverAbstract;
use SplSubject;

class Result extends ObserverAbstract
{
    /**
     * @var Result
     */
    protected static $_singleton;


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
        if ($subject instanceof ResultSubject) {
            $this->_update($subject);
        }
    }

    /**
     * @param ResultSubject $subject
     */
    protected function _update(ResultSubject $subject)
    {
        echo 'Post-making request by observer <b>"' . get_class() . '"</b> on subject <b>"' . get_class($subject) . '"</b><br />';
    }
} 