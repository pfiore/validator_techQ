$(document).ready(function(){
    $('.btn').click(function(event){
        // alert('hi');
// event.preventDefault();
        var formInputs = new Array();
        formInputs['email'] = $('#email').val();
        formInputs['number'] = $('#number').val();
        // formInputs['musicians'] = $('#musicians').val();
        formInputs['musicians'] = $('input[name=musicians]:checked').val();
        console.log(formInputs);
        $.ajax({
            url: '/validate.php',
            type: 'POST',
            data: {
                inputs: formInputs
            },
            success: function(data) {
                $('#britney').show().delay(5000).fadeOut();
            }
        });//end ajax object
    });
});
