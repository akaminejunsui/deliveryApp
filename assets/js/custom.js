function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(input).parents('.img-wrap').find('.img-upload').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 80){
            $(".menubar").addClass("scrollBar");
        } else {
            $(".menubar").removeClass("scrollBar");
        }
        if($(this).scrollTop() > 500){
            $(".arrow_up").removeClass("hidden");
        } else {
            $(".arrow_up").addClass("hidden");
        }
    });
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    })
    $('.btn-file :file').on('fileselect', function(event, label) {
	    
	    var input = $(this).parents('.input-group').find(':text'),
	        log = label;
	    
	    if( input.length ) {
	        input.val(log);
	    }
    
    });
	
	$(".imgInp").change(function(){
	    readURL(this);
	});
});