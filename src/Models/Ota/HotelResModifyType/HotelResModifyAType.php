<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType;

use Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType;

/**
 * Class representing HotelResModifyAType
 */
class HotelResModifyAType extends HotelReservationType
{

    /**
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType\VerificationAType[] $verification
     */
    private $verification = [
        
    ];

    /**
     * Adds as verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType\VerificationAType $verification
     */
    public function addToVerification(\Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType\VerificationAType $verification)
    {
        $this->verification[] = $verification;
        return $this;
    }

    /**
     * isset verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerification($index)
    {
        return isset($this->verification[$index]);
    }

    /**
     * unset verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerification($index)
    {
        unset($this->verification[$index]);
    }

    /**
     * Gets as verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType\VerificationAType[]
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType\VerificationAType[] $verification
     * @return self
     */
    public function setVerification(array $verification)
    {
        $this->verification = $verification;
        return $this;
    }


}

