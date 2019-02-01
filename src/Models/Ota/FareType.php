<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing FareType
 *
 * Holds a base fare, tax, total and currency information on a price
 * XSD Type: FareType
 */
class FareType
{

    /**
     * Indicator to show if this is a private fare.
     *  false
     *
     * @property bool $negotiatedFare
     */
    private $negotiatedFare = null;

    /**
     * Code used to identify the private fare.
     *
     * @property string $negotiatedFareCode
     */
    private $negotiatedFareCode = null;

    /**
     * Specifies a discount code applicable to the fare.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * The total number of trips in this itinerary.
     *
     * @property int $totalNbrTrips
     */
    private $totalNbrTrips = null;

    /**
     * The total number of passenger type codes in this priced itinerary.
     *
     * @property int $totalNbrPTC
     */
    private $totalNbrPTC = null;

    /**
     * Price of the inventory excluding taxes and fees.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\BaseFareAType $baseFare
     */
    private $baseFare = null;

    /**
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\EquivFareAType[] $equivFare
     */
    private $equivFare = [
        
    ];

    /**
     * This is a collection of Taxes
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\TaxesAType $taxes
     */
    private $taxes = null;

    /**
     * This is a collection of Fees
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\FeesAType $fees
     */
    private $fees = null;

    /**
     * The total price that the passenger would pay (includes fare, taxes, fees)
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\TotalFareAType $totalFare
     */
    private $totalFare = null;

    /**
     * Should not contain unstructured FareCalc data.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\FareConstructionAType $fareConstruction
     */
    private $fareConstruction = null;

    /**
     * Contains the fare calc information for the stored fare for the passenger.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\UnstructuredFareCalcAType $unstructuredFareCalc
     */
    private $unstructuredFareCalc = null;

    /**
     * Checked baggage allowance for the fare.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\FareBaggageAllowanceAType[] $fareBaggageAllowance
     */
    private $fareBaggageAllowance = [
        
    ];

    /**
     * The tour code associated with the fare.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\TourCodeAType $tourCode
     */
    private $tourCode = null;

    /**
     * Free flow remarks for the fare breakdown.
     *
     * @property string[] $remark
     */
    private $remark = [
        
    ];

    /**
     * The original ticket/document issue information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\OriginalIssueInfoAType $originalIssueInfo
     */
    private $originalIssueInfo = null;

    /**
     * Exchange ticket/document information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType $exchangeInfo
     */
    private $exchangeInfo = null;

    /**
     * Collection for discounts.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType[] $discounts
     */
    private $discounts = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as negotiatedFare
     *
     * Indicator to show if this is a private fare.
     *  false
     *
     * @return bool
     */
    public function getNegotiatedFare()
    {
        return $this->negotiatedFare;
    }

    /**
     * Sets a new negotiatedFare
     *
     * Indicator to show if this is a private fare.
     *  false
     *
     * @param bool $negotiatedFare
     * @return self
     */
    public function setNegotiatedFare($negotiatedFare)
    {
        $this->negotiatedFare = $negotiatedFare;
        return $this;
    }

    /**
     * Gets as negotiatedFareCode
     *
     * Code used to identify the private fare.
     *
     * @return string
     */
    public function getNegotiatedFareCode()
    {
        return $this->negotiatedFareCode;
    }

    /**
     * Sets a new negotiatedFareCode
     *
     * Code used to identify the private fare.
     *
     * @param string $negotiatedFareCode
     * @return self
     */
    public function setNegotiatedFareCode($negotiatedFareCode)
    {
        $this->negotiatedFareCode = $negotiatedFareCode;
        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * Specifies a discount code applicable to the fare.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * Specifies a discount code applicable to the fare.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;
        return $this;
    }

    /**
     * Gets as totalNbrTrips
     *
     * The total number of trips in this itinerary.
     *
     * @return int
     */
    public function getTotalNbrTrips()
    {
        return $this->totalNbrTrips;
    }

    /**
     * Sets a new totalNbrTrips
     *
     * The total number of trips in this itinerary.
     *
     * @param int $totalNbrTrips
     * @return self
     */
    public function setTotalNbrTrips($totalNbrTrips)
    {
        $this->totalNbrTrips = $totalNbrTrips;
        return $this;
    }

