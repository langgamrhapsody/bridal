<?php

$galleries = [
    ['img' => '../../assets//img/gallery/1.jpg', "alt" => "photo-1"],
    ['img' => '../../assets//img/gallery/2.jpg', "alt" => "photo-2"],
    ['img' => '../../assets//img/gallery/3.jpg', "alt" => "photo-3"],
    ['img' => '../../assets//img/gallery/4.jpg', "alt" => "photo-4"],
    ['img' => '../../assets//img/gallery/5.jpg', "alt" => "photo-5"],
    ['img' => '../../assets//img/gallery/6.jpg', "alt" => "photo-6"],
    ['img' => '../../assets//img/gallery/7.jpg', "alt" => "photo-7"],
    ['img' => '../../assets//img/gallery/8.jpg', "alt" => "photo-8"],
    ['img' => '../../assets//img/gallery/9.jpg', "alt" => "photo-9"],
    ['img' => '../../assets//img/gallery/10.jpg', "alt" => "photo-10"],
    ['img' => '../../assets//img/gallery/11.jpg', "alt" => "photo-11"],
    ['img' => '../../assets//img/gallery/12.jpg', "alt" => "photo-12"],


];
?>

<div class="gallery__row row">
    <?php foreach($galleries as $index=>$gallery) : ?>
    <div class="<?php echo "gallery__col--" . $index . " " . "gallery__col col-4 col-sm-3 col-md-2" ;?>">
        <div class="gallery__image-container" data-fancybox="gallery" data-src="<?php echo $gallery['img']; ?>">
            <img class="gallery__image" src="<?php echo $gallery['img']; ?>" alt="<?php echo $gallery['alt'];?>">
        </div>
    </div>
    <?php endforeach ?>
</div>