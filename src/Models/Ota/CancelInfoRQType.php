<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CancelInfoRQType
 *
 * Identifies the common, or core, information associated with the request for cancellation of a reservation or other type of record.
 * XSD Type: CancelInfoRQType
 */
class CancelInfoRQType
{

    /**
     * Used to specify if this is to initiate a cancellation or to commit the cancellation.
     *
     * @property string $cancelType
     */
    private $cancelType = null;

    /**
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     */
    private $uniqueID = [
        
    ];

    /**
     * The person's name in a reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Gets as cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the cancellation.
     *
     * @return string
     */
    public function getCancelType()
    {
        return $this->cancelType;
    }

    /**
     * Sets a new cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the cancellation.
     *
     * @param string $cancelType
     * @return self
     */
    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;
        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as personName
     *
     * The person's name in a reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * The person's name in a reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName)
    {
        $this->personName = $personName;
        return $this;
    }


}

