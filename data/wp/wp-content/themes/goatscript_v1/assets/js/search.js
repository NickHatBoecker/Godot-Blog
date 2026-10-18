(() => {
    const searchFocus = document.getElementById('searchFocus')
    const searchLayer = document.getElementById('searchLayer')
    const searchQuery = document.getElementById('searchQuery')
    const searchClose = document.getElementById('searchClose')

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
        }
    })
})()
