<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RestaurantType
 *
 * Information associated with a specific restaurant.
 * XSD Type: RestaurantType
 */
class RestaurantType
{

    /**
     * The name of the restaurant at the facility.
     *
     * @property string $restaurantName
     */
    private $restaurantName = null;

    /**
     * The total seating capacity for this restaurant.
     *
     * @property int $maxSeatingCapacity
     */
    private $maxSeatingCapacity = null;

    /**
     * The maximum number of people that can be seated as a single party in this restaurant.
     *
     * @property int $maxSingleParty
     */
    private $maxSingleParty = null;

    /**
     * Identification code of the restaurant service or facility for inventory and booking purposes if the service is an inventoriable item.
     *
     * @property string $invCode
     */
    private $invCode = null;

    /**
     * @property bool $offerBreakfast
     */
    private $offerBreakfast = null;

    /**
     * @property bool $offerLunch
     */
    private $offerLunch = null;

    /**
     * @property bool $offerDinner
     */
    private $offerDinner = null;

    /**
     * @property bool $offerBrunch
     */
    private $offerBrunch = null;

    /**
     * Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @property string $proximityCode
     */
    private $proximityCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Used to define the display order.
     *
     * @property int $sort
     */
    private $sort = null;

    /**
     * Multimedia information about the restaurant.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\MultimediaDescriptionsAType $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Indicates the directions to a specific restaurant.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType $relativePosition
     */
    private $relativePosition = null;

    /**
     * Collection of operating times for the restaurant including detail such as season, day of week, or a combination.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Collection of types of restaurant.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType[] $infoCodes
     */
    private $infoCodes = null;

    /**
     * Collection of cuisine types of restaurant.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType[] $cuisineCodes
     */
    private $cuisineCodes = null;

    /**
     * Descriptive text that describes the restaurant.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as restaurantName
     *
     * The name of the restaurant at the facility.
     *
     * @return string
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * Sets a new restaurantName
     *
     * The name of the restaurant at the facility.
     *
     * @param string $restaurantName
     * @return self
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;
        return $this;
    }

    /**
     * Gets as maxSeatingCapacity
     *
     * The total seating capacity for this restaurant.
     *
     * @return int
     */
    public function getMaxSeatingCapacity()
    {
        return $this->maxSeatingCapacity;
    }

    /**
     * Sets a new maxSeatingCapacity
     *
     * The total seating capacity for this restaurant.
     *
     * @param int $maxSeatingCapacity
     * @return self
     */
    public function setMaxSeatingCapacity($maxSeatingCapacity)
    {
        $this->maxSeatingCapacity = $maxSeatingCapacity;
        return $this;
    }

    /**
     * Gets as maxSingleParty
     *
     * The maximum number of people that can be seated as a single party in this restaurant.
     *
     * @return int
     */
    public function getMaxSingleParty()
    {
        return $this->maxSingleParty;
    }

    /**
     * Sets a new maxSingleParty
     *
     * The maximum number of people that can be seated as a single party in this restaurant.
     *
     * @param int $maxSingleParty
     * @return self
     */
    public function setMaxSingleParty($maxSingleParty)
    {
        $this->maxSingleParty = $maxSingleParty;
        return $this;
    }

    /**
     * Gets as invCode
     *
     * Identification code of the restaurant service or facility for inventory and booking purposes if the service is an inventoriable item.
     *
     * @return string
     */
    public function getInvCode()
    {
        return $this->invCode;
    }

    /**
     * Sets a new invCode
     *
     * Identification code of the restaurant service or facility for inventory and booking purposes if the service is an inventoriable item.
     *
     * @param string $invCode
     * @return self
     */
    public function setInvCode($invCode)
    {
        $this->invCode = $invCode;
        return $this;
    }

    /**
     * Gets as offerBreakfast
     *
     * @return bool
     */
    public function getOfferBreakfast()
    {
        return $this->offerBreakfast;
    }

    /**
     * Sets a new offerBreakfast
     *
     * @param bool $offerBreakfast
     * @return self
     */
    public function setOfferBreakfast($offerBreakfast)
    {
        $this->offerBreakfast = $offerBreakfast;
        return $this;
    }

    /**
     * Gets as offerLunch
     *
     * @return bool
     */
    public function getOfferLunch()
    {
        return $this->offerLunch;
    }

    /**
     * Sets a new offerLunch
     *
     * @param bool $offerLunch
     * @return self
     */
    public function setOfferLunch($offerLunch)
    {
        $this->offerLunch = $offerLunch;
        return $this;
    }

