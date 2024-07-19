/** @type {import('tailwindcss').Config} */
export default {
  mode: 'jit',
  content: ["./resources/views/*.blade.php"],
  theme: {
    extend: {
      fontFamily:{
        poppins: ['Poppins', 'sans-serif', 'Segoe UI']
      },
      width: {
        bgcard: '530px',
        textBox: '360px',
      },
      margin: {
        text: '15px',
      },
      height: {
        cshg: '41rem',
      },
      animation: {
        'zoom-in': 'zoom-in 0.5s ease-out'
      },
      keyframes: {
        'zoom-in': {
          '0%': {
            transform: 'scale(0)'
          },
          '100%': {
            transform: 'scale(1)',
          }
        }
      },
      backgroundColor: {
        wa: '#25D366'
      }
    },
  },
  plugins: [],
}

