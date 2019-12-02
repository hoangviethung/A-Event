<?php

namespace Faker\ORM\CakePHP;

class ColumnTypeGuesser
{
    protected $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return \Closure|null
     */
    public function guessFormat($column, $table)
    {
        $generator = $this->generator;
        $schema = $table->schema();

        switch ($schema->columnType($column)) {
            case 'boolean':
                return function () use ($generator) {
                    return $generator->boolean;
                };
            case 'integer':
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case 'biginteger':
                return function () {
                    return mt_rand(0, intval('9223372036854775807'));
                };
            case 'decimal':
            case 'float':
                return function () use ($generator) {
                    return $generator->randomFloat();
                };
            case 'uuid':
                return function () use ($generator) {
                    return $generator->uuid();
                };
            case 'string':
<<<<<<< HEAD
                $columnData = $schema->column($column);
=======
                if (method_exists($schema, 'getColumn')) {
                    $columnData = $schema->getColumn($column);
                } else {
                    $columnData = $schema->column($column);
                }
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
                $length = $columnData['length'];
                return function () use ($generator, $length) {
                    return $generator->text($length);
                };
            case 'text':
                return function () use ($generator) {
                    return $generator->text();
                };
            case 'date':
            case 'datetime':
            case 'timestamp':
            case 'time':
                return function () use ($generator) {
                    return $generator->datetime();
                };

            case 'binary':
            default:
                return null;
        }
    }
}
