{if isset($tags) AND !empty($tags)}
<div  id="tags_blog_block_left"  class="block block-blog tags_block">
    <h4 class="title_block"><a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='Popular Tags' mod='smartblogtag'}</a></h4>
    <div class="block_content">
            {foreach from=$tags item="tag"}
            {assign var="options" value=null}
                {$options.tag = $tag.name|urlencode}
                {if $tag!=""}
                    <a href="{smartblog::GetSmartBlogLink('smartblog_tag',$options)|escape:'html':'UTF-8'}">{$tag.name}</a>  
                {/if}
            {/foreach}
   </div>
</div>
{/if}