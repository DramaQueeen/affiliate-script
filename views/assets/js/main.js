$(document).ready(function () {
    $('.form').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var answer = $('#answer');
        var action = form.attr('action');
        var method = form.attr('method');
        var formdata = new FormData(this);
        var loading = $("#form");
        loading.addClass('loading');
        
        $.ajax({
            type: method,
            url: action,
            data: formdata ? formdata : form.serialize(),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                loading.removeClass('loading');
                answer.html(data);
            },
            error: function (data) {
                loading.removeClass('loading');
                answer.html(data);
            }
        });
        return false;
    });
    
    $('table .delete').on('click', function(e){
        e.preventDefault();
        var redirect = $(this).attr('href');
		swal({
		  	title: 'Are you sure?',
		  	text: "The info will be delete",
		  	type: 'warning',
		  	showCancelButton: true,
		  	cancelButtonColor: '#F44336',
		  	confirmButtonText: 'Yes, Delete!',
		  	cancelButtonText: 'No, Cancel!'
		}).then(function () {
			window.location.href = redirect;
        });
    });
    
    $("#add").on('click', function(){
        
        $('.ui.small.modal').modal('show');
    });

    $(".dropdown").dropdown();
});