<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State;

use Behavior\State\Bat\StatusAbstract;
use Behavior\State\Bat\StatusI;

class Bat implements StatusI
{
    /**
     * @var string
     */
    protected $_imgPath;

    /**
     * @var string[]
     */
    protected $_comments;

    /**
     * @var int
     */
    protected $_statusId;

    /**
     * @var StatusAbstract
     */
    protected $_status;


    /**
     *
     */
    public function __construct()
    {
        $this->_comments    = array();

        $this->setStatus(
            StatusAbstract::make(
                StatusAbstract::UNAVAILABLE,
                $this
            )
        );
    }

    /**
     * @param \string[] $comments
     */
    public function setComments($comments)
    {
        $this->_comments = $comments;
    }

    /**
     * @return \string[]
     */
    public function getComments()
    {
        return $this->_comments;
    }

    /**
     * @param string $imgPath
     */
    public function setImgPath($imgPath)
    {
        $this->_imgPath = $imgPath;
    }

    /**
     * @return string
     */
    public function getImgPath()
    {
        return $this->_imgPath;
    }

    /**
     * @param StatusAbstract $status
     */
    public function setStatus(StatusAbstract $status)
    {
        $this->_status      = $status;
        $this->_statusId    = $status->getStatusId();
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param string $imgPath
     * @return void
     */
    public function setAvailable($imgPath = null)
    {
        return $this->_status->setAvailable($imgPath);
    }

    /**
     * @return void
     */
    public function validate()
    {
        return $this->_status->validate();
    }

    /**
     * @return void
     */
    public function unvalidate()
    {
        return $this->_status->unvalidate();
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
        $this->_statusId;
    }
}