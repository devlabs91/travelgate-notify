<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TravelClubType
 *
 * Identifies a travel club that offers special privileges and related services.
 * XSD Type: TravelClubType
 */
class TravelClubType
{

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property bool $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * Name of the travel club.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $travelClubName
     */
    private $travelClubName = null;

    /**
     * Name information for the club member.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TravelClubType\ClubMemberNameAType $clubMemberName
     */
    private $clubMemberName = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->expireDateExclusiveIndicator;
    }

    /**
     * Sets a new expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveIndicator
     * @return self
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
    {
        $this->expireDateExclusiveIndicator = $expireDateExclusiveIndicator;
        return $this;
    }

    /**
     * Gets as travelClubName
     *
     * Name of the travel club.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType
     */
    public function getTravelClubName()
    {
        return $this->travelClubName;
    }

    /**
     * Sets a new travelClubName
     *
     * Name of the travel club.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $travelClubName
     * @return self
     */
    public function setTravelClubName(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $travelClubName)
    {
        $this->travelClubName = $travelClubName;
        return $this;
    }

    /**
     * Gets as clubMemberName
     *
     * Name information for the club member.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TravelClubType\ClubMemberNameAType
     */
    public function getClubMemberName()
    {
        return $this->clubMemberName;
    }

    /**
     * Sets a new clubMemberName
     *
     * Name information for the club member.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelClubType\ClubMemberNameAType $clubMemberName
     * @return self
     */
    public function setClubMemberName(\Devlabs91\TravelgateNotify\Models\Ota\TravelClubType\ClubMemberNameAType $clubMemberName)
    {
        $this->clubMemberName = $clubMemberName;
        return $this;
    }


}

