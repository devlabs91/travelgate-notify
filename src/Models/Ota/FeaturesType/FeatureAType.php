<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\FeaturesType;

/**
 * Class representing FeatureAType
 */
class FeatureAType
{

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property bool $removal
     */
    private $removal = null;

    /**
     * Refer to OpenTravel Code List Physically Challenged Feature Code (PHY). For any of the codes which apply to a room count, use the GuestRoom\@Quantity. Additionally, GuestRoom\@RoomTypeName may be used to pass the specific room type or you could pass "all" or "total" to indicate the AccessibleCode applies to the total hotel.
     *
     * @property string $accessibleCode
     */
    private $accessibleCode = null;

    /**
     * Refer to OpenTravel Code List Security Feature Code (SEC).
     *
     * @property string $securityCode
     */
    private $securityCode = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Codelist Option Type Code (OTC). This is used in conjunction with AccessibleCode or SecurityCode.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * Denotes the general location of a feature. Refer to OpenTravel Codelist Proximity (PRX).
     *
     * @property string $proximityCode
     */
    private $proximityCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Indicates whether this feature is chargeable.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType\ChargeAType $charge
     */
    private $charge = null;

    /**
     * Multimedia information about the feature.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionsType $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the feature.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;
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
     * Gets as accessibleCode
     *
     * Refer to OpenTravel Code List Physically Challenged Feature Code (PHY). For any of the codes which apply to a room count, use the GuestRoom\@Quantity. Additionally, GuestRoom\@RoomTypeName may be used to pass the specific room type or you could pass "all" or "total" to indicate the AccessibleCode applies to the total hotel.
     *
     * @return string
     */
    public function getAccessibleCode()
    {
        return $this->accessibleCode;
    }

    /**
     * Sets a new accessibleCode
     *
     * Refer to OpenTravel Code List Physically Challenged Feature Code (PHY). For any of the codes which apply to a room count, use the GuestRoom\@Quantity. Additionally, GuestRoom\@RoomTypeName may be used to pass the specific room type or you could pass "all" or "total" to indicate the AccessibleCode applies to the total hotel.
     *
     * @param string $accessibleCode
     * @return self
     */
    public function setAccessibleCode($accessibleCode)
    {
        $this->accessibleCode = $accessibleCode;
        return $this;
    }

    /**
     * Gets as securityCode
     *
     * Refer to OpenTravel Code List Security Feature Code (SEC).
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Sets a new securityCode
     *
     * Refer to OpenTravel Code List Security Feature Code (SEC).
     *
     * @param string $securityCode
     * @return self
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Codelist Option Type Code (OTC). This is used in conjunction with AccessibleCode or SecurityCode.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Codelist Option Type Code (OTC). This is used in conjunction with AccessibleCode or SecurityCode.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;
        return $this;
    }

    /**
     * Gets as proximityCode
     *
     * Denotes the general location of a feature. Refer to OpenTravel Codelist Proximity (PRX).
     *
     * @return string
     */
    public function getProximityCode()
    {
        return $this->proximityCode;
    }

    /**
     * Sets a new proximityCode
     *
     * Denotes the general location of a feature. Refer to OpenTravel Codelist Proximity (PRX).
     *
     * @param string $proximityCode
     * @return self
     */
    public function setProximityCode($proximityCode)
    {
        $this->proximityCode = $proximityCode;
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
     * Gets as charge
     *
     * Indicates whether this feature is chargeable.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType\ChargeAType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Indicates whether this feature is chargeable.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType\ChargeAType $charge
     * @return self
     */
    public function setCharge(\Devlabs91\TravelgateNotify\Models\Ota\FeaturesType\FeatureAType\ChargeAType $charge)
    {
        $this->charge = $charge;
        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the feature.
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
     * Multimedia information about the feature.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionsType $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(\Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionsType $multimediaDescriptions)
    {
        $this->multimediaDescriptions = $multimediaDescriptions;
        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the feature.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the feature.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;
        return $this;
    }


}

