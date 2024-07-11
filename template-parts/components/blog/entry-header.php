<?php
/**
 * Template for post entry header
 * 
 * @package Aquila
 */
$the_post_id = get_the_id();
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
 ?>

 <header class="entry-header">
    <?php
    //featured image
        if ( $has_post_thumbnail ) {
            ?>
            <div class="entry-image mb-3">
                <a href="<?php echo esc_url( get_permalink(  ) ) ?>"></a>
                <?php
                the_post_custom_thumbnail(
                    $the_post_id,
                    'featured-thubmnail',
                    [
                        'sizes' => '(max-width: 350px) 350px, 425px',
                        'class' => "attachment-featured-large size-featured-image"
                    ]
                )
                ?>
            </div>
            <?php
        }
    ?>
 </header>