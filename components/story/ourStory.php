<div class="story">
    <div class="story__container container">
        <div class="story__row row">
            <div class="story__col col-12">
                <img class="story__img" src="../../assets/img/company-2.webp" alt="">
            </div>
            <div class="story__col--text col-12 col-lg-6">
                <div class="story__content">
                    <h1 class="story__content-title">Our Story</h1>
                    <p class="story__content-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur
                        repellendus inventore et
                        iste aliquam iure! Molestias, cumque. Voluptates inventore nemo, placeat ipsa libero accusamus
                        dolorum debitis, officia beatae, facilis quibusdam. Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Similique nihil ipsam libero! Placeat rerum laborum libero facere vel dolor,
                        tempore dignissimos perspiciatis minus magni optio. Tempora quas doloremque molestias enim!
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptate, incidunt consectetur
                        nostrum quibusdam nulla dignissimos saepe doloribus animi obcaecati veritatis eius quas
                        voluptates optio fugiat. Quasi delectus aliquam dicta?
                        <br>
                        <br>

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi perferendis voluptas, minus ullam
                        quae velit distinctio mollitia, possimus id tempora consequatur veniam perspiciatis aliquam amet
                        vitae, molestias enim! A, possimus?
                        <br>
                        <br>

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptate, incidunt consectetur
                        nostrum quibusdam nulla dignissimos saepe doloribus animi obcaecati veritatis eius quas
                        voluptates optio fugiat. Quasi delectus aliquam dicta?
                        <br>
                        <br>

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi perferendis voluptas, minus ullam
                        quae velit distinctio mollitia, possimus id tempora consequatur veniam perspiciatis aliquam amet
                        vitae, molestias enim! A, possimus?

                        <br>
                        <br>

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi perferendis voluptas, minus ullam
                        quae velit distinctio mollitia, possimus id tempora consequatur veniam perspiciatis aliquam amet
                        vitae, molestias enim! A, possimus?
                    </p>
                </div>
            </div>
            <div class="story__col--swiper col-12 col-sm-10 col-lg-6">
                <div class="story__swiper-container">
                    <div class="story__swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($galleries as $gallery) : ?>
                            <div class="swiper-slide">
                                <img class="story__swiper-img" src="<?php echo $gallery['img']; ?>"
                                    alt="<?php echo $gallery['alt']; ?>">
                            </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                    <div class="story__swiper-pagination swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>