<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:34
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a2221a229344_82939386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52251b31aa758892b0e3608e374737b15cd5c50a' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/form-fields.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_61a2221a229344_82939386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/homepages/34/d802225033/htdocs/runize.es/vendor/smarty/smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

  <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
">

<?php } else { ?>
  <div class="form-group row no-gutters novform-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> has-error<?php }?>">
    <label class="col-md-2 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
    </label>
    <div class="col-md-8<?php if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons')) {?> form-control-valign<?php }
if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday')) {?> hidden-comment<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>
        <select class="form-control form-control-select" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
          <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

        <select
          class="form-control form-control-select js-country"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
          <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
          <label class="radio-inline">
            <span class="custom-radio">
              <input
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
              >
              <span></span>
            </span>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>

          </label>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

        <span class="custom-checkbox d-inline-flex">
          <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
          <span><i class="material-icons checkbox-checked">check</i></span>
          <label><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
        </span>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

        <input class="form-control" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');
}?>">
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
          <span class="form-control-comment">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>
        <div class="js-parent-focus">
          <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable3,'field_array'=>$_prefixVariable4,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable5,'month_empty'=>$_prefixVariable6,'year_empty'=>$_prefixVariable7,'start_year'=>$_prefixVariable8-100,'end_year'=>$_prefixVariable9),$_smarty_tpl);?>

        </div>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

        <div class="input-group js-parent-focus">
          <input
            class="form-control js-child-focus js-visible-password"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="password"
            value=""
            placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
            pattern=".{5,}"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <span class="input-group-btn">
            <button
              class="btn"
              type="button"
              data-action="show-password"
              data-text-show="<i class='zmdi zmdi-eye-off'></i>"
              data-text-hide="<i class='zmdi zmdi-eye'></i>"
            >
              <i class='zmdi zmdi-eye-off'></i>
            </button>
          </span>
        </div>
      <?php } else { ?>

        <input
          class="form-control"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
          value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
          placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
          <span class="form-control-comment mt-15 d-inline-block">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>

      <?php }?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
?>
    </div>

    <div class="col-md-2 form-control-comment right">
      <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

      <?php }?>
    </div>
  </div>

<?php }
}
}
