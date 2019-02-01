<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\InvBlockType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{

    /**
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Adds as contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType $contact
     */
    public function addToContact(\Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

