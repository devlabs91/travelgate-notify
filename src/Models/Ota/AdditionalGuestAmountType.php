<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AdditionalGuestAmountType
 *
 * Charges related to additional guests.
 * XSD Type: AdditionalGuestAmountType
 */
class AdditionalGuestAmountType
{

    /**
     * Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     *
     * @property int $maxAdditionalGuests
     */
    private $maxAdditionalGuests = null;

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
     * A code representing the charges related to additional guests. Refer to OpenTravel Code List Additional Detail Type (ADT). Typically, the extra person information code would be used here.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The percent charged for an additional guest.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * An index code to identify an instance in a collection of like items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The amount charged for an additional guest.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TotalType $amount
     */
    private $amount = null;

    /**
     * Descriptive information regarding amounts charged for additional guests.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $addlGuestAmtDescription
     */
    private $addlGuestAmtDescription = [
        
    ];

    /**
     * Gets as maxAdditionalGuests
     *
     * Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     *
     * @return int
     */
    public function getMaxAdditionalGuests()
    {
        return $this->maxAdditionalGuests;
    }

    /**
     * Sets a new maxAdditionalGuests
     *
     * Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     *
     * @param int $maxAdditionalGuests
     * @return self
     */
    public function setMaxAdditionalGuests($maxAdditionalGuests)
    {
        $this->maxAdditionalGuests = $maxAdditionalGuests;
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
     * Gets as type
     *
     * A code representing the charges related to additional guests. Refer to OpenTravel Code List Additional Detail Type (ADT). Typically, the extra person information code would be used here.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A code representing the charges related to additional guests. Refer to OpenTravel Code List Additional Detail Type (ADT). Typically, the extra person information code would be used here.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as percent
     *
     * The percent charged for an additional guest.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * The percent charged for an additional guest.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * An index code to identify an instance in a collection of like items.
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
     * An index code to identify an instance in a collection of like items.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The amount charged for an additional guest.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TotalType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The amount charged for an additional guest.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TotalType $amount
     * @return self
     */
    public function setAmount(\Devlabs91\TravelgateNotify\Models\Ota\TotalType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as addlGuestAmtDescription
     *
     * Descriptive information regarding amounts charged for additional guests.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $addlGuestAmtDescription
     */
    public function addToAddlGuestAmtDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $addlGuestAmtDescription)
    {
        $this->addlGuestAmtDescription[] = $addlGuestAmtDescription;
        return $this;
    }

    /**
     * isset addlGuestAmtDescription
     *
     * Descriptive information regarding amounts charged for additional guests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddlGuestAmtDescription($index)
    {
        return isset($this->addlGuestAmtDescription[$index]);
    }

    /**
     * unset addlGuestAmtDescription
     *
     * Descriptive information regarding amounts charged for additional guests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddlGuestAmtDescription($index)
    {
        unset($this->addlGuestAmtDescription[$index]);
    }

    /**
     * Gets as addlGuestAmtDescription
     *
     * Descriptive information regarding amounts charged for additional guests.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getAddlGuestAmtDescription()
    {
        return $this->addlGuestAmtDescription;
    }

    /**
     * Sets a new addlGuestAmtDescription
     *
     * Descriptive information regarding amounts charged for additional guests.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $addlGuestAmtDescription
     * @return self
     */
    public function setAddlGuestAmtDescription(array $addlGuestAmtDescription)
    {
        $this->addlGuestAmtDescription = $addlGuestAmtDescription;
        return $this;
    }


}

