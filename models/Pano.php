<?php

namespace kouosl\pano\models;

use Yii;

/**
 * This is the model class for table "pano".
 *
 * @property int $id
 * @property string $konu
 * @property string $kaynak
 * @property string $duyuru
 * @property string $ad
 * @property string $soyad
 * @property string $unvan
 * @property string $meslek
 * @property string $tarih
 */
class Pano extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pano';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['konu', 'kaynak', 'ad', 'soyad', 'unvan', 'meslek'], 'required'],
            [['duyuru'], 'string'],
            [['tarih'], 'safe'],
            [['konu'], 'string', 'max' => 20],
            [['kaynak'], 'string', 'max' => 150],
            [['ad', 'soyad', 'unvan'], 'string', 'max' => 30],
            [['meslek'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'konu' => 'Konu',
            'kaynak' => 'Kaynak',
            'duyuru' => 'Duyuru',
            'ad' => 'Ad',
            'soyad' => 'Soyad',
            'unvan' => 'Unvan',
            'meslek' => 'Meslek',
            'tarih' => 'Tarih',
        ];
    }
}
