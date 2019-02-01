<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelResRequestType
 *
 * This is a request message for creating a reservation. It is used by HotelResRQ and HotelResNotifRQ to keep them synchronized.
 * XSD Type: HotelResRequestType
 */
class HotelResRequestType
{

    /**
     * A reference for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @property string $echoToken
     */
    private $echoToken = null;

    /**
     * Indicates the creation date and time of the message in UTC using the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z).
     *
     * @property \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * Used to indicate whether the request is for the Test or Production system.
     *  Production
     *
     * @property string $target
     */
    private $target = null;

    /**
     * For all OpenTravel versioned messages, the version of the message is indicated by a decimal value.
     *
     * @property float $version
     */
    private $version = null;

    /**
     * A unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @property string $transactionIdentifier
     */
    private $transactionIdentifier = null;

    /**
     * Used to identify the sequence number of the transaction as assigned by the sending system; allows for an application to process messages in a certain order or to request a resynchronization of messages in the event that a system has been off-line and needs to retrieve messages that were missed.
     *
     * @property int $sequenceNmbr
     */
    private $sequenceNmbr = null;

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @property string $transactionStatusCode
     */
    private $transactionStatusCode = null;

    /**
     * Identifes the primary language preference for the message. The human language is identified by ISO 639 codes.
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * Identifies the alternate language for a customer or message. The human language is identified by ISO 639 codes.
     *
     * @property string $altLangID
     */
    private $altLangID = null;

    /**
     * When true, indicates the message is being re-sent after a failure. It is recommended that this attribute is used (i.e., set to TRUE) only when a message is retransmitted.
     *
     * @property bool $retransmissionIndicator
     */
    private $retransmissionIndicator = null;

    /**
     * Allow end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     *
     * @property string $correlationID
     */
    private $correlationID = null;

    /**
     * Indicates the status of the reservation represented by the message.
     *
     * @property string $resStatus
     */
    private $resStatus = null;

    /**
     * The period from the date and time the reservation was booked until the hold on the inventory is released.
     *
     * @property \DateInterval $holdDuration
     */
    private $holdDuration = null;

    /**
     * The point-of-sale data, contained in the POS element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     */
    private $uniqueID = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationsType $hotelReservations
     */
    private $hotelReservations = null;

    /**
     * Gets as echoToken
     *
     * A reference for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @return string
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * Sets a new echoToken
     *
     * A reference for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @param string $echoToken
     * @return self
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;
        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * Indicates the creation date and time of the message in UTC using the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z).
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * Indicates the creation date and time of the message in UTC using the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z).
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }

    /**
     * Gets as target
     *
     * Used to indicate whether the request is for the Test or Production system.
     *  Production
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Used to indicate whether the request is for the Test or Production system.
     *  Production
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as version
     *
     * For all OpenTravel versioned messages, the version of the message is indicated by a decimal value.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * For all OpenTravel versioned messages, the version of the message is indicated by a decimal value.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as transactionIdentifier
     *
     * A unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets a new transactionIdentifier
     *
     * A unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @param string $transactionIdentifier
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->transactionIdentifier = $transactionIdentifier;
        return $this;
    }

    /**
     * Gets as sequenceNmbr
     *
     * Used to identify the sequence number of the transaction as assigned by the sending system; allows for an application to process messages in a certain order or to request a resynchronization of messages in the event that a system has been off-line and needs to retrieve messages that were missed.
     *
     * @return int
     */
    public function getSequenceNmbr()
    {
        return $this->sequenceNmbr;
    }

    /**
     * Sets a new sequenceNmbr
     *
     * Used to identify the sequence number of the transaction as assigned by the sending system; allows for an application to process messages in a certain order or to request a resynchronization of messages in the event that a system has been off-line and needs to retrieve messages that were missed.
     *
     * @param int $sequenceNmbr
     * @return self
     */
    public function setSequenceNmbr($sequenceNmbr)
    {
        $this->sequenceNmbr = $sequenceNmbr;
        return $this;
    }

