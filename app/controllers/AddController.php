<?php
use Phalcon\Mvc\View;
class AddController extends ControllerBase{
 
 public function indexAction(){
	if($this->request->isPost()){
    $N1=new Event();
    $N1->name = trim($this->request->getPost('name')); // รับค่าจาก form
    $N1->date = trim($this->request->getPost('date')); // รับค่าจาก form
    $N1->detail=trim($this->request->getPost('detail'); 
    $N1->picture=trim($this->require->getPost('file'));
    $N1->save();
    $this->response->redirect('event');
  }
 }
}