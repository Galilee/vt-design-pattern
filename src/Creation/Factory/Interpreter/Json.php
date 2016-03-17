<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Creation\Factory\Interpreter;

class Json extends InterpreterAbstract
{
    /**
     * @param mixed $data
     * @return mixed
     */
    public function interpret($data)
    {
        return json_decode($data);
    }
} 