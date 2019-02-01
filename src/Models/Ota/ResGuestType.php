<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing ResGuestType
 *
 * A collection of ResGuest objects, identifying the guests associated with this reservation. Which guests are in which room is determined by each RoomStays ResGuestRPHs collection.
 * XSD Type: ResGuestType
 */
class ResGuestType
{

    /**
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service.
     *
     * @property string $resGuestRPH
     */
    private $resGuestRPH = null;

    /**
     * A code representing a business rule that determines the charges for a guest based upon age rannge (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * This represents the date and time of the guest's arrival at the hotel. For example, this could be used to indicate a late arrival.
     *
     * @property \DateTime $arrivalTime
     */
    private $arrivalTime = null;

    /**
     * This represents the date and time of the guest's departure from the hotel.
     *
     * @property \DateTime $departureTime
     */
    private $departureTime = null;

    /**
     * The identification of a group meeting or convention. Used to track a guest who is part of an inventory block (e.g.: group), and can be used for a pick-up when the guest calls in to reserve a room as part of the block. Whether this is taken from inventory depends upon the InventoryBlockCode in the Room Stay class. This code is associated with a group or event as agreed between two parties.
     *
     * @property string $groupEventCode
     */
    private $groupEventCode = null;

    /**
     * Guest is VIP indicator.
     *
     * @property bool $vIP
     */
    private $vIP = null;

    /**
     * When true indicates this is the primary guest.
     *
     * @property bool $primaryIndicator
     */
    private $primaryIndicator = null;

    /**
     * The age of the guest.
     *
     * @property int $age
     */
    private $age = null;

    /**
     * Code used to identify a location.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * The action being taken on the guest entry.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType[] $specialRequests
     */
    private $specialRequests = null;

    /**
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     */
    private $serviceRPHs = null;

    /**
     * Collection of ProfileRPH.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ResGuestType\ProfileRPHsAType\ProfileRPHAType[] $profileRPHs
     */
    private $profileRPHs = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType $arrivalTransport
     */
    private $arrivalTransport = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType $departureTransport
     */
    private $departureTransport = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $inHouseTimeSpan
     */
    private $inHouseTimeSpan = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as resGuestRPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service.
     *
     * @return string
     */
    public function getResGuestRPH()
    {
        return $this->resGuestRPH;
    }

    /**
     * Sets a new resGuestRPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service.
     *
     * @param string $resGuestRPH
     * @return self
     */
    public function setResGuestRPH($resGuestRPH)
    {
        $this->resGuestRPH = $resGuestRPH;
        return $this;
    }

    /**
     * Gets as ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest based upon age rannge (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
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
     * A code representing a business rule that determines the charges for a guest based upon age rannge (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
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
     * Gets as arrivalTime
     *
     * This represents the date and time of the guest's arrival at the hotel. For example, this could be used to indicate a late arrival.
     *
     * @return \DateTime
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * Sets a new arrivalTime
     *
     * This represents the date and time of the guest's arrival at the hotel. For example, this could be used to indicate a late arrival.
     *
     * @param \DateTime $arrivalTime
     * @return self
     */
    public function setArrivalTime(\DateTime $arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
        return $this;
    }

    /**
     * Gets as departureTime
     *
     * This represents the date and time of the guest's departure from the hotel.
     *
     * @return \DateTime
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * Sets a new departureTime
     *
     * This represents the date and time of the guest's departure from the hotel.
     *
     * @param \DateTime $departureTime
     * @return self
     */
    public function setDepartureTime(\DateTime $departureTime)
    {
        $this->departureTime = $departureTime;
        return $this;
    }

    /**
     * Gets as groupEventCode
     *
     * The identification of a group meeting or convention. Used to track a guest who is part of an inventory block (e.g.: group), and can be used for a pick-up when the guest calls in to reserve a room as part of the block. Whether this is taken from inventory depends upon the InventoryBlockCode in the Room Stay class. This code is associated with a group or event as agreed between two parties.
     *
     * @return string
     */
    public function getGroupEventCode()
    {
        return $this->groupEventCode;
    }

    /**
     * Sets a new groupEventCode
     *
     * The identification of a group meeting or convention. Used to track a guest who is part of an inventory block (e.g.: group), and can be used for a pick-up when the guest calls in to reserve a room as part of the block. Whether this is taken from inventory depends upon the InventoryBlockCode in the Room Stay class. This code is associated with a group or event as agreed between two parties.
     *
     * @param string $groupEventCode
     * @return self
     */
    public function setGroupEventCode($groupEventCode)
    {
        $this->groupEventCode = $groupEventCode;
        return $this;
    }

    /**
     * Gets as vIP
     *
     * Guest is VIP indicator.
     *
     * @return bool
     */
    public function getVIP()
    {
        return $this->vIP;
    }

