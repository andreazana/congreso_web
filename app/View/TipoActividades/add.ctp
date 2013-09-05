<?php
echo $this->Form->create('TipoActividade');
?>
<fieldset>
    <legend>Agregar nueva Tipo de Actividad</legend>
    <?php
    echo $this->Form->input('nombre');
    ?>
</fieldset>
<?php
    echo $this->Form->end('Guardar');//Intentar guardar la nueva actividad
    echo $this->Html->link('Listar Tipos de Actividades', array('action' => 'index'));
?>