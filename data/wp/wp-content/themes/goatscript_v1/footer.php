</main>

<footer class="footer">
    <span>GoatScript · &copy; NickHatBoecker 2026</span>
    <?php
    wp_nav_menu([
        'theme_location' => 'footer_menu',
        'container'      => 'nav',
        'menu_class'     => 'footer-links',
    ]);
    ?>
</footer>

<script>
    (() => {
        const root = document.documentElement
        const mainNav = document.querySelector('.main-nav')
        const navLinks = [...document.querySelectorAll('.main-nav > a')]
        const menuToggle = document.getElementById('menuToggle')
        const searchFocus = document.getElementById('searchFocus')
        const searchLayer = document.getElementById('searchLayer')
        const searchQuery = document.getElementById('searchQuery')
        const searchClose = document.getElementById('searchClose')
        const themeToggle = document.getElementById('themeToggle')
        const themeLabel = document.getElementById('themeLabel')

        /* THEME */
        const readTheme = () => {
            try {
                return localStorage.getItem('godot-signal-theme') || 'system'
            } catch (error) {
                return 'system'
            }
        }
        const saveTheme = (value) => {
            try {
                localStorage.setItem('godot-signal-theme', value)
            } catch (error) { /* storage is optional */
            }
        }

        const applyTheme = (value) => {
            const button = document.getElementById('themeToggle')
            if (value === 'system') {
                root.removeAttribute('data-theme')
            } else {
                root.dataset.theme = value
            }
            themeLabel.textContent = button.getAttribute(`data-${ value }`)
        }

        const cycleTheme = () => {
            const current = root.dataset.theme || 'system'
            const next = current === 'system' ? 'light' : current === 'light' ? 'dark' : 'system'
            saveTheme(next)
            applyTheme(next)
        }

        applyTheme(readTheme())
        themeToggle.addEventListener('click', cycleTheme)

        /* MAIN NAV */
        const setMenuOpen = (isOpen) => {
            const translations = JSON.parse(mainNav?.parentNode?.parentNode?.getAttribute('data-translations') || '')
            mainNav.classList.toggle('is-open', isOpen)
            menuToggle.setAttribute('aria-expanded', String(isOpen))
            const label = isOpen ? translations.menuClose : translations.menuOpen
            menuToggle.setAttribute('aria-label', label)
            menuToggle.title = label
        }
        menuToggle.addEventListener('click', () => setMenuOpen(menuToggle.getAttribute('aria-expanded') !== 'true'))
        navLinks.forEach((link) => link.addEventListener('click', () => setMenuOpen(false)))

        /* SEARCH */
        const setSearchOpen = (isOpen) => {
            searchLayer.hidden = !isOpen
            searchFocus.setAttribute('aria-expanded', String(isOpen))
            if (isOpen) {
                searchQuery.focus({preventScroll: true})
            } else {
                searchFocus.focus({preventScroll: true})
            }
        }
        searchFocus.addEventListener('click', () => setSearchOpen(true))
        searchClose.addEventListener('click', () => setSearchOpen(false))

        document.addEventListener('keydown', (event) => {
            if (event.key !== 'Escape') {
                return
            }
            if (!searchLayer.hidden) {
                setSearchOpen(false)
            } else {
                setMenuOpen(false)
            }
        })
    })()
</script>
</div>
</body>
</html>
