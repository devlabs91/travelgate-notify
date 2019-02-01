<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing SpecialServiceRequestType
 *
 * SSR's for this booking request, for example meals.
 * XSD Type: SpecialServiceRequestType
 */
class SpecialServiceRequestType
{

    /**
     * The four alpha position industry code identifying a particular type of special service request.
     *
     * @property string $sSRCode
     */
    private $sSRCode = null;

    /**
     * Used to specify the number of special services.
     *
     * @property int $serviceQuantity
     */
    private $serviceQuantity = null;

    /**
     * Code providing status information for this special service request. Refer to OpenTravel Code List Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * A number which identifies an SSR in a system.
     *
     * @property int $number
     */
    private $number = null;

    /**
     * Specify airline to request availability for.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Text associated with remark.
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Gets as sSRCode
     *
     * The four alpha position industry code identifying a particular type of special service request.
     *
     * @return string
     */
    public function getSSRCode()
    {
        return $this->sSRCode;
    }

    /**
     * Sets a new sSRCode
     *
     * The four alpha position industry code identifying a particular type of special service request.
     *
     * @param string $sSRCode
     * @return self
     */
    public function setSSRCode($sSRCode)
    {
        $this->sSRCode = $sSRCode;
        return $this;
    }

    /**
     * Gets as serviceQuantity
     *
     * Used to specify the number of special services.
     *
     * @return int
     */
    public function getServiceQuantity()
    {
        return $this->serviceQuantity;
    }

    /**
     * Sets a new serviceQuantity
     *
     * Used to specify the number of special services.
     *
     * @param int $serviceQuantity
     * @return self
     */
    public function setServiceQuantity($serviceQuantity)
    {
        $this->serviceQuantity = $serviceQuantity;
        return $this;
    }

    /**
     * Gets as status
     *
     * Code providing status information for this special service request. Refer to OpenTravel Code List Status (STS).
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
     * Code providing status information for this special service request. Refer to OpenTravel Code List Status (STS).
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
     * Gets as number
     *
     * A number which identifies an SSR in a system.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * A number which identifies an SSR in a system.
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as airline
     *
     * Specify airline to request availability for.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Specify airline to request availability for.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline
     * @return self
     */
    public function setAirline(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline)
    {
        $this->airline = $airline;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text associated with remark.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text associated with remark.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }


}

