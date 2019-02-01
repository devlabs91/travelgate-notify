<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VerificationType
 *
 * Collection of data used to ensure the correct reservation is canceled or modified (e.g. in the case of a hotel reservation modification, a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
 * XSD Type: VerificationType
 */
class VerificationType
{

    /**
     * Detailed name information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\PersonNameAType $personName
     */
    private $personName = null;

    /**
     * Information on an email address.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\EmailType $email
     */
    private $email = null;

    /**
     * Information on a telephone number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\TelephoneInfoAType $telephoneInfo
     */
    private $telephoneInfo = null;

    /**
     * Payment Card information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard
     */
    private $paymentCard = null;

    /**
     * Detailed information on an address.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $addressInfo
     */
    private $addressInfo = null;

    /**
     * Loyalty program information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\CustLoyaltyAType[] $custLoyalty
     */
    private $custLoyalty = [
        
    ];

    /**
     * Vendor or vendors associated with the reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[] $vendor
     */
    private $vendor = [
        
    ];

    /**
     * The start and end date of the reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\ReservationTimeSpanAType $reservationTimeSpan
     */
    private $reservationTimeSpan = null;

    /**
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\AssociatedQuantityAType[] $associatedQuantity
     */
    private $associatedQuantity = [
        
    ];

    /**
     * Start location associated with the reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\StartLocationAType $startLocation
     */
    private $startLocation = null;

    /**
     * End location associated with the reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\EndLocationAType $endLocation
     */
    private $endLocation = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as personName
     *
     * Detailed name information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\PersonNameAType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Detailed name information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\PersonNameAType $personName
     * @return self
     */
    public function setPersonName(\Devlabs91\TravelgateNotify\Models\Ota\VerificationType\PersonNameAType $personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as email
     *
     * Information on an email address.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Information on an email address.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\EmailType $email
     * @return self
     */
    public function setEmail(\Devlabs91\TravelgateNotify\Models\Ota\EmailType $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as telephoneInfo
     *
     * Information on a telephone number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\TelephoneInfoAType
     */
    public function getTelephoneInfo()
    {
        return $this->telephoneInfo;
    }

    /**
     * Sets a new telephoneInfo
     *
     * Information on a telephone number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\TelephoneInfoAType $telephoneInfo
     * @return self
     */
    public function setTelephoneInfo(\Devlabs91\TravelgateNotify\Models\Ota\VerificationType\TelephoneInfoAType $telephoneInfo)
    {
        $this->telephoneInfo = $telephoneInfo;
        return $this;
    }

    /**
     * Gets as paymentCard
     *
     * Payment Card information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * Payment Card information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard
     * @return self
     */
    public function setPaymentCard(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard)
    {
        $this->paymentCard = $paymentCard;
        return $this;
    }

    /**
     * Gets as addressInfo
     *
     * Detailed information on an address.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType
     */
    public function getAddressInfo()
    {
        return $this->addressInfo;
    }

    /**
     * Sets a new addressInfo
     *
     * Detailed information on an address.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $addressInfo
     * @return self
     */
    public function setAddressInfo(\Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $addressInfo)
    {
        $this->addressInfo = $addressInfo;
        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Loyalty program information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Devlabs91\TravelgateNotify\Models\Ota\VerificationType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;
        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Loyalty program information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Loyalty program information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Loyalty program information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Loyalty program information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;
        return $this;
    }

    /**
     * Adds as vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor
     */
    public function addToVendor(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor)
    {
        $this->vendor[] = $vendor;
        return $this;
    }

    /**
     * isset vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendor($index)
    {
        return isset($this->vendor[$index]);
    }

    /**
     * unset vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendor($index)
    {
        unset($this->vendor[$index]);
    }

    /**
     * Gets as vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[]
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Vendor or vendors associated with the reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[] $vendor
     * @return self
     */
    public function setVendor(array $vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as reservationTimeSpan
     *
     * The start and end date of the reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\ReservationTimeSpanAType
     */
    public function getReservationTimeSpan()
    {
        return $this->reservationTimeSpan;
    }

    /**
     * Sets a new reservationTimeSpan
     *
     * The start and end date of the reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\ReservationTimeSpanAType $reservationTimeSpan
     * @return self
     */
    public function setReservationTimeSpan(\Devlabs91\TravelgateNotify\Models\Ota\VerificationType\ReservationTimeSpanAType $reservationTimeSpan)
    {
        $this->reservationTimeSpan = $reservationTimeSpan;
        return $this;
    }

    /**
     * Adds as associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\AssociatedQuantityAType $associatedQuantity
     */
    public function addToAssociatedQuantity(\Devlabs91\TravelgateNotify\Models\Ota\VerificationType\AssociatedQuantityAType $associatedQuantity)
    {
        $this->associatedQuantity[] = $associatedQuantity;
        return $this;
    }

    /**
     * isset associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssociatedQuantity($index)
    {
        return isset($this->associatedQuantity[$index]);
    }

    /**
     * unset associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssociatedQuantity($index)
    {
        unset($this->associatedQuantity[$index]);
    }

    /**
     * Gets as associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\AssociatedQuantityAType[]
     */
    public function getAssociatedQuantity()
    {
        return $this->associatedQuantity;
    }

    /**
     * Sets a new associatedQuantity
     *
     * Quantity or quantities that are associated with the reservation (e.g., number of seats, number of rooms, number of people).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\AssociatedQuantityAType[] $associatedQuantity
     * @return self
     */
    public function setAssociatedQuantity(array $associatedQuantity)
    {
        $this->associatedQuantity = $associatedQuantity;
        return $this;
    }

    /**
     * Gets as startLocation
     *
     * Start location associated with the reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\StartLocationAType
     */
    public function getStartLocation()
    {
        return $this->startLocation;
    }

    /**
     * Sets a new startLocation
     *
     * Start location associated with the reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\StartLocationAType $startLocation
     * @return self
     */
    public function setStartLocation(\Devlabs91\TravelgateNotify\Models\Ota\VerificationType\StartLocationAType $startLocation)
    {
        $this->startLocation = $startLocation;
        return $this;
    }

    /**
     * Gets as endLocation
     *
     * End location associated with the reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\EndLocationAType
     */
    public function getEndLocation()
    {
        return $this->endLocation;
    }

    /**
     * Sets a new endLocation
     *
     * End location associated with the reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VerificationType\EndLocationAType $endLocation
     * @return self
     */
    public function setEndLocation(\Devlabs91\TravelgateNotify\Models\Ota\VerificationType\EndLocationAType $endLocation)
    {
        $this->endLocation = $endLocation;
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

