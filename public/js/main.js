	$(document).ready(function() {
		// open contact
		$('.open_contact').click(function() {
			$('#contact').css(
			{
				'display': 'block'
			}

				);
		});

	});

	// close modal
	$('#close_contact').click(function() {
		$('#contact').css(
		{
			'display': 'none'

		}

			)
	});

	$(document).ready(function() {
		// open contact
		$('open_dropdown').click(function() {
			$('#dropdown-menu').removeClass('dropdown').addClass('dropdown is-active');
				
		});

	});

	// close modal
	$('.open_dropdown').click(function() {
		$('#dropdown-menu').removeClass(
		{
			'is-active'

		}

			)
	});
	