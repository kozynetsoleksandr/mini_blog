<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m220719_205030_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text(1024)->notNull(),
            'slug' => $this->text(1024)->notNull(),
            'body' => $this->text()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),

        ]);

        $this->addForeignKey(
            'article_user_created_by_fk',  // это "условное имя" ключа
            'article', // это название текущей таблицы
            'created_by', // это имя поля в текущей таблице, которое будет ключом
            'user', // это имя таблицы, с которой хотим связаться
            'id' // это поле таблицы, с которым хотим связаться
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article}}');

        //Добавляем удаление внешнего ключа
        $this->dropForeignKey(
            'created_by',
            'user'
        );
    }
}
