<?php /* Smarty version 2.6.20, created on 2010-11-13 09:58:06
         compiled from E:%5Cphpnow%5Chtdocs%5CPrestashop_China_Edition%5Cmodules%5Cblockpermanentlinks/blockpermanentlinks_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'E:\\phpnow\\htdocs\\Prestashop_China_Edition\\modules\\blockpermanentlinks/blockpermanentlinks_header.tpl', 5, false),array('modifier', 'addslashes', 'E:\\phpnow\\htdocs\\Prestashop_China_Edition\\modules\\blockpermanentlinks/blockpermanentlinks_header.tpl', 13, false),)), $this); ?>
<!-- Block permanent links module -->
<div id="permanent_links">
	<!-- Sitemap -->
	<div class="sitemap">
		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
sitemap.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/sitemap.gif" alt="<?php echo smartyTranslate(array('s' => 'sitemap','mod' => 'blockpermanentlinks'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'sitemap','mod' => 'blockpermanentlinks'), $this);?>
" /></a>&nbsp;
	</div>
	<!-- Contact -->
	<div class="contact">
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/contact.gif" alt="<?php echo smartyTranslate(array('s' => 'contact','mod' => 'blockpermanentlinks'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'contact','mod' => 'blockpermanentlinks'), $this);?>
" /></a>&nbsp;
	</div>
	<!-- Bookmark -->
	<div class="add_bookmark">
		<script type="text/javascript">writeBookmarkLink('<?php echo $this->_tpl_vars['come_from']; ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)))) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
','','<?php echo $this->_tpl_vars['img_dir']; ?>
icon/star.gif');</script>&nbsp;
	</div>
    <p></p>
</div>
<!-- /Block permanent links module -->