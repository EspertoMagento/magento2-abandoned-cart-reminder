<?php

namespace EspertoMagento\AbandonedCartReminder\Controller\Adminhtml\Abandoned;

use EspertoMagento\AbandonedCartReminder\Controller\Adminhtml\Abandoned;
use EspertoMagento\CoreModule\Controller\Adminhtml\AbstractIndex;

class Index extends AbstractIndex
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = Abandoned::ADMIN_RESOURCE;

    /**
     * @inheritDoc
     */
    protected function getLabelTitle(): string
    {
        return 'Abandoned Cart Reminder: Email Logs';
    }
}
