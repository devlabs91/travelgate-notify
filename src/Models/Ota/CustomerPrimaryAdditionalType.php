<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CustomerPrimaryAdditionalType
 *
 * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
 * XSD Type: CustomerPrimaryAdditionalType
 */
class CustomerPrimaryAdditionalType
{

    /**
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\PrimaryAType $primary
     */
    private $primary = null;

    /**
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\AdditionalAType[] $additional
     */
    private $additional = [
        
    ];

    /**
     * Gets as primary
     *
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\PrimaryAType
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Sets a new primary
     *
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\PrimaryAType $primary
     * @return self
     */
    public function setPrimary(\Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\PrimaryAType $primary)
    {
        $this->primary = $primary;
        return $this;
    }

    /**
     * Adds as additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\AdditionalAType $additional
     */
    public function addToAdditional(\Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\AdditionalAType $additional)
    {
        $this->additional[] = $additional;
        return $this;
    }

    /**
     * isset additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditional($index)
    {
        return isset($this->additional[$index]);
    }

    /**
     * unset additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditional($index)
    {
        unset($this->additional[$index]);
    }

    /**
     * Gets as additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\AdditionalAType[]
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Sets a new additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType\AdditionalAType[] $additional
     * @return self
     */
    public function setAdditional(array $additional)
    {
        $this->additional = $additional;
        return $this;
    }


}

