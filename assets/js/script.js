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

var menuHome = window.document.getElementById('menu-home')
var menuAbout = window.document.getElementById('menu-about')
var menuServices = window.document.getElementById('menu-services')
var menuWork = window.document.getElementById('menu-work')
var menuClients = window.document.getElementById('menu-clients')
var menuContact = window.document.getElementById('menu-contact')

function scrollToPosition(toPosition) {
	window.scroll({
		top: toPosition,
		behavior: "smooth"
	})
}

menuHome.addEventListener('click', function(e) {
	var heightHome = 0
	scrollToPosition(heightHome)
})

menuAbout.addEventListener('click', function(e) {
	var about = window.document.getElementById('about')
	var header = window.document.querySelector('header')
	var heightHeader = header.offsetHeight
	var heightAbout = about.offsetTop
	var toPosition = heightAbout - heightHeader
    scrollToPosition(toPosition)
})

menuServices.addEventListener('click', function(e) {
	var services = window.document.getElementById('services')
	var header = window.document.querySelector('header')
	var heightHeader = header.offsetHeight
	var heightServices = services.offsetTop
	var toPosition = heightServices - heightHeader
    scrollToPosition(toPosition)
})

menuWork.addEventListener('click', function(e) {
	var work = window.document.getElementById('work')
	var header = window.document.querySelector('header')
	var heightHeader = header.offsetHeight
	var heightWork = work.offsetTop
	var toPosition = heightWork - heightHeader
    scrollToPosition(toPosition)
})

menuClients.addEventListener('click', function(e) {
	var clients = window.document.getElementById('clients')
	var header = window.document.querySelector('header')
	var heightHeader = header.offsetHeight
	var heightClients = clients.offsetTop
	var toPosition = heightClients - heightHeader
    scrollToPosition(toPosition)
})

menuContact.addEventListener('click', function(e) {
	var contact = window.document.getElementById('contact')
	var header = window.document.querySelector('header')
	var heightHeader = header.offsetHeight
	var heightContact = contact.offsetTop
	var toPosition = heightContact - heightHeader
    scrollToPosition(toPosition)
})