    /**
     * Gets as totalNbrPTC
     *
     * The total number of passenger type codes in this priced itinerary.
     *
     * @return int
     */
    public function getTotalNbrPTC()
    {
        return $this->totalNbrPTC;
    }

    /**
     * Sets a new totalNbrPTC
     *
     * The total number of passenger type codes in this priced itinerary.
     *
     * @param int $totalNbrPTC
     * @return self
     */
    public function setTotalNbrPTC($totalNbrPTC)
    {
        $this->totalNbrPTC = $totalNbrPTC;
        return $this;
    }

    /**
     * Gets as baseFare
     *
     * Price of the inventory excluding taxes and fees.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\BaseFareAType
     */
    public function getBaseFare()
    {
        return $this->baseFare;
    }

    /**
     * Sets a new baseFare
     *
     * Price of the inventory excluding taxes and fees.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\BaseFareAType $baseFare
     * @return self
     */
    public function setBaseFare(\Devlabs91\TravelgateNotify\Models\Ota\FareType\BaseFareAType $baseFare)
    {
        $this->baseFare = $baseFare;
        return $this;
    }

    /**
     * Adds as equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\EquivFareAType $equivFare
     */
    public function addToEquivFare(\Devlabs91\TravelgateNotify\Models\Ota\FareType\EquivFareAType $equivFare)
    {
        $this->equivFare[] = $equivFare;
        return $this;
    }

    /**
     * isset equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquivFare($index)
    {
        return isset($this->equivFare[$index]);
    }

    /**
     * unset equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquivFare($index)
    {
        unset($this->equivFare[$index]);
    }

    /**
     * Gets as equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\EquivFareAType[]
     */
    public function getEquivFare()
    {
        return $this->equivFare;
    }

