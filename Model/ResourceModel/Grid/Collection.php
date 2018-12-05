<?php

namespace Wantto\Sleep\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Wantto\Sleep\Model\Grid',
            'Wantto\Sleep\Model\ResourceModel\Grid'
        );
    }
}
