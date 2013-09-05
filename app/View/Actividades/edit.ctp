<?php  echo $this->Form->create('Actividade', array('action' => 'edit'));?>
<fieldset>
<legend>Editar Actividade</legend>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('nombre');
echo $this->Form->input('fecha_hora');
echo $this->Form->input('capacidad');

echo $this->Form->input('ubicacione_id', array(
    'type' => 'select',
    'options' => $ubicaciones,
    'empty' => false
));

echo $this->Form->input('tipo_actividade_id', array(
    'type' => 'select',
    'options' => $tipoActividades,
    'empty' => false
));

echo $this->Form->input('conferencista_id', array(
    'type' => 'select',
    'options' => $conferencistas,
    'empty' => false
));

?>
</fieldset>
<?php echo $this->Form->end('Guardar');?>

<?php echo $this->Html->link('Listar Actividades', array('action' => 'index')); ?>