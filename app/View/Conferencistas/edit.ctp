<?php  echo $this->Form->create('Conferencista', array('action' => 'edit'));?>
<fieldset>
<legend>Editar Conferencista</legend>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('nombre');
echo $this->Form->input('numero_celular');
echo $this->Form->input('numero_trabajo');
echo $this->Form->input('e_mail');
echo $this->Form->input('paise_id');
?>
</fieldset>
<?php echo $this->Form->end('Guardar');?>

<?php echo $this->Html->link('Listar Conferencistas', array('action' => 'index')); ?>