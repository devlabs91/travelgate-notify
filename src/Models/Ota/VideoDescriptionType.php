<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VideoDescriptionType
 *
 * Describes a video item.
 * XSD Type: VideoDescriptionType
 */
class VideoDescriptionType
{

    /**
     * Specifies the video category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @property string $category
     */
    private $category = null;

    /**
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VideoDescriptionType\VideoFormatAType[] $videoFormat
     */
    private $videoFormat = [
        
    ];

    /**
     * Gets as category
     *
     * Specifies the video category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Specifies the video category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VideoDescriptionType\VideoFormatAType $videoFormat
     */
    public function addToVideoFormat(\Devlabs91\TravelgateNotify\Models\Ota\VideoDescriptionType\VideoFormatAType $videoFormat)
    {
        $this->videoFormat[] = $videoFormat;
        return $this;
    }

    /**
     * isset videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoFormat($index)
    {
        return isset($this->videoFormat[$index]);
    }

    /**
     * unset videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoFormat($index)
    {
        unset($this->videoFormat[$index]);
    }

    /**
     * Gets as videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VideoDescriptionType\VideoFormatAType[]
     */
    public function getVideoFormat()
    {
        return $this->videoFormat;
    }

    /**
     * Sets a new videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VideoDescriptionType\VideoFormatAType[] $videoFormat
     * @return self
     */
    public function setVideoFormat(array $videoFormat)
    {
        $this->videoFormat = $videoFormat;
        return $this;
    }


}

