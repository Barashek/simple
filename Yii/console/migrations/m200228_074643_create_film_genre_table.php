<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%film_genre}}`.
 */
class m200228_074643_create_film_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('film_genre', [
            'id'=>$this->primaryKey(),
            'film_id' => $this->integer(),
            'genre_id' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk-film-genre-id',
            'film_genre',
            'film_id',
            'film',
            'id',
            'cascade',
            'cascade'
        );
        $this->addForeignKey(
            'fk-genre-film-id',
            'film_genre',
            'genre_id',
            'genre',
            'id',
            'cascade',
            'cascade'
        );

        $this->createIndex(
            'id',
            'film_genre',
            array('film_id','genre_id'),
            true
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-genre-film-id', 'film_genre');
        $this->dropForeignKey('fk-film-genre-id', 'film_genre');

        $this->dropIndex('id', 'film_genre');

        $this->dropTable('{{%film_genre}}');
    }
}
