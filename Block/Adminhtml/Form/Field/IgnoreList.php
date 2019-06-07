<?php

namespace Filejet\FilejetMagento2Plugin\Block\Adminhtml\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

class IgnoreList extends AbstractFieldArray
{
    protected function _prepareToRender()
    {
        $this->addColumn('className', ['label' => __('Class'), 'class' => 'required-entry']);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add to ignore list');
    }
}
