<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AddressInfoType
 *
 * Information about an address that identifies a location for a specific purposes.
 * XSD Type: AddressInfoType
 */
class AddressInfoType extends AddressType
{

    /**
     * When true, indicates a default value should be used.
     *  false
     *
     * @property bool $defaultInd
     */
    private $defaultInd = null;

    /**
     * Describes the use of the address (e.g. mailing, delivery, billing, etc.). Refer to OpenTravel Code List Address Use Type (AUT).
     *
     * @property string $useType
     */
    private $useType = null;

    /**
     * Used elsewhere in the message to reference this specific address.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *  false
     *
     * @return bool
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *  false
     *
     * @param bool $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;
        return $this;
    }

    /**
     * Gets as useType
     *
     * Describes the use of the address (e.g. mailing, delivery, billing, etc.). Refer to OpenTravel Code List Address Use Type (AUT).
     *
     * @return string
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * Describes the use of the address (e.g. mailing, delivery, billing, etc.). Refer to OpenTravel Code List Address Use Type (AUT).
     *
     * @param string $useType
     * @return self
     */
    public function setUseType($useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Used elsewhere in the message to reference this specific address.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Used elsewhere in the message to reference this specific address.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }


}

