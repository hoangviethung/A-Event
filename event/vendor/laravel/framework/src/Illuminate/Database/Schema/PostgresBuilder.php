<?php

namespace Illuminate\Database\Schema;

class PostgresBuilder extends Builder
{
    /**
     * Determine if the given table exists.
     *
     * @param  string  $table
     * @return bool
     */
    public function hasTable($table)
    {
        [$schema, $table] = $this->parseSchemaAndTable($table);

        $table = $this->connection->getTablePrefix().$table;

        return count($this->connection->select(
            $this->grammar->compileTableExists(), [$schema, $table]
        )) > 0;
    }

    /**
     * Drop all tables from the database.
     *
     * @return void
     */
    public function dropAllTables()
    {
        $tables = [];

<<<<<<< HEAD
        $excludedTables = ['spatial_ref_sys'];
=======
        $excludedTables = $this->connection->getConfig('dont_drop') ?? ['spatial_ref_sys'];
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

        foreach ($this->getAllTables() as $row) {
            $row = (array) $row;

            $table = reset($row);

            if (! in_array($table, $excludedTables)) {
                $tables[] = $table;
            }
        }

        if (empty($tables)) {
            return;
        }

        $this->connection->statement(
            $this->grammar->compileDropAllTables($tables)
        );
    }

    /**
     * Drop all views from the database.
     *
     * @return void
     */
    public function dropAllViews()
    {
        $views = [];

        foreach ($this->getAllViews() as $row) {
            $row = (array) $row;

            $views[] = reset($row);
        }

        if (empty($views)) {
            return;
        }

        $this->connection->statement(
            $this->grammar->compileDropAllViews($views)
        );
    }

    /**
     * Drop all types from the database.
     */
    public function dropAllTypes()
    {
        $types = [];

        foreach ($this->getAllTypes() as $row) {
            $row = (array) $row;

            $types[] = reset($row);
        }

        if (empty($types)) {
            return;
        }

        $this->connection->statement(
            $this->grammar->compileDropAllTypes($types)
        );
    }

    /**
     * Get all of the table names for the database.
     *
     * @return array
     */
    public function getAllTables()
    {
        return $this->connection->select(
<<<<<<< HEAD
            $this->grammar->compileGetAllTables($this->connection->getConfig('schema'))
=======
            $this->grammar->compileGetAllTables((array) $this->connection->getConfig('schema'))
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
        );
    }

    /**
     * Get all of the view names for the database.
     *
     * @return array
     */
    protected function getAllViews()
    {
        return $this->connection->select(
<<<<<<< HEAD
            $this->grammar->compileGetAllViews($this->connection->getConfig('schema'))
=======
            $this->grammar->compileGetAllViews((array) $this->connection->getConfig('schema'))
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
        );
    }

    /**
     * Get all of the type names for the database.
     *
     * @return array
     */
    protected function getAllTypes()
    {
        return $this->connection->select(
            $this->grammar->compileGetAllTypes()
        );
    }

    /**
     * Get the column listing for a given table.
     *
     * @param  string  $table
     * @return array
     */
    public function getColumnListing($table)
    {
        [$schema, $table] = $this->parseSchemaAndTable($table);

        $table = $this->connection->getTablePrefix().$table;

        $results = $this->connection->select(
            $this->grammar->compileColumnListing(), [$schema, $table]
        );

        return $this->connection->getPostProcessor()->processColumnListing($results);
    }

    /**
     * Parse the table name and extract the schema and table.
     *
     * @param  string  $table
     * @return array
     */
    protected function parseSchemaAndTable($table)
    {
        $table = explode('.', $table);

        if (is_array($schema = $this->connection->getConfig('schema'))) {
            if (in_array($table[0], $schema)) {
                return [array_shift($table), implode('.', $table)];
            }

            $schema = head($schema);
        }

        return [$schema ?: 'public', implode('.', $table)];
    }
}
