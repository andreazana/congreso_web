<h2>Conferencistas</h2>
<?php if(empty($conferencistas)): ?>
No hay conferencistas en la tabla
<?php else: ?>
    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('nombre'); ?></th>
            <th><?php echo $this->Paginator->sort('numero_celular'); ?></th>
            <th><?php echo $this->Paginator->sort('numero_trabajo'); ?></th>
            <th><?php echo $this->Paginator->sort('e_mail'); ?></th>
            <th><?php echo $this->Paginator->sort('paise_id', 'Pais'); ?></th>            
        </tr>
        <?php foreach ($conferencistas as $conferencista): ?>
            <tr>
                <td>
                    <?php echo $this->Html->link($conferencista['Conferencista']['nombre'], array('action' => 'edit', $conferencista['Conferencista']['id'])); ?>
                </td>
                <td>
                    <?php echo $conferencista['Conferencista']['numero_celular'] ?>
                </td>
                <td>
                    <?php echo $conferencista['Conferencista']['numero_trabajo'] ?>
                </td>
                <td>
                    <?php echo $conferencista['Conferencista']['e_mail'] ?>
                </td>
                <td>
                    <?php echo $conferencista['Paise']['nombre'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<br>
<?php echo $this->Html->link('Añadir Conferencista', array('action' => 'add')); ?>