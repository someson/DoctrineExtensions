<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

final class Sha1Test extends MysqlTestCase
{
    public function testSha1(): void
    {
        $this->assertDqlProducesSql(
            "SELECT SHA1('2') from DoctrineExtensions\Tests\Entities\Blank b",
            "SELECT SHA1('2') AS sclr_0 FROM Blank b0_"
        );
    }
}
