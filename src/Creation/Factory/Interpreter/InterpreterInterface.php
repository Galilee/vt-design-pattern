<?php

namespace Creation\Factory\Interpreter;

/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */
interface InterpreterInterface
{
    /**
     * @param mixed $data
     * @return mixed
     */
    public function interpret($data);
}