<?php
/*
 * Author Rudyuk Vitalij Anatolievich
 * Email rvansp@gmail.com
 * Blog www.cervic.info
 */
?>
<?php

class Infomodus_Upslabel_Block_Adminhtml_Upslabel_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('upslabel_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('upslabel')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('upslabel')->__('Item Information'),
          'title'     => Mage::helper('upslabel')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('upslabel/adminhtml_upslabel_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}