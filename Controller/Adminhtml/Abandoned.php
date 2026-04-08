<?php

namespace EspertoMagento\AbandonedCartReminder\Controller\Adminhtml;

use Magento\Backend\App\Action;

abstract class Abandoned extends Action
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = 'EspertoMagento_AbandonedCartReminder::AbandonedCartReminder';
}
