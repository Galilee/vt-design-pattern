<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\Observer\Client;

use Behavior\Observer\Client\ObserverAbstract;
use Behavior\Observer\Client\Event\Request as RequestEvent;
use Behavior\Observer\Client\Event\Request\Result as ResultEvent;
use Structure\Adapter\Client\WithAdapter as Client;

class WithObserver extends Client
{
    /**
     * @inheritdoc
     */
    protected function _request($method, $params)
    {
        $this->_preRequest($method, $params);

        $result = parent::_request($method, $params);

        $this->_postRequest($result, $method, $params);

        return $result;
    }

    /**
     * @param string $method
     * @param mixed $params
     */
    protected function _preRequest($method, $params)
    {
        $event = new RequestEvent($method, $params);
        $event->attach(
            ObserverAbstract::make(
                ObserverAbstract::TYPE_REQUEST
            )
        );

        $event->attach(
            ObserverAbstract::make(
                ObserverAbstract::TYPE_MISC
            )
        );

        $event->notify();
    }

    /**
     * @param mixed $result
     * @param string $method
     * @param mixed $params
     */
    protected function _postRequest($result, $method, $params)
    {
        $event = new ResultEvent($result, $method, $params);
        $event->attach(
            ObserverAbstract::make(
                ObserverAbstract::TYPE_REQUEST_RESULT
            )
        );

        $event->attach(
            ObserverAbstract::make(
                ObserverAbstract::TYPE_MISC
            )
        );

        $event->notify();
    }
} 