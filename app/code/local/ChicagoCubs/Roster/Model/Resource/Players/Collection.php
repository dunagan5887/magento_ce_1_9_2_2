class ChicagoCubs_Roster_Model_Resource_Players_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
 {
     public function _construct()
     {
         parent::_construct();
         $this->_init('chicagocubs_roster/players');
     }
}
