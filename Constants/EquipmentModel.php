<?php

namespace Cinexpert\Constants;

class EquipmentModel
{
    const TYPE_PLAYER    = 'player';
    const TYPE_LMS       = 'lms';
    const TYPE_EQUIPMENT = 'equipment';

    const EQUIPMENT_MODEL_TYPES =
        [
            self::TYPE_EQUIPMENT,
            self::TYPE_PLAYER,
            self::TYPE_LMS,
        ];
}
