<?php

namespace DoctrineExtensions\Tests\Query\Sqlite;

use DoctrineExtensions\Tests\Query\SqliteTestCase;

/**
 * This final class is responsible for testing the Sqlite string functions
 * @author winkbrace
 */
final class StringFunctionsTest extends SqliteTestCase
{
    public function testIfNull(): void
    {
        $dql = 'SELECT IFNULL(p.id, 0) as outcome FROM DoctrineExtensions\Tests\Entities\Blank p';
        $q = $this->entityManager->createQuery($dql);
        $this->assertEquals("SELECT IFNULL(b0_.id, 0) AS $this->columnAlias FROM Blank b0_", $q->getSql());
    }

    public function testReplace(): void
    {
        $dql = "SELECT REPLACE(p.id, '1', '2') as outcome FROM DoctrineExtensions\\Tests\\Entities\\Blank p";
        $q = $this->entityManager->createQuery($dql);
        $this->assertEquals("SELECT REPLACE(b0_.id, '1', '2') AS $this->columnAlias FROM Blank b0_", $q->getSql());
    }

    public function testConcatWs(): void
    {
        $dql = "SELECT CONCAT_WS('-', 'foo', 'bar', 'baz') as out FROM DoctrineExtensions\\Tests\\Entities\\Blank p";

        $expected = "SELECT (IFNULL('foo', '') || '-' || IFNULL('bar', '') || '-' || IFNULL('baz', ''))"
                . " AS $this->columnAlias FROM Blank b0_";

        $this->assertEquals($expected, $this->entityManager->createQuery($dql)->getSql());
    }
}
