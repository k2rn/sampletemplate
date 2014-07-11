<?php
class AddOauth extends CakeMigration
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
                'access_tokens' => array(
                    'oauth_token' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 40,
                        'key'     => 'primary',
                        'collate' => 'utf8_general_ci',
                        'charset' => 'utf8'
                    ),
                    'client_id' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'クライアントID',
                        'charset' => 'utf8'
                    ),
                    'user_id' => array(
                        'type'    => 'integer',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => 'ユーザID'
                    ),
                    'expires' => array(
                        'type'    => 'integer',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => '有効期限'
                    ),
                    'scope' => array(
                        'type'    => 'string',
                        'null'    => true,
                        'default' => NULL,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'アクセス範囲',
                        'charset' => 'utf8'
                    ),
                    'indexes'         => array(
                        'PRIMARY' => array(
                            'column' => 'oauth_token',
                            'unique' => 1
                        ),
                    ),
                    'tableParameters' => array(
                        'charset' => 'utf8',
                        'collate' => 'utf8_general_ci',
                        'engine'  => 'InnoDB'
                    ),
                ),
                'auth_codes' => array(
                    'code' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 40,
                        'key'     => 'primary',
                        'collate' => 'utf8_general_ci',
                        'charset' => 'utf8'
                    ),
                    'client_id' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 36,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'クライアントID',
                        'charset' => 'utf8'
                    ),
                    'user_id' => array(
                        'type'    => 'integer',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => 'ユーザID'
                    ),
                    'redirect_uri' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 200,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'リダイレクトURI',
                        'charset' => 'utf8'
                    ),
                    'expires' => array(
                        'type'    => 'integer',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => '有効期限'
                    ),
                    'scope' => array(
                        'type'    => 'string',
                        'null'    => true,
                        'default' => NULL,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'アクセス範囲',
                        'charset' => 'utf8'
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'code',
                            'unique' => 1
                        ),
                    ),
                    'tableParameters' => array(
                        'charset' => 'utf8',
                        'collate' => 'utf8_general_ci',
                        'engine'  => 'InnoDB'
                    ),
                ),
                'clients' => array(
                    'client_id' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 20,
                        'key'     => 'primary',
                        'collate' => 'utf8_general_ci',
                        'charset' => 'utf8'
                    ),
                    'client_secret' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 40,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'シークレットキー',
                        'charset' => 'utf8'
                    ),
                    'redirect_uri' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'リダイレクトURI',
                        'charset' => 'utf8'
                    ),
                    'user_id' => array(
                        'type'    => 'integer',
                        'null'    => true,
                        'default' => NULL,
                        'comment' => 'ユーザID'
                    ),
                    'created' => array(
                        'type'    => 'datetime',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => '作成日時'
                    ),
                    'modified' => array(
                        'type'    => 'datetime',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => '更新日時'
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'client_id',
                            'unique' => 1
                        ),
                    ),
                    'tableParameters' => array(
                        'charset' => 'utf8',
                        'collate' => 'utf8_general_ci',
                        'engine'  => 'InnoDB'
                    ),
                ),
                'refresh_tokens' => array(
                    'refresh_token' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 40,
                        'key'     => 'primary',
                        'collate' => 'utf8_general_ci',
                        'charset' => 'utf8'
                    ),
                    'client_id' => array(
                        'type'    => 'string',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 36,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'クライアントID',
                        'charset' => 'utf8'
                    ),
                    'user_id' => array(
                        'type'    => 'integer',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => 'ユーザID'
                    ),
                    'expires' => array(
                        'type'    => 'integer',
                        'null'    => false,
                        'default' => NULL,
                        'comment' => '有効期限'
                    ),
                    'scope' => array(
                        'type'    => 'string',
                        'null'    => true,
                        'default' => NULL,
                        'collate' => 'utf8_general_ci',
                        'comment' => 'アクセス範囲',
                        'charset' => 'utf8'
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'refresh_token',
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
                'access_tokens',
                'auth_codes',
                'clients',
                'refresh_tokens',
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
