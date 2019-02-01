<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing ImageDescriptionType
 *
 * Describes an image item.
 * XSD Type: ImageDescriptionType
 */
class ImageDescriptionType
{

    /**
     * Specifies the image category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @property string $category
     */
    private $category = null;

    /**
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\ImageFormatAType[] $imageFormat
     */
    private $imageFormat = [
        
    ];

    /**
     * The description associated with the image in a specific language.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\DescriptionAType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as category
     *
     * Specifies the image category. Refer to OpenTravel Code list Picture Category Code (PIC).
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
     * Specifies the image category. Refer to OpenTravel Code list Picture Category Code (PIC).
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
     * Adds as imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\ImageFormatAType $imageFormat
     */
    public function addToImageFormat(\Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\ImageFormatAType $imageFormat)
    {
        $this->imageFormat[] = $imageFormat;
        return $this;
    }

    /**
     * isset imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageFormat($index)
    {
        return isset($this->imageFormat[$index]);
    }

    /**
     * unset imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageFormat($index)
    {
        unset($this->imageFormat[$index]);
    }

    /**
     * Gets as imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\ImageFormatAType[]
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Sets a new imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\ImageFormatAType[] $imageFormat
     * @return self
     */
    public function setImageFormat(array $imageFormat)
    {
        $this->imageFormat = $imageFormat;
        return $this;
    }

    /**
     * Adds as description
     *
     * The description associated with the image in a specific language.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\DescriptionAType $description
     */
    public function addToDescription(\Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\DescriptionAType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * The description associated with the image in a specific language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * The description associated with the image in a specific language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * The description associated with the image in a specific language.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description associated with the image in a specific language.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ImageDescriptionType\DescriptionAType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

