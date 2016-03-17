<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State\Bat\Status;


use Behavior\State\Bat\Exception\ImgPathNotSet;
use Behavior\State\Bat\Exception\NotAvailable;
use Behavior\State\Bat\StatusAbstract;

class Unavailable extends StatusAbstract
{
    const STATUS_ID = self::UNAVAILABLE;


    /**
     * @param string|null $imgPath
     * @throws \Behavior\State\Bat\Exception\ImgPathNotSet
     * @return void
     */
    public function setAvailable($imgPath = null)
    {
        if ((
                null !== $imgPath
                && '' === trim($imgPath)
            )
            || (
                null === $imgPath
                && null !== $this->_bat->getImgPath()

            )
        ) {
            throw new ImgPathNotSet('Bat has not its image');
        } elseif (
            '' !== trim($imgPath)
            || null === $this->_bat->getImgPath()
        ) {
            $this->_bat->setImgPath($imgPath);
        }

        $this->_bat->setStatus(
            self::make(
                self::PENDING_VALIDATION,
                $this->_bat
            )
        );
    }

    /**
     * @throws \Behavior\State\Bat\Exception\NotAvailable
     * @return void
     */
    public function validate()
    {
        throw new NotAvailable('Bat can not be validated coz\' is not available');
    }

    /**
     * @throws \Behavior\State\Bat\Exception\NotAvailable
     * @return void
     */
    public function unvalidate()
    {
        throw new NotAvailable('Bat can not be unvalidated coz\' is not available');
    }
} 