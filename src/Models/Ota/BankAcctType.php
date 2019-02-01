<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing BankAcctType
 *
 * Customer bank accounts for payments, either for paper checks or electronic funds transfer.
 * XSD Type: BankAcctType
 */
class BankAcctType
{

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Code assigned by authorities to financial institutions; sometimes called bank routing number.
     *
     * @property string $bankID
     */
    private $bankID = null;

    /**
     * Describes the bank account used for financing travel (e.g., checking, savings, investment).
     *
     * @property string $acctType
     */
    private $acctType = null;

    /**
     * Identifier for the account assigned by the bank.
     *
     * @property string $bankAcctNumber
     */
    private $bankAcctNumber = null;

    /**
     * If true, checks are accepted. If false, checks are not accepted.
     *
     * @property bool $checksAcceptedInd
     */
    private $checksAcceptedInd = null;

    /**
     * The name the account is held under.
     *
     * @property string $bankAcctName
     */
    private $bankAcctName = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as bankID
     *
     * Code assigned by authorities to financial institutions; sometimes called bank routing number.
     *
     * @return string
     */
    public function getBankID()
    {
        return $this->bankID;
    }

    /**
     * Sets a new bankID
     *
     * Code assigned by authorities to financial institutions; sometimes called bank routing number.
     *
     * @param string $bankID
     * @return self
     */
    public function setBankID($bankID)
    {
        $this->bankID = $bankID;
        return $this;
    }

    /**
     * Gets as acctType
     *
     * Describes the bank account used for financing travel (e.g., checking, savings, investment).
     *
     * @return string
     */
    public function getAcctType()
    {
        return $this->acctType;
    }

    /**
     * Sets a new acctType
     *
     * Describes the bank account used for financing travel (e.g., checking, savings, investment).
     *
     * @param string $acctType
     * @return self
     */
    public function setAcctType($acctType)
    {
        $this->acctType = $acctType;
        return $this;
    }

    /**
     * Gets as bankAcctNumber
     *
     * Identifier for the account assigned by the bank.
     *
     * @return string
     */
    public function getBankAcctNumber()
    {
        return $this->bankAcctNumber;
    }

    /**
     * Sets a new bankAcctNumber
     *
     * Identifier for the account assigned by the bank.
     *
     * @param string $bankAcctNumber
     * @return self
     */
    public function setBankAcctNumber($bankAcctNumber)
    {
        $this->bankAcctNumber = $bankAcctNumber;
        return $this;
    }

    /**
     * Gets as checksAcceptedInd
     *
     * If true, checks are accepted. If false, checks are not accepted.
     *
     * @return bool
     */
    public function getChecksAcceptedInd()
    {
        return $this->checksAcceptedInd;
    }

    /**
     * Sets a new checksAcceptedInd
     *
     * If true, checks are accepted. If false, checks are not accepted.
     *
     * @param bool $checksAcceptedInd
     * @return self
     */
    public function setChecksAcceptedInd($checksAcceptedInd)
    {
        $this->checksAcceptedInd = $checksAcceptedInd;
        return $this;
    }

    /**
     * Gets as bankAcctName
     *
     * The name the account is held under.
     *
     * @return string
     */
    public function getBankAcctName()
    {
        return $this->bankAcctName;
    }

    /**
     * Sets a new bankAcctName
     *
     * The name the account is held under.
     *
     * @param string $bankAcctName
     * @return self
     */
    public function setBankAcctName($bankAcctName)
    {
        $this->bankAcctName = $bankAcctName;
        return $this;
    }


}

