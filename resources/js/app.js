document.addEventListener('livewire:navigated', () => {
    const theme = (() => {
        if (typeof localStorage !== 'undefined' && localStorage.getItem('theme')) {
            return localStorage.getItem('theme');
        }
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            return 'dark';
        }
        return 'light';
    })();

    if (theme === 'light') {
        document.documentElement.classList.remove('dark');
    } else {
        document.documentElement.classList.add('dark');
    }

    window.localStorage.setItem('theme', theme);

    const handleToggle = () => {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    };

    const desktopToggle = document.getElementById('dark-mode-toggle-desktop');
    const mobileToggle = document.getElementById('dark-mode-toggle-mobile');

    if (desktopToggle) {
        desktopToggle.addEventListener('click', handleToggle);
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', handleToggle);
    }
});
