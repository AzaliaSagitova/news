<?php

namespace app\models;
use yii\db\ActiveRecord;

class NewsForm extends ActiveRecord{

    public static function tableName(){
        return 'news';
    }

    public function attributeLabels(){
        return [
            'title' => 'Заголовок',
            'short' => 'Краткое описание новости',
            'text' => 'Текст',
        ];
    }

    public function rules(){
        return [
            [ ['title', 'short', 'text'], 'required', 'message' => 'Поле не должно быть пустым' ],
            [ 'text', 'trim' ],
        ];
    }
    
    // public function get_news(){

    //     global $link;

    //     $sql = "SELECT * FROM news";

    //     $result = mysqli_query($link, $sql);

    //     $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //     return $news;

    // }  


}
