<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Creation\Builder;


interface ClientInterface
{
    /**
     * @param string $method
     * @param mixed $params
     * @return mixed
     */
    public function makeRequest($method, $params);
} 