    /**
     * Sets a new equivFare
     *
     * Price of the inventory excluding taxes and fees in the payable currency.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\EquivFareAType[] $equivFare
     * @return self
     */
    public function setEquivFare(array $equivFare)
    {
        $this->equivFare = $equivFare;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * This is a collection of Taxes
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\TaxesAType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * This is a collection of Taxes
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\TaxesAType $taxes
     * @return self
     */
    public function setTaxes(\Devlabs91\TravelgateNotify\Models\Ota\FareType\TaxesAType $taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as fees
     *
     * This is a collection of Fees
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\FeesAType
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * This is a collection of Fees
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\FeesAType $fees
     * @return self
     */
    public function setFees(\Devlabs91\TravelgateNotify\Models\Ota\FareType\FeesAType $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as totalFare
     *
     * The total price that the passenger would pay (includes fare, taxes, fees)
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\TotalFareAType
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * The total price that the passenger would pay (includes fare, taxes, fees)
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\TotalFareAType $totalFare
     * @return self
     */
    public function setTotalFare(\Devlabs91\TravelgateNotify\Models\Ota\FareType\TotalFareAType $totalFare)
    {
        $this->totalFare = $totalFare;
        return $this;
    }

    /**
     * Gets as fareConstruction
     *
     * Should not contain unstructured FareCalc data.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\FareConstructionAType
     */
    public function getFareConstruction()
    {
        return $this->fareConstruction;
    }

    /**
     * Sets a new fareConstruction
     *
     * Should not contain unstructured FareCalc data.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\FareConstructionAType $fareConstruction
     * @return self
     */
    public function setFareConstruction(\Devlabs91\TravelgateNotify\Models\Ota\FareType\FareConstructionAType $fareConstruction)
    {
        $this->fareConstruction = $fareConstruction;
        return $this;
    }

    /**
     * Gets as unstructuredFareCalc
     *
     * Contains the fare calc information for the stored fare for the passenger.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\UnstructuredFareCalcAType
     */
    public function getUnstructuredFareCalc()
    {
        return $this->unstructuredFareCalc;
    }

    /**
     * Sets a new unstructuredFareCalc
     *
     * Contains the fare calc information for the stored fare for the passenger.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\UnstructuredFareCalcAType $unstructuredFareCalc
     * @return self
     */
    public function setUnstructuredFareCalc(\Devlabs91\TravelgateNotify\Models\Ota\FareType\UnstructuredFareCalcAType $unstructuredFareCalc)
    {
        $this->unstructuredFareCalc = $unstructuredFareCalc;
        return $this;
    }

    /**
     * Adds as fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\FareBaggageAllowanceAType $fareBaggageAllowance
     */
    public function addToFareBaggageAllowance(\Devlabs91\TravelgateNotify\Models\Ota\FareType\FareBaggageAllowanceAType $fareBaggageAllowance)
    {
        $this->fareBaggageAllowance[] = $fareBaggageAllowance;
        return $this;
    }

    /**
     * isset fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareBaggageAllowance($index)
    {
        return isset($this->fareBaggageAllowance[$index]);
    }

    /**
     * unset fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareBaggageAllowance($index)
    {
        unset($this->fareBaggageAllowance[$index]);
    }

    /**
     * Gets as fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\FareBaggageAllowanceAType[]
     */
    public function getFareBaggageAllowance()
    {
        return $this->fareBaggageAllowance;
    }

    /**
     * Sets a new fareBaggageAllowance
     *
     * Checked baggage allowance for the fare.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\FareBaggageAllowanceAType[] $fareBaggageAllowance
     * @return self
     */
    public function setFareBaggageAllowance(array $fareBaggageAllowance)
    {
        $this->fareBaggageAllowance = $fareBaggageAllowance;
        return $this;
    }

    /**
     * Gets as tourCode
     *
     * The tour code associated with the fare.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\TourCodeAType
     */
    public function getTourCode()
    {
        return $this->tourCode;
    }

    /**
     * Sets a new tourCode
     *
     * The tour code associated with the fare.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\TourCodeAType $tourCode
     * @return self
     */
    public function setTourCode(\Devlabs91\TravelgateNotify\Models\Ota\FareType\TourCodeAType $tourCode)
    {
        $this->tourCode = $tourCode;
        return $this;
    }

    /**
     * Adds as remark
     *
     * Free flow remarks for the fare breakdown.
     *
     * @return self
     * @param string $remark
     */
    public function addToRemark($remark)
    {
        $this->remark[] = $remark;
        return $this;
    }

    /**
     * isset remark
     *
     * Free flow remarks for the fare breakdown.
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
     * Free flow remarks for the fare breakdown.
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
     * Free flow remarks for the fare breakdown.
     *
     * @return string[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Free flow remarks for the fare breakdown.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\OriginalIssueInfoAType
     */
    public function getOriginalIssueInfo()
    {
        return $this->originalIssueInfo;
    }

    /**
     * Sets a new originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\OriginalIssueInfoAType $originalIssueInfo
     * @return self
     */
    public function setOriginalIssueInfo(\Devlabs91\TravelgateNotify\Models\Ota\FareType\OriginalIssueInfoAType $originalIssueInfo)
    {
        $this->originalIssueInfo = $originalIssueInfo;
        return $this;
    }

    /**
     * Gets as exchangeInfo
     *
     * Exchange ticket/document information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType
     */
    public function getExchangeInfo()
    {
        return $this->exchangeInfo;
    }

    /**
     * Sets a new exchangeInfo
     *
     * Exchange ticket/document information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType $exchangeInfo
     * @return self
     */
    public function setExchangeInfo(\Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType $exchangeInfo)
    {
        $this->exchangeInfo = $exchangeInfo;
        return $this;
    }

    /**
     * Adds as discount
     *
     * Collection for discounts.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType $discount
     */
    public function addToDiscounts(\Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType $discount)
    {
        $this->discounts[] = $discount;
        return $this;
    }

    /**
     * isset discounts
     *
     * Collection for discounts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscounts($index)
    {
        return isset($this->discounts[$index]);
    }

    /**
     * unset discounts
     *
     * Collection for discounts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscounts($index)
    {
        unset($this->discounts[$index]);
    }

    /**
     * Gets as discounts
     *
     * Collection for discounts.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets a new discounts
     *
     * Collection for discounts.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType[] $discounts
     * @return self
     */
    public function setDiscounts(array $discounts)
    {
        $this->discounts = $discounts;
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

