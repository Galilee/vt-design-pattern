<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Structure\Adapter\Client\Adapter;

abstract class AdapterAbstract implements AdapterInterface
{
    const TYPE_REST = 'rest';
    const TYPE_SOAP = 'soap';


    /**
     * @param string $type
     * @return Rest|Soap
     * @throws \Exception
     */
    public static function make($type)
    {
        switch ($type) {
            case static::TYPE_REST:
                return new Rest();
                break;
            case static::TYPE_SOAP:
                return new Soap();
                break;
            default:
                throw new \Exception('Adapter type unknown');
                break;
        }
    }
} 