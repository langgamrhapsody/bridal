<div class="banner">
    <div class="banner__container container">
        <div class="banner__row row">
            <div class="banner__col col-10 col-lg-8 col-xl-6 col-xxl-5">
                <div class="banner__content">
                    <p class="banner__content-desc">Home/ Service</p>
                    <h1 class="banner__content-title">About <span>Tirtha</span></h1>

                </div>
            </div>
        </div>
        <div class="banner__swiper-button">
            <div class="banner__swiper-button-prev swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                </svg>
            </div>
            <div class="banner__swiper-button-next swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="swiper banner__swiper">
        <div class="swiper-wrapper">
            <?php foreach($properties as $property) : ?>
            <div class="swiper-slide">
                <img class="banner__swiper-img" src="<?php echo $property['img']; ?>"
                    alt="<?php echo $property['name']; ?>">
            </div>
            <?php endforeach ?>
        </div>
    </div>

</div>