<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType;

/**
 * Class representing MeetingRoomAType
 */
class MeetingRoomAType
{

    /**
     * This provides information as to whether the room has an irregular shape, if true the room would not be of a traditional square or rectangular style.
     *
     * @property bool $irregular
     */
    private $irregular = null;

    /**
     * This is the room name as it is defined by the system. The name used internally may differ from the name used by guests.
     *
     * @property string $propertySystemName
     */
    private $propertySystemName = null;

    /**
     * This is the meeting room name as provided to the guests.
     *
     * @property string $roomName
     */
    private $roomName = null;

    /**
     * This is a number assigned to rooms, usually used to define the display order.
     *
     * @property int $sort
     */
    private $sort = null;

    /**
     * The total number of people permitted in the meeting room.
     *
     * @property int $meetingRoomCapacity
     */
    private $meetingRoomCapacity = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property bool $removal
     */
    private $removal = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Used to imply the type of access to the meeting space (e.g. private access, public access, etc.)
     *
     * @property string $access
     */
    private $access = null;

    /**
     * Defines the type of the meeting room being described (eg. boardroom, ballroom, exhibit space). Refer to OpenTravel Codelist Meeting Room Format Code (MRF).
     *
     * @property string $meetingRoomTypeCode
     */
    private $meetingRoomTypeCode = null;

    /**
     * Defines the level in the facility where the meeting room is located (i.e., lobby, mezzanine, first floor, ground, outdoor, etc.)
     *
     * @property string $meetingRoomLevel
     */
    private $meetingRoomLevel = null;

    /**
     * When true, the room is used for a single purpose as indicated by the MeetingRoomTypeCode attribute.
     *
     * @property bool $dedicatedIndicator
     */
    private $dedicatedIndicator = null;

    /**
     * Codes or abbreviations for meeting rooms.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType[] $codes
     */
    private $codes = null;

    /**
     * Dimensions of the meeting room.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType\DimensionAType $dimension
     */
    private $dimension = null;

    /**
     * The amount of usable meeting space available at a property.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCapacityType[] $availableCapacities
     */
    private $availableCapacities = null;

    /**
     * Collection of features.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType[] $features
     */
    private $features = null;

    /**
     * Information describing the meeting room.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionsType $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Gets as irregular
     *
     * This provides information as to whether the room has an irregular shape, if true the room would not be of a traditional square or rectangular style.
     *
     * @return bool
     */
    public function getIrregular()
    {
        return $this->irregular;
    }

    /**
     * Sets a new irregular
     *
     * This provides information as to whether the room has an irregular shape, if true the room would not be of a traditional square or rectangular style.
     *
     * @param bool $irregular
     * @return self
     */
    public function setIrregular($irregular)
    {
        $this->irregular = $irregular;
        return $this;
    }

    /**
     * Gets as propertySystemName
     *
     * This is the room name as it is defined by the system. The name used internally may differ from the name used by guests.
     *
     * @return string
     */
    public function getPropertySystemName()
    {
        return $this->propertySystemName;
    }

    /**
     * Sets a new propertySystemName
     *
     * This is the room name as it is defined by the system. The name used internally may differ from the name used by guests.
     *
     * @param string $propertySystemName
     * @return self
     */
    public function setPropertySystemName($propertySystemName)
    {
        $this->propertySystemName = $propertySystemName;
        return $this;
    }

    /**
     * Gets as roomName
     *
     * This is the meeting room name as provided to the guests.
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * Sets a new roomName
     *
     * This is the meeting room name as provided to the guests.
     *
     * @param string $roomName
     * @return self
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;
        return $this;
    }

    /**
     * Gets as sort
     *
     * This is a number assigned to rooms, usually used to define the display order.
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
     * This is a number assigned to rooms, usually used to define the display order.
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
     * Gets as meetingRoomCapacity
     *
     * The total number of people permitted in the meeting room.
     *
     * @return int
     */
    public function getMeetingRoomCapacity()
    {
        return $this->meetingRoomCapacity;
    }

