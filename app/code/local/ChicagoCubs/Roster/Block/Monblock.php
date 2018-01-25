<?php
class ChicagoCubs_Roster_Block_Stats
    extends Mage_Core_Block_Template
{
    public function setStats()
    {
        echo "Go Cubs GO";
    }
}


class ChicagoCubs_Roster_Block_Monblock extends Mage_Core_Block_Template
{
     public function methodblock()
     {
        
        $retour='';

        $collection = Mage::getModel('chicagocubs_roster/players')
                            ->getCollection()
                            ->setOrder('id_chicagocubs_roster','asc');

         

        foreach($collection as $data)
        {

             $retour .= $data->getData('name.').'<br />';

         }

         

         Mage::getSingleton('adminhtml/session')->addSuccess('World Champions');

         return $retour;
      }
 }
