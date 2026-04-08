<?php

namespace EspertoMagento\AbandonedCartReminder\Model\ResourceModel\Abandoned;

use EspertoMagento\AbandonedCartReminder\Model\AbandonedModel;
use EspertoMagento\AbandonedCartReminder\Model\ResourceModel\AbandonedResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class AbandonedCollection extends AbstractCollection
{
    /**
     * @inheritdoc
     */
    protected function _construct(): void
    {
        $this->_idFieldName = 'id';
        $this->_init(AbandonedModel::class, AbandonedResource::class);
    }
}
