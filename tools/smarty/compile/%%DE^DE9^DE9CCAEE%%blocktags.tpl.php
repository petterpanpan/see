<?php /* Smarty version 2.6.20, created on 2010-11-13 09:58:06
         compiled from E:%5Cphpnow%5Chtdocs%5CPrestashop_China_Edition%5Cmodules%5Cblocktags/blocktags.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'E:\\phpnow\\htdocs\\Prestashop_China_Edition\\modules\\blocktags/blocktags.tpl', 3, false),array('modifier', 'urlencode', 'E:\\phpnow\\htdocs\\Prestashop_China_Edition\\modules\\blocktags/blocktags.tpl', 7, false),array('modifier', 'escape', 'E:\\phpnow\\htdocs\\Prestashop_China_Edition\\modules\\blocktags/blocktags.tpl', 7, false),)), $this); ?>
<!-- Block tags module -->
<div id="tags_block_left" class="block tags_block">
	<h4><?php echo smartyTranslate(array('s' => 'Tags','mod' => 'blocktags'), $this);?>
</h4>
	<p class="block_content">
<?php if ($this->_tpl_vars['tags']): ?>
	<?php $_from = $this->_tpl_vars['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tag']):
        $this->_foreach['myLoop']['iteration']++;
?>
		<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
search.php?tag=<?php echo ((is_array($_tmp=$this->_tpl_vars['tag']['name'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blocktags'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['tag']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
" class="<?php echo $this->_tpl_vars['tag']['class']; ?>
 <?php if (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php else: ?>item<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['tag']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
	<?php echo smartyTranslate(array('s' => 'No tags specified yet','mod' => 'blocktags'), $this);?>

<?php endif; ?>
	</p>
</div>
<!-- /Block tags module -->