<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AcceptablePaymentCardsInfoType
 *
 * This complex type identifies payment cards that are acceptable for a specific form of payment, along with the ability to provide free text information regarding payment cards.
 * XSD Type: AcceptablePaymentCardsInfoType
 */
class AcceptablePaymentCardsInfoType
{

    /**
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[] $acceptablePaymentCards
     */
    private $acceptablePaymentCards = null;

    /**
     * General information regarding the use of payment cards.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as acceptablePaymentCard
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard
     */
    public function addToAcceptablePaymentCards(\Devlabs91\TravelgateNotify\Models\Ota\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard)
    {
        $this->acceptablePaymentCards[] = $acceptablePaymentCard;
        return $this;
    }

    /**
     * isset acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptablePaymentCards($index)
    {
        return isset($this->acceptablePaymentCards[$index]);
    }

    /**
     * unset acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptablePaymentCards($index)
    {
        unset($this->acceptablePaymentCards[$index]);
    }

    /**
     * Gets as acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     */
    public function getAcceptablePaymentCards()
    {
        return $this->acceptablePaymentCards;
    }

    /**
     * Sets a new acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[] $acceptablePaymentCards
     * @return self
     */
    public function setAcceptablePaymentCards(array $acceptablePaymentCards)
    {
        $this->acceptablePaymentCards = $acceptablePaymentCards;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information regarding the use of payment cards.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information regarding the use of payment cards.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info)
    {
        $this->info = $info;
        return $this;
    }


}

