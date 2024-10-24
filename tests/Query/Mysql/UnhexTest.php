<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class UnhexTest extends MysqlTestCase
{
    public function testUnhex(): void
    {
        $this->assertDqlProducesSql(
            "SELECT UNHEX(2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT UNHEX(2) AS sclr_0 FROM Blank b0_'
        );
    }
}
