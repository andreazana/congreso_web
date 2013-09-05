<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TipoActividadesController extends AppController
{
    public $helpers = array('Html','Form');
    
    //Pagina incial de Tipos de Actvidades
    function index()
    {
        //Buscar todas las actividades existentes y pasarlas a la vista
        $this->set('TipoActividades',$this->TipoActividade->find('all'));
    }
    
    //Metodo para agregar una nueva Actividad
   public function add()
    {
        if($this->request->is('post'))
        {
            if($this->TipoActividade->save($this->request->data))
            {
                $this->Session->setFlash('Tipo de Actividad guardada!');
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash("El tipo de actividad no ha podido ser salvada.  Inténtalo de nuevo.");
            }
        }
    }
    
    //Metodo para editar un tipo de actividad
    public function edit($id = null)
    {
        $this->TipoActividade->id=$id;
        if($this->request->is('get'))
        {
            $this->request->data=$this->TipoActividade->read();
        }
        else
        {
            if($this->TipoActividade->save($this->request->data))
            {
                $this->Session->setFlash("El Tipo de Actividad ha sido guardado");
                $this->redirect(array('action' => 'index'), null, true);
            }
            else
            {
                $this->Session->setFlash("El Tipo de Actividad no ha podido ser salvado.  Inténtalo de nuevo.");
            }
        }
    }
    
}

?>
