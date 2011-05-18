<?php
class M4dd28191381044259de10a69159ee80f extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	var $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	var $migration = array(
		'up' => array(
                    'create_table'=>array(
                        'categories'=>array(
                            'id'=>array(
                                'type' =>'string',
                                'null' =>false,
                                'default' =>NULL,
                                'length' =>36,
                                'key' =>'primary'
                            ),
                          'name' =>array(
                              'type' => 'string',
                              'null' => false,
                              'default' => NULL
                          ),
                          'indexex' =>array(
                              'PRIMARY' => array(
                                  'column' =>'id',
                                  'unique' => 1
                              )
                          )
                        ),
                        'emails' =>array(
                            'id'=>array(
                                'type' => 'string',
                                'length' => 36,
                                'null' => false,
                                'key' =>'primary'
                            ),
                           'data'=>array(
                               'type' => 'text',
                               'null' => false,
                               'default' => NULL
                           ),
                          'sent' => array(
                            'type'    => 'boolean',
                            'null'    => false,
                            'default' => '0'),
                          'error' => array(
                                'type'    => 'text',
                                'default' => NULL),
                          'created' => array(
                                'type' => 'datetime'),
                          'modified' => array(
                                'type' => 'datetime'),
                          'indexes' => array(
                                'PRIMARY' => array(
                                        'column' => 'id',
                                        'unique' => 1)

                        )
                    )
		)
                ),
		'down' => array(
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function after($direction) {
		return true;
	}
}
?>