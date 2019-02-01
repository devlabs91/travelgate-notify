<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing StayInfoType
 *
 * The StayInfo class contains the guest revenue and stay data to be sent to the central server.
 * XSD Type: StayInfoType
 */
class StayInfoType
{

    /**
     * Used to sequence the guest revenue blocks of data used to verify transmission.
     *
     * @property int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * @property int $roomStayRPH
     */
    private $roomStayRPH = null;

    /**
     * A collection of loyalty points accruals.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[] $loyaltyPointsAccruals
     */
    private $loyaltyPointsAccruals = null;

    /**
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType[] $revenueCategories
     */
    private $revenueCategories = null;

    /**
     * The confirmation number of the reservation associated with the stay.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $reservationID
     */
    private $reservationID = null;

    /**
     * Contains the reservation details associated with the stay information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $hotelReservation
     */
    private $hotelReservation = null;

    /**
     * Gets as sequenceNumber
     *
     * Used to sequence the guest revenue blocks of data used to verify transmission.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * Used to sequence the guest revenue blocks of data used to verify transmission.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as roomStayRPH
     *
     * @return int
     */
    public function getRoomStayRPH()
    {
        return $this->roomStayRPH;
    }

    /**
     * Sets a new roomStayRPH
     *
     * @param int $roomStayRPH
     * @return self
     */
    public function setRoomStayRPH($roomStayRPH)
    {
        $this->roomStayRPH = $roomStayRPH;
        return $this;
    }

    /**
     * Adds as selectedLoyalty
     *
     * A collection of loyalty points accruals.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPointsAccrualsType\SelectedLoyaltyAType $selectedLoyalty
     */
    public function addToLoyaltyPointsAccruals(\Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPointsAccrualsType\SelectedLoyaltyAType $selectedLoyalty)
    {
        $this->loyaltyPointsAccruals[] = $selectedLoyalty;
        return $this;
    }

    /**
     * isset loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyPointsAccruals($index)
    {
        return isset($this->loyaltyPointsAccruals[$index]);
    }

    /**
     * unset loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyPointsAccruals($index)
    {
        unset($this->loyaltyPointsAccruals[$index]);
    }

    /**
     * Gets as loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[]
     */
    public function getLoyaltyPointsAccruals()
    {
        return $this->loyaltyPointsAccruals;
    }

    /**
     * Sets a new loyaltyPointsAccruals
     *
     * A collection of loyalty points accruals.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[] $loyaltyPointsAccruals
     * @return self
     */
    public function setLoyaltyPointsAccruals(array $loyaltyPointsAccruals)
    {
        $this->loyaltyPointsAccruals = $loyaltyPointsAccruals;
        return $this;
    }

    /**
     * Adds as revenueCategory
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType $revenueCategory
     */
    public function addToRevenueCategories(\Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType $revenueCategory)
    {
        $this->revenueCategories[] = $revenueCategory;
        return $this;
    }

    /**
     * isset revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueCategories($index)
    {
        return isset($this->revenueCategories[$index]);
    }

    /**
     * unset revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueCategories($index)
    {
        unset($this->revenueCategories[$index]);
    }

    /**
     * Gets as revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType[]
     */
    public function getRevenueCategories()
    {
        return $this->revenueCategories;
    }

    /**
     * Sets a new revenueCategories
     *
     * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType[] $revenueCategories
     * @return self
     */
    public function setRevenueCategories(array $revenueCategories)
    {
        $this->revenueCategories = $revenueCategories;
        return $this;
    }

    /**
     * Gets as reservationID
     *
     * The confirmation number of the reservation associated with the stay.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * The confirmation number of the reservation associated with the stay.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $reservationID
     * @return self
     */
    public function setReservationID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    /**
     * Gets as hotelReservation
     *
     * Contains the reservation details associated with the stay information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * Contains the reservation details associated with the stay information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $hotelReservation
     * @return self
     */
    public function setHotelReservation(\Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $hotelReservation)
    {
        $this->hotelReservation = $hotelReservation;
        return $this;
    }


}

