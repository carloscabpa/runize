{if isset($posts) AND !empty($posts)}
   <div class="block block-blog blogModule boxPlain" id="smartblogpopularposts">
      <h4 class="title_block"><a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='Popular Articles' mod='smartblogpopularposts'}</a></h4>
      <div class="block_content sdsbox-content">
         <ul class="popularArticles">
            {foreach from=$posts item="post"}
               <li>
         		   <a class="image" title="{$post.meta_title}" href="{$smartbloglink->getSmartBlogPostLink($post.id_smart_blog_post,$post.link_rewrite)}">
         			   <img alt="{$post.meta_title}" src="{$modules_dir}smartblog/images/{$post.post_img}-home-small.jpg" style="overflow: hidden;">
         			</a>

                  <a class="title paddleftreleted"  title="{$post.meta_title}" href="{$smartbloglink->getSmartBlogPostLink($post.id_smart_blog_post,$post.link_rewrite)}">{$post.meta_title|truncate:50 }
                  </a>
         	      <span class="info d-flex"><i class="material-icons">event_note</i>{$post.created|date_format:"%b %d, %Y"}</span>
      	      </li>
      	   {/foreach}
         </ul>
      </div>
      <div class="box-footer"></div>
   </div>
{/if}