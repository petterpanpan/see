<?php /* Smarty version 2.6.20, created on 2010-11-13 09:58:06
         compiled from E:%5Cphpnow%5Chtdocs%5CPrestashop_China_Edition%5Cmodules%5Cblocktopmenu/blocktopmenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'E:\\phpnow\\htdocs\\Prestashop_China_Edition\\modules\\blocktopmenu/blocktopmenu.tpl', 12, false),)), $this); ?>
        <?php if ($this->_tpl_vars['MENU'] != ''): ?>
        </div>
				<!-- Menu -->
        <div class="sf-contener">
          <ul class="sf-menu">
            <?php echo $this->_tpl_vars['MENU']; ?>

            <?php if ($this->_tpl_vars['MENU_SEARCH']): ?>
            <li class="sf-search noBack" style="float:right">
              <form id="searchbox" action="search.php" method="get">
                <input type="hidden" value="position" name="orderby"/>
                <input type="hidden" value="desc" name="orderway"/>
                <input type="text" name="search_query" value="<?php if (isset ( $_GET['search_query'] )): ?><?php echo $_GET['search_query']; ?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'search...'), $this);?>
<?php endif; ?>" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s' => 'search...'), $this);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s' => 'search...'), $this);?>
';" />
              </form>
            </li>
            <?php endif; ?>
          </ul>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['this_path']; ?>
js/hoverIntent.js"></script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['this_path']; ?>
js/superfish-modified.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['this_path']; ?>
css/superfish-modified.css" media="screen">
				<!--/ Menu -->
        <?php endif; ?>	