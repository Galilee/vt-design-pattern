<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Creation\Builder\Client;

use Creation\Builder\Client;

class Builder implements BuilderInterface
{
    /**
     * @var Client
     */
    protected $_client;


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
        $this->_client->setAdapter($type);
        return $this;
    }

    /**
     * @param string $type
     * @return BuilderInterface
     */
    public function buildInterpreter($type)
    {
        $this->_client->setInterpreter($type);
        return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->_client;
    }
}