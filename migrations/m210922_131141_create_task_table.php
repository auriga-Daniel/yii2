<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m210922_131141_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task}}', [
            'id'          => $this->primaryKey(),
            'title'       => $this->string()->notNull(),
            'description' => $this->text()->null(),
            'active'      => $this->boolean()->defaultValue(true),
            'created_at'  => $this->dateTime()->defaultValue(date('Y-m-d H:i:s'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task}}');
    }
}
