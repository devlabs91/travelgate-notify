<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomStayLiteType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType[] $ratePlan
     */
    private $ratePlan = [
        
    ];

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType $ratePlan
     */
    public function addToRatePlan(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType $ratePlan)
    {
        $this->ratePlan[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlan
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlan($index)
    {
        return isset($this->ratePlan[$index]);
    }

    /**
     * unset ratePlan
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlan($index)
    {
        unset($this->ratePlan[$index]);
    }

    /**
     * Gets as ratePlan
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan)
    {
        $this->ratePlan = $ratePlan;
        return $this;
    }


}

