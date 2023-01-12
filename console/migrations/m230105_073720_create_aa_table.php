<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%aa}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m230105_073720_create_aa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%aa}}', [ 
            'aa_id' => $this->integer(10)->notNull(),
            'aa_uname' => $this->string(100)->notNull(),
            'aa_pass' => $this->string(500)->notNull(),
            'aa_desc' => $this->string(512),
            'created_by' => $this->integer(10),
            'create_date' => $this->integer(20),
        ]);

        // add primary key
        $this->addPrimaryKey(
            '{{%fk-aa-aa_id}}',
            '{{%aa}}',
            'aa_id'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-aa-created_by}}',
            '{{%aa}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-aa-created_by}}',
            '{{%aa}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-aa-created_by}}',
            '{{%aa}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-aa-created_by}}',
            '{{%aa}}'
        );

        $this->dropTable('{{%aa}}');
    }
}
