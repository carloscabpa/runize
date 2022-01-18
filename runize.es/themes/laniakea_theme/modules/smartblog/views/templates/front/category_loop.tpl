{assign var="options" value=null}
{$options.id_post = $post.id_post} 
{$options.slug = $post.link_rewrite}
{if isset($novconfig.novthemeconfig_cateblog_type) && $novconfig.novthemeconfig_cateblog_type == 'grid'}
  {if $novconfig.novthemeconfig_cateblog_columns == 1}
    <div itemtype="#" itemscope="" class="sdsarticleCat items-grid {$column}">
      <div id="smartblogpost-{$post.id_post}">
        <div class="articleContent">
          {assign var="activeimgincat" value='0'}
          {$activeimgincat = $smartshownoimg}
          {if ($post.post_img != "no" && $activeimgincat == 0) || $activeimgincat == 1}
          <a itemprop="url" title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="imageFeaturedLink d-inline-block">
            <img class="img-fluid" src="{$modules_dir}/smartblog/images/{$post.post_img}-single-default.jpg">
          </a>
          {/if}
        </div>
        <div class="sdsarticleHeader">
          <div class="sdstitle_block"><a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.meta_title}</a></div>
          {assign var="options" value=null}
          {$options.id_post = $post.id_post}
          {$options.slug = $post.link_rewrite}
          {assign var="catlink" value=null}
          {$catlink.id_category = $post.id_category}
          {$catlink.slug = $post.cat_link_rewrite}
          <div class="sdsarticle-info post-info">
            <span class="datetime">
              <i class="material-icons">event_note</i>
              {$post.created|date_format:"%B %d, %Y"}
            </span>
            &nbsp;&nbsp;|
            {if $smartshowauthor == 1}
            <span itemprop="author" class="author">
              <i class="fa fa-user"></i>
              {l s='Posted by : ' d='Modules.Smartblog.Category_loop'}
              <span>
                {if $smartshowauthorstyle != 0}{$post.firstname} {$post.lastname}{else}{$post.lastname} {$post.firstname}{/if}
              </span>
            </span>
            &nbsp;&nbsp;|
            {/if}
            <span class="comment">
              <i class="zmdi zmdi-comments"></i>
              <a title="{$post.totalcomment} Comments" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}#articleComments">{$post.totalcomment} {l s='Comments' d='Modules.Smartblog.Category_loop'}</a>
            </span>
          </div>
        </div>
        <div class="sdsarticle-des">
          <div itemprop="description">{$post.content|strip_tags|truncate:320}</div>
          <span class="more"><a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="r_more">{l s='Read more' d='Modules.Smartblog.Category_loop'}</a></span>
        </div>
        <div class="sdsreadMore hidden-xs-up">
          <span class="more">
            <a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="r_more">{l s='Read more' d='Modules.Smartblog.Category_loop'}</a>
          </span>
        </div>
      </div>
    </div>
  {else}
    <div itemtype="#" itemscope="" class="sdsarticleCat {$column} multi-column text-center">
      <div id="smartblogpost-{$post.id_post}">
        <div class="articleContent mb-25">
          <a itemprop="url" title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="imageFeaturedLink">
            {assign var="activeimgincat" value='0'}
            {$activeimgincat = $smartshownoimg}
            {if ($post.post_img != "no" && $activeimgincat == 0) || $activeimgincat == 1}
            <img itemprop="image" alt="{$post.meta_title}" src="{$modules_dir}/smartblog/images/{$post.post_img}-single-default.jpg" class="imageFeatured img-fluid">
            {/if}
          </a>
        </div>
        <div class="block_content">
          <div class="sdsarticleHeader mb-10">
            <div class="sdstitle_block"><a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.meta_title}</a></div>
            {assign var="options" value=null}
            {$options.id_post = $post.id_post}
            {$options.slug = $post.link_rewrite}
            {assign var="catlink" value=null}
            {$catlink.id_category = $post.id_category}
            {$catlink.slug = $post.cat_link_rewrite}
          </div>
          <div class="sdsarticle-des">
            <div itemprop="description">{$post.content|strip_tags|truncate:150}</div>
            <span class="more"><a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="r_more">{l s='view more' d='Modules.Smartblog.Category_loop'}</a></span>
          </div>
          <div class="sdsreadMore hidden-xs-up">
            <span class="more">
              <a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="r_more">{l s='Read more' d='Modules.Smartblog.Category_loop'}</a>
            </span>
          </div>
        </div>
        <div class="sdsarticle-info post-info">
          <span class="datetime">
            <i class="material-icons">event_note</i>
            {$post.created|date_format:"%B %d, %Y"}
            {*<span class="time">{$post.created|date_format:"%H:%M:%S"}*}</span>
          </span>
          &nbsp;&nbsp;|
          {if $smartshowauthor == 1}
          <span itemprop="author" class="author">
            <i class="fa fa-user"></i>
            {*{l s='Posted by : ' d='Modules.Smartblog.Category_loop'}*}
            <span class="text-capitalize">
              {if $smartshowauthorstyle != 0}{$post.firstname} {$post.lastname}{else}{$post.lastname} {$post.firstname}{/if}
            </span>
          </span>
          {/if}
          &nbsp;&nbsp;|
          <span class="comment">
            <i class="zmdi zmdi-comments"></i>
            <a title="{$post.totalcomment} Comments" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}#articleComments">{$post.totalcomment} {l s='Comments' d='Modules.Smartblog.Category_loop'}</a>
          </span>
          {*
            <span itemprop="articleSection" class="info-cate">
              <i class="fa fa-tags"></i>
              <a href="{smartblog::GetSmartBlogLink('smartblog_category',$catlink)}">{if $title_category != ''}{$title_category}{else}{$post.cat_name}{/if}</a>
            </span>
          *}
            
          {*
            {if $smartshowviewed == 1}
            <span class="viewed">
              <i class="fa fa-eye"></i>{l s='Views' d='Modules.Smartblog.Category_loop'} ({$post.viewed})
            </span>
            {/if}
          *}
        </div>
      </div>
    </div>
  {/if}
{else}
  <div itemtype="#" itemscope="" class="sdsarticleCat items-list {$column}">
    <div id="smartblogpost-{$post.id_post}" class="media">
      <div class="articleContent d-flex">
        <a itemprop="url" title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="imageFeaturedLink">
          {assign var="activeimgincat" value='0'}
          {$activeimgincat = $smartshownoimg} 
          {if ($post.post_img != "no" && $activeimgincat == 0) || $activeimgincat == 1}
          <img itemprop="image" alt="{$post.meta_title}" src="{$modules_dir}/smartblog/images/{$post.post_img}-single-default.jpg" class="imageFeatured img-fluid">
          {/if}
        </a>
      </div>
      <div class="media-body">
        <div class="sdsarticleHeader">
          <div class='sdstitle_block'>
            <a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.meta_title}</a>
          </div>
          {assign var="options" value=null}
          {$options.id_post = $post.id_post}
          {$options.slug = $post.link_rewrite}
          {assign var="catlink" value=null}
          {$catlink.id_category = $post.id_category}
          {$catlink.slug = $post.cat_link_rewrite}
          <div class="sdsarticle-info post-info">
          <span class="datetime">
            <i class="material-icons">event_note</i>
            {$post.created|date_format:"%B %d, %Y"}
            {*<span class="time">{$post.created|date_format:"%H:%M:%S"}*}</span>
          </span>
          &nbsp;&nbsp;|
          {if $smartshowauthor == 1}
          <span itemprop="author" class="author">
            <i class="fa fa-user"></i>
            {l s='Posted by : ' d='Modules.Smartblog.Category_loop'}
            <span class="text-capitalize">
              {if $smartshowauthorstyle != 0}{$post.firstname} {$post.lastname}{else}{$post.lastname} {$post.firstname}{/if}
            </span>
          </span>
          &nbsp;&nbsp;|
          {/if}
          <span class="comment">
            <i class="zmdi zmdi-comments"></i>
            <a title="{$post.totalcomment} Comments" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}#articleComments">{$post.totalcomment} {l s='Comments' d='Modules.Smartblog.Category_loop'}</a>
          </span>
        </div>
        </div>

        <div class="sdsarticle-des mb-0">
          <div itemprop="description">
            {$post.content|strip_tags|truncate:200} 
         </div>
        </div>
        <span class="more"><a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="r_more">{l s='Read more' d='Modules.Smartblog.Category_loop'}</a>
        </span>

        <div class="sdsreadMore hidden-xs-up">
          <span class="more">
            <a title="{$post.meta_title}" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="r_more">{l s='Read more' d='Modules.Smartblog.Category_loop'}</a>
          </span>
        </div>
      </div>
    </div>
  </div> 
{/if}