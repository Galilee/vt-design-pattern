<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Structure\Adapter\Client\Adapter;

class Rest extends AdapterAbstract
{
    /**
     * @param string $method
     * @param string $params
     * @return void
     */
    public function makeRequest($method, $params)
    {
        echo 'Makes REST request <b>' . $method
            . '</b> with parameters <b>' . print_r($params, true) . '</b>.<br />';
    }
} 