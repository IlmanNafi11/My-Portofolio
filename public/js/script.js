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

// mengatur offset on scroll

document.querySelectorAll('.nav-item a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        const offset = 50;
        const bodyRect = document.body.getBoundingClientRect().top;
        const elementRect = target.getBoundingClientRect().top;
        const elementPosition = elementRect - bodyRect;
        const offsetPosition = elementPosition - offset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});

// menambahkan aos ke setiap element



