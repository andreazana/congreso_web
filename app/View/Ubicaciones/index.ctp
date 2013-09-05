<h2>Ubicaciones</h2>
<?php if(empty($ubicaciones)): ?>
No hay ubicaciones en la tabla
<?php else: ?>
<table>
<tr>
<th>nombre</th>
<th>direccion</th>
<th>telefono</th>
</tr>
<?php foreach ($ubicaciones as $ubicacione): ?>
<tr>
<td>
<?php echo $this->Html->link($ubicacione['Ubicacione']['nombre'], array('action'=>'edit', $ubicacione['Ubicacione']['id'])); ?>
</td>
<td>
<?php echo $ubicacione['Ubicacione']['direccion'] ?>
</td>
<td>
<?php echo $ubicacione['Ubicacione']['telefono'] ?>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

<br>
<?php echo $this->Html->link('Añadir Ubicacion', array('action' => 'add')); ?>