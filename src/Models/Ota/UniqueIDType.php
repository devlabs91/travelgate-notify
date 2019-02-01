<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing UniqueIDType
 *
 * An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
 * XSD Type: UniqueID_Type
 */
class UniqueIDType
{

    /**
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * A reference to the type of object defined by the UniqueID element. Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @property string $instance
     */
    private $instance = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @property string $iDContext
     */
    private $iDContext = null;

    /**
     * Identifies the company that is associated with the UniqueID.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * Gets as uRL
     *
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as type
     *
     * A reference to the type of object defined by the UniqueID element. Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A reference to the type of object defined by the UniqueID element. Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as instance
     *
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @param string $instance
     * @return self
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as iDContext
     *
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @return string
     */
    public function getIDContext()
    {
        return $this->iDContext;
    }

    /**
     * Sets a new iDContext
     *
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @param string $iDContext
     * @return self
     */
    public function setIDContext($iDContext)
    {
        $this->iDContext = $iDContext;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * Identifies the company that is associated with the UniqueID.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Identifies the company that is associated with the UniqueID.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }


}

