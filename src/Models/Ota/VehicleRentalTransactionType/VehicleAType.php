<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType;

use Devlabs91\TravelgateNotify\Models\Ota\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType[] $vehRentalDetails
     */
    private $vehRentalDetails = [
        
    ];

    /**
     * Adds as vehRentalDetails
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType $vehRentalDetails
     */
    public function addToVehRentalDetails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType $vehRentalDetails)
    {
        $this->vehRentalDetails[] = $vehRentalDetails;
        return $this;
    }

    /**
     * isset vehRentalDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehRentalDetails($index)
    {
        return isset($this->vehRentalDetails[$index]);
    }

    /**
     * unset vehRentalDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehRentalDetails($index)
    {
        unset($this->vehRentalDetails[$index]);
    }

    /**
     * Gets as vehRentalDetails
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType[]
     */
    public function getVehRentalDetails()
    {
        return $this->vehRentalDetails;
    }

    /**
     * Sets a new vehRentalDetails
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType[] $vehRentalDetails
     * @return self
     */
    public function setVehRentalDetails(array $vehRentalDetails)
    {
        $this->vehRentalDetails = $vehRentalDetails;
        return $this;
    }


}

