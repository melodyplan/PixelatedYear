<?php

get_header(); ?>

  <!-- site content -->
  <div class="site-content clearfix">

    <section class="main-container">

      <div class="calendar">
        <div class="year">
          <div class="month">
            <div class="month-name">
              Jan
            </div>
            <div class="month-name">
              Feb
            </div>
            <div class="month-name">
              Mar
            </div>
            <div class="month-name">
              Apr
            </div>
            <div class="month-name">
              May
            </div>
            <div class="month-name">
              Jun
            </div>
            <div class="month-name">
              Jul
            </div>
            <div class="month-name">
              Aug
            </div>
            <div class="month-name">
              Sept
            </div>
            <div class="month-name">
              Oct
            </div>
            <div class="month-name">
              Nov
            </div>
            <div class="month-name">
              Dec
            </div>
          </div> <!-- /month -->
          <div class="number-of-days">
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
            <div class="day"></div>
          </div><!-- /number-of-days -->
        </div><!-- /year -->
      </div> <!-- /calendar -->

      <!--<?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>

        <article class="post">
          <h2><a href="<php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>
        </article>

        <?php endwhile;

        else :
          echo '<p>No content found</p>';

        endif; ?> -->
    </section> <!-- /main column -->

    <!-- secondary-column -->
    <section class="secondary-container">
      <div class="sidebar-top">
        <p>This is the sidebar.</p>
      </div>
      <div class="sidebar-bottom">
        <p>The good news is, bad days are only 24 hours long.</p>
      </div>
    </section> <!-- secondary-column -->

  </div> <!-- /site content -->

<?php get_footer();

?>
