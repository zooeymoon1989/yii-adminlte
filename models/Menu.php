<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Expression;
use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 * @property string $url
 * @property string $icon
 * @property integer $is_show
 * @property string $create_time
 * @property integer $create_name
 * @property string $update_time
 * @property integer $update_name
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'create_name', 'update_name'], 'required'],
            [['parent_id', 'is_show', 'create_name', 'update_name'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['name', 'icon'], 'string', 'max' => 50],
            [['url'], 'string', 'max' => 100],
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_at', 'update_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['update_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
            'url' => 'Url',
            'icon' => 'Icon',
            'is_show' => 'Is Show',
            'create_time' => 'Create Time',
            'create_name' => 'Create Name',
            'update_time' => 'Update Time',
            'update_name' => 'Update Name',
        ];
    }
}
