<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m200302_155445_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'text' => $this->text()->notNull(),
            'instance_name' => $this->string()->notNull(),
            'instance_record_id' => $this->integer()->notNull(),
            'create_at' => $this->timestamp(),
            'parent_id' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk-comment-parent-id',
            'comment',
            'parent_id',
            'comment',
            'id',
            'cascade',
            'cascade'
        );

        $this->addForeignKey(
            'fk-comment-user-id',
            'comment',
            'user_id',
            'user',
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
        $this->dropForeignKey('fk-comment-parent-id', 'comment');
        $this->dropForeignKey('fk-comment-user-id', 'comment');

        $this->dropTable('{{%comment}}');
    }
}
