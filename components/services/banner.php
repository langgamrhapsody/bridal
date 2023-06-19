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