<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Creation\Builder;


class Client implements ClientInterface
{
    /**
     * @var string
     */
    protected $_adapter;

    /**
     * @var string
     */
    protected $_interpreter;


    /**
     * @param string $method
     * @param mixed $params
     * @return mixed|void
     */
    public function makeRequest($method, $params)
    {
        return $this->_interpret(
            $this->_request($method, $params)
        );
    }

    /**
     * @param string $method
     * @param mixed $params
     * @return mixed
     */
    protected function _request($method, $params)
    {
        echo 'Client <b>' . (string)$this->_adapter . '</b>.<br />';

        echo 'Makes request <b>' . $method
            . '</b> with parameters <b>' . print_r($params, true) . '</b>.<br />';

        return 'result';
    }

    /**
     * @param $data
     */
    protected function _interpret($data)
    {
        echo 'Data interpreted by <b>' . (string)$this->_interpreter . '</b>';
    }

    /**
     * @param mixed $adapter
     * @return Client
     */
    public function setAdapter($adapter)
    {
        $this->_adapter = $adapter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdapter()
    {
        return $this->_adapter;
    }

    /**
     * @param mixed $interpreter
     * @return Client
     */
    public function setInterpreter($interpreter)
    {
        $this->_interpreter = $interpreter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterpreter()
    {
        return $this->_interpreter;
    }
} 