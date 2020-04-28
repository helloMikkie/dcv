

const title = document.querySelector('.marquee h2').innerHTML
const title_sec = document.querySelector('.marquee h2:nth-child(2)').innerHTML
const title_third = document.querySelector('.marquee h2:nth-child(3)').innerHTML



const marqueeText = new Array(100).fill(title).join(' + + + ')
const marqueeText_sec = new Array(100).fill(title_sec).join(' + + + ')
const marqueeText_third = new Array(100).fill(title_third).join(' + + + ')

const marquee = document.querySelector('.marquee h2 span')
const marquee_sec = document.querySelector('.marquee h2:nth-child(2) span')
const marquee_third = document.querySelector('.marquee h2:nth-child(3) span')

marquee.innerHTML = marqueeText
marquee_sec.innerHTML = marqueeText_sec
marquee_third.innerHTML = marqueeText_third