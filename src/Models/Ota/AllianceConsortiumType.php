<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AllianceConsortiumType
 *
 * Provides information about alliance partnerships and consortiums of members grouped together to obtain trading partner agreements for travel service and privileges.
 * XSD Type: AllianceConsortiumType
 */
class AllianceConsortiumType
{

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @property string $iD
     */
    private $iD = null;

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
     * Identification of a company that participates in an alliance or consortium to which the primary business entity identified in this profile belongs.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType\AllianceMemberAType[] $allianceMember
     */
    private $allianceMember = [
        
    ];

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
     * Adds as allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to which the primary business entity identified in this profile belongs.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType\AllianceMemberAType $allianceMember
     */
    public function addToAllianceMember(\Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType\AllianceMemberAType $allianceMember)
    {
        $this->allianceMember[] = $allianceMember;
        return $this;
    }

    /**
     * isset allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to which the primary business entity identified in this profile belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllianceMember($index)
    {
        return isset($this->allianceMember[$index]);
    }

    /**
     * unset allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to which the primary business entity identified in this profile belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllianceMember($index)
    {
        unset($this->allianceMember[$index]);
    }

    /**
     * Gets as allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to which the primary business entity identified in this profile belongs.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType\AllianceMemberAType[]
     */
    public function getAllianceMember()
    {
        return $this->allianceMember;
    }

    /**
     * Sets a new allianceMember
     *
     * Identification of a company that participates in an alliance or consortium to which the primary business entity identified in this profile belongs.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType\AllianceMemberAType[] $allianceMember
     * @return self
     */
    public function setAllianceMember(array $allianceMember)
    {
        $this->allianceMember = $allianceMember;
        return $this;
    }


}

