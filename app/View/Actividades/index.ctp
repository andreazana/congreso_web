<h2>Actividades</h2>
<?php if(empty($actividades)): ?>
No hay ubicaciones en la tabla
<?php else: ?>
<table>
<tr>
<th>No.</th>    
<th>Fecha</th>
<th>Tipo</th>
<th>Nombre</th>
<th>Facilitador</th>
<th>Ubicacion</th>
<th>Capacidad</th>
</tr>

<?php foreach ($actividades as $actividade): ?>
<tr>
    <td>
        <?php echo $actividade['Actividade']['id'] ?>
    </td>
    <td>
        <?php echo $actividade['Actividade']['fecha_hora'] ?>
    </td>
    <td>
        <?php echo $actividade['TipoActividade']['nombre'] ?>        
    </td>
    <td>
        <?php echo $this->Html->link($actividade['Actividade']['nombre'], array('action' => 'edit', $actividade['Actividade']['id'])) ?>
    </td>
    <td>
        <?php echo $actividade['Conferencista']['nombre'] ?>
    </td>
    <td>
        <?php echo $actividade['Ubicacione']['nombre'] ?>
    </td>
    <td>
        <?php echo $actividade['Actividade']['capacidad'] ?>
    </td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

<br>
<?php echo $this->Html->link('Añadir Actividad', array('action' => 'add')); ?>