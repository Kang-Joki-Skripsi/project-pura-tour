/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1440px",
            "3xl": "1600px",
        },
        extend: {
            backgroundImage: {
                'img1': "url('https://media.sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/fallbacks/0dada7d4eed04d8e93aa750fb6c54c8f/1e3f6aee94b247a1976409f5b38b9e02.jpeg')",
                'img2': "url('https://media.sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/fallbacks/921f0d38be7d43d0bbe8e370429935bd/dc74c67af82542fcabcca0f4a1ef0fa9.jpeg')",
            },
            animation: {
                popupAnimation: "popupAnimation 0.3s ease"
            },
            keyframes: {
                popupAnimation: {
                    '0%': { transform: 'scale(0.5)', opacity: 0},
                    '100%': { transform: 'scale(1)', opacity: 1}
                }
            }
        },
        container: {
            center: true,
        },
        fontFamily: {
            "open-sans": ['"Open Sans"'],
        },
    },
    plugins: [],
};
