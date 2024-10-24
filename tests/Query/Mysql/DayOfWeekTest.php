<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class DayOfWeekTest extends MysqlTestCase
{
    public function testDayOfWeek(): void
    {
        $this->assertDqlProducesSql(
            "SELECT DAYOFWEEK(2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT DAYOFWEEK(2) AS sclr_0 FROM Blank b0_'
        );
    }
}
