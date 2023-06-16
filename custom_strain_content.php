<?php get_header(); ?>
<?php
$cats = get_the_category();
foreach ($cats as $cat) {
  if (strtolower($cat->name) == 'strains') {
    $isStrains = true;
  }
}

$author_id = $post->post_author;

$author_display_name = strtolower(get_the_author_meta('display_name', $author_id));

$scraper_authors = ['strain bot', 'chris', 'leafly'];

if (in_array($author_display_name, $scraper_authors)) {
  $display_custom_content = false;

} elseif (!in_array($author_display_name, $scraper_authors) && $isStrains) {
  $display_custom_content = true;
}

?>

<div class="content">

  <?php while (have_posts()):
    the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog-card-outer">
      <div class="blog-card group">

        <?php if (has_post_format(array('audio', 'gallery', 'video'))): ?>

        <div class="blog-card-format">
          <div class="entry-media">
            <?php if (get_post_format()) {
                  get_template_part('inc/post-formats');
                } ?>
          </div>

          <h1 class="blog-card-title-single">
            <?php the_title(); ?>
          </h1>
        </div>

        <?php else: ?>

        <div class="blog-card-inner"
          style="background-image:url('<?php the_post_thumbnail_url('cardstyle-large'); ?>');">

          <?php if (has_post_format('video') && !is_sticky())
                echo '<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
          <?php if (has_post_format('audio') && !is_sticky())
                echo '<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
          <?php if (is_sticky())
                echo '<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>

          <div class="blog-card-inner-inner">
            <h1 class="blog-card-title">
              <?php the_title(); ?>
            </h1>
          </div>

        </div>

        <?php endif; ?>
        <div class="blog-card-bottom-outer">
          <div class="blog-card-bottom">
            <?php if (!$isStrains): ?>
            <div class="blog-card-author">
              <a
                href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_avatar(get_the_author_meta('user_email'), '64'); ?></a>
            </div>
            <?php endif; ?>
            <ul class="blog-card-meta group">
              <?php if (!$isStrains): ?>
              <li class="blog-card-date"><i class="far fa-calendar"></i>
                <?php the_time(get_option('date_format')); ?>
              </li>
              <li class="blog-card-byline"><i class="far fa-user"></i>
                <?php the_author_posts_link(); ?>
              </li>
              <?php endif; ?>
              <li class="blog-card-byline"><i class="far fa-folder"></i>
                <?php the_category(' / '); ?>
              </li>
              <?php if (comments_open() && (get_theme_mod('comment-count', 'on') == 'on')): ?>
              <li class="blog-card-comments"><i class="far fa-comment"></i><a
                  href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?></a></li>
              <?php endif; ?>
            </ul>

            <div class="entry-content">
              <div class="entry themeform">

                <?php if ($display_custom_content == false): ?>
                <?php the_content(); ?>
                <?php else: ?>
                <!-- IF  ------------  STRAINS  ------------   END -->
                <?php if (esc_attr(get_post_meta(get_the_ID(), 'hcf_aka', true))): ?>
                <h3>
                  <?php the_title(); ?> aka:
                  <?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_aka', true)); ?>
                </h3>
                <?php endif; ?>




                <table>
                  <tbody>
                    <?php if (esc_attr(get_post_meta(get_the_ID(), 'hcf_user_ratings', true))): ?>
                    <tr>
                      <td>
                        <strong>User Ratings:</strong>
                      </td>
                      <td>
                        <?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_strain_type', true)); ?>
                      </td>
                    </tr>
                    <?php endif; ?>
                    <?php if (esc_attr(get_post_meta(get_the_ID(), 'hcf_user_ratings', true))): ?>
                    <tr>
                      <td>
                        <strong>Strain Type: </strong>
                      </td>
                      <td>
                        <?php echo esc_attr(get_post_meta(get_the_ID(), '', true)); ?>
                      </td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table>



                <p>
                  <?php the_content(); ?>
                </p>

                <!-- IF  ------------  STRAINS  ------------   END -->

                <?php endif; ?>


                <?php wp_link_pages(array('before' => '<div class="post-pages">' . esc_html__('Pages:', 'cardstyle'), 'after' => '</div>')); ?>
                <div class="clear"></div>
              </div>
              <!--/.entry-->
            </div>

            <div class="entry-footer group">

              <?php the_tags('<p class="post-tags"><span>' . esc_html__('Tags:', 'cardstyle') . '</span> ', '', '</p>'); ?>

              <div class="clear"></div>

              <?php if ((get_theme_mod('author-bio', 'on') == 'on') && get_the_author_meta('description')): ?>
              <div class="author-bio">
                <div class="bio-avatar">
                  <?php echo get_avatar(get_the_author_meta('user_email'), '128'); ?>
                </div>
                <p class="bio-name">
                  <?php the_author_meta('display_name'); ?>
                </p>
                <p class="bio-desc">
                  <?php the_author_meta('description'); ?>
                </p>
                <div class="clear"></div>
              </div>
              <?php endif; ?>

              <?php do_action('alx_ext_sharrre'); ?>

              <?php if (get_theme_mod('post-nav', 'sidebar') == 'content') {
                  get_template_part('inc/post-nav');
                } ?>

              <?php if (get_theme_mod('related-posts', 'categories') != 'disable') {
                  get_template_part('inc/related-posts');
                } ?>

              <?php if (comments_open() || get_comments_number()):
                  comments_template('/comments.php', true);
                endif; ?>

            </div>

          </div>
        </div>

      </div>
    </div>

  </article>
  <!--/.post-->

  <?php endwhile; ?>

</div>
<!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>