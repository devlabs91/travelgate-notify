<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing FormattedTextType
 *
 * Collection of formatted text sub sections.
 * XSD Type: FormattedTextType
 */
class FormattedTextType
{

    /**
     * This attribute may be used to provide a title for the formatted free text, for example, Driving Directions. Each of the sub sections that are defined to be a part of the formatted text would provide detailed information about the subject identified by the title.
     *
     * @property string $title
     */
    private $title = null;

    /**
     * The language in which the content is provided.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Subsection formatted text information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextSubSectionType[] $subSection
     */
    private $subSection = [
        
    ];

    /**
     * Gets as title
     *
     * This attribute may be used to provide a title for the formatted free text, for example, Driving Directions. Each of the sub sections that are defined to be a part of the formatted text would provide detailed information about the subject identified by the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * This attribute may be used to provide a title for the formatted free text, for example, Driving Directions. Each of the sub sections that are defined to be a part of the formatted text would provide detailed information about the subject identified by the title.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as language
     *
     * The language in which the content is provided.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The language in which the content is provided.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as subSection
     *
     * Subsection formatted text information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextSubSectionType $subSection
     */
    public function addToSubSection(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextSubSectionType $subSection)
    {
        $this->subSection[] = $subSection;
        return $this;
    }

    /**
     * isset subSection
     *
     * Subsection formatted text information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubSection($index)
    {
        return isset($this->subSection[$index]);
    }

    /**
     * unset subSection
     *
     * Subsection formatted text information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubSection($index)
    {
        unset($this->subSection[$index]);
    }

    /**
     * Gets as subSection
     *
     * Subsection formatted text information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextSubSectionType[]
     */
    public function getSubSection()
    {
        return $this->subSection;
    }

    /**
     * Sets a new subSection
     *
     * Subsection formatted text information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextSubSectionType[] $subSection
     * @return self
     */
    public function setSubSection(array $subSection)
    {
        $this->subSection = $subSection;
        return $this;
    }


}

