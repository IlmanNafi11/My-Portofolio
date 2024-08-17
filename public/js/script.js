// Navbar
document.getElementById('toggle-menu').addEventListener('click', function() {
    this.classList.toggle('active');
    const navMenu = document.getElementById('nav-menu');
    const navItems = document.querySelectorAll('.nav-item');

    if (this.classList.contains('active')) {
        navMenu.classList.add('open');
        navItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.opacity = 1;
            }, (index + 1) * 200);
        });

    } else {
        navItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.opacity = 0;
            }, (navItems.length - index) * 200);
        });

        setTimeout(() => {
            navMenu.classList.remove('open');
        }, navItems.length * 200 + 300);
    }
});
