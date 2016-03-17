<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Creation\Factory\Client;

use Creation\Builder\Client;

class WithFactory extends Client
{
    protected function _interpret($data)
    {
        echo 'Data interpreted by <b>class ' . get_class($this->_interpreter) . '</b>';
    }
} 