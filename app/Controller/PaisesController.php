<?php
class PaisesController extends AppController{
    
    public function index(){
        $this->set('paises', $this->paginate());
    }
    
    //se utiliza para agregar un nuevo pais
    public function add(){
        if($this->request->is('post')){        
            if($this->Paise->save($this->request->data)){
                    $this->Session->setFlash('Pais Guardado!');
                    $this->redirect(array('action' => 'index'));
            }else{
                $this->Session->setFlash("El pais no ha podido ser guardado.  Inténtalo de nuevo.");
            }
        }
    }
    
    //se utiliza para poder editar la informacion de un pais
    function edit($id = null) {
        $this->Paise->id=$id;
        if($this->request->is('get')){
            $this->request->data=$this->Paise->read();                       
        }else{
            if($this->Paise->save($this->request->data)){
                $this->Session->setFlash("El pais a sido guardado");
		$this->redirect(array('action' => 'index'), null, true);
            }else{
                $this->Session->setFlash("El pais no ha podido ser guardado.  Inténtalo de nuevo.");
            }
        }        
    }
}
?>
