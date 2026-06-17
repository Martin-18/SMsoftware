(function(){
    const init = () => {
        const html = document.documentElement;
        const toggles = Array.from(document.querySelectorAll('[data-theme-toggle]'));

        const applyTheme = (isDark) => {
            if (isDark) {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        };

        const saved = localStorage.getItem('theme');
        const systemDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

        applyTheme(saved === 'dark' || (!saved && systemDark));

        toggles.forEach(btn => {
            if (!btn) return;
            btn.addEventListener('click', () => {
                applyTheme(!html.classList.contains('dark'));
                toggles.forEach(b => b.setAttribute('aria-pressed', String(html.classList.contains('dark'))));
            });
            btn.setAttribute('aria-pressed', String(html.classList.contains('dark')));
        });

        if (!saved && window.matchMedia) {
            try {
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    if (!localStorage.getItem('theme')) applyTheme(e.matches);
                });
            } catch (err) {
                // Older browsers may not support addEventListener on MediaQueryList
                const mql = window.matchMedia('(prefers-color-scheme: dark)');
                mql.addListener(e => {
                    if (!localStorage.getItem('theme')) applyTheme(e.matches);
                });
            }
        }
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
