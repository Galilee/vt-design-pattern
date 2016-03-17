<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Creation\Factory\Client\Builder;

use Creation\Factory\Client\WithFactory as Client;
use Creation\Builder\Client\Builder;
use Creation\Factory\Interpreter\InterpreterAbstract;


class Factory extends Builder
{
    public function __construct()
    {
        $this->_client = new Client();
    }

    /**
     * @param string $type
     * @return Factory
     */
    public function buildInterpreter($type)
    {
        $this->_client->setInterpreter(
            InterpreterAbstract::make($type)
        );
        return $this;
    }
}