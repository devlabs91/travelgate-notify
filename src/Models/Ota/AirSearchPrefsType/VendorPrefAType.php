<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirSearchPrefsType;

use Devlabs91\TravelgateNotify\Models\Ota\CompanyNamePrefType;

/**
 * Class representing VendorPrefAType
 */
class VendorPrefAType extends CompanyNamePrefType
{

    /**
     * When true, flights for other airlines in an alliance with the specified carrier code may be returned.
     *
     * @property bool $allianceAllowedInd
     */
    private $allianceAllowedInd = null;

    /**
     * When true, flights for other airlines in a loyalty program with the specified carrier code may be returned.
     *
     * @property bool $loyaltyAllowedInd
     */
    private $loyaltyAllowedInd = null;

    /**
     * Gets as allianceAllowedInd
     *
     * When true, flights for other airlines in an alliance with the specified carrier code may be returned.
     *
     * @return bool
     */
    public function getAllianceAllowedInd()
    {
        return $this->allianceAllowedInd;
    }

    /**
     * Sets a new allianceAllowedInd
     *
     * When true, flights for other airlines in an alliance with the specified carrier code may be returned.
     *
     * @param bool $allianceAllowedInd
     * @return self
     */
    public function setAllianceAllowedInd($allianceAllowedInd)
    {
        $this->allianceAllowedInd = $allianceAllowedInd;
        return $this;
    }

    /**
     * Gets as loyaltyAllowedInd
     *
     * When true, flights for other airlines in a loyalty program with the specified carrier code may be returned.
     *
     * @return bool
     */
    public function getLoyaltyAllowedInd()
    {
        return $this->loyaltyAllowedInd;
    }

    /**
     * Sets a new loyaltyAllowedInd
     *
     * When true, flights for other airlines in a loyalty program with the specified carrier code may be returned.
     *
     * @param bool $loyaltyAllowedInd
     * @return self
     */
    public function setLoyaltyAllowedInd($loyaltyAllowedInd)
    {
        $this->loyaltyAllowedInd = $loyaltyAllowedInd;
        return $this;
    }


}

