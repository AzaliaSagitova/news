<?php

namespace app\controllers;

use app\models\News;
use app\models\Sections;
use Yii;
use app\models\NewsForm;

class NewsController extends AppController{

	public $layout = 'basic';

    public function actionStart(){
    	$this->view->title = 'Главная';
   		// $news = News::find()->asArray()->where('mark=1')->all();
   		$query = "SELECT * FROM news WHERE mark LIKE '1'";
   		$news = News::findBySql($query)->all();
    	return $this->render('start', compact('news'));
    }

    public function actionAllNews(){
    	$this->view->title = 'Все новости';
        $query = "SELECT * FROM news";
        $news = News::findBySql($query)->all();
    	return $this->render('all-news', compact('news'));
    	
    }

    public function actionPost(){
    	$this->view->title = 'Отдельная новость';

        $post_id = Yii::$app->request->get('post_id');
        // echo '<pre>' . print_r($post_id, true) . '</pre>';
        $post = News::find()->where(['id' => $post_id])->one();
        $section_id = Yii::$app->request->get('name');
        // echo '<pre>' . print_r($section_id, true) . '</pre>';
        $name = News::find()->where(['section_id' => $section_id])->andWhere(['not in','id',$post_id])->limit(5)->all();
        
    	return $this->render('post', compact('post', 'name'));
    }

    public function actionSearch(){
        $user_query = Yii::$app->request->get('q');
        // $query = "SELECT * FROM news, sections where news.section_id = sections.id";
        // $results = News::find()->where(['section_id' => $user_query])->all();

        $results = News::find()->where(['like', 'title', $user_query])->all();
        // echo '<pre>' . print_r($user_query, true) . '</pre>';
        // echo '<pre>' . print_r($results, true) . '</pre>';
        return $this->render('search', compact('results'));
    }

    public function actionInsert(){

    	$model = new NewsForm();

    	if ( $model->load(Yii::$app->request->post()) ){
    		if( $model->save() ){
    			Yii::$app->session->setFlash('success', 'Новость создана');
    			return $this->refresh();
    		}else{
    			Yii::$app->session->setFlash('error', 'Ошибка');
    		}
    	}

    	$this->view->title = 'Создать новость';
    	return $this->render('insert', compact('model'));
    }
}