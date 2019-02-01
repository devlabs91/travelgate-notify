<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AgreementsType
 *
 * Section of a business profile that contains information about trading partner agreements.
 * XSD Type: AgreementsType
 */
class AgreementsType
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
     * Information about certifications or accreditations.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CertificationType[] $certification
     */
    private $certification = [
        
    ];

    /**
     * Information about alliance partnerships and consortiums.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType[] $allianceConsortium
     */
    private $allianceConsortium = [
        
    ];

    /**
     * Information about an agreement for a commission arrangement.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CommissionInfoType[] $commissionInfo
     */
    private $commissionInfo = [
        
    ];

    /**
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AgreementsType\ProfileSecurityAType[] $profileSecurity
     */
    private $profileSecurity = [
        
    ];

    /**
     * Used to reflect contract details linked to a profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $contractInformation
     */
    private $contractInformation = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Adds as certification
     *
     * Information about certifications or accreditations.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CertificationType $certification
     */
    public function addToCertification(\Devlabs91\TravelgateNotify\Models\Ota\CertificationType $certification)
    {
        $this->certification[] = $certification;
        return $this;
    }

    /**
     * isset certification
     *
     * Information about certifications or accreditations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertification($index)
    {
        return isset($this->certification[$index]);
    }

    /**
     * unset certification
     *
     * Information about certifications or accreditations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertification($index)
    {
        unset($this->certification[$index]);
    }

    /**
     * Gets as certification
     *
     * Information about certifications or accreditations.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CertificationType[]
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Sets a new certification
     *
     * Information about certifications or accreditations.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CertificationType[] $certification
     * @return self
     */
    public function setCertification(array $certification)
    {
        $this->certification = $certification;
        return $this;
    }

    /**
     * Adds as allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType $allianceConsortium
     */
    public function addToAllianceConsortium(\Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType $allianceConsortium)
    {
        $this->allianceConsortium[] = $allianceConsortium;
        return $this;
    }

    /**
     * isset allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllianceConsortium($index)
    {
        return isset($this->allianceConsortium[$index]);
    }

    /**
     * unset allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllianceConsortium($index)
    {
        unset($this->allianceConsortium[$index]);
    }

    /**
     * Gets as allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType[]
     */
    public function getAllianceConsortium()
    {
        return $this->allianceConsortium;
    }

    /**
     * Sets a new allianceConsortium
     *
     * Information about alliance partnerships and consortiums.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AllianceConsortiumType[] $allianceConsortium
     * @return self
     */
    public function setAllianceConsortium(array $allianceConsortium)
    {
        $this->allianceConsortium = $allianceConsortium;
        return $this;
    }

    /**
     * Adds as commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommissionInfoType $commissionInfo
     */
    public function addToCommissionInfo(\Devlabs91\TravelgateNotify\Models\Ota\CommissionInfoType $commissionInfo)
    {
        $this->commissionInfo[] = $commissionInfo;
        return $this;
    }

    /**
     * isset commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommissionInfo($index)
    {
        return isset($this->commissionInfo[$index]);
    }

    /**
     * unset commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommissionInfo($index)
    {
        unset($this->commissionInfo[$index]);
    }

    /**
     * Gets as commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CommissionInfoType[]
     */
    public function getCommissionInfo()
    {
        return $this->commissionInfo;
    }

    /**
     * Sets a new commissionInfo
     *
     * Information about an agreement for a commission arrangement.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommissionInfoType[] $commissionInfo
     * @return self
     */
    public function setCommissionInfo(array $commissionInfo)
    {
        $this->commissionInfo = $commissionInfo;
        return $this;
    }

    /**
     * Adds as profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AgreementsType\ProfileSecurityAType $profileSecurity
     */
    public function addToProfileSecurity(\Devlabs91\TravelgateNotify\Models\Ota\AgreementsType\ProfileSecurityAType $profileSecurity)
    {
        $this->profileSecurity[] = $profileSecurity;
        return $this;
    }

    /**
     * isset profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileSecurity($index)
    {
        return isset($this->profileSecurity[$index]);
    }

    /**
     * unset profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileSecurity($index)
    {
        unset($this->profileSecurity[$index]);
    }

    /**
     * Gets as profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AgreementsType\ProfileSecurityAType[]
     */
    public function getProfileSecurity()
    {
        return $this->profileSecurity;
    }

    /**
     * Sets a new profileSecurity
     *
     * Grants access rights on a single booking to offices other than the creator and responsible offices.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AgreementsType\ProfileSecurityAType[] $profileSecurity
     * @return self
     */
    public function setProfileSecurity(array $profileSecurity)
    {
        $this->profileSecurity = $profileSecurity;
        return $this;
    }

    /**
     * Gets as contractInformation
     *
     * Used to reflect contract details linked to a profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType
     */
    public function getContractInformation()
    {
        return $this->contractInformation;
    }

    /**
     * Sets a new contractInformation
     *
     * Used to reflect contract details linked to a profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $contractInformation
     * @return self
     */
    public function setContractInformation(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $contractInformation)
    {
        $this->contractInformation = $contractInformation;
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

