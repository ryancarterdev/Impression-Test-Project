const menuButton = document.querySelector('.header__navigation-open');
const closeMenu = document.querySelector('.navigation__close');
const navigation = document.querySelector('.navigation');
const menuMain = navigation.querySelector(".menu-wrapper");
var subMenu;

menuButton.addEventListener('click', () => {
  navigation.classList.add('is-open');
})

closeMenu.addEventListener('click', () => {
  navigation.classList.remove('is-open');
})

menuMain.addEventListener("click", (e) =>{
  if(e.target.closest(".menu-item-has-children")){
     const hasChildren = e.target.closest(".menu-item-has-children");
     toggleSubMenu(hasChildren);
  }
});

function toggleSubMenu(hasChildren){
  subMenu = hasChildren.querySelector(".sub-menu");
  subMenuButton = hasChildren.querySelector('.sub-menu-toggle');

  if (subMenu.classList.contains("is-open")) {
    subMenu.classList.remove('is-open');
    subMenuButton.classList.remove('is-open');
    subMenuButton.setAttribute( 'aria-expanded', 'false' );
  } else {
    subMenu.classList.add("is-open");
    subMenuButton.classList.add('is-open');
    subMenuButton.setAttribute( 'aria-expanded', 'true' );
  }
}