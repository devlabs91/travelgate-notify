<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing ResCommonDetailType
 *
 * A grouping of elements including Guest Counts, Time Span, pointers to Res Guests, guest Memberships, Comments and Special Requests and finally finacial information including Guarantee, Deposit and Payyment and Cancellation Penalties.
 * XSD Type: ResCommonDetailType
 */
class ResCommonDetailType
{

    /**
     * A collection of Guest Counts associated to the whole Reservation or a particular Room Stay or Service. A child Guest Count element is required for each distict age group.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * The Time Span which covers the Reservation, Room Stay or Service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ResCommonDetailType\TimeSpanAType $timeSpan
     */
    private $timeSpan = null;

    /**
     * A collection of ResGuestRPH objects.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ResGuestRPHsType\ResGuestRPHAType[] $resGuestRPHs
     */
    private $resGuestRPHs = null;

    /**
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MembershipType\MembershipAType[] $memberships
     */
    private $memberships = null;

    /**
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType[] $specialRequests
     */
    private $specialRequests = null;

    /**
     * The guarantee information associated to the Reservation or a particular Room Stay or Service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guarantee
     */
    private $guarantee = null;

    /**
     * A collection of deposit and/or payments.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayments
     */
    private $depositPayments = null;

    /**
     * A collection of Cancellation Penalties objects.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType $cancelPenalties
     */
    private $cancelPenalties = null;

    /**
     * A collection of fees that applies to the reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FeeType[] $fees
     */
    private $fees = null;

    /**
     * The total amount charged for the accommodation including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TotalType $total
     */
    private $total = null;

    /**
     * Gets as guestCounts
     *
     * A collection of Guest Counts associated to the whole Reservation or a particular Room Stay or Service. A child Guest Count element is required for each distict age group.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * A collection of Guest Counts associated to the whole Reservation or a particular Room Stay or Service. A child Guest Count element is required for each distict age group.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(\Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Gets as timeSpan
     *
     * The Time Span which covers the Reservation, Room Stay or Service.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ResCommonDetailType\TimeSpanAType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * The Time Span which covers the Reservation, Room Stay or Service.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ResCommonDetailType\TimeSpanAType $timeSpan
     * @return self
     */
    public function setTimeSpan(\Devlabs91\TravelgateNotify\Models\Ota\ResCommonDetailType\TimeSpanAType $timeSpan)
    {
        $this->timeSpan = $timeSpan;
        return $this;
    }

    /**
     * Adds as resGuestRPH
     *
     * A collection of ResGuestRPH objects.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ResGuestRPHsType\ResGuestRPHAType $resGuestRPH
     */
    public function addToResGuestRPHs(\Devlabs91\TravelgateNotify\Models\Ota\ResGuestRPHsType\ResGuestRPHAType $resGuestRPH)
    {
        $this->resGuestRPHs[] = $resGuestRPH;
        return $this;
    }

    /**
     * isset resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResGuestRPHs($index)
    {
        return isset($this->resGuestRPHs[$index]);
    }

    /**
     * unset resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResGuestRPHs($index)
    {
        unset($this->resGuestRPHs[$index]);
    }

    /**
     * Gets as resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ResGuestRPHsType\ResGuestRPHAType[]
     */
    public function getResGuestRPHs()
    {
        return $this->resGuestRPHs;
    }

    /**
     * Sets a new resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ResGuestRPHsType\ResGuestRPHAType[] $resGuestRPHs
     * @return self
     */
    public function setResGuestRPHs(array $resGuestRPHs)
    {
        $this->resGuestRPHs = $resGuestRPHs;
        return $this;
    }

    /**
     * Adds as membership
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MembershipType\MembershipAType $membership
     */
    public function addToMemberships(\Devlabs91\TravelgateNotify\Models\Ota\MembershipType\MembershipAType $membership)
    {
        $this->memberships[] = $membership;
        return $this;
    }

    /**
     * isset memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMemberships($index)
    {
        return isset($this->memberships[$index]);
    }

    /**
     * unset memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMemberships($index)
    {
        unset($this->memberships[$index]);
    }

    /**
     * Gets as memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MembershipType\MembershipAType[]
     */
    public function getMemberships()
    {
        return $this->memberships;
    }

    /**
     * Sets a new memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MembershipType\MembershipAType[] $memberships
     * @return self
     */
    public function setMemberships(array $memberships)
    {
        $this->memberships = $memberships;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
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
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
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
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
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
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
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
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
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
     * Adds as specialRequest
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType $specialRequest
     */
    public function addToSpecialRequests(\Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType $specialRequest)
    {
        $this->specialRequests[] = $specialRequest;
        return $this;
    }

    /**
     * isset specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRequests($index)
    {
        return isset($this->specialRequests[$index]);
    }

    /**
     * unset specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRequests($index)
    {
        unset($this->specialRequests[$index]);
    }

    /**
     * Gets as specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequests()
    {
        return $this->specialRequests;
    }

    /**
     * Sets a new specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRequestType\SpecialRequestAType[] $specialRequests
     * @return self
     */
    public function setSpecialRequests(array $specialRequests)
    {
        $this->specialRequests = $specialRequests;
        return $this;
    }

    /**
     * Gets as guarantee
     *
     * The guarantee information associated to the Reservation or a particular Room Stay or Service.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * The guarantee information associated to the Reservation or a particular Room Stay or Service.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guarantee
     * @return self
     */
    public function setGuarantee(\Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guarantee)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * A collection of deposit and/or payments.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToDepositPayments(\Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->depositPayments[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDepositPayments($index)
    {
        return isset($this->depositPayments[$index]);
    }

    /**
     * unset depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDepositPayments($index)
    {
        unset($this->depositPayments[$index]);
    }

    /**
     * Gets as depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getDepositPayments()
    {
        return $this->depositPayments;
    }

    /**
     * Sets a new depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayments
     * @return self
     */
    public function setDepositPayments(array $depositPayments)
    {
        $this->depositPayments = $depositPayments;
        return $this;
    }

    /**
     * Gets as cancelPenalties
     *
     * A collection of Cancellation Penalties objects.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType
     */
    public function getCancelPenalties()
    {
        return $this->cancelPenalties;
    }

    /**
     * Sets a new cancelPenalties
     *
     * A collection of Cancellation Penalties objects.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType $cancelPenalties
     * @return self
     */
    public function setCancelPenalties(\Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType $cancelPenalties)
    {
        $this->cancelPenalties = $cancelPenalties;
        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees that applies to the reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeeType $fee
     */
    public function addToFees(\Devlabs91\TravelgateNotify\Models\Ota\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total amount charged for the accommodation including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TotalType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total amount charged for the accommodation including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TotalType $total
     * @return self
     */
    public function setTotal(\Devlabs91\TravelgateNotify\Models\Ota\TotalType $total)
    {
        $this->total = $total;
        return $this;
    }


}

