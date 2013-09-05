<?php  echo $this->Form->create('Paise');?>
<fieldset>
    <legend>Agregar un pais</legend>
    <?php        
        echo $this->Form->input('nombre');        
    ?>
</fieldset>
<?php echo $this->Form->end('Guardar');?>

<?php echo $this->Html->link('Listar Paises', array('action' => 'index')); ?>