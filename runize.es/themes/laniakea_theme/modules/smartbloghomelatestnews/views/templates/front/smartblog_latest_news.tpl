<div class="block">

    <div class="novblog-box-content owl-carousel owl-theme owl-loaded owl-drag" data-autoplay="false" data-autoplaytimeout="6000" data-loop="true" data-margin="30" data-dots="true" data-nav="true" data-items="2" data-items_tablet="2" data-items_mobile="1">             
        {if isset($view_data) && !empty($view_data)}
            {assign var='i' value=1}
            {foreach from=$view_data item=post}
               
                {assign var="options" value=null}
                {$options.id_post = $post.id}
                {$options.slug = $post.link_rewrite}
                
                <div class="item post-item row">
                    <div class="post-image col-md-6">
                         <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">
                            <img alt="{$post.title}" class="feat_img_small img-fluid" src="{$modules_dir}smartblog/images/{$post.post_img}-home-default.jpg"></a>
                    </div>
                    <div class="col-md-6 mt-15">
                        <div class="post-info">
                            {*
                            <span>
                            {$view_data}
                              <i class="icon icon-comments"></i>&nbsp; {if $countcomment != ''}{$countcomment}{else}{l s='0' mod='smartblog'}{/if}{l s=' Comments' mod='smartblog'}
                            </span>
                            *}
                            
                            <i class="material-icons">event_note</i>{$post.date_added|date_format:"%d %B, %Y"}
                            {*
                            <span class="time">{$post.date_added|date_format:"%H:%M:%S"}</span>
                            *}
                        </div>
                        <div class="post_title"><a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.title}</a></div>
                        <div class="post-desc">
                            {$post.short_description|escape:'htmlall':'UTF-8'|truncate:100}
                        </div>
                        <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="read_more">{l s='Read More' mod='smartbloghomelatestnews'}
                        </a>
                    </div>
                </div>
                {$i=$i+1}
            {/foreach}
        {/if}
    </div>
</div>