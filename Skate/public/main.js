$(function(){
    function addEditor(){
        $('.editors').on('click', function(){
            $(".bio_input").val($('.bio .val').text());
            $(".bio .txtarea").show();
            $(".bio .editors").hide();
            $(".bio .val").hide();
        });
    }

    addEditor();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
        }
    });
// SAVE
    $('.bio').on('click', '.save', function(){
        console.log('Hello');
        var updatedBio =  $('.bio_input').val()
        var formData = {
            bio: updatedBio,
        };
        var button = this;

        $.post( "/api/volunteer/{{ $volunteer->id }}/update", formData, function( data ) {
            $(".bio .txtarea").hide();
            $(".bio .val").html(updatedBio);
            $(".bio .editors").show();
            $(".bio .val").show();
        }); 
    });
// CANCEL
    $('.bio').on('click', '.cancel', function(){
        $(".bio .txtarea").hide();
        $(".bio .editors").show();
        $(".bio .val").show();
    });

    $('.slider').slick({
        dots: true,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
    });
});