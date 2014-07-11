<?php
class AddUser extends CakeMigration
{
    /**
     * Migration description
     *
     * @var string
     * @access public
     */
    public $description = "ログインユーザー";

    /**
     * Actions to be performed
     *
     * @var array $migration
     * @access public
     */
    public $migration = array(
        'up' => array(
            'create_table' => array(
                'users' => array(
                    'id' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => NULL,
                        'key'       => 'primary'
                    ),
                    'user_id' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 50,
                        'comment'   => "ログインID",
                    ),
                    'password' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 56,
                        'comment'   => "パスワード",
                    ),
                    'setai_id'  => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 20,
                        'comment'   => "世帯ID",
                    ),
                    'kojin_id'  => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 20,
                        'comment'   => "個人ID",
                    ),
                    'hihokensha_kigou' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 40,
                        'comment'   => "被保険者記号",
                    ),
                    'hihokensha_number' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 40,
                        'comment'   => "被保険者番号",
                    ),
                    'tyokuzen_kojin_id'  => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 20,
                        'comment'   => "直前個人ID",
                    ),
                    'tyokuzen_hihokensha_kigou' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 40,
                        'comment'   => "直前被保険者記号",
                    ),
                    'tyokuzen_hihokensha_number' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 40,
                        'comment'   => "直前被保険者番号",
                    ),
                    'shimei_kanji' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 200,
                        'comment'   => "氏名（漢字）",
                    ),
                    'shimei_kana' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 200,
                        'comment'   => "氏名（全角カナ）",
                    ),
                    'shimei_eiji' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "氏名（英字）",
                    ),
                    'hihoken_flg' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => NULL,
                        'comment'   => "被保険フラグ（0: 被扶養者, 1:被保険者）"
                    ),
                    'jigyousho_code' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 40,
                        'comment'   => "事業所コード",
                    ),
                    'shozoku_code1' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 25,
                        'comment'   => "所属コード１",
                    ),
                    'shozoku_code2' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 25,
                        'comment'   => "所属コード２",
                    ),
                    'birthday' => array(
                        'type'      => 'date',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "生年月日",
                    ),
                    'sex' => array(
                        'type'      => 'integer',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "1 = 男、2 = 女",
                    ),
                    'zokugara' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 10,
                        'comment'   => "続柄",
                    ),
                    'email' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "メールアドレス",
                    ),
                    'shikaku_shutoku_date' => array(
                        'type'      => 'date',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "資格取得日",
                    ),
                    'shikaku_soushitsu_date' => array(
                        'type'      => 'date',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "資格喪失日"
                    ),
                    'display_flg' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => '1',
                        'comment'   => "表示フラグ（0:非表示, 1:表示）",
                    ),
                    'invalid_flg' => array(
                        'type'      => 'integer',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "無効フラグ 0：有効、1：無効"
                    ),
                    'postal_code' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 8,
                        'comment'   => "郵便番号",
                    ),
                    'address' => array(
                        'type'      => 'text',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "住所",
                    ),
                    'tel' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 15,
                        'comment'   => "電話番号",
                    ),
                    'gaiji_flg' => array(
                        'type'      => 'integer',
                        'null'      => true,
                        'default'   => '0',
                        'comment'   => "外字フラグ（0: なし, 1: あり）"
                    ),
                    'yobi1' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "予備",
                    ),
                    'yobi2' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "予備",
                    ),
                    'yobi3' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "予備",
                    ),
                    'yobi4' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "予備",
                    ),
                    'yobi5' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "予備",
                    ),
                    'data_checksum' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'length'    => 56,
                        'comment'   => "チェックサム",
                    ),
                    'error_flg' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => 0,
                        'length'    => 1,
                        'comment'   => "0:エラーなし 1:エラーあり",
                    ),
                    'error_hash' => array(
                        'type'      => 'string',
                        'null'      => true,
                        'default'   => NULL,
                        'comment'   => "エラーのハッシュ値. これをもとにCsvErrorのIDを紐付ける",
                    ),
                    'created' => array(
                        'type'      => 'datetime',
                        'null'      => true,
                        'default'   => NULL
                    ),
                    'modified' => array(
                        'type'      => 'datetime',
                        'null'      => true,
                        'default'   => NULL
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'id',
                            'unique' => 1,
                        ),
                        'user_id' => array(
                            'column' => array(
                                'user_id',
                            ),
                        ),
                        'setai_id' => array(
                            'column' => array(
                                'setai_id',
                            ),
                        ),
                        'kojin_id' => array(
                            'column' => array(
                                'kojin_id',
                            ),
                        ),
                        'kigou_bangou' => array(
                            'column' => array(
                                'hihokensha_kigou',
                                'hihokensha_number',
                            ),
                        ),
                        'tyokuzen_kojin_id' => array(
                            'column' => array(
                                'tyokuzen_kojin_id',
                            ),
                        ),
                        'tyokuzen_kigou_bangou' => array(
                            'column' => array(
                                'tyokuzen_hihokensha_kigou',
                                'tyokuzen_hihokensha_number',
                            ),
                        ),
                        'error_flg' => array(
                            'column' => 'error_flg',
                        ),
                        'error_hash' => array(
                            'column' => 'error_hash',
                        ),
                    ),
                    'tableParameters' => array(
                        'charset' => 'utf8',
                        'collate' => 'utf8_general_ci',
                        'engine'  => 'InnoDB',
                    ),
                ),
            ),
        ),
        'down' => array(
            'drop_table' => array(
                'users',
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
