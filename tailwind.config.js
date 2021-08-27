module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                yellow: {
                    300: '#fed700',
                    500: '#e5c100',
                }
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
