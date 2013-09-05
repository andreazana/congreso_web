<?php  echo $this->Form->create('Paise', array('action' => 'edit'));?>
<fieldset>
    <legend>Editar un Pais</legend>
    <?php
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->input('nombre');        
    ?>
</fieldset>
<?php echo $this->Form->end('Guardar');?>

<?php echo $this->Html->link('Listar un Pais', array('action' => 'index')); ?>