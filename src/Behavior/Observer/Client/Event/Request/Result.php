<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\Observer\Client\Event\Request;

use Behavior\Observer\Client\Event\Request;

class Result extends Request implements \SplSubject
{
    /**
     * @var mixed
     */
    protected $_result;


    public function __construct($result, $method, $params)
    {
        $this->_result = $result;

        parent::__construct($method, $params);
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->_result;
    }
} 