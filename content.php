<?php

    include_once 'photos.php';
    $photos = myPhotos();
    $count = count($photos);

?>
<div class="row">
    
    <?php
        for ( $index = 0; $index < $count; $index++ ) : 
        $current_position = $index + 1;
        ?>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3 img-column">
                <div class="img-container">
                    <img class="img" src="<?php echo $photos[$index]['thumbnail']; ?>" data-image-index="<?php echo $current_position; ?>">
                    
                    <div class="photo-caption text-center">
                        <span><?php echo $photos[$index]['caption']; ?></span>
                    </div>
                </div>
                 
                
            </div>
    <?php endfor; ?>
  
</div>