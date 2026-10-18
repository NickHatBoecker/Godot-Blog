(() => {
    const mainNav = document.querySelector('.main-nav')
    const mobileMenuControls = document.querySelector('.mobile-menu-controls')
    const utilityActions = document.querySelector('.utility-actions')
    const navLinks = [...document.querySelectorAll('.main-nav > a')]
    const menuToggle = document.getElementById('menuToggle')

    const updateMobileNav = () => {
        const isMobile = window.matchMedia('(max-width: 720px)').matches;
        if (isMobile) {
            if (!mainNav.contains(mobileMenuControls)) mainNav.appendChild(mobileMenuControls)
        } else if (!utilityActions.contains(mobileMenuControls)) {
            utilityActions.insertBefore(mobileMenuControls, menuToggle)
        }
    }

    updateMobileNav()
    window.addEventListener('resize', updateMobileNav)

    const setMenuOpen = (isOpen) => {
        const translations = JSON.parse(mainNav?.querySelector('.js-main-nav-translations')?.getAttribute('data-translations') || '')
        mainNav.classList.toggle('is-open', isOpen)
        menuToggle.setAttribute('aria-expanded', String(isOpen))
        const label = isOpen ? translations.menuClose : translations.menuOpen
        menuToggle.setAttribute('aria-label', label)
        menuToggle.title = label
    }

    menuToggle.addEventListener('click', () => setMenuOpen(menuToggle.getAttribute('aria-expanded') !== 'true'))
    navLinks.forEach((link) => link.addEventListener('click', () => setMenuOpen(false)))

    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape') {
            return
        }
        if (!document.getElementById('searchLayer').hidden) {
            return
        }

        setMenuOpen(false)
    })
})()
