<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:19:08
  from '/homepages/34/d802225033/htdocs/runize.es/modules/jscomposer/views/templates/admin/tinymce-jscomposer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a2223c6edd44_86924313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439022541b9bfdee645b9a68f456730a6b6c12bc' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/jscomposer/views/templates/admin/tinymce-jscomposer.tpl',
      1 => 1637518115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2223c6edd44_86924313 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
   
  
    
    
function tinySetup(config)
{
    if(!config)
        config = {};
  
    var editor_selector = 'rte'; 
    
    if (typeof config['editor_selector'] != 'undefined')
        config['selector'] = '.'+config['editor_selector'];
  
    
    
        //safari,pagebreak,style,table,advimage,advlink,inlinepopups,media,contextmenu,paste,fullscreen,xhtmlxtras,preview
        default_config = {
        selector: ".rte" ,
        plugins : "visualblocks,<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugings']->value, 'plugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
echo $_smarty_tpl->tpl_vars['plugin']->value;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>, preview searchreplace print insertdatetime, hr charmap colorpicker anchor code link image paste pagebreak table contextmenu filemanager table code media autoresize textcolor emoticons",
        toolbar2 : "newdocument,print,|,bold,italic,underline,|,strikethrough,superscript,subscript,|,forecolor,colorpicker,backcolor,|,bullist,numlist,outdent,indent",
        toolbar1 : "styleselect,|,formatselect,|,fontselect,|,fontsizeselect,", 
        toolbar3 : "code,<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugings']->value, 'plugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
echo $_smarty_tpl->tpl_vars['plugin']->value;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>,|,table,|,cut,copy,paste,searchreplace,|,blockquote,|,undo,redo,|,link,unlink,anchor,|,image,emoticons,media,|,inserttime,|,preview ",
        toolbar4 : "visualblocks,|,charmap,|,hr,",
        external_filemanager_path: ad+"/filemanager/",
        filemanager_title: "File manager" ,
        external_plugins: { "filemanager" : ad+"/filemanager/plugin.min.js"},
        skin: "prestashop",
        statusbar: false,
        entity_encoding: "raw",
        extended_valid_elements: 'pre[*],script[*],style[*]',
        content_css: '<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugings_css']->value, 'plugin_css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_css']->value) {
echo $_smarty_tpl->tpl_vars['plugin_css']->value;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>',
        valid_children: "+body[style|script|iframe|section],pre[iframe|section|script|div|p|br|span|img|style|h1|h2|h3|h4|h5],*[*]",
        valid_elements : '*[*]',
        force_p_newlines : false,
        cleanup: false,
        forced_root_block : false,
        force_br_newlines : true,
        verify_html : false,
        remove_linebreaks : false,
        remove_trailing_nbsp : false,
        convert_urls:true,
        relative_urls:false,
        remove_script_host:false,
           
        menu: {
            edit: {title: 'Edit', items: 'undo redo | cut copy paste | selectall'},
            insert: {title: 'Insert', items: 'media image link | pagebreak'},
            view: {title: 'View', items: 'visualaid'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
            tools: {title: 'Tools', items: 'code'}
        }
  
    } 
     
    $.each(default_config, function(index, el)
    {
        if (config[index] === undefined )
            config[index] = el;
    });
    
    
    
    if (typeof tinyMCE === 'undefined') {
		var path = $(location).attr('pathname');
		var path_array = path.split('/');
		path_array.splice((path_array.length - 2), 2);
		var final_path = path_array.join('/');
		$('head').append($('<?php echo '<script'; ?>
>').attr('type', 'text/javascript').attr('src', final_path + '/js/tiny_mce/tinymce.min.js'));
        setTimeout(function() {
            tinyMCE.init(config);
        }, 100);
 
    }else{
        
        tinyMCE.init(config);
    }
    

} 
<?php echo '</script'; ?>
>
<?php }
}
