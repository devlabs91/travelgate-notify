<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing ProfileType
 *
 * Root element for profile content.
 * XSD Type: ProfileType
 */
class ProfileType
{

    /**
     * Permission for sharing all data in profile for synchronization of profiles held by other travel service providers.
     *  No
     *
     * @property string $shareAllSynchInd
     */
    private $shareAllSynchInd = null;

    /**
     * Permission for sharing all data in profile for marketing purposes.
     *  No
     *
     * @property string $shareAllMarketInd
     */
    private $shareAllMarketInd = null;

    /**
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc. Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @property string $profileType
     */
    private $profileType = null;

    /**
     * Time stamp of the creation.
     *
     * @property \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @property string $creatorID
     */
    private $creatorID = null;

    /**
     * Time stamp of last modification.
     *
     * @property \DateTime $lastModifyDateTime
     */
    private $lastModifyDateTime = null;

    /**
     * Identifies the last software system or person to modify a record.
     *
     * @property string $lastModifierID
     */
    private $lastModifierID = null;

    /**
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @property \DateTime $purgeDate
     */
    private $purgeDate = null;

    /**
     * This is a reference placeholder, used as an index for this guest in this reservation.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @property string[] $statusCode
     */
    private $statusCode = null;

    /**
     * A collection of actions taken on a record.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AccessesType $accesses
     */
    private $accesses = null;

    /**
     * Detailed customer information for this profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CustomerType $customer
     */
    private $customer = null;

    /**
     * The user ids and pin numbers of the profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\UserIDAType[] $userID
     */
    private $userID = [
        
    ];

    /**
     * A collection of preference collections.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PreferencesType $prefCollections
     */
    private $prefCollections = null;

    /**
     * Company information related to the profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType $companyInfo
     */
    private $companyInfo = null;

    /**
     * Affiliation information related to the profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AffiliationsType $affiliations
     */
    private $affiliations = null;

    /**
     * Agreement information related to the profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AgreementsType $agreements
     */
    private $agreements = null;

    /**
     * Comments related to the profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\CommentsAType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareAllSynchInd
     *
     * Permission for sharing all data in profile for synchronization of profiles held by other travel service providers.
     *  No
     *
     * @return string
     */
    public function getShareAllSynchInd()
    {
        return $this->shareAllSynchInd;
    }

    /**
     * Sets a new shareAllSynchInd
     *
     * Permission for sharing all data in profile for synchronization of profiles held by other travel service providers.
     *  No
     *
     * @param string $shareAllSynchInd
     * @return self
     */
    public function setShareAllSynchInd($shareAllSynchInd)
    {
        $this->shareAllSynchInd = $shareAllSynchInd;
        return $this;
    }

    /**
     * Gets as shareAllMarketInd
     *
     * Permission for sharing all data in profile for marketing purposes.
     *  No
     *
     * @return string
     */
    public function getShareAllMarketInd()
    {
        return $this->shareAllMarketInd;
    }

    /**
     * Sets a new shareAllMarketInd
     *
     * Permission for sharing all data in profile for marketing purposes.
     *  No
     *
     * @param string $shareAllMarketInd
     * @return self
     */
    public function setShareAllMarketInd($shareAllMarketInd)
    {
        $this->shareAllMarketInd = $shareAllMarketInd;
        return $this;
    }

    /**
     * Gets as profileType
     *
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc. Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc. Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * Time stamp of the creation.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Time stamp of the creation.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;
        return $this;
    }

    /**
     * Gets as creatorID
     *
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @return string
     */
    public function getCreatorID()
    {
        return $this->creatorID;
    }

