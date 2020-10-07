const menu = () => {
  const menuIcon = document.querySelector('#menu-icon')
  const mainNav = document.querySelector('#main-nav')
  menuIcon.addEventListener('click', (e) => {
    menuIcon.classList.toggle('menu-icon--open')
    mainNav.classList.toggle('main-nav--open')
  })
}

export default menu
