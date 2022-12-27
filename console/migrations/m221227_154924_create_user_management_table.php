<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_management}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%username}}`
 * - `{{%username}}`
 */
class m221227_154924_create_user_management_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_management}}', [
            'user_id' => $this->integer(100)->notNull(),
            'username' => $this->string(10)->notNull(),
            'password' => $this->string(512)->notNull(),
            'fullname' => $this->string(512)->notNull(),
            'email' => $this->string(100)->notNull(),
            'role' => $this->string(50)->notNull(),
            'group' => $this->string(50)->notNull(),
            'status' => $this->integer(1)->notNull(),
            'create_by' => $this->string(50)->notNull(),
            'create_date' => $this->integer(20)->notNull(),
            'update_by' => $this->string(50)->notNull(),
            'update_date' => $this->integer(20)->notNull(),
            'remark' => $this->text(),
        ]);

        // add primary key for table `{{%username}}`
        $this->addPrimaryKey(
            '{{%fk-user_management-user_id}}',
            '{{%user_management}}',
            'user_id'
        );


        // // creates index for column `create_by`
        // $this->createIndex(
        //     '{{%idx-user_management-create_by}}',
        //     '{{%user_management}}',
        //     'create_by'
        // );

        // // add foreign key for table `{{%username}}`
        // $this->addForeignKey(
        //     '{{%fk-user_management-create_by}}',
        //     '{{%user_management}}',
        //     'create_by',
        //     '{{%username}}',
        //     'user_id',
        //     'CASCADE'
        // );

        // // creates index for column `update_by`
        // $this->createIndex(
        //     '{{%idx-user_management-update_by}}',
        //     '{{%user_management}}',
        //     'update_by'
        // );

        // // add foreign key for table `{{%username}}`
        // $this->addForeignKey(
        //     '{{%fk-user_management-update_by}}',
        //     '{{%user_management}}',
        //     'update_by',
        //     '{{%username}}',
        //     'user_id',
        //     'CASCADE'
        // );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // // drops foreign key for table `{{%username}}`
        // $this->dropForeignKey(
        //     '{{%fk-user_management-create_by}}',
        //     '{{%user_management}}'
        // );

        // // drops index for column `create_by`
        // $this->dropIndex(
        //     '{{%idx-user_management-create_by}}',
        //     '{{%user_management}}'
        // );

        // // drops foreign key for table `{{%username}}`
        // $this->dropForeignKey(
        //     '{{%fk-user_management-update_by}}',
        //     '{{%user_management}}'
        // );

        // // drops index for column `update_by`
        // $this->dropIndex(
        //     '{{%idx-user_management-update_by}}',
        //     '{{%user_management}}'
        // );

        $this->dropTable('{{%user_management}}');
    }
}
