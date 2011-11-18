<?php

class AdminController extends Controller
{
	public $layout='//layouts/column2';
	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','messages','messageDelete','wikis','wikiDelete'),//'create','update','admin','delete','image','upload'),//'view'
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$this->render('index',array());
	}
	
	/*
	 * 留言板管理
	 */
	public function actionMessages(){
		$model=new Message('search');
		$model->unsetAttributes();
		if(isset($_GET['Message'])){
			$model->attributes=$_GET['Message'];
		}
		
		$this->render('messages',array(
			'dataProvider'=>$model->search(),
		));
	}
	
	/*
	 * 留言板删除
	 */
	public function actionMessageDelete($id){
		$model=Message::model()->findByPk($id);
		$model->mark=1;
		$model->save();
		$this->redirect(array('messages'));
	}
	
	/*
	 * 百科管理
	 */
	public function actionWikis(){
		$model=new Wiki('search');
		$model->unsetAttributes();
		if(isset($_GET['Wiki'])){
			$model->attributes=$_GET['Wiki'];
		}
		
		$this->render('wikis',array(
			'dataProvider'=>$model->search(),
		));
	}
	
	/*
	 * 百科删除
	 */
	public function actionWikiDelete($id){
		$model=Wiki::model()->findByPk($id);
		$model->mark=1;
		$model->save();
		$this->redirect(array('wikis'));
	}
}