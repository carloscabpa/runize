{extends file="layouts/`$novconfig.novthemeconfig_cateblog_layout`.tpl"}

{block name='breadcrumb-link'}
    <div class="container">
        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{$urls.base_url}">
                    <span itemprop="name">{l s='Home' d='Modules.Smartblog.Postcategory'}</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{smartblog::GetSmartBlogLink('smartblog')}">
                <span itemprop="name">{if $title_category != ''}{$title_category}{else}{l s='Our blog' d='Modules.Smartblog.Postcategory'}{/if}</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
{/block}

{block name='content'}
    <div class="blogwapper{if $novconfig.novthemeconfig_cateblog_layout == 'layout-one-column'} one-columns{/if}">
    {block name='breadcrumb-title'}
        <div class="breadcrumb-title-page mb-45">{if $title_category != ''}{$title_category}{else}{l s='Our blog' d='Modules.Smartblog.Postcategory'}{/if}</div>
    {/block}
    {capture name=path}
        <a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='All Blog News' d='Modules.Smartblog.Postcategory'}</a>
        {if $title_category != ''}{$title_category}{/if}
    {/capture}
    {if $postcategory == ''}
        {if $title_category != ''}
             <p class="error">{l s='No Post in Category' d='Modules.Smartblog.Postcategory'}</p>
        {else}
             <p class="error">{l s='No Post in Blog' d='Modules.Smartblog.Postcategory'}</p>
        {/if}
    {else}
    	{if $smartdisablecatimg == '1'}
            {assign var="activeimgincat" value='0'}
            {$activeimgincat = $smartshownoimg} 
            {if $title_category != ''}
               {foreach from=$categoryinfo item=category}
                <div id="sdsblogCategory">
                    {if $cat_image != 'no' || $activeimgincat == 0}
                       <img alt="{$category.meta_title}" src="{$modules_dir}/smartblog/images/category/{$cat_image}-home-default.jpg" class="imageFeatured">
                    {/if}
                    {$category.description}
                </div>
                {/foreach}  
            {/if}
        {/if}
        {if $novconfig.novthemeconfig_cateblog_columns == 1}
            {assign var="column" value='col-sm-12'}
        {elseif $novconfig.novthemeconfig_cateblog_columns == 2}
            {assign var="column" value='col-sm-6'}
        {elseif $novconfig.novthemeconfig_cateblog_columns == 3}
            {assign var="column" value='col-sm-4'}
        {else}
            {assign var="column" value='col-sm-12'}
        {/if}
        <div id="smartblogcat" class="row no-flow block{if $novconfig.novthemeconfig_cateblog_layout == 'layout-one-column'} items-center{/if}">
            {foreach from=$postcategory item=post}
                {include 'module:smartblog/views/templates/front/category_loop.tpl' postcategory=$postcategory column=$column}
            {/foreach}
        </div>

        {if !empty($pagenums)}
            <div class="post-page">
                <ul class="pagination text-center">
                    {for $k=0 to $pagenums}
                        {if $title_category != ''}
                            {assign var="options" value=null}
                            {$options.page = $k+1}
                            {$options.id_category = $id_category}
                            {$options.slug = $cat_link_rewrite}
                        {else}
                            {assign var="options" value=null}
                            {$options.page = $k+1}
                        {/if}
                        {if ($k+1) == $c}
                            <li><span class="page-active">{$k+1}</span></li>
                        {else}
                            {if $title_category != ''}
                                <li><a class="page-link" href="{smartblog::GetSmartBlogLink('smartblog_category_pagination',$options)}">{$k+1}</a></li>
                            {else}
                                <li><a class="page-link" href="{smartblog::GetSmartBlogLink('smartblog_list_pagination',$options)}">{$k+1}</a></li>
                            {/if}
                        {/if}
                   {/for}
                </ul>
            </div>
        {/if}
    {/if}

    {if isset($smartcustomcss)}
        <style>
            {$smartcustomcss}
        </style>
    {/if}
    </div>
{/block}