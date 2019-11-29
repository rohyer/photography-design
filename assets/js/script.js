$('#services ul').owlCarousel({
	loop: true,
	reponsiveClass: true,
	responsive:{
		0:{
			items: 1,
			nav: true
		},
		600:{
			items: 2,
			nav: true
		},
		1000:{
			items: 3,
			nav: true
		}
	}
});

// ================================================
// ==================== HEADER ====================

window.addEventListener('scroll', function(e) {
    let y = window.pageYOffset
    
    if (y >= 200) {
        let header = window.document.querySelector('header')
        header.classList.add('header-fixed')
    } else if (y < 200) {
        let header = window.document.querySelector('header')
        header.classList.remove('header-fixed')
    }
})

window.addEventListener('scroll', function(e) {
	const y = window.pageYOffset

	const header = window.document.querySelector('header')
	const menuHeader = window.document.getElementById('menu-home')
	const show = window.document.getElementById('show')
	const headerHeight = header.offsetHeight
	const positionMenuHeader = show.offsetHeight
	console.log(positionMenuHeader)

	if ((y >= 0) && (y <= positionMenuHeader - headerHeight)) {
		menuHeader.classList.add('header-menu-selected')
	} else {
		menuHeader.classList.remove('header-menu-selected')
	}

	// const menuAbout = window.document.getElementById('about')
	// const menuServices = window.document.getElementById('services')
	// const menuWork = window.document.getElementById('work')
	// const menuClients = window.document.getElementById('clients')
	// const menuContact = window.document.getElementById('contact')


})

// ================================================
// ==================== HEADER ====================

// ======================================================
// ==================== CLICK SCROLL ====================

var menuItems = window.document.querySelectorAll('li.header-menu-item a')

menuItems.forEach(item => {
	item.addEventListener('click', scrollClick)
})

function scrollClick(event) {
	event.preventDefault()
	const element = event.target
	const id = element.getAttribute('href')
	const menuItem = window.document.querySelector(id)
	const header = window.document.querySelector('header')
	const heightHeader = header.offsetHeight
	const heightMenuItem = menuItem.offsetTop
	const toPosition = heightMenuItem - heightHeader
	scrollToPosition(toPosition)
}

function scrollToPosition(toPosition) {
	// window.scroll({
	// 	top: toPosition,
	// 	behavior: "smooth"
	// })
	smoothScrollTo(toPosition, 1000)
}

function smoothScrollTo(endY, duration) {
	const startY = window.scrollY || window.pageYOffset
	const distanceY = endY - startY
	const startTime = new Date().getTime()

	duration = typeof duration !== 'undefined' ? duration : 400

	const easeInOutQuart = (time, from, distance, duration) => {
		if ((time /= duration /2 ) < 1) return distance / 2 * time * time * time * time * time + from
		return -distance /2 * ((time -= 2) * time * time * time - 2) + from
	}

	const timer = setInterval(() => {
		const time = new Date().getTime() - startTime
		const newY = easeInOutQuart(time, startY, distanceY, duration)
		if (time >= duration) {
			clearInterval(timer)
		}
		window.scroll(0, newY)
	}, 1000 / 60)
}

// ======================================================
// ==================== CLICK SCROLL ====================