    /**
     * Gets as offerDinner
     *
     * @return bool
     */
    public function getOfferDinner()
    {
        return $this->offerDinner;
    }

    /**
     * Sets a new offerDinner
     *
     * @param bool $offerDinner
     * @return self
     */
    public function setOfferDinner($offerDinner)
    {
        $this->offerDinner = $offerDinner;
        return $this;
    }

    /**
     * Gets as offerBrunch
     *
     * @return bool
     */
    public function getOfferBrunch()
    {
        return $this->offerBrunch;
    }

    /**
     * Sets a new offerBrunch
     *
     * @param bool $offerBrunch
     * @return self
     */
    public function setOfferBrunch($offerBrunch)
    {
        $this->offerBrunch = $offerBrunch;
        return $this;
    }

    /**
     * Gets as proximityCode
     *
     * Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @return string
     */
    public function getProximityCode()
    {
        return $this->proximityCode;
    }

    /**
     * Sets a new proximityCode
     *
     * Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @param string $proximityCode
     * @return self
     */
    public function setProximityCode($proximityCode)
    {
        $this->proximityCode = $proximityCode;
        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as sort
     *
     * Used to define the display order.
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Used to define the display order.
     *
     * @param int $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the restaurant.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\MultimediaDescriptionsAType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the restaurant.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\MultimediaDescriptionsAType $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(\Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\MultimediaDescriptionsAType $multimediaDescriptions)
    {
        $this->multimediaDescriptions = $multimediaDescriptions;
        return $this;
    }

    /**
     * Gets as relativePosition
     *
     * Indicates the directions to a specific restaurant.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType
     */
    public function getRelativePosition()
    {
        return $this->relativePosition;
    }

    /**
     * Sets a new relativePosition
     *
     * Indicates the directions to a specific restaurant.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType $relativePosition
     * @return self
     */
    public function setRelativePosition(\Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType $relativePosition)
    {
        $this->relativePosition = $relativePosition;
        return $this;
    }

    /**
     * Adds as operationSchedule
     *
     * Collection of operating times for the restaurant including detail such as season, day of week, or a combination.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule
     */
    public function addToOperationSchedules(\Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule)
    {
        $this->operationSchedules[] = $operationSchedule;
        return $this;
    }

    /**
     * isset operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as season, day of week, or a combination.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperationSchedules($index)
    {
        return isset($this->operationSchedules[$index]);
    }

    /**
     * unset operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as season, day of week, or a combination.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperationSchedules($index)
    {
        unset($this->operationSchedules[$index]);
    }

    /**
     * Gets as operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as season, day of week, or a combination.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as season, day of week, or a combination.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedules
     * @return self
     */
    public function setOperationSchedules(array $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;
        return $this;
    }

    /**
     * Adds as infoCode
     *
     * Collection of types of restaurant.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType $infoCode
     */
    public function addToInfoCodes(\Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType $infoCode)
    {
        $this->infoCodes[] = $infoCode;
        return $this;
    }

    /**
     * isset infoCodes
     *
     * Collection of types of restaurant.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoCodes($index)
    {
        return isset($this->infoCodes[$index]);
    }

    /**
     * unset infoCodes
     *
     * Collection of types of restaurant.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoCodes($index)
    {
        unset($this->infoCodes[$index]);
    }

    /**
     * Gets as infoCodes
     *
     * Collection of types of restaurant.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType[]
     */
    public function getInfoCodes()
    {
        return $this->infoCodes;
    }

    /**
     * Sets a new infoCodes
     *
     * Collection of types of restaurant.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType[] $infoCodes
     * @return self
     */
    public function setInfoCodes(array $infoCodes)
    {
        $this->infoCodes = $infoCodes;
        return $this;
    }

    /**
     * Adds as cuisineCode
     *
     * Collection of cuisine types of restaurant.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType $cuisineCode
     */
    public function addToCuisineCodes(\Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType $cuisineCode)
    {
        $this->cuisineCodes[] = $cuisineCode;
        return $this;
    }

    /**
     * isset cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCuisineCodes($index)
    {
        return isset($this->cuisineCodes[$index]);
    }

    /**
     * unset cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCuisineCodes($index)
    {
        unset($this->cuisineCodes[$index]);
    }

    /**
     * Gets as cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     */
    public function getCuisineCodes()
    {
        return $this->cuisineCodes;
    }

    /**
     * Sets a new cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType[] $cuisineCodes
     * @return self
     */
    public function setCuisineCodes(array $cuisineCodes)
    {
        $this->cuisineCodes = $cuisineCodes;
        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the restaurant.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the restaurant.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;
        return $this;
    }


}

