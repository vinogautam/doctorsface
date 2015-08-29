<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo Router::url('/img/df.png', true);?>">

    <title>Doctorsface Admin</title>

    <?php echo $this->Html->css(array('bootstrap.min', 'bootstrap-reset', 'assets/font-awesome/css/font-awesome', 'style', 'style-responsive')); ?>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <?php echo $this->Html->script(array('html5shiv', 'respond.min')); ?>
    <![endif]-->
</head>

  <body class="login-body">
	<div class="container">
		<?php echo $this->Session->flash();; ?>
		<?php echo $this->fetch('content'); ?>

    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <?php echo $this->Html->script(array('jquery', 'bootstrap.min')); ?>
	
  </body>
</html>
