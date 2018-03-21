$(document).ready( () => {

	function sendForm(form) {
		$(form).submit(function(event) {
			// Stop the browser from submitting the form.
			event.preventDefault();

			// Serialize the form data.
			var formData = $(form).serialize();

			// Submit the form using AJAX.
			$.ajax({
				type: 'POST',
				url: '#',
				data: formData,
				//success: () => {}
			}).done(function(response) {
				//$("#scores").load("# #scores");
			}).fail(function(data) {
				console.error('You did done failed');
			});
		});
	}

	sendForm('form');

});