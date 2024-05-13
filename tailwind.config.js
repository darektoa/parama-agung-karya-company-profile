/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        'resources/js/**/*.{js,jsx,ts,tsx}',
        'resources/views/**/*.blade.php',
    ],
    darkMode: ['selector', '[data-theme="dark"]'],
    theme: {
        extend: {
            borderRadius: {
                '4xl': '36px',
                '5xl': '52px',
            },
            colors: {
                primary: {
                    accent: '#1F3B8A',
                    main: '#1A3175',
                },
            },
            maxWidth: {
                '2xs': '280px',
                '3xs': '240px',
            },
        },
    },
    plugins: [require('daisyui')],
    daisyui: {
        themes: [
            "light",
            "dark",
            "cupcake",
            "bumblebee",
            "emerald",
            "corporate",
            "synthwave",
            "retro",
            "cyberpunk",
            "valentine",
            "halloween",
            "garden",
            "forest",
            "aqua",
            "lofi",
            "pastel",
            "fantasy",
            "wireframe",
            "black",
            "luxury",
            "dracula",
            "cmyk",
            "autumn",
            "business",
            "acid",
            "lemonade",
            "night",
            "coffee",
            "winter",
            "dim",
            "nord",
            "sunset",
        ], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "light", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
    },
};
