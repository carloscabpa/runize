<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:31
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novthemeconfig/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a222176cd475_85522220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e38bb5afd1fbe67e5f63c9d04751ef4fe2e87cb' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novthemeconfig/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1637518124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a222176cd475_85522220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121445998361a22217644317_22199189', 'defaultForm');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207455632161a22217648942_35610286', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122521353861a222176494a8_21297418', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97100534461a222176549c1_95064694', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116197236961a222176a7055_44793348', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'defaultForm'} */
class Block_121445998361a22217644317_22199189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_121445998361a22217644317_22199189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="themeconfig-heading">
		<span class="module-name">Themes configurator</span>
	</div>
	<div class="row-flex no-gutters">
		<div class="nov-config-tabs">
			<ul id="nov-config-tabs">
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sptabs']->value, 'tabClass', false, 'tabTitle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tabTitle']->value => $_smarty_tpl->tpl_vars['tabClass']->value) {
?>
	            <li class="tab" data-tab="<?php echo $_smarty_tpl->tpl_vars['tabClass']->value;?>
">
	                <?php echo $_smarty_tpl->tpl_vars['tabTitle']->value;?>

	            </li>
		        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		    </ul>
		</div>
	    <div class="nov-config-contents">
    		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	    </div>
	</div>
<?php
}
}
/* {/block 'defaultForm'} */
/* {block "legend"} */
class Block_207455632161a22217648942_35610286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_207455632161a22217648942_35610286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "legend"} */
/* {block "label"} */
class Block_122521353861a222176494a8_21297418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_122521353861a222176494a8_21297418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
		<label class="control-label col-lg-2<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required']) && $_smarty_tpl->tpl_vars['input']->value['required'] && $_smarty_tpl->tpl_vars['input']->value['type'] != 'radio') {?> required<?php }?>">
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
			<span class="label-tooltip"
				data-toggle="tooltip"
				data-html="true"
				title="
					<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hint'], 'hint');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
?>
							<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8' ));?>

							<?php } else { ?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8' ));?>

							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8' ));?>

					<?php }?>
				"
				>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
			</span>
			<?php }?>
		</label>
	<?php }
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_97100534461a222176549c1_95064694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_97100534461a222176549c1_95064694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color') {?>
		<div class="input-group input-large">
			<input type="color"
			data-hex="true"
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
			<?php } else { ?> class="color mColorPickerInput"<?php }?>
			name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
			value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" />
		</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textarea') {?>
		<?php $_smarty_tpl->_assignInScope('use_textarea_autosize', true);?>
		<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang']) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
				<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
					<div class="col-lg-11">
				<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
						<div class="input-group">
							<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter" class="input-group-addon">
								<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
							</span>
						<?php }?>
						<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly']) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte']) && $_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength']) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
</textarea>
						<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
						</div>
						<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					</div>
					<div class="col-lg-1">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<li>
								<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
							</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function(){
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
					countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter"));
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				});
				<?php echo '</script'; ?>
>
			<?php }?>
		<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
				<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter" class="input-group-addon">
					<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
				</span>
			<?php }?>
			<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly']) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte']) && $_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength']) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
</textarea>
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function(){
					countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"));
				});
				<?php echo '</script'; ?>
