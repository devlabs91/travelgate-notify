<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentAdditionalInfoType;

/**
 * Class representing VendorMessagesAType
 */
class VendorMessagesAType
{

    /**
     * A specific vendor message associated with this reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType[] $vendorMessage
     */
    private $vendorMessage = [
        
    ];

    /**
     * Adds as vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $vendorMessage
     */
    public function addToVendorMessage(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $vendorMessage)
    {
        $this->vendorMessage[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessage($index)
    {
        return isset($this->vendorMessage[$index]);
    }

    /**
     * unset vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessage($index)
    {
        unset($this->vendorMessage[$index]);
    }

    /**
     * Gets as vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType[]
     */
    public function getVendorMessage()
    {
        return $this->vendorMessage;
    }

    /**
     * Sets a new vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType[] $vendorMessage
     * @return self
     */
    public function setVendorMessage(array $vendorMessage)
    {
        $this->vendorMessage = $vendorMessage;
        return $this;
    }


}

