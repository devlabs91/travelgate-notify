<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleLocationLiabilitiesType
 *
 * The Vehicle Location Liabilities Type is used to define information on the financial liabilities assumed by the renter when renting from this facility, along with optional coverage to reduce the financial liabilities.
 * XSD Type: VehicleLocationLiabilitiesType
 */
class VehicleLocationLiabilitiesType
{

    /**
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[] $coverages
     */
    private $coverages = null;

    /**
     * General information about the fiancial liabilities associated with the rental of a vehicle from the associated rental facility.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     */
    private $info = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as coverage
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType $coverage
     */
    public function addToCoverages(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType $coverage)
    {
        $this->coverages[] = $coverage;
        return $this;
    }

    /**
     * isset coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverages($index)
    {
        return isset($this->coverages[$index]);
    }

    /**
     * unset coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverages($index)
    {
        unset($this->coverages[$index]);
    }

    /**
     * Gets as coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[]
     */
    public function getCoverages()
    {
        return $this->coverages;
    }

    /**
     * Sets a new coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[] $coverages
     * @return self
     */
    public function setCoverages(array $coverages)
    {
        $this->coverages = $coverages;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the fiancial liabilities associated with the rental of a vehicle from the associated rental facility.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information about the fiancial liabilities associated with the rental of a vehicle from the associated rental facility.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info)
    {
        $this->info = $info;
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

