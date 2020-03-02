<?php

use yii\db\Migration;

/**
 * Class m200228_133018_fill_data_into_genre_table
 */
class m200228_133018_fill_data_into_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('genre',
            ['name'],
            [
                ['genre 1'],
                ['genre 2'],
                ['genre 3'],
                ['genre 4'],
                ['genre 5']
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_133018_fill_data_into_genre_table cannot be reverted.\n";

        return false;
    }
    */
}
