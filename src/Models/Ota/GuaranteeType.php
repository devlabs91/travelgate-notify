<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing GuaranteeType
 *
 * The guarantee information to hold a reservation
 * XSD Type: GuaranteeType
 */
class GuaranteeType
{

    /**
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @property string $retributionType
     */
    private $retributionType = null;

    /**
     * Guarantee Code
     *
     * @property string $guaranteeCode
     */
    private $guaranteeCode = null;

    /**
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @property string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * The room will held up until this time without a guarantee.
     *
     * @property \DateTime $holdTime
     */
    private $holdTime = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteesAccepted
     */
    private $guaranteesAccepted = null;

    /**
     * Guarantee deadline, absolute or relative.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\DeadlineAType $deadline
     */
    private $deadline = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * Text description of the Guarantee in a given language.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $guaranteeDescription
     */
    private $guaranteeDescription = [
        
    ];

    /**
     * Gets as retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @return string
     */
    public function getRetributionType()
    {
        return $this->retributionType;
    }

    /**
     * Sets a new retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @param string $retributionType
     * @return self
     */
    public function setRetributionType($retributionType)
    {
        $this->retributionType = $retributionType;
        return $this;
    }

    /**
     * Gets as guaranteeCode
     *
     * Guarantee Code
     *
     * @return string
     */
    public function getGuaranteeCode()
    {
        return $this->guaranteeCode;
    }

    /**
     * Sets a new guaranteeCode
     *
     * Guarantee Code
     *
     * @param string $guaranteeCode
     * @return self
     */
    public function setGuaranteeCode($guaranteeCode)
    {
        $this->guaranteeCode = $guaranteeCode;
        return $this;
    }

    /**
     * Gets as guaranteeType
     *
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;
        return $this;
    }

    /**
     * Gets as holdTime
     *
     * The room will held up until this time without a guarantee.
     *
     * @return \DateTime
     */
    public function getHoldTime()
    {
        return $this->holdTime;
    }

    /**
     * Sets a new holdTime
     *
     * The room will held up until this time without a guarantee.
     *
     * @param \DateTime $holdTime
     * @return self
     */
    public function setHoldTime(\DateTime $holdTime)
    {
        $this->holdTime = $holdTime;
        return $this;
    }

    /**
     * Adds as guaranteeAccepted
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
     */
    public function addToGuaranteesAccepted(\Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted)
    {
        $this->guaranteesAccepted[] = $guaranteeAccepted;
        return $this;
    }

    /**
     * isset guaranteesAccepted
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteesAccepted($index)
    {
        return isset($this->guaranteesAccepted[$index]);
    }

    /**
     * unset guaranteesAccepted
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteesAccepted($index)
    {
        unset($this->guaranteesAccepted[$index]);
    }

    /**
     * Gets as guaranteesAccepted
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     */
    public function getGuaranteesAccepted()
    {
        return $this->guaranteesAccepted;
    }

    /**
     * Sets a new guaranteesAccepted
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteesAccepted
     * @return self
     */
    public function setGuaranteesAccepted(array $guaranteesAccepted)
    {
        $this->guaranteesAccepted = $guaranteesAccepted;
        return $this;
    }

    /**
     * Gets as deadline
     *
     * Guarantee deadline, absolute or relative.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\DeadlineAType
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Guarantee deadline, absolute or relative.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\DeadlineAType $deadline
     * @return self
     */
    public function setDeadline(\Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\DeadlineAType $deadline)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * Adds as comment
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType $comment
     */
    public function addToComments(\Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $guaranteeDescription
     */
    public function addToGuaranteeDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $guaranteeDescription)
    {
        $this->guaranteeDescription[] = $guaranteeDescription;
        return $this;
    }

    /**
     * isset guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteeDescription($index)
    {
        return isset($this->guaranteeDescription[$index]);
    }

    /**
     * unset guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteeDescription($index)
    {
        unset($this->guaranteeDescription[$index]);
    }

    /**
     * Gets as guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getGuaranteeDescription()
    {
        return $this->guaranteeDescription;
    }

    /**
     * Sets a new guaranteeDescription
     *
     * Text description of the Guarantee in a given language.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $guaranteeDescription
     * @return self
     */
    public function setGuaranteeDescription(array $guaranteeDescription)
    {
        $this->guaranteeDescription = $guaranteeDescription;
        return $this;
    }


}

