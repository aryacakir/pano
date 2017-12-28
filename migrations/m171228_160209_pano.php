<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m171228_160209_pano extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
       $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pano}}', [
            'id' => $this->primaryKey(),
            'konu' => $this->string(20)->notNull(),
			'kaynak' => $this->string(150)->notNull(),
			'duyuru' => $this->text(),
			'ad' => $this->string(30)->notNull(),
			'soyad' => $this->string(30)->notNull(),
			'unvan' => $this->string(30)->notNull(),
			'meslek' => $this->string(40)->notNull(),
			'tarih' => $this->datetime()
			
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        echo "m171218_163956_basvuru cannot be reverted.\n";
$this->dropTable('{{%pano}}');
        return false;
    }
}
