<?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:05:25
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1393563123548015c5667ec7-76525413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d3d4cdb3713e07994bdce36b26f7a080732fba' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.footer.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1393563123548015c5667ec7-76525413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 1,
    'isMultiUniverse' => 1,
    'referralEnable' => 1,
    'basepath' => 1,
    'analyticsEnable' => 1,
    'analyticsUID' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_548015c56a7f34_53427505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548015c56a7f34_53427505')) {function content_548015c56a7f34_53427505($_smarty_tpl) {?><footer>
	<a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a><br>Powered by <a href="http://2moons.cc" title="2Moons" target="copy">2Moons</a> 2009-2013
</footer>
</div>
<div id="dialog" style="display:none;"></div>
<script>
var LoginConfig = {
	'isMultiUniverse': <?php echo json_encode($_smarty_tpl->tpl_vars['isMultiUniverse']->value);?>
,
	'referralEnable' : <?php echo json_encode($_smarty_tpl->tpl_vars['referralEnable']->value);?>
,
	'basePath' : <?php echo json_encode($_smarty_tpl->tpl_vars['basepath']->value);?>

};
</script>
<?php if ($_smarty_tpl->tpl_vars['analyticsEnable']->value){?>
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("<?php echo $_smarty_tpl->tpl_vars['analyticsUID']->value;?>
");
pageTracker._trackPageview();
} catch(err) {}</script>
<?php }?>
</body>
</html><?php }} ?>