<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>COECYS</title>
	<?php
		echo $this->Html->meta('icon');
                
                echo $this->Html->css(array('default', 'fonts'));              

		echo $this->fetch('meta');
		echo $this->fetch('css');                
		echo $this->fetch('script');
	?>
</head>
<body>
    <div id="logo" class="container">
	<?php
        echo $this->Html->link(
                $this->Html->image('logo_200.png'), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)
        );
        ?>
    </div>
    <div id="menu" class="container">
        <ul>
            <li class="current_page_item"><?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'display', 'home')) ?></li>
            <li><a href="#" accesskey="1" title="">COECYS</a></li>
            <li><a href="#" accesskey="2" title="">Colaboradores</a></li>
            <li><a href="#" accesskey="3" title="">Contactos</a></li>
            <li><a href="#" accesskey="4" title="">Ubicacion</a></li>
            <li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')) ?></li>
        </ul>
    </div>
    
    <div id="banner" class="container"> <img src="img/pic01.jpg" width="1200" height="500" alt="" /></div>
		
    <div id="three-column" class="container">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
    
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Bienvenido <span class="byline">a nuestro sitio web</span></h2>
            </div>
            <a href="#" class="image image-full"><img src="img/pic02.jpg" alt="" /></a>
            <p>This is <strong>WellFormed</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
        </div>
        <div id="sidebar">
            <h2 class="title">Mauris vulputate</h2>
            <ul class="style2">
                <li class="first">
                    <h3><a href="#">Maecenas luctus lectus</a></h3>
                    <p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
                </li>
                <li>
                    <h3><a href="#">Integer gravida nibh</a></h3>
                    <p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
                </li>
                <li>
                    <h3><a href="#">Nulla luctus eleifend</a></h3>
                    <p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
                </li>
            </ul>
        </div>
    </div>
    
    <div id="footer" class="container">
        <div id="fbox1">
            <h2 class="title">Praesent mattis</h2>
            <p>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. </p>
            <a href="#" class="button">Learn More</a> </div>
        <div id="fbox2">
            <h2 class="title">Praesent condimentum</h2>
            <ul class="style1">
                <li class="first"><a href="#">Pellentesque consectetuer gravida blandit.</a></li>
                <li><a href="#">Lorem consectetuer adipiscing elit.</a></li>
                <li><a href="#">Maecenas vitae vitae feugiat eleifend.</a></li>
            </ul>
            <a href="#" class="button">Learn More</a> </div>
        <div id="fbox3">
            <h2 class="title">Social</h2>
            <ul class="style1">
                <li class="first"><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Flickr</a></li>
                <li><a href="#">Google +</a></li>
            </ul>
        </div>
    </div>

    <div id="copyright" class="container">
        <p>Copyright (c) 2013 Sitename.com. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
    </div>
	
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
