<?php
namespace Crud\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class CulturesFixture extends TestFixture
{

    public $fields = [
        'id' => ['type' => 'integer'],
        'code' => ['type' => 'string', 'length' => 5, 'null' => false],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false],
        'country_id' => ['type' => 'integer', 'null' => false],
        '_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]],
    ];

    public $records = [
        ['id' => 1, 'code' => 'nl-NL', 'name' => 'Dutch', 'country_id' => 1],
        ['id' => 2, 'code' => 'nl-BE', 'name' => 'Dutch (Belgium)', 'country_id' => 2],
        ['id' => 3, 'code' => 'fr-BE', 'name' => 'French (Belgium)', 'country_id' => 2],
    ];
}
