<?php namespace Anomaly\PhysicalProductDefinitionExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class PhysicalProductDefinitionExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PhysicalProductDefinitionExtension
 */
class PhysicalProductDefinitionExtension extends Extension
{

    /**
     * This extension provides the default physical
     * product definition for the products module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.products::definition.physical_product';

}
