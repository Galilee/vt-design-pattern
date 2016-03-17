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
use \Behavior\State\Bat\Exception\Unvalidated as UnvalidatedException;

class Unvalidated extends Unavailable
{
    const STATUS_ID = self::UNVALIDATED;


    /**
     * @throws \Behavior\State\Bat\Exception\Unvalidated
     * @return void
     */
    public function validate()
    {
        throw new UnvalidatedException('Bat can not be validated coz\' is unvalidated');
    }

    /**
     * @throws \Behavior\State\Bat\Exception\Unvalidated
     * @return void
     */
    public function unvalidate()
    {
        throw new UnvalidatedException('Bat can not be unvalidated coz\' is already unvalidated');
    }
} 