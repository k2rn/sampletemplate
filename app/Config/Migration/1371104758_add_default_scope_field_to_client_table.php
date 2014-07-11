<?php
class AddDefaultScopeFieldToClientTable extends CakeMigration
{
/**
 * Migration description
 *
 * @var string
 * @access public
 */
    public $description = "OAuthクライアントにデフォルトのスコープを付与するカラムを追加";

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
    public $migration = array(
        'up' => array(
            'create_field' => array(
                'clients' => array(
                    'default_scopes' => array(
                        'type'      => 'text',
                        'null'      => true,
                        'default'   => NULL,
                        'after'     => 'user_id',
                        'collate'   => 'utf8_general_ci',
                        'comment'   => "デフォルトスコープ",
                        'charset'   => 'utf8'
                    ),
                    'ip_addr' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'after'     => 'default_scopes',
                        'collate'   => 'utf8_general_ci',
                        'comment'   => "許可するIPアドレス",
                        'charset'   => 'utf8'
                    ),
                ),
            ),
        ),
        'down' => array(
            'drop_field' => array(
                'clients' => array(
                    'default_scopes',
                    'ip_addr',
                ),
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
    public function before($direction) {
        return true;
    }

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
    public function after($direction) {
        return true;
    }
}