>
			<?php }?>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch') {?>
		<span class="switch prestashop-switch fixed-width-lg">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) || (isset($_smarty_tpl->tpl_vars['value']->value['disabled']) && $_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
			<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );
}?></label>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<a class="slide-button btn"></a>
		</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'novthemeconfig_payment_image') {?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] != '') {?>
            <div class="remove-image-content">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteConfig=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
	                <i class="icon-trash-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>

	            </a>
	            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to save the options after deleted the image!','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>
</small>
	        </div>
            <div class="image-content">
            	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"/>
        	</div>
        <?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'novthemeconfig_logo_mobile') {?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] != '') {?>
            <div class="remove-image-content">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteConfig=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
	                <i class="icon-trash-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>

	            </a>
	            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to save the options after deleted the image!','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>
</small>
	        </div>
            <div class="image-content">
            	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"/>
        	</div>
        <?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'novthemeconfig_logo_footer') {?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] != '') {?>
            <div class="remove-image-content">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteConfig=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
	                <i class="icon-trash-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>

	            </a>
	            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to save the options after deleted the image!','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>
</small>
	        </div>
            <div class="image-content">
            	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"/>
        	</div>
        <?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'novthemeconfig_body_bg_image') {?>
		<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] != '') {?>
            <div class="remove-image-content">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteConfig=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
	                <i class="icon-trash-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>

	            </a>
	            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to save the options after deleted the image!','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>
</small>
            </div>
            <div class="image-content">
            	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"/>
        	</div>
        <?php }?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'novpopup_loading_image') {?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

		<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] != '') {?>
            <div class="remove-image-content">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteConfig=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
	                <i class="icon-trash-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>

	            </a>
	            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to save the options after deleted the image!','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>
</small>
        	</div>
            <div class="image-content">
            	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"/>
        	</div>
        <?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'novpopup_newsletter_bg') {?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	 	<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] != '') {?>
	 		<div class="remove-image-content">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteConfig=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
	                <i class="icon-trash-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>

	            </a>
	            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to save the options after deleted the image!','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>
</small>
        	</div>
            <div class="image-content">
            	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"/>
        	</div>
        <?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'nov_clearcss') {?>
		<div class="alert alert-warning">
			<button id="nov_clearcss" class="btn btn-success" type="button">
				<i class="icon-eraser"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear CSS','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>

			</button>
		  	<span style="margin:0 10px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete all of the theme css file and regenerate from sass.','mod'=>'novthemeconfig'),$_smarty_tpl ) );?>
</span>
		</div>
		<?php echo '<script'; ?>
>
			function objToString(obj) {
				var str = '';
				for (var p in obj) {
					if (obj.hasOwnProperty(p)) {
						str += '&' + p + '=' + obj[p];
					}
				}
				return str;
			}
			$('#nov_clearcss').on('click', function(){
				var that = $(this);
				that.attr('class', 'btn btn-warning disabled');
				that.find('i').attr('class', 'icon-spinner icon-spin');
				var params = {
					action : 'clearCss',
					ajax : 1
				};
				var query = $.ajax({
					type: 'POST',
					url: '<?php echo $_smarty_tpl->tpl_vars['controller_url']->value;?>
',
					data: objToString(params),
					dataType: 'json',
					success: function(data) {
						if(data.success){
							that.attr('class', 'btn btn-success disabled');
							that.find('i').attr('class', 'icon-eraser');
						} else {
							that.attr('class', 'btn btn-danger');
							that.find('i').attr('class', 'icon-frown');
						}
					}
				});
			});
		<?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
/* {block "footer"} */
class Block_116197236961a222176a7055_44793348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_116197236961a222176a7055_44793348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/homepages/34/d802225033/htdocs/runize.es/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']) || isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
		<div class="panel-footer">
			<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
			<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn')-1));
}?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];
} else {
echo $_smarty_tpl->tpl_vars['submit_action']->value;
}
if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) && $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];
} else { ?>btn btn-default pull-right<?php }?>">
				<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];
} else { ?>process-icon-save<?php }?>"></i><span><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>
</span>
			</button>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value) && $_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['back_url']->value,'html','UTF-8' ));?>
" class="btn btn-default" onclick="window.history.back();">
				<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

			</a>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
			<button
				type="reset"
				id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
				class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];
} else { ?>btn btn-default<?php }?>"
				>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

			</button>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'], 'btn', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
?>
				<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href']) && trim($_smarty_tpl->tpl_vars['btn']->value['href']) != '') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['target']) && $_smarty_tpl->tpl_vars['btn']->value['target'] == '_blank') {?>target="_blank"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js']) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="material-icons <?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ><?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
</i> <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
				<?php } else { ?>
					<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['type'];
} else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['name'];
} else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;
}?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js']) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="material-icons <?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ><?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
</i><?php }?><span><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</span></button>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	<?php }
}
}
/* {/block "footer"} */
}
