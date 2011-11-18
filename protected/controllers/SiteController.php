<?php

class SiteController extends Controller
{
	
	/*
	 * 品味白茶
	 */
	public function actionDrink(){
		$this->render('drink',array(
		));
	}
	
	/*
	 * 实景照片
	 */
	public function actionPhoto(){
		$this->render('photo',array(
		));
	}
	
	/*
	 * 购买咨询
	 */
	public function actionConsult(){
		$this->render('consult',array(
		));
	}
	
	/*
	 * 白茶百科列表
	 */
	public function actionWikis(){
		$model = new Wiki();
		$dataProvider = $model->search(30);
		$this->render('wikis',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/*
	 * 白茶百科 
	 */
	public function actionWiki($id){
		$model=Wiki::model()->findByPk($id);
		$prev = Wiki::model()->findByPk(($id-1));
		$next = Wiki::model()->findByPk(($id+1));
		
		$stat = WikiStat::model()->find('wkid=:wkid and operate=:op',array(':wkid'=>$id,':op'=>'pv'));
		if(empty($stat)){
			$stat = new WikiStat();
			$stat->wkid=$id;
			$stat->count=1;
			$stat->operate='pv';
			$stat->save();
		} else {
			$stat->count = $stat->count+1;
			$stat->save();	
		}
		$this->render('wiki',array(
			'model'=>$model,
			'stat'=>$stat,
			'prev'=>$prev,
			'next'=>$next,
		));
	}
	
	/*
	 * 留言板
	 */
	public function actionMessage(){
		$model = new Message();
		$dataProvider = $model->search(10);
		$this->render('message',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}