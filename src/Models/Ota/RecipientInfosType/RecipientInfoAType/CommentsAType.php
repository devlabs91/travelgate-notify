<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RecipientInfosType\RecipientInfoAType;

/**
 * Class representing CommentsAType
 */
class CommentsAType
{

    /**
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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
     * Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card.
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