    /**
     * Gets as transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @return string
     */
    public function getTransactionStatusCode()
    {
        return $this->transactionStatusCode;
    }

    /**
     * Sets a new transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @param string $transactionStatusCode
     * @return self
     */
    public function setTransactionStatusCode($transactionStatusCode)
    {
        $this->transactionStatusCode = $transactionStatusCode;
        return $this;
    }

    /**
     * Gets as primaryLangID
     *
     * Identifes the primary language preference for the message. The human language is identified by ISO 639 codes.
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * Identifes the primary language preference for the message. The human language is identified by ISO 639 codes.
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;
        return $this;
    }

    /**
     * Gets as altLangID
     *
     * Identifies the alternate language for a customer or message. The human language is identified by ISO 639 codes.
     *
     * @return string
     */
    public function getAltLangID()
    {
        return $this->altLangID;
    }

    /**
     * Sets a new altLangID
     *
     * Identifies the alternate language for a customer or message. The human language is identified by ISO 639 codes.
     *
     * @param string $altLangID
     * @return self
     */
    public function setAltLangID($altLangID)
    {
        $this->altLangID = $altLangID;
        return $this;
    }

    /**
     * Gets as retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure. It is recommended that this attribute is used (i.e., set to TRUE) only when a message is retransmitted.
     *
     * @return bool
     */
    public function getRetransmissionIndicator()
    {
        return $this->retransmissionIndicator;
    }

    /**
     * Sets a new retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure. It is recommended that this attribute is used (i.e., set to TRUE) only when a message is retransmitted.
     *
     * @param bool $retransmissionIndicator
     * @return self
     */
    public function setRetransmissionIndicator($retransmissionIndicator)
    {
        $this->retransmissionIndicator = $retransmissionIndicator;
        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Allow end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Allow end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Gets as resStatus
     *
     * Indicates the status of the reservation represented by the message.
     *
     * @return string
     */
    public function getResStatus()
    {
        return $this->resStatus;
    }

    /**
     * Sets a new resStatus
     *
     * Indicates the status of the reservation represented by the message.
     *
     * @param string $resStatus
     * @return self
     */
    public function setResStatus($resStatus)
    {
        $this->resStatus = $resStatus;
        return $this;
    }

    /**
     * Gets as holdDuration
     *
     * The period from the date and time the reservation was booked until the hold on the inventory is released.
     *
     * @return \DateInterval
     */
    public function getHoldDuration()
    {
        return $this->holdDuration;
    }

    /**
     * Sets a new holdDuration
     *
     * The period from the date and time the reservation was booked until the hold on the inventory is released.
     *
     * @param \DateInterval $holdDuration
     * @return self
     */
    public function setHoldDuration(\DateInterval $holdDuration)
    {
        $this->holdDuration = $holdDuration;
        return $this;
    }

    /**
     * Adds as source
     *
     * The point-of-sale data, contained in the POS element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SourceType $source
     */
    public function addToPOS(\Devlabs91\TravelgateNotify\Models\Ota\SourceType $source)
    {
        $this->pOS[] = $source;
        return $this;
    }

    /**
     * isset pOS
     *
     * The point-of-sale data, contained in the POS element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * The point-of-sale data, contained in the POS element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * The point-of-sale data, contained in the POS element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * The point-of-sale data, contained in the POS element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;
        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as hotelReservations
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationsType
     */
    public function getHotelReservations()
    {
        return $this->hotelReservations;
    }

    /**
     * Sets a new hotelReservations
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationsType $hotelReservations
     * @return self
     */
    public function setHotelReservations(\Devlabs91\TravelgateNotify\Models\Ota\HotelReservationsType $hotelReservations)
    {
        $this->hotelReservations = $hotelReservations;
        return $this;
    }


}

