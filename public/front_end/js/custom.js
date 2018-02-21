
$(function() {
  $("#contact-form").validate({
    rules: {
      name: "required",
      sub: "required",
      email: {
        required: true,
        email: true
      },
    },
    messages: {
      name: "Please Enter Your Name",
      sub: "Please Enter Your Subject",
      email: {
        required: "Please Enter your Email",
        email: "Please Enter valid Email Address"
      }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});