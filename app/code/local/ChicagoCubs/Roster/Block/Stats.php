<?php

/**
 * Class ChicagoCubs_Roster_Block_Stats
 */
class ChicagoCubs_Roster_Block_Stats extends Mage_Core_Block_Template
{
    /**
     * @return ChicagoCubs_Roster_Model_Resource_Players_Collection
     */
    public function getPlayersCollection()
    {
        $collection = Mage::getModel('chicagocubs_roster/players')
                          ->getCollection()
                          ->setOrder('Rk','asc');

        return $collection;
    }

    /*
     public function methodblock()
     {

        $retour='';





        foreach($collection as $data)
        {

             $retour .= $data->getData('Name').'<br />';

         }



         Mage::getSingleton('customer/session')->addSuccess('World Champions');

         return $retour;
      }
    */
 }
