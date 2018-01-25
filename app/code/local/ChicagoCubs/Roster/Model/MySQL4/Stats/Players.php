class ChicagoCubs_Roster_Model_Film extends Mage_Core_Model_Abstract
{
     public function _construct()
     {
         parent::_construct();
         $this->_init('chicagocubs_roster/players');
     }
}

