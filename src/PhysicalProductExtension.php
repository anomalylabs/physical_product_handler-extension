<?php namespace Anomaly\PhysicalProductExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class PhysicalProductExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PhysicalProductExtension
 */
class PhysicalProductExtension extends Extension
{

    /**
     * This extension provides the default physical
     * product behavior for the products module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.products::behavior.physical_product';

}