    /**
     * Sets a new vIP
     *
     * Guest is VIP indicator.
     *
     * @param bool $vIP
     * @return self
     */
    public function setVIP($vIP)
    {
        $this->vIP = $vIP;
        return $this;
    }

    /**
     * Gets as primaryIndicator
     *
     * When true indicates this is the primary guest.
     *
     * @return bool
     */
    public function getPrimaryIndicator()
    {
        return $this->primaryIndicator;
    }

    /**
     * Sets a new primaryIndicator
     *
     * When true indicates this is the primary guest.
     *
     * @param bool $primaryIndicator
     * @return self
     */
    public function setPrimaryIndicator($primaryIndicator)
    {
        $this->primaryIndicator = $primaryIndicator;
        return $this;
    }

    /**
     * Gets as age
     *
     * The age of the guest.
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
     * The age of the guest.
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
     * Gets as locationCode
     *
     * Code used to identify a location.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Code used to identify a location.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *  IATA
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as action
     *
     * The action being taken on the guest entry.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * The action being taken on the guest entry.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType $specialRequest
     */
    public function addToSpecialRequests(\Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType $specialRequest)
    {
        $this->specialRequests[] = $specialRequest;
        return $this;
    }

    /**
     * isset specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRequests($index)
    {
        return isset($this->specialRequests[$index]);
    }

    /**
     * unset specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRequests($index)
    {
        unset($this->specialRequests[$index]);
    }

    /**
     * Gets as specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequests()
    {
        return $this->specialRequests;
    }

    /**
     * Sets a new specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType[] $specialRequests
     * @return self
     */
    public function setSpecialRequests(array $specialRequests)
    {
        $this->specialRequests = $specialRequests;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType $comment
     */
    public function addToComments(\Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as serviceRPH
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType $serviceRPH
     */
    public function addToServiceRPHs(\Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType $serviceRPH)
    {
        $this->serviceRPHs[] = $serviceRPH;
        return $this;
    }

    /**
     * isset serviceRPHs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceRPHs($index)
    {
        return isset($this->serviceRPHs[$index]);
    }

    /**
     * unset serviceRPHs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceRPHs($index)
    {
        unset($this->serviceRPHs[$index]);
    }

    /**
     * Gets as serviceRPHs
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType[]
     */
    public function getServiceRPHs()
    {
        return $this->serviceRPHs;
    }

    /**
     * Sets a new serviceRPHs
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     * @return self
     */
    public function setServiceRPHs(array $serviceRPHs)
    {
        $this->serviceRPHs = $serviceRPHs;
        return $this;
    }

    /**
     * Adds as profileRPH
     *
     * Collection of ProfileRPH.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ResGuestType\ProfileRPHsAType\ProfileRPHAType $profileRPH
     */
    public function addToProfileRPHs(\Devlabs91\TravelgateNotify\Models\Ota\ResGuestType\ProfileRPHsAType\ProfileRPHAType $profileRPH)
    {
        $this->profileRPHs[] = $profileRPH;
        return $this;
    }

    /**
     * isset profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileRPHs($index)
    {
        return isset($this->profileRPHs[$index]);
    }

    /**
     * unset profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileRPHs($index)
    {
        unset($this->profileRPHs[$index]);
    }

    /**
     * Gets as profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ResGuestType\ProfileRPHsAType\ProfileRPHAType[]
     */
    public function getProfileRPHs()
    {
        return $this->profileRPHs;
    }

    /**
     * Sets a new profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ResGuestType\ProfileRPHsAType\ProfileRPHAType[] $profileRPHs
     * @return self
     */
    public function setProfileRPHs(array $profileRPHs)
    {
        $this->profileRPHs = $profileRPHs;
        return $this;
    }

    /**
     * Gets as arrivalTransport
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType
     */
    public function getArrivalTransport()
    {
        return $this->arrivalTransport;
    }

    /**
     * Sets a new arrivalTransport
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType $arrivalTransport
     * @return self
     */
    public function setArrivalTransport(\Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType $arrivalTransport)
    {
        $this->arrivalTransport = $arrivalTransport;
        return $this;
    }

    /**
     * Gets as departureTransport
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType
     */
    public function getDepartureTransport()
    {
        return $this->departureTransport;
    }

    /**
     * Sets a new departureTransport
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType $departureTransport
     * @return self
     */
    public function setDepartureTransport(\Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType $departureTransport)
    {
        $this->departureTransport = $departureTransport;
        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(\Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Gets as inHouseTimeSpan
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType
     */
    public function getInHouseTimeSpan()
    {
        return $this->inHouseTimeSpan;
    }

    /**
     * Sets a new inHouseTimeSpan
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $inHouseTimeSpan
     * @return self
     */
    public function setInHouseTimeSpan(\Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $inHouseTimeSpan)
    {
        $this->inHouseTimeSpan = $inHouseTimeSpan;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }


}

