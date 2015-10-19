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
        echo $this->Html->css('universitaetmin');
        echo $this->Html->css('main.102575710');
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
    
    
<img src="/fileadmin/static/images/logo_print.gif" class="print" alt="" style="margin-bottom:20px;" />

<!-- Container um komplette Seite herum -->
<div id="container">

  
  <div id="headimage_sub">
    <a href="http://www.uni-wuppertal.de/" class="none" title="Zurück zur Startseite">
      <img src="http://www.buergerbeteiligung.uni-wuppertal.de/fileadmin/static/images/logo.gif/fileadmin/static/images/logo.gif" class="logo" alt="Logo der Bergischen Universität Wuppertal" />
    </a>
    <a name="zur_navigation" class="none"><!-- kein Inhalt --></a>
    <div id="navigation_header"><ul id="main_navigation"><li class="n1"><dfn>1</dfn><a href="/ueber-uns.html" title="ÜBER UNS" accesskey="U">ÜBER UNS</a></li><li class="n2"><dfn>2</dfn><a href="/buergerbeteiligung.html" title="BÜRGERBETEILIGUNG" accesskey="B">BÜRGERBETEILIGUNG</a></li><li class="n3"><dfn>3</dfn><a href="/demokratie-und-partizipationsforschung.html" title="DEMOKRATIE- UND PARTIZIPATIONSFORSCHUNG" accesskey="D">DEMOKRATIE- UND PARTIZIPATIONSFORSCHUNG</a></li><li class="n4"><dfn>4</dfn><a href="/lehre.html" title="LEHRE" accesskey="L">LEHRE</a></li><li class="n5"><dfn>5</dfn><a href="/datenbank-buergerbegehren.html" title="DATENBANK BÜRGERBEGEHREN" accesskey="A">DATENBANK BÜRGERBEGEHREN</a></li></ul></div>
  </div>
</div>
<?php
    $user = $this->Session->read('Auth.User');
    if(!empty($user)) {
        echo 'Hi ', $user['username'];
    }
?>
    <?php echo $this->fetch('content'); ?>
</body>
</html>
