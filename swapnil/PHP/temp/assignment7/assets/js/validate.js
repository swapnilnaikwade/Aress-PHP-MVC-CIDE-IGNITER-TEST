/*
	Name: validate()
	Description: function to validate the input fields
	Parameters: field to validate
	Return: NA
 */
$(document).ready(function () {
   $.validator.addMethod("letters", function (value, element) {
      return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
   }, "Name must be in characters only");
   $("#validate").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                letters: true
            },
            email: {
                required: true,
                email: true
            },
            url: {
                url: true
            },
            comment: {
                required: true

            }

        }
	});
});
