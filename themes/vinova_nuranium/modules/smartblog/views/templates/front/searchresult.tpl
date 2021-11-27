{extends file="layouts/`$novconfig.novthemeconfig_cateblog_layout`.tpl"}

{block name='breadcrumb-link'}
    <div class="container">
        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{$urls.base_url}">
                    <span itemprop="name">{l s='Home' d='Modules.Smartblog.Searchresult'}</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{smartblog::GetSmartBlogLink('smartblog')}">
                    <span itemprop="name">{l s='Our blog' d='Modules.Smartblog.Searchresult'}</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">{l s='Search results for' d='Modules.Smartblog.Searchresult'} <strong>{$smartsearch}</strong></span>
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </div>
{/block}


{block name='content'}
    <div class="breadcrumb-title-page mb-35">{l s='Search result' d='Modules.Smartblog.Searchresult'} ({$total})</div>
    {if $postcategory == ''}
        {include file="module:smartblog/views/templates/front/search-not-found.tpl" postcategory=$postcategory}
        
    {else}
        <div id="smartblogcat" class="row no-flow block">
            {assign var="column" value='col-sm-6'}
            {foreach from=$postcategory item=post}
                {include file="module:smartblog/views/templates/front/category_loop.tpl" postcategory=$postcategory column=$column}
            {/foreach}
        </div>
    {/if}

{/block}

