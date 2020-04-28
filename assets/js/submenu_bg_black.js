const booksTag = document.querySelector('.toggle-books')
const siteTag = document.querySelector('.toggle-site-white')
const searchTag = document.querySelector('.toggle-search-white')


const submenuBooks = document.querySelector('.submenu-books')
const submenuSite = document.querySelector('.submenu-site')
const submenuSearch = document.querySelector('.submenu-search')

const mainTag = document.querySelector('main')



booksTag.addEventListener('click', function(){
    mainTag.classList.toggle('open-submenu')
    submenuBooks.classList.toggle('show-submenu')
    submenuSite.classList.toggle('hide-submenu')
    
})


searchTag.addEventListener('click', function(){
    mainTag.classList.toggle('open-submenu_search')
    submenuSearch.classList.toggle('show-submenu')
    submenuSite.classList.toggle('hide-submenu')

})
siteTag.addEventListener('click', function(){
    mainTag.classList.toggle('open-submenu_main')
    submenuSite.classList.toggle('show-submenu')
    submenuBooks.classList.toggle('hide-submenu')
    
})

