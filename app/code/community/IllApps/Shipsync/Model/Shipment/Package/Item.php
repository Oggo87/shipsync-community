<?php

/**
 * ShipSync
 *
 * @category   IllApps
 * @package    IllApps_Shipsync
 * @author     David Kirby (d@kernelhack.com) / Jonathan Cantrell (j@kernelhack.com)
 * @copyright  Copyright (c) 2011 EcoMATICS, Inc. DBA IllApps (http://www.illapps.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * IllApps_Shipsync_Model_Shipment_Package
 */
class IllApps_Shipsync_Model_Shipment_Item extends IllApps_Shipsync_Model_Shipment_Abstract
{    
    /*public function getRealQty()
    {
        return ($this->getQty() > 0) ? $this->getQty(): 1;
    }

    public function getFormattedWeight()
    {
        if($this->getWeightUnit())
        {}
	elseif ($this->getWeightUnitCode() == 'G')
	{
	    $this->setWeight($this->getWeight() * 0.001);

	    $this->setWeightUnit('KG');
	}
	else
	{
	    $this->setWeightUnit($this->getWeightUnitCode());
	}

        return $this->getRoundedWeight();
    }*/
}
