<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace WellCommerce\Bundle\AdminMenuBundle\Model;

use WellCommerce\Bundle\CoreBundle\Model\AbstractModel;

/**
 * Class AdminMenu
 *
 * @package WellCommerce\Bundle\AdminMenuBundle\Model
 * @author  Adam Piotrowski <adam@gekosale.com>
 */
class AdminMenu extends AbstractModel
{
    protected $table = 'admin_menu';

    public $timestamps = false;

    protected $softDelete = false;
}