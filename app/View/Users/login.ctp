<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Por favor ingrese un usuario y una contrasenia'); ?></legend>
        <?php echo $this->Form->input('username', array('label' => 'Usuario'));
        echo $this->Form->input('password', array('label' => 'Contrasenia'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
    <br/>
    <?php echo $this->Html->link('Registrar Usuario', array('action' => 'add'));?>
</div>