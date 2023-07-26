<?php
/* Smarty version 4.3.2, created on 2023-07-26 12:37:52
  from 'C:\Users\User\Desktop\Project\ИнТоп\test\libs\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64c0f780d05874_02539287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ecfa8039663284228c2b043d62c608a340606a7' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\Project\\ИнТоп\\test\\libs\\templates\\index.tpl',
      1 => 1690367861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bloks/header.tpl' => 1,
    'file:bloks/hero.tpl' => 1,
    'file:bloks/content.tpl' => 1,
    'file:bloks/events.tpl' => 1,
    'file:components/modal.tpl' => 1,
  ),
),false)) {
function content_64c0f780d05874_02539287 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">    
    <?php echo '<script'; ?>
 defer type="module" src="/js/main.js"><?php echo '</script'; ?>
>
    <title>Тестовое Каплий</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:bloks/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="main">
  <?php $_smarty_tpl->_subTemplateRender('file:bloks/hero.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender('file:bloks/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender('file:bloks/events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
</section>
<?php $_smarty_tpl->_subTemplateRender('file:components/modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
