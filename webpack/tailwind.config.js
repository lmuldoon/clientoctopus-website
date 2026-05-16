module.exports = {
  purge: {
    enable: true,
    content: [
      __dirname + '/../assets/src/js/**/*',
      __dirname + '/../template-parts/**/**/*',
      __dirname + '/../page-templates/**/**/*',
      __dirname + '/../*.php',
    ]
  },
  important: true,
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      black: 'var(--color-black)',
      white: 'var(--color-white)',
      stone: 'var(--color-stone)',
      slate: 'var(--color-slate)',
      indigo: 'var(--color-indigo)',
      lightindigo: 'var(--color-lightindigo)',
      lightemerald: 'var(--color-lightemerald)',
      error: 'var(--color-error)',
      warning: 'var(--color-warning)',
      success: 'var(--color-success)',
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '991px',
      'xl': '1480px',
      '2xl': '1530px',
    },
    fontFamily: {
      body: 'var(--font-body)',
      heading: 'var(--font-heading)',
      playfair: 'var(--font-playfair)',
      archivoblack : 'var(--font-archivoblack)',
    },
    fontWeight: {
      normal: 400,
      medium: 600,
      bold: 700
    },
    lineHeight: {
      'tight': 'var(--font-lineheighttight)',
      'regular': 'var(--font-lineheightregular)',
    },
    variables: {
      DEFAULT: {
        size: {
          "300": 'clamp(0.75rem, 0.713rem + 0.1852vw, 0.875rem)',
          "400": 'clamp(0.875rem, 0.838rem + 0.1852vw, 1rem)',
          "500": 'clamp(1.25rem, 1.1759rem + 0.3704vw, 1.5rem)',
          "600": 'clamp(1.37em, 1.21em + 0.8vw, 1.78em)',
          "700": 'clamp(1.71em, 1.45em + 1.29vw, 2.37em)',
          "800": 'clamp(1.875rem, 1.3194rem + 2.7778vw, 3.75rem)',
        },
        color: {
          black: '#000000',
          white: '#ffffff',
          stone: '#F8F7F5',
          slate: '#64748B',
          indigo: '#6366F1',
          lightindigo: '#EEF2FF',
          emerald: '#10B981',
          lightemerald: '#ECFDF5',
          error: '#d81e1e',
          warning: '#ff6700',
          success: '#4bb543'
        },
        font:{
          body: ['Inter', "Helvetica Neue", 'Arial', 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"],
          heading: ['Inter', "Helvetica Neue", 'Arial', 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"],
          playfair: ["Playfair Display", 'Georgia', 'Times New Roman', 'serif'],
          archivoblack: ["Archivo Black", 'Arial Black', 'Impact', 'sans-serif'],
          lineheightregular: 1.7,
          lineheighttight: 1.2
        },
      },
    },
  },
  variants: {
    extend: {

    },
  },
  plugins: [require('@mertasan/tailwindcss-variables')],
  corePlugins: {
    preflight: false
  }

};
