<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State\Bat;


interface StatusI
{
    /**
     * @param string|null $imgPath
     * @return void
     */
    public function setAvailable($imgPath = null);

    /**
     * @return void
     */
    public function validate();

    /**
     * @return void
     */
    public function unvalidate();

    /**
     * @return int
     */
    public function getStatusId();
} 