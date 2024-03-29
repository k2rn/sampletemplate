<?php
class AddAdminUser extends CakeMigration
{
    /**
     * Migration description
     *
     * @var string
     * @access public
     */
    public $description = '';

    /**
     * Actions to be performed
     *
     * @var array $migration
     * @access public
     */
    public $migration = array(
        'up' => array(
            'create_table' => array(
                'admin_user' => array(
                    'id' => array(
                        'type'    => 'integer',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 10,
                        'key'     => 'primary'
                    ),
                    'username' => array(
                        'type'    => 'string',
                        'null'    => true,
                        'default' => NULL,
                        'length'  => 50,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'ログインID',
                        'charset' => 'utf8'
                    ),
                    'password' => array(
                        'type'    => 'string',
                        'null'    => true,
                        'default' => NULL,
                        'length'  => 50,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'パスワード',
                        'charset' => 'utf8'
                    ),
                    'email' => array(
                        'type'    => 'string',
                        'null'    => true,
                        'default' => NULL,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'Eメールアドレス',
                        'charset' => 'utf8'
                    ),
                    'role' => array(
                        'type'    => 'string',
                        'null'    => true,
                        'default' => NULL,
                        'length'  => 20,
                        'collate' => 'utf8_general_ci',
                        'comment' => '権限',
                        'charset' => 'utf8'
                    ),
                    'created' => array(
                        'type'    => 'datetime',
                        'null'    => true,
                        'default' => NULL
                    ),
                    'modified' => array(
                        'type'    => 'datetime',
                        'null'    => true,
                        'default' => NULL
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'id',
                            'unique' => 1
                        ),
                    ),
                    'tableParameters' => array(
                        'charset' => 'utf8',
                        'collate' => 'utf8_general_ci',
                        'engine'  => 'InnoDB'
                    ),
                ),
            ),
        ),
        'down' => array(
            'drop_table' => array(
                'admin_user'
            ),
        ),
    );

    /**
     * Before migration callback
     *
     * @param string $direction, up or down direction of migration process
     * @return boolean Should process continue
     * @access public
     */
    public function before($direction)
    {
        return true;
    }

    /**
     * After migration callback
     *
     * @param string $direction, up or down direction of migration process
     * @return boolean Should process continue
     * @access public
     */
    public function after($direction)
    {
        return true;
    }
}