    /**
     * Sets a new creatorID
     *
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @param string $creatorID
     * @return self
     */
    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;
        return $this;
    }

    /**
     * Gets as lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @return \DateTime
     */
    public function getLastModifyDateTime()
    {
        return $this->lastModifyDateTime;
    }

    /**
     * Sets a new lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @param \DateTime $lastModifyDateTime
     * @return self
     */
    public function setLastModifyDateTime(\DateTime $lastModifyDateTime)
    {
        $this->lastModifyDateTime = $lastModifyDateTime;
        return $this;
    }

    /**
     * Gets as lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @return string
     */
    public function getLastModifierID()
    {
        return $this->lastModifierID;
    }

    /**
     * Sets a new lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @param string $lastModifierID
     * @return self
     */
    public function setLastModifierID($lastModifierID)
    {
        $this->lastModifierID = $lastModifierID;
        return $this;
    }

    /**
     * Gets as purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @return \DateTime
     */
    public function getPurgeDate()
    {
        return $this->purgeDate;
    }

    /**
     * Sets a new purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @param \DateTime $purgeDate
     * @return self
     */
    public function setPurgeDate(\DateTime $purgeDate)
    {
        $this->purgeDate = $purgeDate;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation.
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
     * This is a reference placeholder, used as an index for this guest in this reservation.
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
     * Adds as statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @return self
     * @param string $statusCode
     */
    public function addToStatusCode($statusCode)
    {
        $this->statusCode[] = $statusCode;
        return $this;
    }

    /**
     * isset statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusCode($index)
    {
        return isset($this->statusCode[$index]);
    }

    /**
     * unset statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusCode($index)
    {
        unset($this->statusCode[$index]);
    }

    /**
     * Gets as statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @return string[]
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode(array $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Gets as accesses
     *
     * A collection of actions taken on a record.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AccessesType
     */
    public function getAccesses()
    {
        return $this->accesses;
    }

    /**
     * Sets a new accesses
     *
     * A collection of actions taken on a record.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AccessesType $accesses
     * @return self
     */
    public function setAccesses(\Devlabs91\TravelgateNotify\Models\Ota\AccessesType $accesses)
    {
        $this->accesses = $accesses;
        return $this;
    }

    /**
     * Gets as customer
     *
     * Detailed customer information for this profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CustomerType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Detailed customer information for this profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CustomerType $customer
     * @return self
     */
    public function setCustomer(\Devlabs91\TravelgateNotify\Models\Ota\CustomerType $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Adds as userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\UserIDAType $userID
     */
    public function addToUserID(\Devlabs91\TravelgateNotify\Models\Ota\ProfileType\UserIDAType $userID)
    {
        $this->userID[] = $userID;
        return $this;
    }

    /**
     * isset userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserID($index)
    {
        return isset($this->userID[$index]);
    }

    /**
     * unset userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserID($index)
    {
        unset($this->userID[$index]);
    }

    /**
     * Gets as userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\UserIDAType[]
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\UserIDAType[] $userID
     * @return self
     */
    public function setUserID(array $userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as prefCollections
     *
     * A collection of preference collections.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PreferencesType
     */
    public function getPrefCollections()
    {
        return $this->prefCollections;
    }

    /**
     * Sets a new prefCollections
     *
     * A collection of preference collections.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PreferencesType $prefCollections
     * @return self
     */
    public function setPrefCollections(\Devlabs91\TravelgateNotify\Models\Ota\PreferencesType $prefCollections)
    {
        $this->prefCollections = $prefCollections;
        return $this;
    }

    /**
     * Gets as companyInfo
     *
     * Company information related to the profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Sets a new companyInfo
     *
     * Company information related to the profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType $companyInfo
     * @return self
     */
    public function setCompanyInfo(\Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType $companyInfo)
    {
        $this->companyInfo = $companyInfo;
        return $this;
    }

    /**
     * Gets as affiliations
     *
     * Affiliation information related to the profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AffiliationsType
     */
    public function getAffiliations()
    {
        return $this->affiliations;
    }

    /**
     * Sets a new affiliations
     *
     * Affiliation information related to the profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AffiliationsType $affiliations
     * @return self
     */
    public function setAffiliations(\Devlabs91\TravelgateNotify\Models\Ota\AffiliationsType $affiliations)
    {
        $this->affiliations = $affiliations;
        return $this;
    }

    /**
     * Gets as agreements
     *
     * Agreement information related to the profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AgreementsType
     */
    public function getAgreements()
    {
        return $this->agreements;
    }

    /**
     * Sets a new agreements
     *
     * Agreement information related to the profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AgreementsType $agreements
     * @return self
     */
    public function setAgreements(\Devlabs91\TravelgateNotify\Models\Ota\AgreementsType $agreements)
    {
        $this->agreements = $agreements;
        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments related to the profile.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\CommentsAType\CommentAType $comment
     */
    public function addToComments(\Devlabs91\TravelgateNotify\Models\Ota\ProfileType\CommentsAType\CommentAType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * Comments related to the profile.
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
     * Comments related to the profile.
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
     * Comments related to the profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\CommentsAType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Comments related to the profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfileType\CommentsAType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;
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

