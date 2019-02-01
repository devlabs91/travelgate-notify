<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing ErrorType
 *
 * Standard way to indicate that an error occurred during the processing of an OpenTravel message. If the message successfully processes, but there are business errors, those errors should be passed in the warning element.
 * XSD Type: ErrorType
 */
class ErrorType extends FreeTextType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $shortText
     */
    private $shortText = null;

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as type
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
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as shortText
     *
     * @return string
     */
    public function getShortText()
    {
        return $this->shortText;
    }

    /**
     * Sets a new shortText
     *
     * @param string $shortText
     * @return self
     */
    public function setShortText($shortText)
    {
        $this->shortText = $shortText;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


}

