/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./templates/**/*.twig', './src/**/*.js'],
  plugins: [require('tailwindcss-animate'), require('@tailwindcss/container-queries')],
  theme: {
    extend: {
      containers: {
        xs: '20rem',
        sm: '24rem',
        md: '28rem',
        lg: '32rem',
        xl: '37.5rem',
        '2xl': '42rem',
        '3xl': '48rem',
        '4xl': '56rem',
        '5xl': '64rem',
        '6xl': '72rem',
        '7xl': '80rem',
      },
    },
  },
}
