<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%achievement}}".
 *
 * @property int $id
 * @property string|null $ach_name
 * @property string|null $description
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Achievement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%achievement}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['created_at', 'created_by', 'updated_at'], 'integer'],
            [['ach_name'], 'string', 'max' => 100],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::class,
            [
                'class' => \yii\behaviors\BlameableBehavior::class,
                'updatedByAttribute' => false,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ach_name' => 'Ach Name',
            'description' => 'Description',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Finds model based on who created it
     *
     * @param int $createdBy
     * @return static|null
     */
    public static function findByCreator($createdBy)
    {
        return static::find()->creator($createdBy)->all();
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AchievementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AchievementQuery(get_called_class());
    }
}
