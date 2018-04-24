 <?php
use Phalcon\Mvc\View;
class EditController extends ControllerBase{
 
 public function indexAction(){
	if($this->request->isPost()){
    $id=$this->session->get('id');
    $k=activities::findFirst("id='$id'");
    $k->name=trim($this->request->getPost('name'));
    $k->date=trim($this->request->getPost('day'));
    $k->detail=trim($this->request->getPost('detail'));
    $k->picture=trim($this->request->getPost('file'));
    $k->save();
    $this->response->redirect('event');
  }
  }

} 