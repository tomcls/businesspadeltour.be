/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      keyframes: {
        appear: {
          "0%": {
            opacity: "0",
          },
          "100%": {
            opacity: "1",
          }
        },
        "fade-in": {
                "0%": {
                    opacity: 0
                },
                "100%": {
                    opacity: 1
                },
            },
        "fade-in-down": {
            "0%": {
                opacity: 0,
                transform: "translate3d(0, -100%, 0)",
            },
            "100%": {
                opacity: 1,
                transform: "translate3d(0, 0, 0)",
            },
        },
        "fade-in-up": {
            "0%": {
                opacity: 0,
                transform: "translate3d(0, 100%, 0)",
            },
            "100%": {
                opacity: 1,
                transform: "translate3d(0, 0, 0)",
            },
        }
      },
      animation: {
        appear: "appear 0.25s ease-in-out",
        fadein: 'fade-in 1s ease-in-out 0.25s 1',
        fadeindown: 'fade-in-down 0.5s ease-in 0.5s 1',
        fadeinup: 'fade-in-up 1s ease-in-out 0.25s 1',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('flowbite/plugin'),
    require("tw-elements/dist/plugin.cjs"),
  ],
}
