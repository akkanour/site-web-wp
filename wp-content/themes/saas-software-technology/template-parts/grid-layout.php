<?php
/**
 * The template part for displaying slider
 *
 * @package SAAS Software Technology
 * @subpackage saas_software_technology
 * @since SAAS Software Technology 1.0
 */
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="services-box mb-5">    
      <?php if(has_post_thumbnail() && get_theme_mod( 'saas_software_technology_feature_image_hide',true) != '') { ?>
        <div class="service-image">
          <a href="<?php echo esc_url( get_permalink() ); ?>">
            <?php  the_post_thumbnail(); ?>
            <span class="screen-reader-text"><?php the_title(); ?></span>
          </a>
        </div>
      <?php }?>
      <div class="lower-box">
        <h2 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
        <?php if(get_the_excerpt()) { ?>
          <p><?php $saas_software_technology_excerpt = get_the_excerpt(); echo esc_html( saas_software_technology_string_limit_words( $saas_software_technology_excerpt, esc_attr(get_theme_mod('saas_software_technology_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('saas_software_technology_button_excerpt_suffix','[...]') ); ?></p>
        <?php }?>
        <?php if ( get_theme_mod('saas_software_technology_post_button_text','Read More') != '' ) {?>
          <div class="read-btn mt-4">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" ><?php echo esc_html( get_theme_mod('saas_software_technology_post_button_text',__( 'Read More','saas-software-technology' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('saas_software_technology_post_button_text',__( 'Read More','saas-software-technology' )) ); ?></span>
            </a>
          </div>
        <?php }?>
      </div>
    </div>
  </article>
</div>