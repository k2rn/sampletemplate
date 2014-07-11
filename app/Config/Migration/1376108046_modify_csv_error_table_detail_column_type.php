<?php
class ModifyCsvErrorTableDetailColumnType extends CakeMigration
{

/**
 * Migration description
 *
 * @var string
 * @access public
 */
    public $description = 'CSV取り込みエラーテーブルを修正、detail が text だと入りきらないことがあるため、medium textにする';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
    public $migration = array(
        'up' => array(
            'alter_field' => array(
                'csv_error' => array(
                    'detail' => array(
                        'length'      => 16777215,
                    ),
                ),
            ),
        ),
        'down' => array(
            'alter_field' => array(
                'csv_error' => array(
                    'detail' => array(
                        'length'      => 65535,
                    ),
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
