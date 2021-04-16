<?php

namespace FilippoToso\PositionStack\Facade;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @method static array forward($query, array $options = [])
 * @method static array reverse($query, array $options = [])
 *
 * @see \FilippoToso\PositionStack\Client
 */
class PositionStack extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'positionstack';
    }
}
