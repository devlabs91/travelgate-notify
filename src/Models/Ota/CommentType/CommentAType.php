<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\CommentType;

use Devlabs91\TravelgateNotify\Models\Ota\ParagraphType;

/**
 * Class representing CommentAType
 */
class CommentAType extends ParagraphType
{

    /**
     * Unique identifier for the system which created the comment.
     *
     * @property string $commentOriginatorCode
     */
    private $commentOriginatorCode = null;

    /**
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @property bool $guestViewable
     */
    private $guestViewable = null;

    /**
     * Gets as commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @return string
     */
    public function getCommentOriginatorCode()
    {
        return $this->commentOriginatorCode;
    }

    /**
     * Sets a new commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @param string $commentOriginatorCode
     * @return self
     */
    public function setCommentOriginatorCode($commentOriginatorCode)
    {
        $this->commentOriginatorCode = $commentOriginatorCode;
        return $this;
    }

    /**
     * Gets as guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @return bool
     */
    public function getGuestViewable()
    {
        return $this->guestViewable;
    }

    /**
     * Sets a new guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @param bool $guestViewable
     * @return self
     */
    public function setGuestViewable($guestViewable)
    {
        $this->guestViewable = $guestViewable;
        return $this;
    }


}

