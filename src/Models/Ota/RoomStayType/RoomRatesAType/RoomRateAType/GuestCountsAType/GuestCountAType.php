<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType;

/**
 * Class representing GuestCountAType
 */
class GuestCountAType
{

    /**
     * A code representing a business rule that determines the charges for a guest based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * Defines the age of a guest.
     *
     * @property int $age
     */
    private $age = null;

    /**
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @property int $count
     */
    private $count = null;

    /**
     * Gets as ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        return $this;
    }

    /**
     * Gets as age
     *
     * Defines the age of a guest.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Defines the age of a guest.
     *
     * @param int $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as count
     *
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

