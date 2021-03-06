<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Datenbank B&uuml;rgerbeteiligung');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

        echo $this->Html->css('base');
        echo $this->Html->css('ui.tabs');
		echo $this->Html->css('cake.notices');
        echo $this->Html->css('universitaet.min');
        echo $this->Html->css('main.1402575710');
        echo $this->Html->css('print.min');


        echo $this->Html->script('jquery-1.2.6');
        echo $this->Html->script('ui.core');
        echo $this->Html->script('ui.tabs');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <script type="text/javascript">
        $(function() {
            $('#container-1 > ul').tabs({ fx: { opacity: 'toggle'} });
        });
    </script>

</head>
<body>
    
<?php
echo $this->Html->image('logo_print.gif', array('class' => 'print', 'style'=>'margin-bottom:20px;'))

?>

<!-- Container um komplette Seite herum -->
<div id="container">
  <div id="headimage_sub">
    <a href="http://www.buergerbeteiligung.uni-wuppertal.de/" class="none" title="Zurück zur Startseite">
      <img src="/img/logo.gif" class="logo" alt="Logo der Bergischen Universität Wuppertal" />
    </a> 
    </div>
    <a name="zur_navigation" class="none"></a>
   <ul id="main_navigation">
       <li class="n1"><dfn>1</dfn><a href="/realisations" title="Startseite" accesskey="S">STARTSEITE</a></li>
       <li class="n2"><dfn>2</dfn><a href="/realisations/add" title="Neuen Fall eintragen" accesskey="N">NEUER FALL</a></li>
       <li class="n3"><dfn>3</dfn><a href="/stakeholders" title="Administration" accesskey="A">ADMINBEREICH</a></li>
   </ul>
 
    

    <div id="content">
<?php
    $user = $this->Session->read('Auth.User');
    if(!empty($user)) {
        echo 'Hi ', $user['username'];
    }
?>
    <?php echo $this->fetch('content'); ?>
    </div>
</div>
</body>
</html>
