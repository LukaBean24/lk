module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'lk': {
                    'main': '#dc3F37'
                },
            },
            spacing: {
                '1/12': '8.33%',
                '5/12': '41.66%'
            }
        },
    },
    plugins: [
        require('tw-elements/dist/plugin')
    ]
}
