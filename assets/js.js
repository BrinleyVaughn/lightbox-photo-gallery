var currentSlide = 1;

function showSlide(n) {
    let i;
    let slides = $('.slide');
    let thumbnails = $('.thumbnail');
  
    if (n > slides.length) {currentSlide = 1}
    if (n < 1) {currentSlide = slides.length}
  
  
    $(slides).hide();
    $(thumbnails).removeClass('active');
  
    let newSlide = $(slides[currentSlide-1]);
    let newThumbnail = $(thumbnails[currentSlide-1]);
  
    newSlide.show();
    newThumbnail.addClass('active');
    $('#caption').html( newThumbnail.attr('alt') );
}

// // Click Events 

$(document).on('click', '.img-column .img, .thumbnail', function() {
    let index = $(this).data('image-index');
    
    if( !$('#lightbox').length ){
        $.get('lightbox.php', function(html) {
            $('body').append(html);
            $('#lightbox').show();
            showSlide(currentSlide = index);
        });
    }
    else {
        $('#lightbox').show();
        showSlide(currentSlide = index);
    }
});

// Navigation Buttons

$(document).on('click', '.prev', function() {
    showSlide(currentSlide -= 1);
});

$(document).on('click', '.next', function() {
    showSlide(currentSlide += 1);
});

$(document).on('click', '.close-lightbox', function() {
    $('#lightbox').remove();
});