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

var menuAbout = window.document.getElementById('menu-about')
var menuServices = window.document.getElementById('menu-services')
var menuWork = window.document.getElementById('menu-work')
var menuClients = window.document.getElementById('menu-clients')
var menuContacts = window.document.getElementById('menu-contacts')

menuAbout.addEventListener('click', function(e) {
	var about = window.document.getElementById('about')
	var header = window.document.querySelector('header')
	var heightHeader = header.offsetHeight
	var heightAbout = about.offsetTop
	alert(heightAbout)
    window.scrollTo(0, heightAbout - heightHeader)
})

menuServices.addEventListener('click', function(e) {
	var services = window.document.getElementById('services')
	var header = window.document.querySelector('header')
	var heightHeader = header.offsetHeight
	var heightServices = services.offsetTop
	alert(heightServices)
	window.scrollTo(0, heightServices - heightHeader)
})
