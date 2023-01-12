<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_management}}".
 *
 * @property int $user_id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $email
 * @property string $role
 * @property string $group
 * @property int $status
 * @property string $create_by
 * @property int $create_date
 * @property string $update_by
 * @property int $update_date
 * @property string|null $remark
 */
class UserManagement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_management}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'password', 'fullname', 'email', 'role', 'group', 'status', 'create_by', 'create_date'], 'required'],
            [['user_id', 'status', 'create_date', 'update_date'], 'integer'],
            [['remark'], 'string'],
            [['username'], 'string', 'max' => 20],
            [['password', 'fullname'], 'string', 'max' => 512],
            [['email'], 'string', 'max' => 100],
            [['role', 'group', 'create_by', 'update_by'], 'string', 'max' => 50],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'fullname' => 'Full Name',
            'email' => 'Email',
            'role' => 'User Role',
            'group' => 'User Group',
            'status' => 'User Status',
            'create_by' => 'Created By',
            'create_date' => 'Created Date',
            'update_by' => 'Updated By',
            'update_date' => 'Updated Date',
            'remark' => 'Remark',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UserManagementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserManagementQuery(get_called_class());
    }
}
