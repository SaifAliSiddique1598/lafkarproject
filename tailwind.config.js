/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.{blade.php,vue,js}",
  ],
  theme: {
    extend: {
        colors: {
            // 'primary': '#990011',
            'primary': '#f37515',
            'primaryLight': '#ef73141f',
            'secondary': '#2D2926',
            'textGray': '#6E6E6D',
            'bgGray': '#FCF6F5',
        },
    },
  },
  plugins: [],
}

