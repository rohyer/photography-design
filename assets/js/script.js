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
	console.log('y' + y)

	const headerMenu = document.getElementById('home').offsetHeight
	const sectionShow = document.getElementById('show')
	const sectionAbout = document.getElementById('about')
	const sectionServices = document.getElementById('services')
	const sectionWork = document.getElementById('work')
	const sectionClients = document.getElementById('clients')
	const sectionContact = document.getElementById('contact')

	if (y >= sectionShow.offsetTop && y < sectionShow.offsetHeight - headerMenu - 1) {
		const menuHeader = window.document.getElementById('menu-home')
		menuHeader.classList.remove('header-menu-no-selected')
		menuHeader.classList.add('header-menu-selected')
	} else {
		const menuHeader = window.document.getElementById('menu-home')
		menuHeader.classList.remove('header-menu-selected')
		menuHeader.classList.add('header-menu-no-selected')
	}

	if (y >= sectionAbout.offsetTop - headerMenu - 1 && y < sectionAbout.offsetTop + sectionAbout.offsetHeight - headerMenu) {
		const menuAbout = window.document.getElementById('menu-about')
		menuAbout.classList.remove('header-menu-no-selected')
		menuAbout.classList.add('header-menu-selected')
	} else {
		const menuAbout = window.document.getElementById('menu-about')
		menuAbout.classList.remove('header-menu-selected')
		menuAbout.classList.add('header-menu-no-selected')
	}

	if (y >= sectionServices.offsetTop - headerMenu && y < sectionServices.offsetTop + sectionServices.offsetHeight - headerMenu) {
		const menuServices = window.document.getElementById('menu-services')
		menuServices.classList.remove('header-menu-no-selected')
		menuServices.classList.add('header-menu-selected')
	} else {
		const menuServices = window.document.getElementById('menu-services')
		menuServices.classList.remove('header-menu-selected')
		menuServices.classList.add('header-menu-no-selected')
	}

	if (y >= sectionWork.offsetTop - headerMenu && y < sectionWork.offsetTop + sectionWork.offsetHeight - headerMenu - 2) {
		const menuWork = window.document.getElementById('menu-work')
		menuWork.classList.remove('header-menu-no-selected')
		menuWork.classList.add('header-menu-selected')
	} else {
		const menuWork = window.document.getElementById('menu-work')
		menuWork.classList.remove('header-menu-selected')
		menuWork.classList.add('header-menu-no-selected')
	}

	if (y >= sectionClients.offsetTop - headerMenu - 1 && y < sectionClients.offsetTop + sectionClients.offsetHeight - headerMenu - 1) {
		const menuClients = window.document.getElementById('menu-clients')
		menuClients.classList.remove('header-menu-no-selected')
		menuClients.classList.add('header-menu-selected')
	} else {
		const menuClients = window.document.getElementById('menu-clients')
		menuClients.classList.remove('header-menu-selected')
		menuClients.classList.add('header-menu-no-selected')
	}

	if (y >= sectionContact.offsetTop - headerMenu - 1 && y < sectionContact.offsetTop + sectionContact.offsetHeight - headerMenu) {
		const menuContact = window.document.getElementById('menu-contact')
		menuContact.classList.remove('header-menu-no-selected')
		menuContact.classList.add('header-menu-selected')
	} else {
		const menuContact = window.document.getElementById('menu-contact')
		menuContact.classList.remove('header-menu-selected')
		menuContact.classList.add('header-menu-no-selected')
	}
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

// ======================================================
// ==================== CLICK WORK ======================

var workPhotography = window.document.querySelectorAll('#work-menu li')

workPhotography.forEach(item => {
	item.addEventListener('click', changeFocusWork)
})

function changeFocusWork(event) {
	const workItem = event.target
	const id = workItem.getAttribute('id')

	const workItemAll = window.document.getElementById('work-menu-all').classList.remove('work-menu-selected')

	const workItemPhotography = window.document.getElementById('work-menu-photography').classList.remove('work-menu-selected')

	const workItemDesign = window.document.getElementById('work-menu-design').classList.remove('work-menu-selected')

	const workItemFocused = window.document.getElementById(id)
	console.log(workItemFocused)
	workItemFocused.classList.add('work-menu-selected')

	if (workItemFocused.id == 'work-menu-photography') {
		const categoryDesign = window.document.querySelectorAll('li.work-post.category-design')
		categoryDesign[0].classList.add('no-selected-img-work')
		categoryDesign[1].classList.add('no-selected-img-work')
		categoryDesign[2].classList.add('no-selected-img-work')

		const categoryPhotography = window.document.querySelectorAll('li.work-post.category-photography')
		categoryPhotography[0].classList.remove('no-selected-img-work')
		categoryPhotography[1].classList.remove('no-selected-img-work')
		categoryPhotography[2].classList.remove('no-selected-img-work')
	} else if (workItemFocused.id == 'work-menu-design') {
		const categoryPhotography = window.document.querySelectorAll('li.work-post.category-photography')
		categoryPhotography[0].classList.add('no-selected-img-work')
		categoryPhotography[1].classList.add('no-selected-img-work')
		categoryPhotography[2].classList.add('no-selected-img-work')

		const categoryDesign = window.document.querySelectorAll('li.work-post.category-design')
		categoryDesign[0].classList.remove('no-selected-img-work')
		categoryDesign[1].classList.remove('no-selected-img-work')
		categoryDesign[2].classList.remove('no-selected-img-work')
	} else if (workItemFocused.id == 'work-menu-all'){
		const categoryDesign = window.document.querySelectorAll('li.work-post.category-design')
		categoryDesign[0].classList.remove('no-selected-img-work')
		categoryDesign[1].classList.remove('no-selected-img-work')
		categoryDesign[2].classList.remove('no-selected-img-work')

		const categoryPhotography = window.document.querySelectorAll('li.work-post.category-photography')
		categoryPhotography[0].classList.remove('no-selected-img-work')
		categoryPhotography[1].classList.remove('no-selected-img-work')
		categoryPhotography[2].classList.remove('no-selected-img-work')
	}
}


// ======================================================
// ==================== CLICK WORK ======================