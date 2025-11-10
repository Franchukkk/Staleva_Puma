<?php get_header(); ?>

<main>
    <section class="hero-banner">
    
    <img src="<?php echo get_template_directory_uri(); ?>/media/gym-background.jpg" alt="Фон спортзалу" class="hero-background-img">

    <div class="hero-container">
        
        <div class="hero-image-col">
            <img src="<?php echo get_template_directory_uri(); ?>/media/hero-athlete.png" alt="Атлет фітнес-клубу" class="hero-athlete-img">
        </div>

        <div class="hero-content-col">
            <h1 class="hero-title">
                СИЛА.<br>
                ФОКУС.<br>
                ХАРАКТЕР.
            </h1>
            <p class="hero-description">
                перетворіть своє тіло та розум у фітнес клубі "сталева <br>пума"*, де усе готово до початку нового шляху
            </p>
            <div class="hero-buttons">
                <a href="#zapis" class="btn btn-solid">Записатись</a>
                <a href="#rozklad" class="btn btn-outline">Ціни</a>
            </div>
        </div>

    </div>
</section>
    
    

<section id="pro-klub" class="about-section">
    <div class="container">
        
        <div class="about-title-wrapper">
            <span class="pre-title">СТАЛЕВА ПУМА-</span>
            <div class="title-with-line">
                <h2 class="section-title">МІСЦE ЗМІН</h2>
                <hr class="title-divider">
            </div>
        </div>

        <div class="about-content-grid">
            
            <div class="about-content-col">
                <p>Ласкаво просимо до «Сталева Пума» – нового фітнес-клубу, де сучасність зустрічається з професіоналізмом! У нас ви знайдете найновіше обладнання, просторі тренажерні зали та комфортну атмосферу для тренувань будь-якого рівня.</p>
                <p>Наші професійні тренери допоможуть досягти ваших цілей, а групові заняття зроблять тренування ще цікавішими та ефективнішими.</p>
                <p>Натиснувши на кнопку «Про клуб», ви зможете детально познайомитись з нашою командою, розкладом занять та іншими можливостями, які роблять «Сталева Пума» вашим ідеальним місцем для спорту та здорового способу життя.</p>
                
                <a href="/pro-klub-detalno" class="btn-outline-gray">Про клуб</a> 
            </div>

            <div class="about-images-col">
                <img src="<?php echo get_template_directory_uri(); ?>/media/about-img-1.png" alt="Дівчина у фітнес-клубі" class="about-img-1">
                <img src="<?php echo get_template_directory_uri(); ?>/media/about-img-2.png" alt="Тренер у фітнес-клубі" class="about-img-2">
            </div>

        </div> 
    </div> 
</section>    


<section id="services" class="services-section">
    <div class="services-container">
        
       
        <div class="section-title-wrapper">
            <hr class="title-line">
            <div class="title-text-content">
                <span class="pre-title">ГЛЯНЬТЕ</span>
                <h2 class="section-title">У НАС ВИ ЗНАЙДЕТЕ</h2>
            </div>
            <hr class="title-line">
        </div>

        
        <div class="services-grid">
            
            <div class="service-item">
                <div class="service-item-content">
                    <h3 class="service-title">СИЛОВІ ТРЕНУВАННЯ</h3>
                   
                    <img src="<?php echo get_template_directory_uri(); ?>/media/icon-strength.svg" alt="Силові тренування" class="service-icon">
                    <p>ОСНОВА БУДЬ-ЯКОГО ЗАЛУ, ТІЛЬКИ В НАС ВОНА КРАЩА!</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-item-content">
                    <h3 class="service-title">КАРДІО ЗОНА</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/icon-cardio.svg" alt="Кардіо зона" class="service-icon">
                    <p>ТОПОВІ БІГОВІ ДОРІЖКИ, ОРБІТРЕК ТА ІНШІ ТРЕНАЖЕРИ...</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-item-content">
                    <h3 class="service-title">ГРУПОВІ ЗАНЯТТЯ</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/icon-group.svg" alt="Групові заняття" class="service-icon">
                    <p>ДОЛУЧАЙСЯ ДО ГРУПОВИХ ЗАНЯТЬ!</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-item-content">
                    <h3 class="service-title">ПЕРСОНАЛЬНІ ТРЕНУВАННЯ</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/icon-personal.svg" alt="Персональні тренування" class="service-icon">
                    <p>ДОСВІДЧЕНА КОМАНДА ТРЕНЕРІВ ГОТОВА ПОКАЗАТИ, НА ЩО ВИ ЗДАТНІ...</p>
                </div>
            </div>

        </div> 
        
        
        <div class="services-button-wrapper">
            <a href="#prices" class="btn-outline-gray">ПОДИВИТИСЯ ЦІНУ</a>
        </div>

    </div>
</section>

<section id="zapis" class="contact-section">
    <div class="zapis-container">
        
        <div class="section-title-wrapper">
            <hr class="title-line">
            <div class="title-text-content">
                <span class="pre-title">НАШІ</span>
                <h2 class="section-title">КОНТАКТИ</h2>
            </div>
        </div>

        <div class="contact-grid">
            
            <div class="contact-form-wrapper">
    <h3 class="contact-form-title">ЗАПИСУЙСЯ І СТАВАЙ КРАЩИМ!</h3>
    
    <form class="contact-form" id="contact-form" method="POST">
        <input type="text" name="user_name" placeholder="ІМ'Я" required>
        <input type="tel" name="user_phone" placeholder="ТЕЛЕФОН" required>
        
        <button type="submit" class="btn-solid">Записатись</button>
        
        <div class="form-message" style="display:none;"></div>
    </form>
</div>

            <div class="contact-map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.070776077596!2d24.02706801570932!3d49.84110197939516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add6d9f0a2e31%3A0x631a0e0600a9442a!2z0LzQsNGI0YbRiywg0JvRjNCy0ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA3OTAwMA!5e0!3m2!1suk!2sua!4v1678886400000!5m2!1suk!2sua" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div> 
    </div> 
</section>
</main>

<?php get_footer(); ?>