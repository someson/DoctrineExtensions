<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class ReplaceTest extends MysqlTestCase
{
    public function testReplace():void
    {
        $this->assertDqlProducesSql(
            "SELECT REPLACE(2, 3, 4) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT REPLACE(2, 3, 4) AS sclr_0 FROM Blank b0_'
        );
    }
}
