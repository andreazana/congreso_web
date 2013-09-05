<!-- app/View/Users/add.ctp -->
<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Usuario'); ?></legend>
        <?php
            echo $this->Form->input('username', array('label' => 'Usuario'));
            echo $this->Form->input('password', array('label' => 'Contrasenia'));
            echo $this->Form->input('role', array(
                'label' => 'Rol',
                'options' => array('admin' => 'Admin', 'author' => 'Author')
            ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Guardar')); ?>
</div>