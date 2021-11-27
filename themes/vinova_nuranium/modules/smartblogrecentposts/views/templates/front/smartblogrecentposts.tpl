{if isset($posts) AND !empty($posts)}

<div class="block block-recentpost">
  <h4 class="title_block"><a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='New Post' mod='smartblogrecentposts'}</a></h4>
   <div class="block_content sdsbox-content">
      <div class="recentArticles">
        {foreach from=$posts item="post"}
             {assign var="options" value=null}
             {$options.id_post= $post.id_smart_blog_post}
             {$options.slug= $post.link_rewrite}
             <div class="post-item d-flex">
                <a class="image" title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">
                  <img class="img-fluid" alt="{$post.meta_title}" src="{$modules_dir}/smartblog/images/{$post.post_img}-home-small.jpg">
                </a>
                <div>          
                  <a class="post-title"  title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.meta_title|truncate:40}</a>
                  <div class="post-info">
                    {*
                      {if isset($countcomment) && $countcomment}
                      <span>
                        <i class="zmdi zmdi-comments"></i>&nbsp; {if $countcomment != ''}{$countcomment}{else}{l s='0' mod='smartblog'}{/if}{l s=' Comments' mod='smartblog'}
                      </span>
                      {/if}
                    *}
                    <i class="material-icons">event_note</i>
                    {$post.created|date_format:"%B %d, %Y"}
                  </div>
                </div>
                {*
                {if isset($post.short_description)}
                <div class="post-description">{$post.short_description}</div>
                {/if}
                <div class="readmore"><a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{l s='Read more' mod='smartblogrecentposts'}</a></div>
                *}
             </div>
         {/foreach}
      </div>
   </div>
</div>
{/if}