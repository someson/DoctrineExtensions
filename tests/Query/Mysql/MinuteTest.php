<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class MinuteTest extends MysqlTestCase
{
    public function testMinute():void
    {
        $this->assertDqlProducesSql(
            "SELECT MINUTE(2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT MINUTE(2) AS sclr_0 FROM Blank b0_'
        );
    }
}
