<?php  echo $this->Form->create('Ubicacione', array('action' => 'edit'));?>
<fieldset>
<legend>Editar Ubicacion</legend>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('nombre');
echo $this->Form->input('direccion');
echo $this->Form->input('telefono');
?>
</fieldset>
<?php echo $this->Form->end('Guardar');?>

<?php echo $this->Html->link('Listar Ubicaciones', array('action' => 'index')); ?>