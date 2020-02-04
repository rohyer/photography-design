$('#services ul').owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 2000,
	autoplayHoverPause: true,
	autoplaySpeed: false,
	dots: false,
	navText: [" ", " "],
	reponsiveClass: true,
	responsive:{
		0:{
			items: 1
		},
		600:{
			items: 2
		},
		1000:{
			items: 3
		}
	}
});

$('ul#work-menu-responsive').owlCarousel({
	loop: true,
	autoplay: false,
	autoplayTimeout: 2500,
	autoplayHoverPause: true,
	autoplaySpeed: false,
	dots: false,
	navText: [" ", " "],
	reponsiveClass: true,
	responsive:{
		0:{
			items: 1
		},
		768:{
			items: 1
		}
	}
});

$('#clients ul').owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 2500,
	autoplayHoverPause: true,
	autoplaySpeed: false,
	dots: true,
	reponsiveClass: true,
	responsive:{
		0:{
			items: 1
		},
		600:{
			items: 1
		},
		1000:{
			items: 1
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

menuItems.forEach(function(item) {
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

const menuItemsResponsive = window.document.querySelectorAll('ul#menu-list li a')
menuItemsResponsive.forEach(function(element) {
	element.addEventListener('click', scrollClickResponsive)
})
console.log(menuItemsResponsive)

function scrollClickResponsive(event) {
	event.preventDefault()
	const element = event.target
	const responsiveMenu = document.getElementById('responsive-menu')
	const btnIcon = document.getElementById('btn-icon')
	const body = document.getElementsByTagName('body')[0]
	const id = element.getAttribute('href')
	console.log(id)
	const menuItem = window.document.querySelector(id)
	const header = window.document.querySelector('header')
	const heightHeader = header.offsetHeight
	const heightMenuItem = menuItem.offsetTop
	const toPosition = heightMenuItem - heightHeader
	responsiveMenu.classList.remove('open-menu-responsive')
	btnIcon.classList.remove('menu-opened')
	btnIcon.classList.add('menu-closed')
	body.style.overflow = "initial"
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
// ==================== RESPONSIVE MENU =================

const btnIcon = document.getElementById('btn-icon');
btnIcon.addEventListener('click', openCloseMenu)
function openCloseMenu(){
	let responsiveMenu = document.getElementById('responsive-menu')
	let body = document.getElementsByTagName('body')[0]
	console.log(btnIcon.className)

	if (btnIcon.className == 'menu-closed') {
		btnIcon.classList.remove('menu-closed')
		btnIcon.classList.add('menu-opened')
		responsiveMenu.classList.add('open-menu-responsive')
		body.style.overflow = 'hidden'
	} else if (btnIcon.className == 'menu-opened') {
		btnIcon.classList.remove('menu-opened')
		btnIcon.classList.add('menu-closed')
		responsiveMenu.classList.remove('open-menu-responsive')
		body.style.overflow = 'initial'
	}
}



// ======================================================
// ==================== RESPONSIVE MENU =================

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
		const categoryDesign = window.document.querySelectorAll('li.work-post.category-design-work')
		categoryDesign.forEach(function(element) {
			element.classList.add('no-selected-img-work')
		})

		const categoryPhotography = window.document.querySelectorAll('li.work-post.category-photography-work')
		categoryPhotography.forEach(function(element) {
			element.classList.remove('no-selected-img-work')
		})
	} else if (workItemFocused.id == 'work-menu-design') {
		const categoryPhotography = window.document.querySelectorAll('li.work-post.category-photography-work')
		categoryPhotography.forEach(function(element) {
			element.classList.add('no-selected-img-work')
		})
		
		const categoryDesign = window.document.querySelectorAll('li.work-post.category-design-work')
		categoryDesign.forEach(function(element) {
			element.classList.remove('no-selected-img-work')
		})
	} else if (workItemFocused.id == 'work-menu-all'){
		const categoryDesign = window.document.querySelectorAll('li.work-post.category-design-work')
		categoryDesign.forEach(function(element) {
			element.classList.remove('no-selected-img-work')
		})

		const categoryPhotography = window.document.querySelectorAll('li.work-post.category-photography-work')
		categoryPhotography.forEach(function(element) {
			element.classList.remove('no-selected-img-work')
		})
	}
}


// ======================================================
// ==================== CLICK WORK ======================

// ======================================================
// ==================== WELCOME PHRASE ==================

// function writer() {
// 	const text = window.document.querySelector('#welcome-phrase h2 span')
// 	const textArray = text.innerHTML.split('')
// 	text.innerHTML = ''
// 	textArray.forEach((letter, i) => {
// 		setTimeout(() => text.innerHTML += letter, 125 * i)
// 	})
// }

// function writer() {
// 	const text = window.document.querySelector('#welcome-phrase h2 span')
// 	const textArray = text.innerHTML.split('')
// 	textArray.forEach((letter, i) => {
// 		setTimeout(() => text.innerHTML -= letter, 125 * i)
// 	})
// }


// window.onload = writer()

// ======================================================
// ==================== WELCOME PHRASE ==================


var designShow = document.getElementById('design-show');
var photographyShow = document.getElementById('photography-show');
var firstQualityShow = document.getElementById('first-quality');
var secondQualityShow = document.getElementById('second-quality');

if (designShow != null && photographyShow != null) {
	if (firstQualityShow != null && secondQualityShow != null) {
		var textArray = [designShow.innerHTML, photographyShow.innerHTML, firstQualityShow.innerHTML, secondQualityShow.innerHTML]
	} else if (firstQualityShow != null && !secondQualityShow != null) {
		var textArray = [designShow.innerHTML, photographyShow.innerHTML, firstQualityShow.innerHTML]
	} else if (!firstQualityShow != null && secondQualityShow != null) {
		var textArray = [designShow.innerHTML, photographyShow.innerHTML, secondQualityShow.innerHTML]
	} else if (!firstQualityShow != null && !secondQualityShow != null) {
		var textArray = [designShow.innerHTML, photographyShow.innerHTML]
	}
} else if (designShow != null && !photographyShow != null) {
	if (firstQualityShow != null && secondQualityShow != null) {
		var textArray = [designShow.innerHTML, firstQualityShow.innerHTML, secondQualityShow.innerHTML]
	} else if (firstQualityShow != null && !secondQualityShow != null) {
		var textArray = [designShow.innerHTML, firstQualityShow.innerHTML]
	} else if (!firstQualityShow != null && secondQualityShow != null) {
		var textArray = [designShow.innerHTML, secondQualityShow.innerHTML]
	} else if (!firstQualityShow != null && !secondQualityShow != null) {
		var textArray = [designShow.innerHTML]
	}
}


function escrever(str, done) {
	designShow.innerHTML = ''

	if (photographyShow != null && firstQualityShow != null && secondQualityShow != null) {
		photographyShow.innerHTML = ''
		firstQualityShow.innerHTML = ''
		secondQualityShow.innerHTML = ''
	} else if (!photographyShow != null && firstQualityShow != null && secondQualityShow != null) {
		firstQualityShow.innerHTML = ''
		secondQualityShow.innerHTML = ''
	} else if (photographyShow != null & !firstQualityShow != null && secondQualityShow != null) {
		photographyShow.innerHTML = ''
		secondQualityShow.innerHTML = ''
	} else if (photographyShow != null & firstQualityShow != null && !secondQualityShow != null) {
		photographyShow.innerHTML = ''
		firstQualityShow.innerHTML = ''
	} else if (!photographyShow != null && firstQualityShow != null && !secondQualityShow != null) {
		firstQualityShow.innerHTML = ''
	} else if (!photographyShow != null && !firstQualityShow != null && secondQualityShow != null) {
		secondQualityShow.innerHTML = ''
	} else if (photographyShow != null && !firstQualityShow != null && !secondQualityShow != null) {
		photographyShow.innerHTML = ''
	} else if (!photographyShow != null && !firstQualityShow != null && !secondQualityShow != null) {
		designShow.innerHTML = ''
	}

    var char = str.split('').reverse();
    var typer = setInterval(function() {
        if (!char.length) {
            clearInterval(typer);
            return setTimeout(done, 1500); // só para esperar um bocadinho
        }
        var next = char.pop();
        designShow.innerHTML += next;
    }, 50);
}

function limpar(done) {
    var char = designShow.innerHTML;
    var nr = char.length;
    var typer = setInterval(function() {
        if (nr-- == 0) {
            clearInterval(typer);
            return done();
        }
        designShow.innerHTML = char.slice(0, nr);
    }, 50);
}

function rodape(conteudos, el) {
    var atual = -1;
    function prox(cb){
        if (atual < conteudos.length - 1) atual++;
        else atual = 0;
        var str = conteudos[atual];
        escrever(str, function(){
            limpar(prox);
        });
    }
    prox(prox);
}
rodape(textArray);