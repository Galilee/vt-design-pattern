<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\Observer\Client;

use Behavior\Observer\Client\Observer\Misc;
use Behavior\Observer\Client\Observer\Request;

abstract class ObserverAbstract implements \SplObserver
{
    const TYPE_MISC             = 'misc';
    const TYPE_REQUEST          = 'request';
    const TYPE_REQUEST_RESULT   = 'request_result';


    /**
     * @param string $type
     * @return ObserverAbstract|null
     */
    public static function make($type)
    {
        switch ($type) {
            case self::TYPE_REQUEST:
                return Request::instance();
                break;
            case self::TYPE_REQUEST_RESULT:
                return Request\Result::instance();
                break;
            case self::TYPE_MISC:
                return Misc::instance();
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * @return ObserverAbstract
     */
    public static function instance()
    {
        if (null === static::$_singleton) {
            static::$_singleton = new static;
        }

        return static::$_singleton;
    }
} 