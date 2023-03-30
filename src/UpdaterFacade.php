<?php

namespace SerhaTopcu\Updater;

use Illuminate\Support\Facades\Facade;

/**
 * UpdaterFacade.php.
 *
 * @author Serhat Topcu <info@serhattopcu.com.tr>
 * @copyright See LICENSE file that was distributed with this source code.
 */
class UpdaterFacade extends Facade
{
    /**
     * Get the registered component name.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'updater';
    }
}
