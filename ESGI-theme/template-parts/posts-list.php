<?php
if (!isset($paged)) {
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
}

// Créer une wp_query à partir d'arguments
$args = [
    //'posts_per_page' => 1,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC'
];
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) { ?>
    <ul class="posts-list">
        <?php
        while ($the_query->have_posts()) {
            $the_query->the_post(); // permet l'instanciation d'un objet WP_Post puis le passage à l'itération suivante
            $post = get_post();
            ?>
            <li>
                <a href="<?= get_permalink($post->ID) ?>">
                    <?= $post->post_title ?><time> <?= wp_date('j F Y', strtotime($post->post_date)) ?></time>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
    <?php
    $big = 999999999; // need an unlikely integer

    echo paginate_links([
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $the_query->max_num_pages
    ]);
    ?>
<?php } ?>