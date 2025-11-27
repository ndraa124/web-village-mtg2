/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Helpers/**/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Instrument Sans",
                    "ui-sans-serif",
                    "system-ui",
                    "sans-serif",
                ],
            },
            colors: {
                "primary-red": "#dc2626",
                "dark-red": "#991b1b",
                "light-red": "#fef2f2",
            },
        },
    },
    plugins: [],
};
