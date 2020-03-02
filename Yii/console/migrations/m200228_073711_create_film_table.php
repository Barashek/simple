<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%film}}`.
 */
class m200228_073711_create_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('film', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'producer_id'=>$this->integer()->notNull()
        ]);

        $this->addForeignKey(
            'fk-film-producer-id',
            'film',
            'producer_id',
            'producer',
            'id',
            'cascade',
            'cascade'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-film-producer-id',
            'film'
        );

        $this->dropTable('film');
    }
}
