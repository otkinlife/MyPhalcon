<?php /* Smarty version 3.1.27, created on 2015-12-17 05:43:57
         compiled from "C:\wamp\www\project\app\views\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2501056724b9d7fbf49_78289604%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6170b7d3b0bb907ba2da7301aa56c74e046517b' => 
    array (
      0 => 'C:\\wamp\\www\\project\\app\\views\\templates\\index.tpl',
      1 => 1450331026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501056724b9d7fbf49_78289604',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56724b9d84cfc1_13981827',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56724b9d84cfc1_13981827')) {
function content_56724b9d84cfc1_13981827 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2501056724b9d7fbf49_78289604';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Full Layout - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="../../../public/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../../../public/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../../../public/easyui/demo/demo.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="../../../public/easyui/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../../public/easyui/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<body class="easyui-layout">
<div data-options="region:'north',border:false" style="height:60px;background:#B3DFDA;padding:10px">north region</div>
<div data-options="region:'west',split:true,title:'West'" style="width:150px;padding:10px;">west content</div>
<div data-options="region:'east',split:true,collapsed:true,title:'East'" style="width:100px;padding:10px;">east region</div>
<div data-options="region:'south',border:false" style="height:50px;background:#A9FACD;padding:10px;">south region</div>
<div data-options="region:'center',title:'Center'"></div>
</body>
</html><?php }
}
?>