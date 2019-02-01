<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleRentalDetailsType
 *
 * This provides specific information regarding the milage and condition of the vehicle being rented.
 * XSD Type: VehicleRentalDetailsType
 */
class VehicleRentalDetailsType
{

    /**
     * This identifies the physical location of the vehicle being rented (e.g., the parking space or stall number).
     *
     * @property string $parkingLocation
     */
    private $parkingLocation = null;

    /**
     * This provides values based on the amount of fuel present.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\FuelLevelDetailsAType $fuelLevelDetails
     */
    private $fuelLevelDetails = null;

    /**
     * This provides values for the odometer reading.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\OdometerReadingAType $odometerReading
     */
    private $odometerReading = null;

    /**
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It is not intended for insurance purposes.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\ConditionReportAType[] $conditionReport
     */
    private $conditionReport = [
        
    ];

    /**
     * Gets as parkingLocation
     *
     * This identifies the physical location of the vehicle being rented (e.g., the parking space or stall number).
     *
     * @return string
     */
    public function getParkingLocation()
    {
        return $this->parkingLocation;
    }

    /**
     * Sets a new parkingLocation
     *
     * This identifies the physical location of the vehicle being rented (e.g., the parking space or stall number).
     *
     * @param string $parkingLocation
     * @return self
     */
    public function setParkingLocation($parkingLocation)
    {
        $this->parkingLocation = $parkingLocation;
        return $this;
    }

    /**
     * Gets as fuelLevelDetails
     *
     * This provides values based on the amount of fuel present.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\FuelLevelDetailsAType
     */
    public function getFuelLevelDetails()
    {
        return $this->fuelLevelDetails;
    }

    /**
     * Sets a new fuelLevelDetails
     *
     * This provides values based on the amount of fuel present.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\FuelLevelDetailsAType $fuelLevelDetails
     * @return self
     */
    public function setFuelLevelDetails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\FuelLevelDetailsAType $fuelLevelDetails)
    {
        $this->fuelLevelDetails = $fuelLevelDetails;
        return $this;
    }

    /**
     * Gets as odometerReading
     *
     * This provides values for the odometer reading.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\OdometerReadingAType
     */
    public function getOdometerReading()
    {
        return $this->odometerReading;
    }

    /**
     * Sets a new odometerReading
     *
     * This provides values for the odometer reading.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\OdometerReadingAType $odometerReading
     * @return self
     */
    public function setOdometerReading(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\OdometerReadingAType $odometerReading)
    {
        $this->odometerReading = $odometerReading;
        return $this;
    }

    /**
     * Adds as conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It is not intended for insurance purposes.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\ConditionReportAType $conditionReport
     */
    public function addToConditionReport(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\ConditionReportAType $conditionReport)
    {
        $this->conditionReport[] = $conditionReport;
        return $this;
    }

    /**
     * isset conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It is not intended for insurance purposes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditionReport($index)
    {
        return isset($this->conditionReport[$index]);
    }

    /**
     * unset conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It is not intended for insurance purposes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditionReport($index)
    {
        unset($this->conditionReport[$index]);
    }

    /**
     * Gets as conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It is not intended for insurance purposes.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\ConditionReportAType[]
     */
    public function getConditionReport()
    {
        return $this->conditionReport;
    }

    /**
     * Sets a new conditionReport
     *
     * Used to describe condition of a vehicle (e.g., scratches, broken tail light). It is not intended for insurance purposes.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalDetailsType\ConditionReportAType[] $conditionReport
     * @return self
     */
    public function setConditionReport(array $conditionReport)
    {
        $this->conditionReport = $conditionReport;
        return $this;
    }


}

