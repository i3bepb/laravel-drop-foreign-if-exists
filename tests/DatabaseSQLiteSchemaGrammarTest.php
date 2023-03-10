<?php

namespace I3bepb\DropForeignIfExists\Tests;

use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\SQLiteGrammar;
use Mockery;
use RuntimeException;

class DatabaseSQLiteSchemaGrammarTest extends TestCase
{
    /**
     * Clean up the testing environment before the next test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * Get the database connection.
     *
     * @param  string|null  $connection
     * @param  string|null  $table
     * @return \Illuminate\Database\Connection
     */
    protected function getConnection($connection = null, $table = null)
    {
        return Mockery::mock(Connection::class);
    }

    /**
     * @return \Illuminate\Database\Schema\Grammars\SQLiteGrammar
     */
    public function getGrammar()
    {
        return new SQLiteGrammar;
    }

    /**
     * @test
     */
    public function drop_foreign_if_exists()
    {
        $this->expectException(RuntimeException::class);
        $blueprint = new Blueprint('users');
        $blueprint->dropForeignIfExists(['order_id']);
        $blueprint->toSql($this->getConnection(), $this->getGrammar());
    }
}