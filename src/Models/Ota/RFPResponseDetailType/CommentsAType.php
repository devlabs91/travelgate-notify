<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RFPResponseDetailType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Open comments to send additional data about the response.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Open comments to send additional data about the response.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $comment
     */
    public function addToComment(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * Open comments to send additional data about the response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Open comments to send additional data about the response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Open comments to send additional data about the response.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Open comments to send additional data about the response.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

