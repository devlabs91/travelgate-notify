<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\SeatMapDetailsType;

use Devlabs91\TravelgateNotify\Models\Ota\CabinClassType;

/**
 * Class representing CabinClassAType
 */
class CabinClassAType extends CabinClassType
{

    /**
     * Specify the starting row number for this cabin class.
     *
     * @property int $startingRow
     */
    private $startingRow = null;

    /**
     * Specify the ending row number for this cabin class.
     *
     * @property int $endingRow
     */
    private $endingRow = null;

    /**
     * Gets as startingRow
     *
     * Specify the starting row number for this cabin class.
     *
     * @return int
     */
    public function getStartingRow()
    {
        return $this->startingRow;
    }

    /**
     * Sets a new startingRow
     *
     * Specify the starting row number for this cabin class.
     *
     * @param int $startingRow
     * @return self
     */
    public function setStartingRow($startingRow)
    {
        $this->startingRow = $startingRow;
        return $this;
    }

    /**
     * Gets as endingRow
     *
     * Specify the ending row number for this cabin class.
     *
     * @return int
     */
    public function getEndingRow()
    {
        return $this->endingRow;
    }

    /**
     * Sets a new endingRow
     *
     * Specify the ending row number for this cabin class.
     *
     * @param int $endingRow
     * @return self
     */
    public function setEndingRow($endingRow)
    {
        $this->endingRow = $endingRow;
        return $this;
    }


}

