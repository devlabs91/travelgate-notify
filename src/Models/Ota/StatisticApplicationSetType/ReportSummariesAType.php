<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType;

/**
 * Class representing ReportSummariesAType
 *
 * Container for ReportSummary elements of type ParagraphType.
 */
class ReportSummariesAType
{

    /**
     * This element has text information, included with the data in the report as needed.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $reportSummary
     */
    private $reportSummary = [
        
    ];

    /**
     * Adds as reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $reportSummary
     */
    public function addToReportSummary(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $reportSummary)
    {
        $this->reportSummary[] = $reportSummary;
        return $this;
    }

    /**
     * isset reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportSummary($index)
    {
        return isset($this->reportSummary[$index]);
    }

    /**
     * unset reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportSummary($index)
    {
        unset($this->reportSummary[$index]);
    }

    /**
     * Gets as reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getReportSummary()
    {
        return $this->reportSummary;
    }

    /**
     * Sets a new reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $reportSummary
     * @return self
     */
    public function setReportSummary(array $reportSummary)
    {
        $this->reportSummary = $reportSummary;
        return $this;
    }


}

