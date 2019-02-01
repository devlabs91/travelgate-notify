<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\TextDescriptionType;

use Devlabs91\TravelgateNotify\Models\Ota\FormattedTextTextType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType extends FormattedTextTextType
{

    /**
     * Sequence number associated with this description.
     *
     * @property int $listItem
     */
    private $listItem = null;

    /**
     * Gets as listItem
     *
     * Sequence number associated with this description.
     *
     * @return int
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * Sets a new listItem
     *
     * Sequence number associated with this description.
     *
     * @param int $listItem
     * @return self
     */
    public function setListItem($listItem)
    {
        $this->listItem = $listItem;
        return $this;
    }


}

