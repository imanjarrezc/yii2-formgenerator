<?php

$now = new yii\db\Expression('now()');

return [
    [
        'solicitude_id' => 1,
        'section_id' => 1,
        'field_id' => 1,
        'value' => 'Manuel Angel',
        'created_by' => 1,
        'created_at' => $now
    ],
    [
        'solicitude_id' => 1,
        'section_id' => 1,
        'field_id' => 2,
        'value' => 'Guevara',
        'created_by' => 1,
        'created_at' => $now
    ],
    [
        'solicitude_id' => 1,
        'section_id' => 1,
        'field_id' => 3,
        'value' => '1980-01-01',
        'created_by' => 1,
        'created_at' => $now
    ],
    [
        'solicitude_id' => 1,
        'section_id' => 1,
        'field_id' => 4,
        'value' => 'aguevara@alquimiadigital.mx',
        'created_by' => 1,
        'created_at' => $now
    ],
    [
        'solicitude_id' => 1,
        'section_id' => 2,
        'field_id' => 5,
        'value' => 1,
        'created_by' => 1,
        'created_at' => $now
    ],
    [
        'solicitude_id' => 1,
        'section_id' => 2,
        'field_id' => 6,
        'value' => '1000.00',
        'created_by' => 1,
        'created_at' => $now
    ],
];
