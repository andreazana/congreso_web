<?php
class UbicacionesController extends AppController{
    public $helpers = array('Html', 'Form');
    
    //se utiliza para crear una consulta y mostrar las ubicaciones
    //select * from ubucaciones
    function index() {       
	$this->set('ubicaciones', $this->Ubicacione->find('all'));
    }
    
    //se utiliza para agregar una nueva ubicacion
    public function add(){
        if($this->request->is('post')){
            //print_r( $this->request->data);
               
                if($this->Ubicacione->save($this->request->data)){
                        $this->Session->setFlash('Ubicacion Agregada!');
                        $this->redirect(array('action' => 'index'));
                }else{
                    $this->Session->setFlash("La Tarea no ha podido ser salvada.  Inténtalo de nuevo.");
                }
        }
    }
    
    //se utiliza para poder editar la informacion de una ubicacion
    function edit($id = null) {
        $this->Ubicacione->id=$id;
        if($this->request->is('get')){
            $this->request->data=$this->Ubicacione->read();           
            
        }else{
            if($this->Ubicacione->save($this->request->data)){
                $this->Session->setFlash("La ubicacion a sido salvada");
		$this->redirect(array('action' => 'index'), null, true);
            }else{
                $this->Session->setFlash("La Tarea no ha podido ser salvada.  Inténtalo de nuevo.");
            }
        }        
    }
}
?>
