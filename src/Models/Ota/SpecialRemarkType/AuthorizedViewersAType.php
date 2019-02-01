<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType;

/**
 * Class representing AuthorizedViewersAType
 */
class AuthorizedViewersAType
{

    /**
     * Specifies those authorized to view a confidential special remark.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewer
     */
    private $authorizedViewer = [
        
    ];

    /**
     * Adds as authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer
     */
    public function addToAuthorizedViewer(\Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer)
    {
        $this->authorizedViewer[] = $authorizedViewer;
        return $this;
    }

    /**
     * isset authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorizedViewer($index)
    {
        return isset($this->authorizedViewer[$index]);
    }

    /**
     * unset authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorizedViewer($index)
    {
        unset($this->authorizedViewer[$index]);
    }

    /**
     * Gets as authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewer()
    {
        return $this->authorizedViewer;
    }

    /**
     * Sets a new authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewer
     * @return self
     */
    public function setAuthorizedViewer(array $authorizedViewer)
    {
        $this->authorizedViewer = $authorizedViewer;
        return $this;
    }


}

