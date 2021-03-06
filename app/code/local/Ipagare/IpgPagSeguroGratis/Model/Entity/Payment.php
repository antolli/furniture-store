<?php

/**
* 
* iPAGARE PagSeguro Gr�tis para Magento
* 
* @category     Ipagare
* @packages     IpgPagSeguroGratis
* @copyright    Copyright (c) 2012 iPAGARE (http://www.ipagare.com.br)
* @version      1.0.0
* @license      http://www.ipagare.com.br/magento/licenca
*
*/

class Ipagare_IpgPagSeguroGratis_Model_Entity_Payment extends Mage_Core_Model_Abstract {

    public function _construct() {
        $this->_init('ipgpagsegurogratis/entity_payment');
    }

    public function loadByAttribute($attribute, $value) {
        $this->load($value, $attribute);
        return $this;
    }

}