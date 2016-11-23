





           <div class="blog-post">
            <!--<h2 class="blog-post-title"><?php the_title(); ?></h2> changed this link-->
            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
            <?php the_content(); ?>


          </div><!-- /.blog-post -->


<nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>
