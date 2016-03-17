<?php
/**
 * 
 * 
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */

namespace Behavior\State\Bat;


use Behavior\State\Bat;

abstract class StatusAbstract implements StatusI
{
    const UNAVAILABLE           = 10;
    const PENDING_VALIDATION    = 20;
    const VALIDATED             = 30;
    const VALIDATED_ANNOTATED   = 40;
    const UNVALIDATED           = 50;

    const STATUS_ID             = null;


    /**
     * @var Bat
     */
    protected $_bat;


    /**
     * @param $statusId
     * @param \Behavior\State\Bat $bat
     * @throws Exception\StatusUnknown
     * @return StatusAbstract
     */
    public static function make($statusId, Bat $bat)
    {
        switch ($statusId) {
            case self::UNAVAILABLE:
                return new Bat\Status\Unavailable($bat);
                break;
            case self::PENDING_VALIDATION:
                return new Bat\Status\PendingValidation($bat);
                break;
            case self::VALIDATED:
                return new Bat\Status\Validated($bat);
                break;
            case self::VALIDATED_ANNOTATED:
                return new Bat\Status\ValidatedAnnotated($bat);
                break;
            case self::UNVALIDATED:
                return new Bat\Status\Unvalidated($bat);
                break;
            default:
                throw new Bat\Exception\StatusUnknown(
                    'Status id unknown, can not make that kind of status'
                );
                break;
        }
    }

    /**
     * @param Bat $bat
     */
    public function __construct(Bat $bat)
    {
        $this->_bat = $bat;
    }

    public function getStatusId()
    {
        return static::STATUS_ID;
    }
}