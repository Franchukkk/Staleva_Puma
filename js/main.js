jQuery(document).ready(function ($) {
	var $burgerMenu = $('.burger-menu')
	var $mobileContainer = $('.mobile-menu-container')

	$burgerMenu.on('click', function () {
		$(this).toggleClass('is-active')
		$mobileContainer.toggleClass('is-active')

		$('body').toggleClass('no-scroll')
	})

	$('.mobile-menu-list a, .mobile-menu-btn').on('click', function () {
		$burgerMenu.removeClass('is-active')
		$mobileContainer.removeClass('is-active')
		$('body').removeClass('no-scroll')
	})

	$('a[href*="#"]:not([href="#"])').click(function (e) {
		if (
			location.pathname.replace(/^\//, '') ==
				this.pathname.replace(/^\//, '') &&
			location.hostname == this.hostname
		) {
			var target = $(this.hash)
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')

			if (target.length) {
				e.preventDefault()

				var offsetTop = target.offset().top
				if ($('#wpadminbar').length) {
					offsetTop -= $('#wpadminbar').height()
				}

				$('html, body').animate(
					{
						scrollTop: offsetTop,
					},
					800
				)

				if ($burgerMenu.hasClass('is-active')) {
					$burgerMenu.removeClass('is-active')
					$mobileContainer.removeClass('is-active')
					$('body').removeClass('no-scroll')
				}

				return false
			}
		}
	})
})
