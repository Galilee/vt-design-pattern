<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\Observer\Client\Builder;

use Structure\Adapter\Client\Builder\Adapter;
use Behavior\Observer\Client\WithObserver as Client;

class Observer extends Adapter
{
    public function __construct()
    {
        $this->_client = new Client();
    }
} 