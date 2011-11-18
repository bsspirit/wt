<?php 
class menuWidget extends CWidget
{  
	public $page;
	  
    public function init()
    {
    	
    }
 
    public function run()
    {
        $this->render('menu', array(
        	'page'=>$this->page,
        ));
    }
}
?>