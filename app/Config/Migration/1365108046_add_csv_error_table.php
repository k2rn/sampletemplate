<?php
class AddCsvErrorTable extends CakeMigration
{

/**
 * Migration description
 *
 * @var string
 * @access public
 */
    public $description = 'CSV取り込みエラーテーブルを作成';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
    public $migration = array(
        'up' => array(
            'create_table' => array(
                'csv_error' => array(
                    'id' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 20,
                        'key'       => 'primary',
                    ),
                    'hash' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "このhashで関連のあるデータのIDを紐付けるのに利用する",
                    ),
                    'csv_name' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'comment'   => "CSV名",
                    ),
                    'error_type' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'comment'   => "エラーがあった取り込みCSVの種別",
                    ),
                    'message' => array(
                        'type'      => 'text',
                        'null'      => false,
                        'default'   => NULL,
                        'comment'   => "内容",
                    ),
                    'status' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => 1,
                        'length'    => 1,
                        'comment'   => "ステータス",
                    ),
                    'line' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => 0,
                        'comment'   => "エラーがあった行",
                    ),
                    'detail' => array(
                        'type'      => 'text',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "エラーの詳細",
                    ),
                    'remarks' => array(
                        'type'      => 'text',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "備考",
                    ),
                    'created' => array(
                        'type'      => 'datetime',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'modified' => array(
                        'type'      => 'datetime',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column'    => 'id',
                            'unique'    => true,
                        ),
                        'error_type' => array(
                            'column'    => 'error_type',
                        ),
                        'status' => array(
                            'column'    => 'status',
                        ),
                    ),
                    'tableParameters' => array(
                        'charset'   => 'utf8',
                        'collate'   => 'utf8_general_ci',
                        'engine'    => 'InnoDB',
                    ),
                ),
            ),
        ),
        'down' => array(
            'drop_table' => array('csv_error'),
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
