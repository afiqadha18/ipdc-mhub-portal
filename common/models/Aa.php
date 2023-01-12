<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%aa}}".
 *
 * @property int $aa_id
 * @property string $aa_uname
 * @property string $aa_pass
 * @property string|null $aa_desc
 * @property int|null $created_by
 * @property int|null $create_date
 *
 * @property User $createdBy
 */
class Aa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%aa}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aa_id', 'aa_uname', 'aa_pass'], 'required'],
            [['aa_id', 'created_by', 'create_date'], 'integer'],
            [['aa_uname'], 'string', 'max' => 100],
            [['aa_pass'], 'string', 'max' => 500],
            [['aa_desc'], 'string', 'max' => 512],
            [['aa_id'], 'unique'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aa_id' => 'Aa ID',
            'aa_uname' => 'Aa Uname',
            'aa_pass' => 'Aa Pass',
            'aa_desc' => 'Aa Desc',
            'created_by' => 'Created By',
            'create_date' => 'Create Date',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * {@inheritdoc}
     * @return AaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AaQuery(get_called_class());
    }
}
