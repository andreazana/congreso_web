<h2>Bienvenido Administrador</h2>

<ul class="style1">
    <li>
        <?php echo $this->Html->link('Paises', array('controller' => 'paises', 'action' => 'index')); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Tipo de Actividad', array('controller' => 'TipoActividades', 'action' => 'index')); ?>
    </li> 
    <li>
        <?php echo $this->Html->link('Conferencista', array('controller' => 'conferencistas', 'action' => 'index')); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Ubicacion de una Actividad', array('controller' => 'ubicaciones', 'action' => 'index')); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Actividades', array('controller' => 'actividades', 'action' => 'index')); ?>
    </li>
</ul>

<br/>
<br/>
<?php echo $this->Html->link('Cerrar Session', array('controller' => 'users', 'action' => 'logout')); ?>