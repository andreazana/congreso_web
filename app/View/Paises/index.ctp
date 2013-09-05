<h2>Paises</h2>
<?php if(empty($paises)): ?>
No hay paises en la tabla
<?php else: ?>
    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('nombre'); ?></th>          
        </tr>
        <?php foreach ($paises as $paise): ?>
            <tr>
                <td><?php echo $paise['Paise']['id']; ?></td>                                
                <td><?php echo $this->Html->link($paise['Paise']['nombre'], array('action'=>'edit', $paise['Paise']['id'])); ?></td>                                
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<br>
<?php echo $this->Html->link('Añadir Pais', array('action' => 'add')); ?>