const navItems = document.querySelector('.nav_items');
const openNavBtn = document.querySelector('#open_nav-btn');
const closeNavBtn = document.querySelector('#close_nav-btn');


//Open Nav Dropdown
const openNav = () => {
    navItems.style.display = 'flex'; //opens humbager
    openNavBtn.style.display = 'none'; 
    closeNavBtn.style.display = 'inline-block';
}

//Close Nav Dropdown
const closeNav = () => {
    navItems.style.display = 'none';
    closeNavBtn.style.display = 'none';
    openNavBtn.style.display = 'inline-block ';
}
openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav);




