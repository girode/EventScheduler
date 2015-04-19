<?php
namespace Riskio\ScheduleModule\TemporalExpression;

use DateTime;

class UnionTemporalExpression extends CollectionTemporalExpression
{
    /**
     * @param  DateTime $date
     * @return bool
     */
    public function includes(DateTime $date)
    {
        foreach ($this->elements as $element) {
            if ($element->includes($date)) {
                return true;
            }
        }

        return false;
    }
}
