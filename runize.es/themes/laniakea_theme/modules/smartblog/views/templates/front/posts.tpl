{extends file="layouts/`$novconfig.novthemeconfig_cateblog_layout`.tpl"}


{block name='breadcrumb-title'}
<div class="breadcrumb-title-page">{$meta_title}</div>
{/block}
{block name='breadcrumb-link'}
{assign var="catOptions" value=null}
{$catOptions.id_category = $id_category}
{$catOptions.slug = $cat_link_rewrite}
<div class="container">
	<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="{$urls.base_url}">
				<span itemprop="name">{l s='Home' d='Modules.Smartblog.Posts'}</span>
			</a>
			<meta itemprop="position" content="1">
		</li>
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="{smartblog::GetSmartBlogLink('smartblog_category',$catOptions)}">
				<span itemprop="name">{$title_category}</span>
			</a>
			<meta itemprop="position" content="2">
		</li>
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<span itemprop="name">{$meta_title}</span>
			<meta itemprop="position" content="3">
		</li>
	</ol>
</div>
{/block}

{block name='content'}
	<div class="blogwapper{if $novconfig.novthemeconfig_cateblog_layout == 'layout-one-column'} one-columns{/if}">
		{capture name=path}<a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='All Blog News' d='Modules.Smartblog.Posts'}</a>{$meta_title}{/capture}
		<div id="content" class="block">
			<div itemtype="#" itemscope="" id="sdsblogArticle" class="blog-post">

				<div class="post-img">
					{assign var="activeimgincat" value='0'}
					{$activeimgincat = $smartshownoimg} 
					{if ($post_img != "no" && $activeimgincat == 0) || $activeimgincat == 1}
					<a id="post_images" href="{$modules_dir}/smartblog/images/{$post_img}-single-default.jpg">
						<img class="img-fluid" src="{$modules_dir}/smartblog/images/{$post_img}-single-default.jpg" alt="{$meta_title}">
					</a>
					{/if}
				</div>
				<h1 class="post-title">{$meta_title}</h1>
				<div class="articleContent" itemprop="articleBody">
					<div class="sdsarticle-des">
						{$content nofilter}
					</div>
				<div class="sdsarticleBottom d-flex align-items-center">
					<div class="post-info mb-0 mb-xs-15">
						{assign var="catOptions" value=null}
						{$catOptions.id_category = $id_category}
						{$catOptions.slug = $cat_link_rewrite}
						<span itemprop="dateCreated">
							<i class="zmdi zmdi-calendar-note"></i>{$created|date_format}
						</span>

						<span>
							<i class="fa fa-comment" aria-hidden="true"></i>{if $countcomment != ''}{$countcomment}{else}{l s='0' d='Modules.Smartblog.Posts'}{/if}{l s=' Comments' d='Modules.Smartblog.PostsSM'}
						</span>

						<span itemprop="author">
							<i class="material-icons">person</i>
							{if $smartshowauthorstyle != 0}{$firstname} {$lastname}{else}{$lastname} {$firstname}{/if}
						</span>

						{*
							<span itemprop="articleSection"><a href="{smartblog::GetSmartBlogLink('smartblog_category',$catOptions)}">{$title_category}</a>
							</span> 
						*}

						<a title="" style="display:none" itemprop="url" href="#"></a>
					</div>
					<div class="ml-auto d-flex align-items-center blog-print">
						{hook h='displaySmartAfterPost'}
						<a class="ml-4" href="javascript:window.print()"><i class="zmdi zmdi-print"></i><span>{l s=' Print' d='Modules.Smartblog.Posts'}</span></a>
					</div>
				</div>
			</div>
		</div>

		{if $countcomment != ''}
			<div id="articleComments">
        		<h3>{if $countcomment != ''}{$countcomment|escape:'htmlall':'UTF-8'}{else}{l s='0' d='Modules.Smartblog.Posts'}{/if}{l s=' Comments' d='Modules.Smartblog.Posts'}<span></span></h3>
   				 <div id="comments">      
        			<ul class="commentList">
              			{$i=1}
       					{foreach from=$comments item=comment}
               				{include file="module:smartblog/views/templates/front/comment_loop.tpl" childcommnets=$comment}
          				{/foreach}
       				</ul>
    			</div>
			</div>
		{/if}

		{if ($enableguestcomment==0) && isset($is_looged) && $is_looged==''}
			<section class="page-product-box">
				<h3 class="page-product-heading">{l s='Comments' d='Modules.Smartblog.Posts'}</h3>
			    {l s='Log in or register to post comments' d='Modules.Smartblog.Posts'}
			</section>
		{else}
			{if Configuration::get('smartenablecomment') == 1}
				{if $comment_status == 1}
				<div class="smartblogcomments" id="respond">
			    	<h4 class="comment-reply-title" id="reply-title">{l s='Submit comment'  d='Modules.Smartblog.Posts'}
			    		<small style="float:right;">
			        		<a style="display: none;" href="/wp/sellya/sellya/this-is-a-post-with-preview-image/#respond" id="cancel-comment-reply-link" rel="nofollow">{l s='Cancel Reply'  d='Modules.Smartblog.Posts'}</a>
			            </small>
			        </h4>
					<div id="commentInput">
						<form action="" method="post" id="commentform" class="row no-flow">
							{if ($enableguestcomment==0) && isset($is_looged) && $is_looged>0}
								<div class="col-md-4">
									<input type="hidden" tabindex="1" class="inputName form-control grey" value="{$is_looged_fname|escape:'htmlall':'UTF-8'}" name="name" id="name">
								</div>
								<div class="col-md-4">
									<input type="hidden" tabindex="2" class="inputMail form-control grey" value="{$is_looged_email|escape:'htmlall':'UTF-8'}" name="mail" id="mail">
								</div>
								<div class="col-md-4">
									<input type="hidden" tabindex="3" value="" name="website" class="form-control grey">
								</div>
							{else}
								<div class="col-md-4">
									<input type="text" tabindex="1" class="inputName form-control grey" value="" name="name" placeholder="{l s='Your Name'  d='Modules.Smartblog.Posts'}">
								</div>
								<div class="col-md-4">
									<input type="text" tabindex="2" class="inputMail form-control grey" value="" name="mail" placeholder="{l s='E-mail:' d='Modules.Smartblog.Posts'}{l s='(Not Published)'  d='Modules.Smartblog.Posts'}">
								</div>
								<div class="col-md-4">
									<input type="text" tabindex="3" value="" name="website" class="form-control grey" placeholder="{l s='Website:'  d='Modules.Smartblog.Posts'} {l s='(Site url with'  d='Modules.Smartblog.Posts'}http://)">
								</div>
							{/if}
							<div class="col-12 mt-10">
								<textarea tabindex="4" class="inputContent form-control grey" rows="8" cols="50" name="comment" placeholder="{l s='Comment'  d='Modules.Smartblog.Posts'}"></textarea>
							</div>
							<div class="col-12">
								{if Configuration::get('smartcaptchaoption') == '1'}
									<img src="{$modules_dir|escape:'htmlall':'UTF-8'}smartblog/classes/CaptchaSecurityImages.php?width=100&height=40&characters=5">
									<b>{l s='Type Code' d='Modules.Smartblog.Posts'}</b>
									<input type="text" tabindex="" value="" name="smartblogcaptcha" class="smartblogcaptcha form-control grey mt-30">
								{/if}
	     					<input type='hidden' name='comment_post_ID' value='1478' id='comment_post_ID' />
	     					<input type='hidden' name='id_post' value='{$id_post|escape:'htmlall':'UTF-8'}' id='id_post' />
	    					<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						    <div class="submit">
									<button type="submit" name="addComment" id="submitComment" class="bbutton btn btn-default button-medium" >{l s='Post a comment' d='Modules.Smartblog.Posts'}</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				{/if}
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
				<script type="text/javascript">
					$('#submitComment').bind('click',function(event) {
						event.preventDefault();
						 
						var data = { 'action':'postcomment', 
						'id_post':$('input[name=\'id_post\']').val(),
						'comment_parent':$('input[name=\'comment_parent\']').val(),
						'name':$('input[name=\'name\']').val(),
						'website':$('input[name=\'website\']').val(),
						'smartblogcaptcha':$('input[name=\'smartblogcaptcha\']').val(),
						'comment':$('textarea[name=\'comment\']').val(),
						'mail':$('input[name=\'mail\']').val() 
						};
						$.ajax( {
							url: '{$baseDir}modules/smartblog/ajax.php',
							data: data,
							method: 'POST',
							dataType: 'json',
						  	beforeSend: function() {
									$('.success, .warning, .error').remove();
									$('#submitComment').attr('disabled', true);
									//$('#commentInput').before('<div class="attention"><img src="views/img/loading.gif" alt="" />Please wait!</div>');
							},
							complete: function() {
								$('#submitComment').attr('disabled', false);
								$('.attention').remove();
							},
							success: function(json) {
								if (json['error']) {
										 
									$('#commentInput').before('<div class="warning">' + '<i class="icon-warning-sign icon-lg"></i>' + json['error']['common'] + '</div>');
									
									if (json['error']['name']) {
										$('.inputName').after('<span class="error">' + json['error']['name'] + '</span>');
									}
									if (json['error']['mail']) {
										$('.inputMail').after('<span class="error">' + json['error']['mail'] + '</span>');
									}
									if (json['error']['comment']) {
										$('.inputContent').after('<span class="error">' + json['error']['comment'] + '</span>');
									}
									if (json['error']['captcha']) {
										$('.smartblogcaptcha').after('<span class="error">' + json['error']['captcha'] + '</span>');
									}
								}
										
								if (json['success']) {
									$('input[name=\'name\']').val('');
									$('input[name=\'mail\']').val('');
									$('input[name=\'website\']').val('');
									$('textarea[name=\'comment\']').val('');
							 		$('input[name=\'smartblogcaptcha\']').val('');
								
									$('#commentInput').before('<div class="success">' + json['success'] + '</div>');
									setTimeout(function(){
										$('.success').fadeOut(300).delay(450).remove();
									}, 2500);
								}
							}
						} );
					} );
				    var addComment = {
						moveForm : function(commId, parentId, respondId, postId) {

						var t = this, div, comm = t.I(commId), respond = t.I(respondId), cancel = t.I('cancel-comment-reply-link'), parent = t.I('comment_parent'), post = t.I('comment_post_ID');
						if ( ! comm || ! respond || ! cancel || ! parent )
							return;
				                    
				 		t.I('mail').value='{$is_looged_email|escape:'htmlall':'UTF-8'}';
				 		t.I('name').value='{$is_looged_fname|escape:'htmlall':'UTF-8'}';
						t.respondId = respondId;
						postId = postId || false;

						if ( ! t.I('wp-temp-form-div') ) {
							div = document.createElement('div');
							div.id = 'wp-temp-form-div';
							div.style.display = 'none';
							respond.parentNode.insertBefore(div, respond);
						}


						comm.parentNode.insertBefore(respond, comm.nextSibling);
						if ( post && postId )
							post.value = postId;
						parent.value = parentId;
						cancel.style.display = '';

						cancel.onclick = function() {
							var t = addComment, temp = t.I('wp-temp-form-div'), respond = t.I(t.respondId);

							if ( ! temp || ! respond )
								return;

							t.I('comment_parent').value = '0';
							t.I('mail').value='{$is_looged_email|escape:'htmlall':'UTF-8'}';
				 			t.I('name').value='{$is_looged_fname|escape:'htmlall':'UTF-8'}';
							temp.parentNode.insertBefore(respond, temp);
							temp.parentNode.removeChild(temp);
							this.style.display = 'none';
							this.onclick = null;
							return false;
						};

						try { t.I('comment').focus(); }
						catch(e) {}

						return false;
					},

					I : function(e) {
						var elem = document.getElementById(e);
		                if(!elem){
		                    return document.querySelector('[name="'+e+'"]');
		                }else{
		                    return elem;
		                }
					}
					}; 
				</script>
			{/if}
		{/if}
		{if isset($smartcustomcss)}
		    <style>
		        {$smartcustomcss|escape:'htmlall':'UTF-8'}
		    </style>
		{/if}
	</div>
{/block}
