<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RevenueDetailType
 *
 * The RevenueDetail class contains line item detail about specific revenue transactions.
 * XSD Type: RevenueDetailType
 */
class RevenueDetailType
{

    /**
     * @property string $referenceID
     */
    private $referenceID = null;

    /**
     * @property \DateTime $transactionDate
     */
    private $transactionDate = null;

    /**
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $pMSRevenueCode
     */
    private $pMSRevenueCode = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
     *
     * @property string[] $folioIDs
     */
    private $folioIDs = null;

    /**
     * Gets as referenceID
     *
     * @return string
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * @param string $referenceID
     * @return self
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as transactionDate
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Sets a new transactionDate
     *
     * @param \DateTime $transactionDate
     * @return self
     */
    public function setTransactionDate(\DateTime $transactionDate)
    {
        $this->transactionDate = $transactionDate;
        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as pMSRevenueCode
     *
     * @return string
     */
    public function getPMSRevenueCode()
    {
        return $this->pMSRevenueCode;
    }

    /**
     * Sets a new pMSRevenueCode
     *
     * @param string $pMSRevenueCode
     * @return self
     */
    public function setPMSRevenueCode($pMSRevenueCode)
    {
        $this->pMSRevenueCode = $pMSRevenueCode;
        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Adds as folioID
     *
     * Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
     *
     * @return self
     * @param string $folioID
     */
    public function addToFolioIDs($folioID)
    {
        $this->folioIDs[] = $folioID;
        return $this;
    }

    /**
     * isset folioIDs
     *
     * Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFolioIDs($index)
    {
        return isset($this->folioIDs[$index]);
    }

    /**
     * unset folioIDs
     *
     * Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFolioIDs($index)
    {
        unset($this->folioIDs[$index]);
    }

    /**
     * Gets as folioIDs
     *
     * Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
     *
     * @return string[]
     */
    public function getFolioIDs()
    {
        return $this->folioIDs;
    }

    /**
     * Sets a new folioIDs
     *
     * Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
     *
     * @param string $folioIDs
     * @return self
     */
    public function setFolioIDs(array $folioIDs)
    {
        $this->folioIDs = $folioIDs;
        return $this;
    }


}

