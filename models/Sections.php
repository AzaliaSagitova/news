<?php

namespace app\models;

use yii\db\ActiveRecord;

class Sections extends ActiveRecord {

	public static function tableName(){
		return 'sections';
	}

	public function getNews(){
		return $this->hasMany(News::className(), ['section_id' => 'id']);
	}

}