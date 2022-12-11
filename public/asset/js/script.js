const Menu = document.querySelector('.hamburger-menu');
const heading = document.querySelector('.heading ul');

Menu.addEventListener('click',function(){
    console.log(heading)
    heading.classList.toggle('active')

})

function fitur(){
    alert('Fitur Belum Tersedia');
}
