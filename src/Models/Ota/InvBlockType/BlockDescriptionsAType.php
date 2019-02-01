<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\InvBlockType;

/**
 * Class representing BlockDescriptionsAType
 */
class BlockDescriptionsAType
{

    /**
     * Used for free form descriptive information about the inventory block.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[] $blockDescription
     */
    private $blockDescription = [
        
    ];

    /**
     * Adds as blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType $blockDescription
     */
    public function addToBlockDescription(\Devlabs91\TravelgateNotify\Models\Ota\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType $blockDescription)
    {
        $this->blockDescription[] = $blockDescription;
        return $this;
    }

    /**
     * isset blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBlockDescription($index)
    {
        return isset($this->blockDescription[$index]);
    }

    /**
     * unset blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBlockDescription($index)
    {
        unset($this->blockDescription[$index]);
    }

    /**
     * Gets as blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[]
     */
    public function getBlockDescription()
    {
        return $this->blockDescription;
    }

    /**
     * Sets a new blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[] $blockDescription
     * @return self
     */
    public function setBlockDescription(array $blockDescription)
    {
        $this->blockDescription = $blockDescription;
        return $this;
    }


}

