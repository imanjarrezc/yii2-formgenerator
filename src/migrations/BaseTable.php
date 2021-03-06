<?php

namespace tecnocen\formgenerator\migrations;

abstract class BaseTable extends \tecnocen\migrate\CreateTableMigration
{
    public function defaultColumns()
    {
        return [
            'created_at' => $this->datetime()->notNull(),
            'created_by' => $this->normalKey(),
        ];
    }
}
