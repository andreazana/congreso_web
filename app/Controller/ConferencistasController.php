<?php
class ConferencistasController extends AppController{
    public $helpers = array('Html', 'Form');
    
    function index() {         
	$this->set('conferencistas', $this->paginate());
    }
    
    //se utiliza para agregar un nuevo conferencista
    public function add(){
        if($this->request->is('post')){            
                if($this->Conferencista->save($this->request->data)){
                        $this->Session->setFlash('Confenrencista agregado!');
                        $this->redirect(array('action' => 'index'));
                }else{
                    $this->Session->setFlash("El conferencista no pudo guardarse.  Inténtalo de nuevo.");
                }
        }
        $paises = $this->Conferencista->Paise->find('list');        
        $this->set(compact('paises'));     
    }
    
    //se utiliza para poder editar la informacion de un conferencista
    function edit($id = null) {
        $this->Conferencista->id=$id;
        if($this->request->is('get')){
            $this->request->data=$this->Conferencista->read();
            $paises = $this->Conferencista->Paise->find('list');        
            $this->set(compact('paises'));           
        }else{
            if($this->Conferencista->save($this->request->data)){
                $this->Session->setFlash("El conferencista ha sido guardado");
		$this->redirect(array('action' => 'index'), null, true);
            }else{
                $this->Session->setFlash("El conferencista no ha podido ser guardado.  Inténtalo de nuevo.");
            }
        }        
    }

}
?>






