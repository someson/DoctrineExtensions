<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class MonthNameTest extends MysqlTestCase
{
    public function testMonthName(): void
    {
        $this->assertDqlProducesSql(
            "SELECT MONTHNAME(2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT MONTHNAME(2) AS sclr_0 FROM Blank b0_'
        );
    }
}
