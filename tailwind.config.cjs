/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./templates/**/*.twig', './src/**/*.js'],
  plugins: [
    require("tailwindcss-animate"),
  ],
}
