<?php /* Smarty version 2.6.20, created on 2010-11-01 02:02:05
         compiled from E:%5Cphpnow%5Chtdocs%5CPrestashop_China_Edition%5Cmodules%5Cjbx_menu/header.tpl */ ?>

        <!-- MODULE JBX_MENU -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['menu']['path']; ?>
css/superfish-modified.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['menu']['path']; ?>
css/options.php" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['content_dir']; ?>
css/jquery.autocomplete.css" />
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['menu']['path']; ?>
js/hoverIntent.js"></script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['menu']['path']; ?>
js/superfish-modified.js"></script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.autocomplete.js"></script>
<?php if ($this->_tpl_vars['menu']['searchable_autocomplete']): ?>
        <script type="text/javascript">
        //<![CDATA[
        var menu_path = '<?php echo $this->_tpl_vars['menu']['path']; ?>
';
        var id_lang = '<?php echo $this->_tpl_vars['menu']['id_lang']; ?>
';
        //]]>
        </script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['menu']['path']; ?>
js/search.js"></script>
<?php endif; ?>
        <!-- /MODULE JBX_MENU -->