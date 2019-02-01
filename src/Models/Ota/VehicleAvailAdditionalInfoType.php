<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleAvailAdditionalInfoType
 *
 * The VehicleAvailAdditionalInfoType complex type identifies the data that describes supplemental information made available as part of describing the availability and rate of one or more vehicles.
 * XSD Type: VehicleAvailAdditionalInfoType
 */
class VehicleAvailAdditionalInfoType
{

    /**
     * @property \DateInterval $chargeablePeriod
     */
    private $chargeablePeriod = null;

    /**
     * A collection of coverages, along with associated price and details.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[] $pricedCoverages
     */
    private $pricedCoverages = null;

    /**
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as chargeablePeriod
     *
     * @return \DateInterval
     */
    public function getChargeablePeriod()
    {
        return $this->chargeablePeriod;
    }

    /**
     * Sets a new chargeablePeriod
     *
     * @param \DateInterval $chargeablePeriod
     * @return self
     */
    public function setChargeablePeriod(\DateInterval $chargeablePeriod)
    {
        $this->chargeablePeriod = $chargeablePeriod;
        return $this;
    }

    /**
     * Adds as pricedCoverage
     *
     * A collection of coverages, along with associated price and details.
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
     * A collection of coverages, along with associated price and details.
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
     * A collection of coverages, along with associated price and details.
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
     * A collection of coverages, along with associated price and details.
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
     * A collection of coverages, along with associated price and details.
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
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
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
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
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
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
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
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
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
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
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

