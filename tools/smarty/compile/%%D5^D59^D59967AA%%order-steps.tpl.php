<?php /* Smarty version 2.6.20, created on 2010-10-31 09:19:54
         compiled from E:%5Cphpnow%5Chtdocs%5CPrestashop_China_Edition/themes/prestashop/./order-steps.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'E:\\phpnow\\htdocs\\Prestashop_China_Edition/themes/prestashop/./order-steps.tpl', 7, false),)), $this); ?>
<!-- Steps -->
<ul class="step" id="order_step">
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'summary'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address' || $this->_tpl_vars['current_step'] == 'login'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address' || $this->_tpl_vars['current_step'] == 'login'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php<?php if ($this->_tpl_vars['back']): ?>?back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>">
			<?php echo smartyTranslate(array('s' => 'Summary'), $this);?>

		</a>
		<?php else: ?>
		<?php echo smartyTranslate(array('s' => 'Summary'), $this);?>

		<?php endif; ?>
	</li>
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'login'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1<?php if ($this->_tpl_vars['back']): ?>&amp;back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>">
			<?php echo smartyTranslate(array('s' => 'Login'), $this);?>

		</a>
		<?php else: ?>
		<?php echo smartyTranslate(array('s' => 'Login'), $this);?>

		<?php endif; ?>
	</li>
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'address'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1<?php if ($this->_tpl_vars['back']): ?>&amp;back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>">
			<?php echo smartyTranslate(array('s' => 'Address'), $this);?>

		</a>
		<?php else: ?>
		<?php echo smartyTranslate(array('s' => 'Address'), $this);?>

		<?php endif; ?>
	</li>
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'shipping'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=2<?php if ($this->_tpl_vars['back']): ?>&amp;back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>">
			<?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>

		</a>
		<?php else: ?>
		<?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>

		<?php endif; ?>
	</li>
	<li id="step_end" class="<?php if ($this->_tpl_vars['current_step'] == 'payment'): ?>step_current<?php else: ?>step_todo<?php endif; ?>">
		<?php echo smartyTranslate(array('s' => 'Payment'), $this);?>

	</li>
</ul>
<!-- /Steps -->