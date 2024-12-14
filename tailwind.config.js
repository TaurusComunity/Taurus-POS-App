import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                rojo: "#ff3131",
                rojo_secundario: "#fd5d5d",
                blanco: "#ffffff",
                blanco_opacidad: "#ffffff98",
                gris: "#a1a1a1",
                negro_fuerte: "#000000",
                negro_suave: "#1e1e1e",
                azul_oscuro: "#1a2130",
                azul_oscuro_opacidad: "rgba(26, 33, 48, 0.5)",
                verde: "#81a263",
              },
        },
    },
    plugins: [],
};
