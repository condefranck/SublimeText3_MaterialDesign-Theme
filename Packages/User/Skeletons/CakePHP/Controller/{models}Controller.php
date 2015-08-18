<?php
class {models}Controller extends AppController{

    public function admin_index(){
        ${models|l} = $this->Paginate('{model}');
        $this->set(compact('{models|l}'));
    }

    public function admin_edit($id = null){
        if (!empty($this->request->data)) {
            $this->{model}->save($this->request->data);
            $this->Session->setFlash("{genre} {name|l} a bien été sauvegardé","TodoTheme.flash");
            return $this->redirect(array('action' => 'index'));
        }
        if($id){
            $this->request->data = $this->{model}->findById($id);
        }
    }

    public function admin_delete($id){
        $this->{model}->delete($id);
        $this->Session->setFlash("{genre} {name|l} a bien été supprimé","TodoTheme.flash");
        return $this->redirect($this->referer());
    }


}