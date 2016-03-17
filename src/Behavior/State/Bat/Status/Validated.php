<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State\Bat\Status;


use Behavior\State\Bat\Exception\Validated as ValidatedException;
use Behavior\State\Bat\StatusAbstract;

class Validated extends StatusAbstract
{
    const STATUS_ID = self::VALIDATED;


    /**
     * @param string|null $imgPath
     * @throws \Behavior\State\Bat\Exception\Validated
     * @return void
     */
    public function setAvailable($imgPath = null)
    {
        throw new ValidatedException('Bat is validated and can not be sets available');
    }

    /**
     * @throws \Behavior\State\Bat\Exception\Validated
     * @return void
     */
    public function validate()
    {
        throw new ValidatedException('Bat is validated and can not be revalidated');
    }

    /**
     * @throws \Behavior\State\Bat\Exception\Validated
     * @return void
     */
    public function unvalidate()
    {
        throw new ValidatedException('Bat is validated and can not be unvalidated');
    }
} 