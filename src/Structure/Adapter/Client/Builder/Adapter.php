<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Structure\Adapter\Client\Builder;

use Creation\Factory\Client\Builder\Factory as Builder;
use Creation\Builder\Client\BuilderInterface;
use Structure\Adapter\Client\WithAdapter as Client;
use Structure\Adapter\Client\Adapter\AdapterAbstract;

class Adapter extends Builder
{
    public function __construct()
    {
        $this->_client = new Client();
    }

    /**
     * @param string $type
     * @return BuilderInterface
     */
    public function buildAdapter($type)
    {
        $this->_client->setAdapter(
            AdapterAbstract::make($type)
        );

        return $this;
    }
}