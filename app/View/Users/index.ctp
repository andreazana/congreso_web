<h2>Usuarios</h2>
<?php if(empty($users)): ?>
No hay usuarios en la tabla
<?php else: ?>
    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('username'); ?></th>
            <th><?php echo $this->Paginator->sort('password'); ?></th>          
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['User']['username']; ?></td>                                
                <td><?php echo $user['User']['password']; ?></td>                                
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<br>
<?php echo $this->Html->link('Añadir Usuario', array('action' => 'add')); ?>