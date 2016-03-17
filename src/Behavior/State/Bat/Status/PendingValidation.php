<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State\Bat\Status;


use Behavior\State\Bat\Exception\AlreadyAvailable;
use Behavior\State\Bat\StatusAbstract;

class PendingValidation extends StatusAbstract
{
    const STATUS_ID = self::PENDING_VALIDATION;


    /**
     * @param string|null $imgPath
     * @throws \Behavior\State\Bat\Exception\AlreadyAvailable
     * @return void
     */
    public function setAvailable($imgPath = null)
    {
        throw new AlreadyAvailable('Bat is already available');
    }

    /**
     * @return void
     */
    public function validate()
    {
        if (0 === count($this->_bat->getComments())) {
            $this->_bat->setStatus(
                self::make(
                    self::VALIDATED,
                    $this->_bat
                )
            );
        } else {
            $this->_bat->setStatus(
                self::make(
                    self::VALIDATED_ANNOTATED,
                    $this->_bat
                )
            );
        }
    }

    /**
     * @throws \Behavior\State\Bat\Exception\NotAvailable
     * @return void
     */
    public function unvalidate()
    {
        $this->_bat->setStatus(
            self::make(
                self::UNVALIDATED,
                $this->_bat
            )
        );
    }
} 