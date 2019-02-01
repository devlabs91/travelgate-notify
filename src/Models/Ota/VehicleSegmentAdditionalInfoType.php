<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleSegmentAdditionalInfoType
 *
 * The VehicleSegmentAdditionalInfoType complex type identifies the data that descibes the supplemental information assocated with a vehicle segment. Such information may be associated with the reservation of a vehicle, but is not normally included.
 * XSD Type: VehicleSegmentAdditionalInfoType
 */
class VehicleSegmentAdditionalInfoType
{

    /**
     * When true, a written confirmation may be requested.
     *
     * @property bool $writtenConfInd
     */
    private $writtenConfInd = null;

    /**
     * A collection of payment rules associated with this reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentDetailType[] $rentalPaymentAmount
     */
    private $rentalPaymentAmount = [
        
    ];

    /**
     * A collection of vehicle coverages associated with this reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[] $pricedCoverages
     */
    private $pricedCoverages = null;

    /**
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType[] $pricedOffLocService
     */
    private $pricedOffLocService = [
        
    ];

    /**
     * A collection of free-format messages associated with this reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType[] $locationDetails
     */
    private $locationDetails = [
        
    ];

    /**
     * Details of a tour associated with which this reservation information is associated. Rate information may vary if associated with a tour.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType[] $specialReqPref
     */
    private $specialReqPref = [
        
    ];

    /**
     * Details of the arrival transportation, if applicable.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $remark
     */
    private $remark = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as writtenConfInd
     *
     * When true, a written confirmation may be requested.
     *
     * @return bool
     */
    public function getWrittenConfInd()
    {
        return $this->writtenConfInd;
    }

    /**
     * Sets a new writtenConfInd
     *
     * When true, a written confirmation may be requested.
     *
     * @param bool $writtenConfInd
     * @return self
     */
    public function setWrittenConfInd($writtenConfInd)
    {
        $this->writtenConfInd = $writtenConfInd;
        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules)
    {
        $this->paymentRules = $paymentRules;
        return $this;
    }

    /**
     * Adds as rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentDetailType $rentalPaymentAmount
     */
    public function addToRentalPaymentAmount(\Devlabs91\TravelgateNotify\Models\Ota\PaymentDetailType $rentalPaymentAmount)
    {
        $this->rentalPaymentAmount[] = $rentalPaymentAmount;
        return $this;
    }

    /**
     * isset rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRentalPaymentAmount($index)
    {
        return isset($this->rentalPaymentAmount[$index]);
    }

    /**
     * unset rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRentalPaymentAmount($index)
    {
        unset($this->rentalPaymentAmount[$index]);
    }

    /**
     * Gets as rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentDetailType[]
     */
    public function getRentalPaymentAmount()
    {
        return $this->rentalPaymentAmount;
    }

    /**
     * Sets a new rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentDetailType[] $rentalPaymentAmount
     * @return self
     */
    public function setRentalPaymentAmount(array $rentalPaymentAmount)
    {
        $this->rentalPaymentAmount = $rentalPaymentAmount;
        return $this;
    }

    /**
     * Adds as pricedCoverage
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverages(\Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverages[] = $pricedCoverage;
        return $this;
    }

    /**
     * isset pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedCoverages($index)
    {
        return isset($this->pricedCoverages[$index]);
    }

    /**
     * unset pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedCoverages($index)
    {
        unset($this->pricedCoverages[$index]);
    }

    /**
     * Gets as pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[]
     */
    public function getPricedCoverages()
    {
        return $this->pricedCoverages;
    }

    /**
     * Sets a new pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[] $pricedCoverages
     * @return self
     */
    public function setPricedCoverages(array $pricedCoverages)
    {
        $this->pricedCoverages = $pricedCoverages;
        return $this;
    }

    /**
     * Adds as pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType $pricedOffLocService
     */
    public function addToPricedOffLocService(\Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType $pricedOffLocService)
    {
        $this->pricedOffLocService[] = $pricedOffLocService;
        return $this;
    }

    /**
     * isset pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedOffLocService($index)
    {
        return isset($this->pricedOffLocService[$index]);
    }

    /**
     * unset pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedOffLocService($index)
    {
        unset($this->pricedOffLocService[$index]);
    }

    /**
     * Gets as pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType[]
     */
    public function getPricedOffLocService()
    {
        return $this->pricedOffLocService;
    }

    /**
     * Sets a new pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType[] $pricedOffLocService
     * @return self
     */
    public function setPricedOffLocService(array $pricedOffLocService)
    {
        $this->pricedOffLocService = $pricedOffLocService;
        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $vendorMessage
     */
    public function addToVendorMessages(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;
        return $this;
    }

    /**
     * Adds as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType $locationDetails
     */
    public function addToLocationDetails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType $locationDetails)
    {
        $this->locationDetails[] = $locationDetails;
        return $this;
    }

    /**
     * isset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationDetails($index)
    {
        return isset($this->locationDetails[$index]);
    }

    /**
     * unset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationDetails($index)
    {
        unset($this->locationDetails[$index]);
    }

    /**
     * Gets as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType[]
     */
    public function getLocationDetails()
    {
        return $this->locationDetails;
    }

    /**
     * Sets a new locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType[] $locationDetails
     * @return self
     */
    public function setLocationDetails(array $locationDetails)
    {
        $this->locationDetails = $locationDetails;
        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour associated with which this reservation information is associated. Rate information may vary if associated with a tour.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour associated with which this reservation information is associated. Rate information may vary if associated with a tour.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType $tourInfo
     * @return self
     */
    public function setTourInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType $tourInfo)
    {
        $this->tourInfo = $tourInfo;
        return $this;
    }

    /**
     * Adds as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType $specialReqPref
     */
    public function addToSpecialReqPref(\Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType $specialReqPref)
    {
        $this->specialReqPref[] = $specialReqPref;
        return $this;
    }

    /**
     * isset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialReqPref($index)
    {
        return isset($this->specialReqPref[$index]);
    }

    /**
     * unset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialReqPref($index)
    {
        unset($this->specialReqPref[$index]);
    }

    /**
     * Gets as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType[]
     */
    public function getSpecialReqPref()
    {
        return $this->specialReqPref;
    }

    /**
     * Sets a new specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType[] $specialReqPref
     * @return self
     */
    public function setSpecialReqPref(array $specialReqPref)
    {
        $this->specialReqPref = $specialReqPref;
        return $this;
    }

    /**
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType
     */
    public function getArrivalDetails()
    {
        return $this->arrivalDetails;
    }

    /**
     * Sets a new arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType $arrivalDetails
     * @return self
     */
    public function setArrivalDetails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType $arrivalDetails)
    {
        $this->arrivalDetails = $arrivalDetails;
        return $this;
    }

    /**
     * Gets as writtenConfInst
     *
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(\Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType $writtenConfInst)
    {
        $this->writtenConfInst = $writtenConfInst;
        return $this;
    }

    /**
     * Adds as remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $remark
     */
    public function addToRemark(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $remark)
    {
        $this->remark[] = $remark;
        return $this;
    }

    /**
     * isset remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;
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

