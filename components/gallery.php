<div class="gallery__row row">
    <?php foreach($galleries as $index=>$gallery) : ?>
    <div class="<?php echo "gallery__col--" . $index . " " . "gallery__col col-4 col-sm-3 col-md-2" ;?>">
        <div class="gallery__image-container" data-fancybox="gallery" data-src="<?php echo $gallery['img']; ?>">
            <img class="gallery__image" src="<?php echo $gallery['img']; ?>" alt="<?php echo $gallery['alt'];?>">
        </div>
    </div>
    <?php endforeach ?>
</div>