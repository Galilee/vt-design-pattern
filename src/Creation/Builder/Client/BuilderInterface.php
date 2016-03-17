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

interface BuilderInterface
{
    /**
     * @param string $type
     * @return BuilderInterface
     */
    public function buildAdapter($type);

    /**
     * @param string $type
     * @return BuilderInterface
     */
    public function buildInterpreter($type);

    /**
     * @return Client
     */
    public function getClient();
}