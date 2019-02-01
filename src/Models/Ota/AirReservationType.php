<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AirReservationType
 *
 * Contains all booking response information pertaining to a completed reservation.
 * XSD Type: AirReservationType
 */
class AirReservationType
{

    /**
     * Specifies the date the reservation was last modified.
     *
     * @property \DateTime $lastModified
     */
    private $lastModified = null;

    /**
     * A collection of all flight segments requested for booking.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Pricing information for the air itinerary to be booked e.g. this data could come from the OTA_AirPriceRS data.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BookingPriceInfoType $priceInfo
     */
    private $priceInfo = null;

    /**
     * All traveler information relevant to a booking request.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType $travelerInfo
     */
    private $travelerInfo = null;

    /**
     * All payment information relevant to a booking request.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType $fulfillment
     */
    private $fulfillment = null;

    /**
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TicketingInfoType[] $ticketing
     */
    private $ticketing = [
        
    ];

    /**
     * A container for queue information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType[] $queues
     */
    private $queues = null;

    /**
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\BookingReferenceIDAType[] $bookingReferenceID
     */
    private $bookingReferenceID = [
        
    ];

    /**
     * Textual information for the reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextTextType $comment
     */
    private $comment = null;

    /**
     * Information applicable to the pricing of the reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\PricingOverviewAType $pricingOverview
     */
    private $pricingOverview = null;

    /**
     * Gets as lastModified
     *
     * Specifies the date the reservation was last modified.
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Sets a new lastModified
     *
     * Specifies the date the reservation was last modified.
     *
     * @param \DateTime $lastModified
     * @return self
     */
    public function setLastModified(\DateTime $lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Gets as airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(\Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType $airItinerary)
    {
        $this->airItinerary = $airItinerary;
        return $this;
    }

    /**
     * Gets as priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come from the OTA_AirPriceRS data.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BookingPriceInfoType
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come from the OTA_AirPriceRS data.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BookingPriceInfoType $priceInfo
     * @return self
     */
    public function setPriceInfo(\Devlabs91\TravelgateNotify\Models\Ota\BookingPriceInfoType $priceInfo)
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    /**
     * Gets as travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType
     */
    public function getTravelerInfo()
    {
        return $this->travelerInfo;
    }

    /**
     * Sets a new travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType $travelerInfo
     * @return self
     */
    public function setTravelerInfo(\Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType $travelerInfo)
    {
        $this->travelerInfo = $travelerInfo;
        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType $fulfillment
     * @return self
     */
    public function setFulfillment(\Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }

    /**
     * Adds as ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TicketingInfoType $ticketing
     */
    public function addToTicketing(\Devlabs91\TravelgateNotify\Models\Ota\TicketingInfoType $ticketing)
    {
        $this->ticketing[] = $ticketing;
        return $this;
    }

    /**
     * isset ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketing($index)
    {
        return isset($this->ticketing[$index]);
    }

    /**
     * unset ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketing($index)
    {
        unset($this->ticketing[$index]);
    }

    /**
     * Gets as ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TicketingInfoType[]
     */
    public function getTicketing()
    {
        return $this->ticketing;
    }

    /**
     * Sets a new ticketing
     *
     * Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TicketingInfoType[] $ticketing
     * @return self
     */
    public function setTicketing(array $ticketing)
    {
        $this->ticketing = $ticketing;
        return $this;
    }

    /**
     * Adds as queue
     *
     * A container for queue information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType $queue
     */
    public function addToQueues(\Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType $queue)
    {
        $this->queues[] = $queue;
        return $this;
    }

    /**
     * isset queues
     *
     * A container for queue information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQueues($index)
    {
        return isset($this->queues[$index]);
    }

    /**
     * unset queues
     *
     * A container for queue information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQueues($index)
    {
        unset($this->queues[$index]);
    }

    /**
     * Gets as queues
     *
     * A container for queue information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType[]
     */
    public function getQueues()
    {
        return $this->queues;
    }

    /**
     * Sets a new queues
     *
     * A container for queue information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType[] $queues
     * @return self
     */
    public function setQueues(array $queues)
    {
        $this->queues = $queues;
        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\BookingReferenceIDAType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\BookingReferenceIDAType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;
        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\BookingReferenceIDAType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * Optional field available for use by trading partners as determined by their needs.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\BookingReferenceIDAType[] $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Textual information for the reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextTextType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Textual information for the reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextTextType $comment
     * @return self
     */
    public function setComment(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextTextType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as pricingOverview
     *
     * Information applicable to the pricing of the reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\PricingOverviewAType
     */
    public function getPricingOverview()
    {
        return $this->pricingOverview;
    }

    /**
     * Sets a new pricingOverview
     *
     * Information applicable to the pricing of the reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\PricingOverviewAType $pricingOverview
     * @return self
     */
    public function setPricingOverview(\Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\PricingOverviewAType $pricingOverview)
    {
        $this->pricingOverview = $pricingOverview;
        return $this;
    }


}

