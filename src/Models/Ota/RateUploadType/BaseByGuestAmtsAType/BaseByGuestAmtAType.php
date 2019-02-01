<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RateUploadType\BaseByGuestAmtsAType;

use Devlabs91\TravelgateNotify\Models\Ota\TotalType;

/**
 * Class representing BaseByGuestAmtAType
 */
class BaseByGuestAmtAType extends TotalType
{

    /**
     * The code associated with this base charge.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The number of guests associated with this base charge.
     *
     * @property int $numberOfGuests
     */
    private $numberOfGuests = null;

    /**
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @property int $minAge
     */
    private $minAge = null;

    /**
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @property int $maxAge
     */
    private $maxAge = null;

    /**
     * TimeUnit : Qualifier for Age.
     *
     * @property string $ageTimeUnit
     */
    private $ageTimeUnit = null;

    /**
     * Description of number of guests and the associated age group (ex 2 Adults).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $numberOfGuestsDescription
     */
    private $numberOfGuestsDescription = [
        
    ];

    /**
     * Gets as code
     *
     * The code associated with this base charge.
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
     * The code associated with this base charge.
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
     * Gets as numberOfGuests
     *
     * The number of guests associated with this base charge.
     *
     * @return int
     */
    public function getNumberOfGuests()
    {
        return $this->numberOfGuests;
    }

    /**
     * Sets a new numberOfGuests
     *
     * The number of guests associated with this base charge.
     *
     * @param int $numberOfGuests
     * @return self
     */
    public function setNumberOfGuests($numberOfGuests)
    {
        $this->numberOfGuests = $numberOfGuests;
        return $this;
    }

    /**
     * Gets as ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
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
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
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
     * Gets as minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Sets a new minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @param int $minAge
     * @return self
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;
        return $this;
    }

    /**
     * Gets as maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Sets a new maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @param int $maxAge
     * @return self
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
        return $this;
    }

    /**
     * Gets as ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @return string
     */
    public function getAgeTimeUnit()
    {
        return $this->ageTimeUnit;
    }

    /**
     * Sets a new ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @param string $ageTimeUnit
     * @return self
     */
    public function setAgeTimeUnit($ageTimeUnit)
    {
        $this->ageTimeUnit = $ageTimeUnit;
        return $this;
    }

    /**
     * Adds as numberOfGuestsDescription
     *
     * Description of number of guests and the associated age group (ex 2 Adults).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $numberOfGuestsDescription
     */
    public function addToNumberOfGuestsDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $numberOfGuestsDescription)
    {
        $this->numberOfGuestsDescription[] = $numberOfGuestsDescription;
        return $this;
    }

    /**
     * isset numberOfGuestsDescription
     *
     * Description of number of guests and the associated age group (ex 2 Adults).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumberOfGuestsDescription($index)
    {
        return isset($this->numberOfGuestsDescription[$index]);
    }

    /**
     * unset numberOfGuestsDescription
     *
     * Description of number of guests and the associated age group (ex 2 Adults).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumberOfGuestsDescription($index)
    {
        unset($this->numberOfGuestsDescription[$index]);
    }

    /**
     * Gets as numberOfGuestsDescription
     *
     * Description of number of guests and the associated age group (ex 2 Adults).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getNumberOfGuestsDescription()
    {
        return $this->numberOfGuestsDescription;
    }

    /**
     * Sets a new numberOfGuestsDescription
     *
     * Description of number of guests and the associated age group (ex 2 Adults).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $numberOfGuestsDescription
     * @return self
     */
    public function setNumberOfGuestsDescription(array $numberOfGuestsDescription)
    {
        $this->numberOfGuestsDescription = $numberOfGuestsDescription;
        return $this;
    }


}

