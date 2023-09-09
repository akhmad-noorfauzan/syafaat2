// /** @type {import('tailwindcss').Config} */
// module.exports = {
//     content: [
//         "./resources/**/*.blade.php",
//         "./resources/**/*.js",
//         "./resources/**/*.vue",
//     ],
//     theme: {
//         extend: {
//             listStyleImage{
//                 ceklis:'url("/img/ceklis.svg")'
//             },
//         },
//     },
//     vaiants: {},
//     plugins: [require("flowbite/plugin")],
// };

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            listStyleImage: {
                ceklis: 'url("/public/img/ceklis.svg")',
                close: 'url("/public/img/close.svg")',
                circle: 'url("/public/img/circle.svg")',
            },
        },
    },
    variants: {},
    plugins: [require("flowbite/plugin")],
};
