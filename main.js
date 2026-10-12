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




// ============Category dashbboard

const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show_sidebar-btn');
const hideSidebarBtn = document.querySelector('#hide_sidebar-btn');

//open sidebar
const opensidebar = () => {
    sidebar.style.left = '0';
    showSidebarBtn.style.display = 'none';
    hideSidebarBtn.style.display = 'inline-block';
}
//close sidebar
const closesidebar = () => {
    sidebar.style.left = '-100%';
    showSidebarBtn.style.display = 'inline-block';
    hideSidebarBtn.style.display = 'none';
}
showSidebarBtn.addEventListener('click', opensidebar);
hideSidebarBtn.addEventListener('click', closesidebar);


