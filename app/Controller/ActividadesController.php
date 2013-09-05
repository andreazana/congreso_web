<?php
App::import('Model', 'Ubicacione');
App::import('Model', 'TipoActividade');
App::import('Model', 'Conferencista');
class ActividadesController extends AppController{
    public $helpers = array('Html', 'Form');
    
    //se utiliza para crear una consulta y mostrar actividades
    //select * from actividades
    function index() {       
	$this->set('actividades', $this->Actividade->find('all'));
    }
    
    //se utiliza para agregar una nueva actividad
    public function add(){
        if($this->request->is('post')){
            //print_r( $this->request->data);
               // $var1= $this->request->data->find('list', array('fields' => array('i', 'Paise.nombre')));
                if($this->Actividade->save($this->request->data)){
                        $this->Session->setFlash('Actividad agregado!');
                        $this->redirect(array('action' => 'index'));
                }else{
                    $this->Session->setFlash("La Tarea no ha podido ser salvada.  Inténtalo de nuevo.");
                }
        }else{
            $ubicacione=new Ubicacione();
            $ubicaciones= $ubicacione->find('list', array('fields' => array('Ubicacione.id', 'Ubicacione.nombre')));
            $this->set('ubicaciones', $ubicaciones);
            
            $tipoActividade=new TipoActividade();
            $tipoActividades= $tipoActividade->find('list', array('fields' => array('TipoActividade.id', 'TipoActividade.nombre')));
            $this->set('tipoActividades', $tipoActividades);
            
            $conferencista=new Conferencista();
            $conferencistas= $conferencista->find('list', array('fields' => array('Conferencista.id', 'Conferencista.nombre')));
            $this->set('conferencistas', $conferencistas);
        }
    }
    
    //se utiliza para poder editar la informacion de una ubicacion
    function edit($id = null) {
        $this->Actividade->id=$id;
        if($this->request->is('get')){
            $this->request->data=$this->Actividade->read();           
            
            $ubicacione=new Ubicacione();
            $ubicaciones= $ubicacione->find('list', array('fields' => array('Ubicacione.id', 'Ubicacione.nombre')));
            $this->set('ubicaciones', $ubicaciones);
            
            $tipoActividade=new TipoActividade();
            $tipoActividades= $tipoActividade->find('list', array('fields' => array('TipoActividade.id', 'TipoActividade.nombre')));
            $this->set('tipoActividades', $tipoActividades);
            
            $conferencista=new Conferencista();
            $conferencistas= $conferencista->find('list', array('fields' => array('Conferencista.id', 'Conferencista.nombre')));
            $this->set('conferencistas', $conferencistas);
        }else{
            if($this->Actividade->save($this->request->data)){
                $this->Session->setFlash("La actividad a sido salvada");
		$this->redirect(array('action' => 'index'), null, true);
            }else{
                $this->Session->setFlash("La Tarea no ha podido ser salvada.  Inténtalo de nuevo.");
            }
        }        
    }
    

    
    
}
?>
