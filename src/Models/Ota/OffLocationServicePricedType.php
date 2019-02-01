<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing OffLocationServicePricedType
 *
 * The OffLocationServicePricedType complex type describes the data that is used to describe a priced off-location service, that is, an off-location service and the corresponding charge.
 * XSD Type: OffLocationServicePricedType
 */
class OffLocationServicePricedType
{

    /**
     * Information on a specific off-airport service, for example, vehicle delivery, customer pickup.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType $offLocService
     */
    private $offLocService = null;

    /**
     * Charge information associated with this specific off-airport service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Gets as offLocService
     *
     * Information on a specific off-airport service, for example, vehicle delivery, customer pickup.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on a specific off-airport service, for example, vehicle delivery, customer pickup.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType $offLocService
     * @return self
     */
    public function setOffLocService(\Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType $offLocService)
    {
        $this->offLocService = $offLocService;
        return $this;
    }

    /**
     * Gets as charge
     *
     * Charge information associated with this specific off-airport service.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Charge information associated with this specific off-airport service.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge)
    {
        $this->charge = $charge;
        return $this;
    }


}

