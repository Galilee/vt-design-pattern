<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State\Bat\Event;


use SplObserver;
use Behavior\State\Bat;

class StatusChanged implements \SplSubject
{
    /**
     * @var \SplObserver[]
     */
    protected $_observers = array();

    /**
     * @var Bat
     */
    protected $_bat;


    /**
     * @param Bat $bat
     */
    public function __construct(Bat $bat)
    {
        $this->_bat = $bat;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param \SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        if ( ! in_array($observer, $this->_observers)) {
            $this->_observers[] = $observer;
        }
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param \SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     */
    public function notify()
    {
        foreach($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return \Behavior\State\Bat
     */
    public function getBat()
    {
        return $this->_bat;
    }
} 