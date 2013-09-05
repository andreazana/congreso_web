<h2>Tipos de Actividades</h2>
<?php if(empty($TipoActividades)): ?>
No Hay Actividades registradas
<?php else: ?>
        <table>
        <thead>
            <tr>
                <th>Tipo de Actividad</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach ($TipoActividades as $TipoActividade):?>
            <tr>               
                <td><?php echo $this->Html->link($TipoActividade['TipoActividade']['nombre'], array('action'=>'edit', $TipoActividade['TipoActividade']['id'])); ?></td>             
            </tr>
           <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<br>
<?php echo $this->Html->link('Añadir Tipo de Actividad', array('action' => 'add')); ?>
