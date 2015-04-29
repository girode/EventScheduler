<?php
namespace Riskio\ScheduleTest\TemporalExpression;

use DateTime;
use Riskio\Schedule\TemporalExpression\Year;

class YearTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \Riskio\Schedule\TemporalExpression\Exception\InvalidArgumentException
     */
    public function constructor_UsingInvalidTrimesterValue_ShouldThrowException()
    {
        new Year('invalid');
    }

    /**
     * @test
     */
    public function includes_WhenProvidedDateAtSameYear_ShouldReturnTrue()
    {
        $date = new DateTime('2015-04-10');
        $year = (int) $date->format('Y');
        $expr = new Year($year);

        $isIncluded = $expr->includes($date);

        $this->assertThat($isIncluded, $this->equalTo(true));
    }

    /**
     * @test
     */
    public function includes_WhenProvidedDateAtDifferentYear_ShouldReturnFalse()
    {
        $date = new DateTime('2015-04-10');
        $expr = new Year(2016);

        $isIncluded = $expr->includes($date);

        $this->assertThat($isIncluded, $this->equalTo(false));
    }
}
