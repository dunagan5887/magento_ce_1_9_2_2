
class ChicagoCubs_Roster_Model_Resource_Film extends Mage_Core_Model_Resource_Db_Abstract
{
     public function _construct()
     {
         $this->_init('chicagocubs_roster/players', 'id_chicagocubs_roster');
     }
}

