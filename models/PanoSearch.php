<?php

namespace kouosl\pano\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\pano\models\Pano;

/**
 * PanoSearch represents the model behind the search form of `kouosl\pano\models\Pano`.
 */
class PanoSearch extends Pano
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['konu', 'kaynak', 'duyuru', 'ad', 'soyad', 'unvan', 'meslek', 'tarih'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pano::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tarih' => $this->tarih,
        ]);

        $query->andFilterWhere(['like', 'konu', $this->konu])
            ->andFilterWhere(['like', 'kaynak', $this->kaynak])
            ->andFilterWhere(['like', 'duyuru', $this->duyuru])
            ->andFilterWhere(['like', 'ad', $this->ad])
            ->andFilterWhere(['like', 'soyad', $this->soyad])
            ->andFilterWhere(['like', 'unvan', $this->unvan])
            ->andFilterWhere(['like', 'meslek', $this->meslek]);

        return $dataProvider;
    }
}
