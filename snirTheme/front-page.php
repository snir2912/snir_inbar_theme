<?php
get_header();
?>


<!-- this is about section text -->
<div class="row">
    <h2 class="white-text"><?php the_title();?></h2>
<h1>this is my front page!!</h1>
    <div class="width-65">
        
       <?php 
       $about = get_field('about');
       echo "<p class='white-text'>$about</p>"
       ?>
    </div>
    <div class="width-35">
        <img src=<?php echo get_theme_file_uri('./images/me.jpg') ?> alt="snir inbar">
    </div>
</div> 

<p class="white-text">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nulla similique accusamus animi esse placeat maxime debitis culpa, voluptates voluptatum incidunt ducimus reiciendis quidem aliquam laudantium tempora error atque enim!
</p>