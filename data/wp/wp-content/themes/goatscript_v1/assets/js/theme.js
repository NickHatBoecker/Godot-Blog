(() => {
    const root = document.documentElement
    const themeToggle = document.getElementById('themeToggle')
    const themeLabel = document.getElementById('themeLabel')

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
})()
