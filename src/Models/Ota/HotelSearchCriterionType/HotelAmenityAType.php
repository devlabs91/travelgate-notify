<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType;

/**
 * Class representing HotelAmenityAType
 */
class HotelAmenityAType
{

    /**
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * When true, there is no charge for the amenity. When false, there is a fee associated with the amenity.
     *
     * @property bool $complimentaryInd
     */
    private $complimentaryInd = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as complimentaryInd
     *
     * When true, there is no charge for the amenity. When false, there is a fee associated with the amenity.
     *
     * @return bool
     */
    public function getComplimentaryInd()
    {
        return $this->complimentaryInd;
    }

    /**
     * Sets a new complimentaryInd
     *
     * When true, there is no charge for the amenity. When false, there is a fee associated with the amenity.
     *
     * @param bool $complimentaryInd
     * @return self
     */
    public function setComplimentaryInd($complimentaryInd)
    {
        $this->complimentaryInd = $complimentaryInd;
        return $this;
    }


}

