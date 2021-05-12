<?php

namespace app\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord {
	public static function tableName(){
		return 'news';
	}

	public function getSections(){
		return $this->hasOne(Sections::className(), ['id' => 'section_id']);
	}

}