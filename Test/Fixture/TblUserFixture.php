<?php
/**
 * TblUserFixture
 *
 */
class TblUserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tbl_user';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'l_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'f_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'u_password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'preference' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'job' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'motto' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'r_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		's_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'e_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'decen_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'workplace' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'birth' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'decen_id' => array('column' => 'decen_id', 'unique' => 0),
			'r_id' => array('column' => 'r_id', 'unique' => 0),
			's_id' => array('column' => 's_id', 'unique' => 0),
			'e_id' => array('column' => 'e_id', 'unique' => 0),
			'fk_user_district' => array('column' => 'workplace', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'l_name' => 'Lorem ipsum dolor ',
			'f_name' => 'Lorem ipsum dolor ',
			'email' => 'Lorem ipsum dolor sit amet',
			'u_password' => 'Lorem ipsum dolor sit amet',
			'preference' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'job' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'motto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'r_id' => 1,
			's_id' => 1,
			'e_id' => 1,
			'decen_id' => 1,
			'workplace' => 1,
			'birth' => '2013-12-17'
		),
	);

}
