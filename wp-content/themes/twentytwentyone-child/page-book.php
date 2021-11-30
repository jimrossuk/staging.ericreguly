<?php
get_header();
?>
    <div class = "">
        <img id="bob-image" class="pic " src="/wp-content/uploads/2021/05/regulyVietnam1.png">

        <img style="display:none;" id="book" class=" book-style"  src="/wp-content/uploads/2021/11/Ghosts-of-War.png">
    </div>
<div>
    <div class="buttonSale">
        <button style="display:none;" class="bookSale"> Order Now</button>
    </div>
    <div class="bookSales"style="display:none">
        <?php 
            $buy = get_field('buy_this_book');
            if( $buy ): ?>
                <a class="" href="<?php echo esc_url( $buy['amazon']['url'] ); ?>"><button class="buttonCenter"><?php echo esc_html( $buy['amazon']['title'] ); ?></button></a>
                <a class="" href="<?php echo esc_url( $buy['barnes_and_noble']['url'] ); ?>"><button class="buttonCenter"><?php echo esc_html( $buy['barnes_and_noble']['title'] ); ?>  </button></a>
                <a class="" href="<?php echo esc_url( $buy['sutherland_house']['url'] ); ?>"><button class="buttonCenter"><?php echo esc_html( $buy['sutherland_house']['title'] ); ?></button></a> 
                <?php endif; ?>
    </div>
</div>

    <div class="spacer flex">
        <h4 class="" style="text-align:center"> Testimonials</h4>
  
        <?php if( have_rows('testimonial') ): ?>
        <?php while( have_rows('testimonial') ): the_row(); 

            // Get sub field values.
            $testimonial = get_sub_field('text');
            $by = get_sub_field('testimonial_by');
            $testimonial2 = get_sub_field('text_2');
            $by2 = get_sub_field('testimonial_by_2');
            $testimonial3 = get_sub_field('text_3');
            $by3 = get_sub_field('testimonial_by_3');
        ?>

        <div class="cards tests">
            <article class="card  ">
                <h6>  <?php echo $testimonial ?>  </h6>
                <p> <?php echo  $by ?></p>
            </article>
            <div class="card">
                <h6>  <?php echo $testimonial2 ?>  </h6>
                <p> <?php echo  $by2 ?></p>
            </div>
            <div class="card">
                <h6>  <?php echo $testimonial3 ?>  </h6>
                <p> <?php echo  $by3 ?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </div>
<h3 class="center"> Photographs of my Father</h3>
    <div class= " front-page-title  ">
            <?php echo do_shortcode(' [smartslider3 slider="2"] '); ?>
    </div>
    <!-- <div style="margin-bottom:3em !important;"class="spacer"> 
    </div> -->
<?
get_footer();

