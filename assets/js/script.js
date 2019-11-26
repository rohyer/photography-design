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

var menu1 = window.document.getElementById('menu-item-13')

menu1.addEventListener('click', function(e) {
    window.scrollTo(0, 500)
})