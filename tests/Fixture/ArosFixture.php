<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class ArosFixture extends TestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = [
		'id' => ['type' => 'integer'],
		'parent_id' => ['type' => 'integer'],
		'model' => ['type' => 'string', 'length' => 255],
		'foreign_key' => ['type' => 'integer'],
		'alias' => ['type' => 'string', 'length' => 255],
		'lft' => ['type' => 'integer'],
		'rght' => ['type' => 'integer'],
		'_indexes' => [
			'idx_aros_lft_rght' => ['type' => 'index', 'columns' => ['lft', 'rght']],
			'idx_aros_alias' => ['type' => 'index', 'columns' => ['alias']],
		],
		'_constraints' => [
			'primary' => ['type' => 'primary', 'columns' => ['id']],
		],
		'_options' => [
			'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
		],
	];

/**
 * Records
 *
 * @var array
 */
	public $records = [
		[
			'parent_id' => null,
			'model' => 'Groups',
			'foreign_key' => 1,
			'alias' => '',
			'lft' => 1,
			'rght' => 2
		],
		[
			'parent_id' => null,
			'model' => 'Groups',
			'foreign_key' => 2,
			'alias' => '',
			'lft' => 3,
			'rght' => 4
		]
	];
}
