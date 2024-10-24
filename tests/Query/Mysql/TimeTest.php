<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class TimeTest extends MysqlTestCase
{
    public function testTime(): void
    {
        $this->assertDqlProducesSql(
            "SELECT TIME(2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT TIME(2) AS sclr_0 FROM Blank b0_'
        );
    }
}
