<?php echo $this->Form->create('TipoActividade',array('action' => 'edit'));
?>

<fieldset>
    <legend>Editar Tipo de Actividad </legend>
    
    <?php
        echo $this->Form->input('id',array('type' => 'hidden'));
        echo $this->Form->input('nombre');
    ?>
</fieldset>
<?php echo $this->Form->end('Guardar');
echo $this->Html->link('Listar Tipo de Actividades', array('action' => 'index'));
?>