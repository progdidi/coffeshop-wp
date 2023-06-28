<?php
/*
Template Name: home
*/

// … остальной код шаблона
?>
<?php get_header(); ?>

     <section class="explore">
        <div class="container">
            <h2 class="explore__title section__title wow animate__animated">Explore Our Alowishus</h2>
            <p class="explore__descr">A drink from the ‘My Alowishus’ bottled brews range OR grab one of our delicious coffee’s.</p>

            <div class="explore__items">
                <div class="explore__item wow animate__animated data-wow-duration="2s" data-wow-delay="0.5s"">
                    <h5 class="explore__item-title">Our Catering</h5>
                    <p class="explore__item-descr">Alowishus Catering, delicious drop off Catering</p>
                    <img src="<?php bloginfo('template_url')?>/assets/images/explore/catering.svg" alt="" class="explore__item-img">
                    <button class="explore__item-btn black-btn">Order cathering
                    </button>
                </div>
                <div class="explore__item wow animate__animated data-wow-duration="2s" data-wow-delay="1s"">
                    <h5 class="explore__item-title">The Food</h5>
                    <p class="explore__item-descr">Our entire menu is available as dine in or takeaway.</p>
                    <img src="<?php bloginfo('template_url')?>/assets/images/explore/food.svg" alt="" class="explore__item-img">
                    <button class="explore__item-btn black-btn">food menu
                    </button>
                </div>
                <div class="explore__item wow animate__animated data-wow-duration="2s" data-wow-delay="2s"">
                    <h5 class="explore__item-title">The Gelato</h5>
                    <p class="explore__item-descr">Life is like GELATO, enjoy it before it melts.</p>
                    <img src="<?php bloginfo('template_url')?>/assets/images/explore/gelato.svg" alt="" class="explore__item-img">
                    <button class="explore__item-btn black-btn">Discover more
                    </button>
                </div>
            </div>
        </div>
    </section>
    

    <section class="order">
        <div class="container">
            <div class="order__inner">
                <div class="order__media">
                    <img src="<?php bloginfo('template_url')?>/assets/images/order/order.png" alt="img" class="order__media-img">
                </div>
                <div class="order__info">
                    <h2 class="order__info-title section__title">Order Your Favourite Coffee</h2>
                    <p class="order__info-descr">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    <button class="order__info-btn black-btn">Order Now</button>
                </div>
            </div>
        </div>
    </section>

    <section class="best">
        <div class="container">
            <h2 class="best__title section__title">Best Selling Coffee</h2>
            <p class="best__descr">A drink from the ‘My Alowishus’ bottled brews range OR grab one of our delicious coffee’s.</p>

            <div class="best__items">


            <?php
                global $post;

                $myposts = get_posts([ 
                    'numberposts' => -1
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
		?>

                <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                <div class="best__item wow animate__animated data-wow-duration="2s" data-wow-delay="0.5s"">
                    
                
                    <?php the_post_thumbnail(
                        array(206, 320),
                        array(
                            'class' => 'best__item-img'
                        )

                    ); ?>
                    

                    <div class="best__item-info">
                        <div class="best__item-about">
                            <p class="best__item-top">#1 Selling</p>
                            <h5 class="best__item-name"><?php the_title(); ?></h5>
                        </div> 
                        <p class="best__item-descr"><?php the_content(); ?></p>
                        <div class="best__item-buy">
                            <p class="best__item-price">$59.99</p>
                            <a href="" class="best__item-btn black-btn">Order now</a>
                        </div>
                    </div>                    
                </div>
                
            <?php  } } wp_reset_postdata(); ?>
                
            </div>
        </div>
    </section>

    <section class="app">
        <div class="container">
            <div class="app__inner">
                <div class="app__info">
                    <h2 class="app__info-title section__title">Instant Coffee At Your Home</h2>
                    <p class="app__info-descr">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                    <a href="#" class="app__info-btn black-btn">Download our app</a>
                </div>
                <div class="app__media">
                    <img src="<?php bloginfo('template_url')?>/assets/images/app/app.png" alt="app" class="app__media-img">
                </div>
            </div>
        </div>
    </section>

    <section class="review">
        <div class="container-fluid">
            <div class="review__inner">
                <div class="review__slider">
                    <div class="review__slider-wrapper">
                        <div class="review__items">
                            <div class="review__item">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/review1.png" alt="author" class="review__item-img">
                                <div class="review__item-content">
                                    <div class="review__item-about">
                                        <h6 class="review__item-author">Imam White</h6>
                                        <div class="review__item-rating">
                                            <ul class="star__list">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="review__item-text">“Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia”</p>
                                </div>
                                
                            </div>
                            <div class="review__item">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/review2.png" alt="author" class="review__item-img">
                                <div class="review__item-content">
                                    <div class="review__item-about">
                                        <h6 class="review__item-author">Imam White</h6>
                                        <div class="review__item-rating">
                                            <ul class="star__list">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="review__item-text">“Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia”</p>
                                </div>
                                
                            </div>
                            <div class="review__item">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/review1.png" alt="author" class="review__item-img">
                                <div class="review__item-content">
                                    <div class="review__item-about">
                                        <h6 class="review__item-author">Imam White</h6>
                                        <div class="review__item-rating">
                                            <ul class="star__list">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="review__item-text">“Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia”</p>
                                </div>
                                
                            </div>
                            <div class="review__item">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/review2.png" alt="author" class="review__item-img">
                                <div class="review__item-content">
                                    <div class="review__item-about">
                                        <h6 class="review__item-author">Imam White</h6>
                                        <div class="review__item-rating">
                                            <ul class="star__list">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="review__item-text">“Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia”</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="review__info">
                    <h2 class="review__info-title section__title">What Our Customers Say</h2>
                    <div class="review__info-rating">
                        <p class="rating__number">4.9</p>
                        <div class="rating__list">
                            <ul class="star__list">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                                <img src="<?php bloginfo('template_url')?>/assets/images/review/star.svg" alt="" class="star__list-img">
                            </ul>
                            <p class="rating__list-comment">based on 2452+ reviews</p>
                        </div>
                    </div>

                    <div class="slider__navigation">
                        <button class="slider__navigation-btn prev">
                            <img src="<?php bloginfo('template_url')?>/assets/images/review/arrow-prev.svg" alt="" class="slider__navigation-img">
                        </button>
                        <button class="slider__navigation-btn next">
                            <img src="<?php bloginfo('template_url')?>/assets/images/review/arrow-next.svg" alt="" class="slider__navigation-img">
                        </button>
                    </div>
                </div>
            </div>
        </div>
            
    </section>
 
<?php get_footer(); ?>