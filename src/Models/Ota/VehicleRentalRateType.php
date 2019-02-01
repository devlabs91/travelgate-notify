<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleRentalRateType
 *
 * This describes time, mileage and other charges.
 * XSD Type: VehicleRentalRateType
 */
class VehicleRentalRateType
{

    /**
     * A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateDistanceAType[] $rateDistance
     */
    private $rateDistance = [
        
    ];

    /**
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $vehicleCharges
     */
    private $vehicleCharges = null;

    /**
     * Indicates the type of rates applicable to the customer, along with any discount number or promotional codes that affect the quoted rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateQualifierAType $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Information on restrictions that may be associated with this rate. Additional details on rate restrictions may be found in OTA_VehRateRulesRS.xsd.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateRestrictionsAType $rateRestrictions
     */
    private $rateRestrictions = null;

    /**
     * Used to indicate how long a specific rate is guaranteed.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateGuaranteeAType $rateGuarantee
     */
    private $rateGuarantee = null;

    /**
     * Pickup and return requirements for a specific rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\PickupReturnRuleAType[] $pickupReturnRule
     */
    private $pickupReturnRule = [
        
    ];

    /**
     * Gets as quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;
        return $this;
    }

    /**
     * Adds as rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateDistanceAType $rateDistance
     */
    public function addToRateDistance(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateDistanceAType $rateDistance)
    {
        $this->rateDistance[] = $rateDistance;
        return $this;
    }

    /**
     * isset rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateDistance($index)
    {
        return isset($this->rateDistance[$index]);
    }

    /**
     * unset rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateDistance($index)
    {
        unset($this->rateDistance[$index]);
    }

    /**
     * Gets as rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateDistanceAType[]
     */
    public function getRateDistance()
    {
        return $this->rateDistance;
    }

    /**
     * Sets a new rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateDistanceAType[] $rateDistance
     * @return self
     */
    public function setRateDistance(array $rateDistance)
    {
        $this->rateDistance = $rateDistance;
        return $this;
    }

    /**
     * Adds as vehicleCharge
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharges(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharges[] = $vehicleCharge;
        return $this;
    }

    /**
     * isset vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleCharges($index)
    {
        return isset($this->vehicleCharges[$index]);
    }

    /**
     * unset vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleCharges($index)
    {
        unset($this->vehicleCharges[$index]);
    }

    /**
     * Gets as vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[]
     */
    public function getVehicleCharges()
    {
        return $this->vehicleCharges;
    }

    /**
     * Sets a new vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $vehicleCharges
     * @return self
     */
    public function setVehicleCharges(array $vehicleCharges)
    {
        $this->vehicleCharges = $vehicleCharges;
        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of rates applicable to the customer, along with any discount number or promotional codes that affect the quoted rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateQualifierAType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of rates applicable to the customer, along with any discount number or promotional codes that affect the quoted rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateQualifierAType $rateQualifier
     * @return self
     */
    public function setRateQualifier(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateQualifierAType $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;
        return $this;
    }

    /**
     * Gets as rateRestrictions
     *
     * Information on restrictions that may be associated with this rate. Additional details on rate restrictions may be found in OTA_VehRateRulesRS.xsd.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateRestrictionsAType
     */
    public function getRateRestrictions()
    {
        return $this->rateRestrictions;
    }

    /**
     * Sets a new rateRestrictions
     *
     * Information on restrictions that may be associated with this rate. Additional details on rate restrictions may be found in OTA_VehRateRulesRS.xsd.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateRestrictionsAType $rateRestrictions
     * @return self
     */
    public function setRateRestrictions(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateRestrictionsAType $rateRestrictions)
    {
        $this->rateRestrictions = $rateRestrictions;
        return $this;
    }

    /**
     * Gets as rateGuarantee
     *
     * Used to indicate how long a specific rate is guaranteed.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateGuaranteeAType
     */
    public function getRateGuarantee()
    {
        return $this->rateGuarantee;
    }

    /**
     * Sets a new rateGuarantee
     *
     * Used to indicate how long a specific rate is guaranteed.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateGuaranteeAType $rateGuarantee
     * @return self
     */
    public function setRateGuarantee(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\RateGuaranteeAType $rateGuarantee)
    {
        $this->rateGuarantee = $rateGuarantee;
        return $this;
    }

    /**
     * Adds as pickupReturnRule
     *
     * Pickup and return requirements for a specific rate.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\PickupReturnRuleAType $pickupReturnRule
     */
    public function addToPickupReturnRule(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\PickupReturnRuleAType $pickupReturnRule)
    {
        $this->pickupReturnRule[] = $pickupReturnRule;
        return $this;
    }

    /**
     * isset pickupReturnRule
     *
     * Pickup and return requirements for a specific rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickupReturnRule($index)
    {
        return isset($this->pickupReturnRule[$index]);
    }

    /**
     * unset pickupReturnRule
     *
     * Pickup and return requirements for a specific rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickupReturnRule($index)
    {
        unset($this->pickupReturnRule[$index]);
    }

    /**
     * Gets as pickupReturnRule
     *
     * Pickup and return requirements for a specific rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\PickupReturnRuleAType[]
     */
    public function getPickupReturnRule()
    {
        return $this->pickupReturnRule;
    }

    /**
     * Sets a new pickupReturnRule
     *
     * Pickup and return requirements for a specific rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType\PickupReturnRuleAType[] $pickupReturnRule
     * @return self
     */
    public function setPickupReturnRule(array $pickupReturnRule)
    {
        $this->pickupReturnRule = $pickupReturnRule;
        return $this;
    }


}

