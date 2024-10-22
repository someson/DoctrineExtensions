<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class Atan2Test extends MysqlTestCase
{
    public function testAtan2(): void
    {
        $this->assertDqlProducesSql(
            "SELECT ATAN2(0.5, 2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT ATAN2(0.5, 2) AS sclr_0 FROM Blank b0_'
        );
    }
}
