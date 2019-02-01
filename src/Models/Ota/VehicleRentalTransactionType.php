<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleRentalTransactionType
 *
 * This contains the information typically used in a rental transaction, such as charges, contract number or pickup date/time.
 * XSD Type: VehicleRentalTransactionType
 */
class VehicleRentalTransactionType
{

    /**
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PickUpReturnDetailsAType[] $pickUpReturnDetails
     */
    private $pickUpReturnDetails = [
        
    ];

    /**
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This is the actual vehicle being rented.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\VehicleAType $vehicle
     */
    private $vehicle = null;

    /**
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate
     */
    private $rentalRate = null;

    /**
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this rental.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * The anticipated total cost of a rental, the sum of the individual charges, optional charges, and associated fees.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\TotalChargeAType $totalCharge
     */
    private $totalCharge = null;

    /**
     * A confirmation number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $confID
     */
    private $confID = null;

    /**
     * A contract number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $contractID
     */
    private $contractID = null;

    /**
     * Adds as pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PickUpReturnDetailsAType $pickUpReturnDetails
     */
    public function addToPickUpReturnDetails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PickUpReturnDetailsAType $pickUpReturnDetails)
    {
        $this->pickUpReturnDetails[] = $pickUpReturnDetails;
        return $this;
    }

    /**
     * isset pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickUpReturnDetails($index)
    {
        return isset($this->pickUpReturnDetails[$index]);
    }

    /**
     * unset pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickUpReturnDetails($index)
    {
        unset($this->pickUpReturnDetails[$index]);
    }

    /**
     * Gets as pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PickUpReturnDetailsAType[]
     */
    public function getPickUpReturnDetails()
    {
        return $this->pickUpReturnDetails;
    }

    /**
     * Sets a new pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PickUpReturnDetailsAType[] $pickUpReturnDetails
     * @return self
     */
    public function setPickUpReturnDetails(array $pickUpReturnDetails)
    {
        $this->pickUpReturnDetails = $pickUpReturnDetails;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This is the actual vehicle being rented.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This is the actual vehicle being rented.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\VehicleAType $vehicle
     * @return self
     */
    public function setVehicle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\VehicleAType $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Gets as rentalRate
     *
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate
     * @return self
     */
    public function setRentalRate(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate)
    {
        $this->rentalRate = $rentalRate;
        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip
     */
    public function addToPricedEquips(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedEquips($index)
    {
        return isset($this->pricedEquips[$index]);
    }

    /**
     * unset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedEquips($index)
    {
        unset($this->pricedEquips[$index]);
    }

    /**
     * Gets as pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquips
     * @return self
     */
    public function setPricedEquips(array $pricedEquips)
    {
        $this->pricedEquips = $pricedEquips;
        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees associated with this rental.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $fee
     */
    public function addToFees(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees associated with this rental.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees associated with this rental.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees associated with this rental.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees associated with this rental.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * The anticipated total cost of a rental, the sum of the individual charges, optional charges, and associated fees.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The anticipated total cost of a rental, the sum of the individual charges, optional charges, and associated fees.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\TotalChargeAType $totalCharge
     * @return self
     */
    public function setTotalCharge(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\TotalChargeAType $totalCharge)
    {
        $this->totalCharge = $totalCharge;
        return $this;
    }

    /**
     * Gets as confID
     *
     * A confirmation number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getConfID()
    {
        return $this->confID;
    }

    /**
     * Sets a new confID
     *
     * A confirmation number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $confID
     * @return self
     */
    public function setConfID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $confID)
    {
        $this->confID = $confID;
        return $this;
    }

    /**
     * Gets as contractID
     *
     * A contract number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getContractID()
    {
        return $this->contractID;
    }

    /**
     * Sets a new contractID
     *
     * A contract number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $contractID
     * @return self
     */
    public function setContractID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $contractID)
    {
        $this->contractID = $contractID;
        return $this;
    }


}

