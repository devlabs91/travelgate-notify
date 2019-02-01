<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType\AirTravelerAType;

use Devlabs91\TravelgateNotify\Models\Ota\FormattedTextTextType;

/**
 * Class representing CommentAType
 */
class CommentAType extends FormattedTextTextType
{

    /**
     * Used to specify the type of comment.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * Used to specify the type of comment.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Used to specify the type of comment.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

