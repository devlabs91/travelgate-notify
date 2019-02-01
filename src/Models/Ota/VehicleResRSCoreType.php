<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleResRSCoreType
 *
 * The VehicleResRSCoreType complex type identifies the core, or common, information that is associated with the reservation of a vehicle.
 * XSD Type: VehicleResRSCoreType
 */
class VehicleResRSCoreType
{

    /**
     * Represents the vehicle rental reservation that was successfully created.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationType $vehReservation
     */
    private $vehReservation = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as vehReservation
     *
     * Represents the vehicle rental reservation that was successfully created.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationType
     */
    public function getVehReservation()
    {
        return $this->vehReservation;
    }

    /**
     * Sets a new vehReservation
     *
     * Represents the vehicle rental reservation that was successfully created.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationType $vehReservation
     * @return self
     */
    public function setVehReservation(\Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationType $vehReservation)
    {
        $this->vehReservation = $vehReservation;
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

