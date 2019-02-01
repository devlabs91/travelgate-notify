<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleAvailCoreType
 *
 * The VehicleAvailCoreType complex type identifies the data that describes common, or core, information made available as part of describing the availability and rate of one or more vehicles.
 * XSD Type: VehicleAvailCoreType
 */
class VehicleAvailCoreType
{

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * When true, this vehicle is an alternate to what was requested.
     *
     * @property bool $isAlternateInd
     */
    private $isAlternateInd = null;

    /**
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleType $vehicle
     */
    private $vehicle = null;

    /**
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType[] $rentalRate
     */
    private $rentalRate = [
        
    ];

    /**
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\TotalChargeAType[] $totalCharge
     */
    private $totalCharge = [
        
    ];

    /**
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[] $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this vehicle quotation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * Information by which this availability quote can be later cross-referenced
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\ReferenceAType $reference
     */
    private $reference = null;

    /**
     * The vendor for this vehicle type and its participation level in a system.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorAType $vendor
     */
    private $vendor = null;

    /**
     * The vendor location information for a specific vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorLocationAType $vendorLocation
     */
    private $vendorLocation = null;

    /**
     * The drop off location information for a specific vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DropOffLocationAType $dropOffLocation
     */
    private $dropOffLocation = null;

    /**
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DiscountAType[] $discount
     */
    private $discount = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as isAlternateInd
     *
     * When true, this vehicle is an alternate to what was requested.
     *
     * @return bool
     */
    public function getIsAlternateInd()
    {
        return $this->isAlternateInd;
    }

    /**
     * Sets a new isAlternateInd
     *
     * When true, this vehicle is an alternate to what was requested.
     *
     * @param bool $isAlternateInd
     * @return self
     */
    public function setIsAlternateInd($isAlternateInd)
    {
        $this->isAlternateInd = $isAlternateInd;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleType $vehicle
     * @return self
     */
    public function setVehicle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleType $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Adds as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate
     */
    public function addToRentalRate(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate)
    {
        $this->rentalRate[] = $rentalRate;
        return $this;
    }

    /**
     * isset rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRentalRate($index)
    {
        return isset($this->rentalRate[$index]);
    }

    /**
     * unset rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRentalRate($index)
    {
        unset($this->rentalRate[$index]);
    }

    /**
     * Gets as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType[]
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType[] $rentalRate
     * @return self
     */
    public function setRentalRate(array $rentalRate)
    {
        $this->rentalRate = $rentalRate;
        return $this;
    }

    /**
     * Adds as totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\TotalChargeAType $totalCharge
     */
    public function addToTotalCharge(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\TotalChargeAType $totalCharge)
    {
        $this->totalCharge[] = $totalCharge;
        return $this;
    }

    /**
     * isset totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalCharge($index)
    {
        return isset($this->totalCharge[$index]);
    }

    /**
     * unset totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalCharge($index)
    {
        unset($this->totalCharge[$index]);
    }

    /**
     * Gets as totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\TotalChargeAType[]
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\TotalChargeAType[] $totalCharge
     * @return self
     */
    public function setTotalCharge(array $totalCharge)
    {
        $this->totalCharge = $totalCharge;
        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquips(\Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
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
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
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
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[] $pricedEquips
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
     * A collection of fees associated with this vehicle quotation.
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
     * A collection of fees associated with this vehicle quotation.
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
     * A collection of fees associated with this vehicle quotation.
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
     * A collection of fees associated with this vehicle quotation.
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
     * A collection of fees associated with this vehicle quotation.
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
     * Gets as reference
     *
     * Information by which this availability quote can be later cross-referenced
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\ReferenceAType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Information by which this availability quote can be later cross-referenced
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\ReferenceAType $reference
     * @return self
     */
    public function setReference(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\ReferenceAType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as vendor
     *
     * The vendor for this vehicle type and its participation level in a system.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorAType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * The vendor for this vehicle type and its participation level in a system.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorAType $vendor
     * @return self
     */
    public function setVendor(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorAType $vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as vendorLocation
     *
     * The vendor location information for a specific vehicle.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorLocationAType
     */
    public function getVendorLocation()
    {
        return $this->vendorLocation;
    }

    /**
     * Sets a new vendorLocation
     *
     * The vendor location information for a specific vehicle.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorLocationAType $vendorLocation
     * @return self
     */
    public function setVendorLocation(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\VendorLocationAType $vendorLocation)
    {
        $this->vendorLocation = $vendorLocation;
        return $this;
    }

    /**
     * Gets as dropOffLocation
     *
     * The drop off location information for a specific vehicle.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DropOffLocationAType
     */
    public function getDropOffLocation()
    {
        return $this->dropOffLocation;
    }

    /**
     * Sets a new dropOffLocation
     *
     * The drop off location information for a specific vehicle.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DropOffLocationAType $dropOffLocation
     * @return self
     */
    public function setDropOffLocation(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DropOffLocationAType $dropOffLocation)
    {
        $this->dropOffLocation = $dropOffLocation;
        return $this;
    }

    /**
     * Adds as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DiscountAType $discount
     */
    public function addToDiscount(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DiscountAType $discount)
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType\DiscountAType[] $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }


}