    /**
     * Sets a new meetingRoomCapacity
     *
     * The total number of people permitted in the meeting room.
     *
     * @param int $meetingRoomCapacity
     * @return self
     */
    public function setMeetingRoomCapacity($meetingRoomCapacity)
    {
        $this->meetingRoomCapacity = $meetingRoomCapacity;
        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return bool
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param bool $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;
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
     * Gets as access
     *
     * Used to imply the type of access to the meeting space (e.g. private access, public access, etc.)
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Sets a new access
     *
     * Used to imply the type of access to the meeting space (e.g. private access, public access, etc.)
     *
     * @param string $access
     * @return self
     */
    public function setAccess($access)
    {
        $this->access = $access;
        return $this;
    }

    /**
     * Gets as meetingRoomTypeCode
     *
     * Defines the type of the meeting room being described (eg. boardroom, ballroom, exhibit space). Refer to OpenTravel Codelist Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getMeetingRoomTypeCode()
    {
        return $this->meetingRoomTypeCode;
    }

    /**
     * Sets a new meetingRoomTypeCode
     *
     * Defines the type of the meeting room being described (eg. boardroom, ballroom, exhibit space). Refer to OpenTravel Codelist Meeting Room Format Code (MRF).
     *
     * @param string $meetingRoomTypeCode
     * @return self
     */
    public function setMeetingRoomTypeCode($meetingRoomTypeCode)
    {
        $this->meetingRoomTypeCode = $meetingRoomTypeCode;
        return $this;
    }

    /**
     * Gets as meetingRoomLevel
     *
     * Defines the level in the facility where the meeting room is located (i.e., lobby, mezzanine, first floor, ground, outdoor, etc.)
     *
     * @return string
     */
    public function getMeetingRoomLevel()
    {
        return $this->meetingRoomLevel;
    }

    /**
     * Sets a new meetingRoomLevel
     *
     * Defines the level in the facility where the meeting room is located (i.e., lobby, mezzanine, first floor, ground, outdoor, etc.)
     *
     * @param string $meetingRoomLevel
     * @return self
     */
    public function setMeetingRoomLevel($meetingRoomLevel)
    {
        $this->meetingRoomLevel = $meetingRoomLevel;
        return $this;
    }

    /**
     * Gets as dedicatedIndicator
     *
     * When true, the room is used for a single purpose as indicated by the MeetingRoomTypeCode attribute.
     *
     * @return bool
     */
    public function getDedicatedIndicator()
    {
        return $this->dedicatedIndicator;
    }

    /**
     * Sets a new dedicatedIndicator
     *
     * When true, the room is used for a single purpose as indicated by the MeetingRoomTypeCode attribute.
     *
     * @param bool $dedicatedIndicator
     * @return self
     */
    public function setDedicatedIndicator($dedicatedIndicator)
    {
        $this->dedicatedIndicator = $dedicatedIndicator;
        return $this;
    }

    /**
     * Adds as code
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType $code
     */
    public function addToCodes(\Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType $code)
    {
        $this->codes[] = $code;
        return $this;
    }

    /**
     * isset codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodes($index)
    {
        return isset($this->codes[$index]);
    }

    /**
     * unset codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodes($index)
    {
        unset($this->codes[$index]);
    }

    /**
     * Gets as codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType[]
     */
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * Sets a new codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType[] $codes
     * @return self
     */
    public function setCodes(array $codes)
    {
        $this->codes = $codes;
        return $this;
    }

    /**
     * Gets as dimension
     *
     * Dimensions of the meeting room.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType\DimensionAType
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Sets a new dimension
     *
     * Dimensions of the meeting room.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType\DimensionAType $dimension
     * @return self
     */
    public function setDimension(\Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType\DimensionAType $dimension)
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * Adds as meetingRoomCapacity
     *
     * The amount of usable meeting space available at a property.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCapacityType $meetingRoomCapacity
     */
    public function addToAvailableCapacities(\Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCapacityType $meetingRoomCapacity)
    {
        $this->availableCapacities[] = $meetingRoomCapacity;
        return $this;
    }

    /**
     * isset availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailableCapacities($index)
    {
        return isset($this->availableCapacities[$index]);
    }

    /**
     * unset availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailableCapacities($index)
    {
        unset($this->availableCapacities[$index]);
    }

    /**
     * Gets as availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCapacityType[]
     */
    public function getAvailableCapacities()
    {
        return $this->availableCapacities;
    }

    /**
     * Sets a new availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCapacityType[] $availableCapacities
     * @return self
     */
    public function setAvailableCapacities(array $availableCapacities)
    {
        $this->availableCapacities = $availableCapacities;
        return $this;
    }

    /**
     * Adds as feature
     *
     * Collection of features.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType $feature
     */
    public function addToFeatures(\Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType $feature)
    {
        $this->features[] = $feature;
        return $this;
    }

    /**
     * isset features
     *
     * Collection of features.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * Collection of features.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * Collection of features.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Collection of features.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Information describing the meeting room.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Information describing the meeting room.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionsType $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(\Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionsType $multimediaDescriptions)
    {
        $this->multimediaDescriptions = $multimediaDescriptions;
        return $this;
    }


}

