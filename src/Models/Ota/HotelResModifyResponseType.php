<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelResModifyResponseType
 *
 * This is the response message for a full overlay modification to a reservation. The response could be as simple as indicating the modification was made or as complex as echoing back all reservation information.
 * XSD Type: HotelResModifyResponseType
 */
class HotelResModifyResponseType
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
     * @property string $resResponseType
     */
    private $resResponseType = null;

    /**
     * Point of sale object.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SuccessType $success
     */
    private $success = null;

    /**
     * This is a place to list any non-fatal errors.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * A collection of reservations which have been modified.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType $hotelResModifies
     */
    private $hotelResModifies = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ErrorType[] $errors
     */
    private $errors = null;

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
     * Gets as resResponseType
     *
     * @return string
     */
    public function getResResponseType()
    {
        return $this->resResponseType;
    }

    /**
     * Sets a new resResponseType
     *
     * @param string $resResponseType
     * @return self
     */
    public function setResResponseType($resResponseType)
    {
        $this->resResponseType = $resResponseType;
        return $this;
    }

    /**
     * Adds as source
     *
     * Point of sale object.
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
     * Point of sale object.
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
     * Point of sale object.
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
     * Point of sale object.
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
     * Point of sale object.
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
     * Gets as success
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SuccessType
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SuccessType $success
     * @return self
     */
    public function setSuccess(\Devlabs91\TravelgateNotify\Models\Ota\SuccessType $success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Adds as warning
     *
     * This is a place to list any non-fatal errors.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\WarningType $warning
     */
    public function addToWarnings(\Devlabs91\TravelgateNotify\Models\Ota\WarningType $warning)
    {
        $this->warnings[] = $warning;
        return $this;
    }

    /**
     * isset warnings
     *
     * This is a place to list any non-fatal errors.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * This is a place to list any non-fatal errors.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * This is a place to list any non-fatal errors.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * This is a place to list any non-fatal errors.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;
        return $this;
    }

    /**
     * Gets as hotelResModifies
     *
     * A collection of reservations which have been modified.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType
     */
    public function getHotelResModifies()
    {
        return $this->hotelResModifies;
    }

    /**
     * Sets a new hotelResModifies
     *
     * A collection of reservations which have been modified.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType $hotelResModifies
     * @return self
     */
    public function setHotelResModifies(\Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType $hotelResModifies)
    {
        $this->hotelResModifies = $hotelResModifies;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ErrorType $error
     */
    public function addToErrors(\Devlabs91\TravelgateNotify\Models\Ota\ErrorType $error)
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}

