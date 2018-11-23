<div>
<?php $posts = get_posts('numberposts=3&category=424'); global $post; ?>
<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<?php endforeach; endif; ?>
</div>

<ul　class="list">
<?php $posts = get_posts('numberposts=10&category=8'); global $post; ?>
<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endforeach; endif; ?>
</ul>
