        {if $MENU != ''}
        </div>
				<!-- Menu -->
        <div class="sf-contener">
          <ul class="sf-menu">
            {$MENU}
            {if $MENU_SEARCH}
            <li class="sf-search noBack" style="float:right">
              <form id="searchbox" action="search.php" method="get">
                <input type="hidden" value="position" name="orderby"/>
                <input type="hidden" value="desc" name="orderway"/>
                <input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query}{else}{l s='search...'}{/if}" onfocus="javascript:if(this.value=='{l s='search...'}')this.value='';" onblur="javascript:if(this.value=='')this.value='{l s='search...'}';" />
              </form>
            </li>
            {/if}
          </ul>
        <script type="text/javascript" src="{$this_path}js/hoverIntent.js"></script>
        <script type="text/javascript" src="{$this_path}js/superfish-modified.js"></script>
        <link rel="stylesheet" type="text/css" href="{$this_path}css/superfish-modified.css" media="screen">
				<!--/ Menu -->
        {/if}	