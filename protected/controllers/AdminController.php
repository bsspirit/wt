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
			array('allow', 
				'actions'=>array('index','messages','messageDelete','wikis','wikiAdd','wikiDelete','wikiUpdate','wikiImage','upload'),//'create','update','admin','delete','image','upload'),//'view'
				'users'=>array('@'),
			),
			array('deny',
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
	 * 百科增加
	 */
	public function actionWikiAdd(){
		$model=new Wiki;
		if(isset($_POST['Wiki'])){
			$model->attributes=$_POST['Wiki'];
			$model->ip=$_SERVER['REMOTE_ADDR'];
			if($model->save()){
				$this->redirect(array('Wikis'));
			}
		}

		$this->render('wikiAdd',array(
			'model'=>$model,
		));
	}
	
	/*
	 * 百科修改
	 */
	public function actionWikiUpdate($id){
		$model=Wiki::model()->findByPk($id);
		if(isset($_POST['Wiki'])){
			$model->attributes=$_POST['Wiki'];
			if($model->save()){
				$this->redirect(array('Wikis'));
			}
		}
		$this->render('wikiUpdate',array(
			'model'=>$model,
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
	
	/*
	 * 百科标题图片
	 */
	public function actionWikiImage()
	{
		$form = new UploadForm;
		$folder = '/upfiles/image/';
		$id = $_REQUEST['id'];
		$model=Wiki::model()->findByPk($id);
		if (isset($_POST['UploadForm'])) {
	        if ($form->validate()) {
	            $form->image = CUploadedFile::getInstance($form, 'image');
	            $name = $folder . $id . substr($form->image->name,strripos($form->image->name,'.'));
	            $file= dirname(Yii::app()->request->scriptFile) . $name;
	            $form->image->saveAs($file);
	            $model->image=$name;
	            $model->save(false);
	        }
	    }
		$this->render('wikiImage',array(
			'model'=>$model,
			'form'=>$form,
		));
	}
	
	/*
	 * 上传文件
	 */
	public function actionUpload(){
		$php_url = Yii::app()->request->baseUrl;
		$folder = '/upfiles/image2/';
		
		$ext_arr = array(//定义允许上传的文件扩展名
			'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
			'flash' => array('swf', 'flv'),
			'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
			'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
		);
		
		$max_size = 1024*1024;
		$save_path=realpath('.').$folder;//文件保存目录
		$save_url = $php_url . $folder;//文件保存目录URL

    	//有上传文件时
		if (empty($_FILES) === false) {
			$file_name = $_FILES['imgFile']['name'];//原文件名
			$tmp_name = $_FILES['imgFile']['tmp_name'];//服务器上临时文件名
			$file_size = $_FILES['imgFile']['size'];//文件大小
			
			if (!$file_name) {//检查文件名
				echo "请选择文件。";exit;
			}
			
			if (is_dir($save_path) === false) {//检查目录
				echo "上传目录不存在。";exit;
			}
			
			if (is_writable($save_path) === false) {//检查目录写权限
				echo "上传目录没有写权限。";exit;
			}

			if (is_uploaded_file($tmp_name) === false) {//检查是否已上传
				echo "临时文件可能不是上传文件。";exit;
			}
			
			if ($file_size > $max_size) {//检查文件大小
				echo "上传文件大小超过1MB限制。";exit;
			}

			$dir_name = empty($_REQUEST['dir']) ? 'image' : trim($_REQUEST['dir']); 
			if (empty($ext_arr[$dir_name])) {//检查目录名
				echo "目录名不正确。";exit;
			}
			
			//获得文件扩展名
			$temp_arr = explode(".", $file_name);
			$file_ext = array_pop($temp_arr);
			$file_ext = trim($file_ext);
			$file_ext = strtolower($file_ext);
			
			$new_file_name = date("YmdHis") . '_' . rand(1, 100) . '.' . $file_ext;//新文件名
			$file_path = $save_path . $new_file_name;//移动文件

			if (move_uploaded_file($tmp_name, $file_path) === false) {
				echo "上传文件失败。";exit;
			}
			
			chmod($file_path, 0644);
			$file_url = $save_url . $new_file_name;
			
			header('Content-type: text/html; charset=UTF-8');
			$json = array('error' => 0, 'url' => $file_url);
			echo CJSON::encode($json);
			Yii::app()->end(); 
		}
	}
}