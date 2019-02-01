<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomRateType;

/**
 * Class representing FeaturesAType
 */
class FeaturesAType
{

    /**
     * Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for example, large screen television, video/DVD player in room, room service breakfast, and details about that breakfast.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomRateType\FeaturesAType\FeatureAType[] $feature
     */
    private $feature = [
        
    ];

    /**
     * Adds as feature
     *
     * Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for example, large screen television, video/DVD player in room, room service breakfast, and details about that breakfast.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomRateType\FeaturesAType\FeatureAType $feature
     */
    public function addToFeature(\Devlabs91\TravelgateNotify\Models\Ota\RoomRateType\FeaturesAType\FeatureAType $feature)
    {
        $this->feature[] = $feature;
        return $this;
    }

    /**
     * isset feature
     *
     * Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for example, large screen television, video/DVD player in room, room service breakfast, and details about that breakfast.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeature($index)
    {
        return isset($this->feature[$index]);
    }

    /**
     * unset feature
     *
     * Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for example, large screen television, video/DVD player in room, room service breakfast, and details about that breakfast.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeature($index)
    {
        unset($this->feature[$index]);
    }

    /**
     * Gets as feature
     *
     * Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for example, large screen television, video/DVD player in room, room service breakfast, and details about that breakfast.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomRateType\FeaturesAType\FeatureAType[]
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Sets a new feature
     *
     * Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for example, large screen television, video/DVD player in room, room service breakfast, and details about that breakfast.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomRateType\FeaturesAType\FeatureAType[] $feature
     * @return self
     */
    public function setFeature(array $feature)
    {
        $this->feature = $feature;
        return $this;
    }


}

