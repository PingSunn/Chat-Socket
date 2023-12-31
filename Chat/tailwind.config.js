/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./public/**/*.{html,js}"],
    theme: {
        extend: {
            colors: {
                // color01: '#F4D35E',
                color01: '#020202',
                color02: '#EE964B',
            },
        },
        fontFamily: {
            // sans: ['Graphik', 'sans-serif'],
            // serif: ['Merriweather', 'serif'],
            cherry: ['Cherry Bomb One'],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),

    ],
}