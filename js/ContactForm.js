
$(document).ready(function() {

$("#AjaxForm").validate({
    rules: {
      FName: {
        required: true,
        minlength: 5
      },
      Email: {
        required: true,
        email: true
      },
      Message: {
        required: true,
        minlength: 5
    }
  },
  errorPlacement: function(error, element) {

  },
  submitHandler: function(form) {
    $.ajax({
      type:'post',
      url: './Form.php',
      data: form.serialize(),
    }).done(function() {
      //callback which can be used to show a thank you message
      //and reset the form
      console.log('done!');
      $(".ajax-form").hide();
      $(".form-thank-you").css("display","block!important");
      $(".form-thank-you").fadeIn("400");
    }).always(function(data) {
        console.log(JSON.stringify(data));
    });

      return false; //to stop the form from submitting
    }
  });

});
