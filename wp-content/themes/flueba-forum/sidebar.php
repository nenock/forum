<div class="sidebar secondary-content">

<div class="category-list-item has-nested">
    <span class="fa fa-question-circle"></span>
    Unbeantwortete Fragen
<?php
$posts = get_posts(array(
    'orderby' => array('comment_count' => 'ASC', 'date' => 'DESC')
));
foreach ($posts as $post) {
    setup_postdata($post);
    if (get_comments_number() > 0)
	break; ?>
    <div class="category-list-item">
	<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </div>
<?php }
wp_reset_postdata(); ?>
</div>

<div class="category-list-item has-nested">
    <span class="fa fa-bookmark"></span>
    <a href="<?= home_url('kultuer-veranstaltungen') ?>">KULTÜR Angebote</a>
    <?php
    $events = get_posts(array(
	'post_type' => 'kultuer_event',
	'posts_per_page' => 3
    ));
    foreach ($events as $post) {
	setup_postdata($post); ?>
	<a href="<?php the_permalink() ?>" class="category-list-item">
	    <?php the_title() ?>
	    <small class="text-muted">
	    <?php if (!get_field('no_booking')) { ?>
		Noch <?php the_field('num_tickets') ?> Karten
	    <?php } else { ?>
		Kostenlos
	    <?php } ?>
	    </small>
	</a>
    <?php }
    wp_reset_postdata(); ?>
</div>

<div class="category-list-item has-nested">
    <span class="fa fa-calendar"></span>
    Veranstaltungen

    <a class="category-list-item" href="#">Vollversammlung <small class="text-muted">Mon, 26. Feb</small></a>
    <a class="category-list-item" href="#">Sommerfest <small class="text-muted">Fri, 4. Jul</small></a>
</div>

<?php if (is_singular('post'))
    the_colored_category_list() ?>
