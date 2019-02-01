<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleAvailVendorInfoType
 *
 * The VehicleAvailVendorInfoType complex type identifies the data that describes supplemental information relevant to a vendor and made available at the time that availability and rates are checked.
 * XSD Type: VehicleAvailVendorInfoType
 */
class VehicleAvailVendorInfoType
{

    /**
     * A collection of free-format messages associated with this vendor.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType[] $offLocServices
     */
    private $offLocServices = [
        
    ];

    /**
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType[] $locationDetails
     */
    private $locationDetails = [
        
    ];

    /**
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType\TourInfoAType $tourInfo
     */
    private $tourInfo = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as vendorMessage
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;
        return $this;
    }

    /**
     * Adds as offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType $offLocServices
     */
    public function addToOffLocServices(\Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType $offLocServices)
    {
        $this->offLocServices[] = $offLocServices;
        return $this;
    }

    /**
     * isset offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffLocServices($index)
    {
        return isset($this->offLocServices[$index]);
    }

    /**
     * unset offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffLocServices($index)
    {
        unset($this->offLocServices[$index]);
    }

    /**
     * Gets as offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType[]
     */
    public function getOffLocServices()
    {
        return $this->offLocServices;
    }

    /**
     * Sets a new offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServicePricedType[] $offLocServices
     * @return self
     */
    public function setOffLocServices(array $offLocServices)
    {
        $this->offLocServices = $offLocServices;
        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules)
    {
        $this->paymentRules = $paymentRules;
        return $this;
    }

    /**
     * Adds as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType $locationDetails
     */
    public function addToLocationDetails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType $locationDetails)
    {
        $this->locationDetails[] = $locationDetails;
        return $this;
    }

    /**
     * isset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationDetails($index)
    {
        return isset($this->locationDetails[$index]);
    }

    /**
     * unset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationDetails($index)
    {
        unset($this->locationDetails[$index]);
    }

    /**
     * Gets as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType[]
     */
    public function getLocationDetails()
    {
        return $this->locationDetails;
    }

    /**
     * Sets a new locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationDetailsType[] $locationDetails
     * @return self
     */
    public function setLocationDetails(array $locationDetails)
    {
        $this->locationDetails = $locationDetails;
        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType\TourInfoAType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType\TourInfoAType $tourInfo
     * @return self
     */
    public function setTourInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType\TourInfoAType $tourInfo)
    {
        $this->tourInfo = $tourInfo;
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

