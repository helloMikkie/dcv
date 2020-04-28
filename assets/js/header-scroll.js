const headerTag = document.querySelector('header')
const logoTag = document.querySelector('.header-logo')

document.addEventListener('scroll', function(){

    const pixels = window.pageYOffset

    if(pixels > 200){
        headerTag.style.background = "#fff"
        headerTag.style.height = "auto"
        logoTag.style.width = "4rem"
        headerTag.classList.add('scrolled')
    } else{
        headerTag.style.background = "transparent"
        logoTag.style.width = ""
        headerTag.style.height = ""
        headerTag.classList.remove('scrolled')
    }
})