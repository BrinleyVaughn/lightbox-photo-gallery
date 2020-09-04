<?php 

include_once 'photos.php';
$photos = myPhotos();
$count = count($photos);
?>


<div id="lightbox">
  <button class="close-lightbox">&times;</button>
  <div class="lightbox-body">
    
    <?php
        for ( $index = 0; $index < $count; $index++ ) :
        $current_position = $index + 1;
    ?>
        
        <div class="slide">
          <span class="current-image-text"><?php echo 'Showing ' .  $current_position . ' of ' . $count . ' photos'; ?></span>
          <img class="img" src="<?php echo $photos[$index]['url']; ?>">
        </div>
    
    <?php endfor; ?>
    

    <!-- Next/previous controls -->
    <button class="btn-link prev">&#10094;</button>
    <button class="btn-link next">&#10095;</button>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    
    <div class="thumbnail-container">
        <div class="row thumbnail-scroller">
            <!-- Thumbails -->
            <?php
                for ( $index = 0; $index < $count; $index++ ) :
                $current_position = $index + 1;
            ?>  
                <div class="col-1 px-1 mb-1">
                  <img class="img thumbnail" src="<?php echo $photos[$index]['thumbnail']; ?>" alt="<?php echo $photos[$index]['caption']; ?>" data-image-index="<?php echo $current_position; ?>">
                </div>
            
            <?php endfor; ?>
        </div>
    </div>
    
  </div>
</div>