<?php
/*
Template Name: Сторінка "Галерея"
*/

get_header(); 
?>

<main class="main-content">


<section class="video-player-section">
        <div class="video-container">
            
            <a href="#" 
               class="video-poster-block js-video-trigger" 
               style="background-image: url('<?php echo get_template_directory_uri(); ?>/media/video-poster.png');"
               data-video-src="http://googleusercontent.com/embed/5qap5aO4i9A">
                
                <span class="play-button-large"></span>
            </a>
            
        </div>
    </section>


<div class="video-modal" id="video-modal">
    <div class="video-modal-overlay js-close-video-modal"></div>
    <div class="video-modal-content">
        <button class="video-modal-close js-close-video-modal" aria-label="Закрити відео">&times;</button>
        <div class="video-modal-iframe-container">
            <iframe id="video-iframe" 
                    src="" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
    
    
    
  <section class="main-gallery-section">
    <div class="gallery-container">
        
       <div class="section-title-wrapper-center">
                <hr class="title-line-full">
                <div class="title-text-content">
                    
                    <span class="pre-title">НАША</span>
                    <h1 class="section-title">ГАЛЕРЕЯ</h1>
                </div>
                <hr class="title-line-full">
            </div>
        
        <div class="main-gallery-grid">
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 1">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 2">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 3">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 4">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 5">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 6">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 7">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/gallery/img-1.png" alt="Фото з галереї 8">
            </a>
        </div>
        
    </div>
</section>
    
</main>

<?php
get_footer(); 
?>