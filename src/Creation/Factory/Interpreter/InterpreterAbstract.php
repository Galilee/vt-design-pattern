<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Creation\Factory\Interpreter;

abstract class InterpreterAbstract implements InterpreterInterface
{
    const TYPE_PLAINTEXT    = 'plaintext';
    const TYPE_JSON         = 'json';
    const TYPE_XML          = 'xml';


    /**
     * @param string $type
     * @return \Creation\Factory\Interpreter\Json|\Creation\Factory\Interpreter\Plaintext|\Creation\Factory\Interpreter\Xml
     */
    public static function make($type)
    {
        switch ($type) {
            case static::TYPE_JSON:
                return new Json();
                break;
            case static::TYPE_XML:
                return new Xml();
                break;
            default:
            case static::TYPE_PLAINTEXT:
                return new Plaintext();
                break;
        }
    }
} 