<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Structure\Adapter\Client;

use Creation\Factory\Client\WithFactory as Client;
use Structure\Adapter\Client\Adapter\AdapterAbstract;

class WithAdapter extends Client
{
    /**
     * @var AdapterAbstract
     */
    protected $_adapter;


    /**
     * @param string $method
     * @param mixed $params
     * @return mixed|string
     */
    protected function _request($method, $params)
    {
        echo 'Client <b>class ' . get_class($this->_adapter) . '</b>.<br />';

        $this->_adapter->makeRequest($method, $params);

        return 'result';
    }
} 