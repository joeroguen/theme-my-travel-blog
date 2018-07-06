<?php $isPostsPage = true; ?>
<?php get_header(); ?>



<?php if( have_posts() ) : ?>
<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php endwhile; ?>
<?php endif; ?>



<h2 class='offset-2'>blog</h2>
<div id='posts-page'>
    <div class='row no-gutters'>
        <div class='post col-sm-6'>
            <div class='info'>
                <span class='date'>april 12, 2018</span>
                <h3 class='trip-name' href='#'>the bahamas</h3>
                <h2 class='title'>day 6: at the beach</h2>
                <p class='excerpt'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a class='read-more' href='#'>read more <i class="fas fa-angle-double-right"></i></a>
                <ul class='tags'>
                    <li><a href='#'>locations</a></li>
                    <li><a href='#'>surfing</a></li>
                    <li><a href='#'>tropical</a></li>
                    <li><a href='#'>beach</a></li>
                    <li><a href='#'>sport</a></li>
                </ul>
            </div>
        </div>
        <div class='post col-sm-6'>
            <div class='info'>
                <span class='date'>april 12, 2018</span>
                <h3 class='trip-name' href='#'>the bahamas</h3>
                <h2 class='title'>day 6: at the beach</h2>
                <p class='excerpt'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a class='read-more' href='#'>read more <i class="fas fa-angle-double-right"></i></a>
                <ul class='tags'>
                    <li><a href='#'>locations</a></li>
                    <li><a href='#'>surfing</a></li>
                    <li><a href='#'>tropical</a></li>
                    <li><a href='#'>beach</a></li>
                    <li><a href='#'>sport</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='row no-gutters'>
        <div class='post col-sm-6'>
            <div class='info'>
                <span class='date'>april 12, 2018</span>
                <h3 class='trip-name' href='#'>the bahamas</h3>
                <h2 class='title'>day 6: at the beach</h2>
                <p class='excerpt'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a class='read-more' href='#'>read more <i class="fas fa-angle-double-right"></i></a>
                <ul class='tags'>
                    <li><a href='#'>locations</a></li>
                    <li><a href='#'>surfing</a></li>
                    <li><a href='#'>tropical</a></li>
                    <li><a href='#'>beach</a></li>
                    <li><a href='#'>sport</a></li>
                </ul>
            </div>
        </div>
        <div class='post col-sm-6'>
            <div class='info'>
                <span class='date'>april 12, 2018</span>
                <h3 class='trip-name' href='#'>the bahamas</h3>
                <h2 class='title'>day 6: at the beach</h2>
                <p class='excerpt'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a class='read-more' href='#'>read more <i class="fas fa-angle-double-right"></i></a>
                <ul class='tags'>
                    <li><a href='#'>locations</a></li>
                    <li><a href='#'>surfing</a></li>
                    <li><a href='#'>tropical</a></li>
                    <li><a href='#'>beach</a></li>
                    <li><a href='#'>sport</a></li>
                </ul>
            </div>
        </div>
    </div>
    <a class='button-view-more-blogs offset-sm-2' href='#'>view more blogs</a>
</div>



<?php get_footer(); ?>
