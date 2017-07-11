<?php get_header(); ?>
  <?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'main_menu' ) ); ?>

  <?php if(dynamic_sidebar('description_area')) : else :endif; ?>


  <section id="operation-area">
    <textarea rows="22" cols="50" id="content-request" class="d-inline">
    </textarea>

    <button id="send-button" onclick="send()" class="d-inline">Send</button>

    <div id="content-response" class="d-inline">
       
    </div>
  </section>

<?php get_footer(); ?>