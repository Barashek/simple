<?php

use yii\db\Migration;

/**
 * Class m200228_125611_fill_data_into_film_genre_table
 */
class m200228_125611_fill_data_into_producer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('producer',
            ['name'],
            [
                ['producer 1'],
                ['producer 2'],
                ['producer 3'],
                ['producer 4'],
                ['producer 5'],
                ['producer 6']
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
        echo "m200228_125611_fill_data_into_film_genre_table cannot be reverted.\n";

        return false;
    }
    */
}
