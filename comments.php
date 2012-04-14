<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

<p class="nocomments">Yazı parola korumalı.Yorumları görebilmek için parolayı girin.</p>
<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
<?php if (!('open' == $post-> comment_status)) : ?>
<span class="closecomment">
<?php _e('Comments are closed')?>
</span>
<?php else : ?>
<?php endif; ?>

    <li>
      <div class="comments">
        <?php comments_number('No Comments', '1 Comment', '% Comments' );?>
      </div>

      <div class="allcomments">

<?php foreach ($comments as $comment) : 
           $extras = author_highlight();?>
        <div class="singlecomment clearfix <?php echo $extras?>" <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
         <?php echo get_avatar( $comment); ?>
         <p class='author'><?php comment_author_link()?> <span class='date'><?php comment_date('j F Y') ?> <?php comment_time('H:i') ?></span></p>


            <p class="title"><?php _e('')?></p>
          </a>
          <p><?php comment_text() ?></p>
          <?php if ($comment->comment_approved == '0') : ?>
          <p class="moderate"><?php _e('Waiting for moderation.')?>.</p>
        <?php endif; ?>

        </div> <!-- admin comment --> 

  <?php
    /* Changes every other comment to a different class */
    $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
  ?>
  <?php endforeach; /* end for each comment */ ?>

</div>


<?php if (!('open' == $post-> comment_status)) : ?>
<p class="nocomments"><?php _e('No comments. Be first!')?>.</p>
<?php else : ?>
<?php endif; ?>


<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>


<?php else : // comments are closed ?>
<p class="nocomments"><?php _e('Not avaible to comment')?>.</p>

<?php endif; ?>

<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div class="commentarea clearfix square" style='display:none;'>

<h3 id="respond"><?php _e('Want to comment on this?')?></h3>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('Yorum yapabilmek için')?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('giriş')?></a> <?php _e('yapmalısınız')?>.</p>
<?php else : ?>
<form id="new_app" class="app_form borderize clearfix" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" accept-charset="UTF-8">
   <?php if ( $user_ID ) : ?>
  <div class="labelforcomment">Add Your Comment
      </div>
    <p><?php _e('Welcome dear ')?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Logout"><?php _e('Logout')?> &raquo;</a></p>
  <?php else : ?>
      <p>You know the rules. No need reminding.</p>


          <div class="text_field">
              <input type="text" size="auto" placeholder="What's your name?" name="author" id="author" value="<?php echo $comment_author; ?>" class="pane_input">
              <div class="insertion_point">&nbsp;</div>
            </div>


            <div class="text_field">
              <input type="text" size="auto" placeholder="And your email? (kept hidden)" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="pane_input">
              <div class="insertion_point">&nbsp;</div>
            </div>


            <div class="text_field">
              <input type="text" size="auto" placeholder="Personal blog? (optional)" name="url" id="url" value="<?php echo $comment_author_url; ?>" class="pane_input">
              <div class="insertion_point">&nbsp;</div>
            </div>


  <?php endif; ?>
  
            <div class="text_field area">
              
              <textarea placeholder="Your Comment is ..." name="comment" id="comment" cols="auto" class="pane_input" style="resize: none; overflow-y: hidden; height: 100px;"></textarea>
              <div class="insertion_point">&nbsp;</div>
            </div>

	<div class="buttonize square commentsender">
	    <a value="submit">Send</a>
	</div>
    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

  <?php do_action('comment_form', $post->ID); ?>
</form>
</div>
      <div class="clearfix"></div>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
