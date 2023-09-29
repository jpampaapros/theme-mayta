// uno.config.ts
import { defineConfig } from 'unocss'
import presetUno from '@unocss/preset-uno'
import transformerDirectives from '@unocss/transformer-directives'
import presetAutoprefixer from 'unocss-preset-autoprefixer'

export default defineConfig({
  content: {
    filesystem: [
      './templates/**/*.php',
      './core/*.php',
      './partials/**/*.php',
      './header.php',
      './footer.php'
    ]
  },
  presets: [
    presetUno(),
    presetAutoprefixer()
  ],
  // ...UnoCSS options

  rules: [
    [/^text-([\.\d]+)$/, ([_, num]) => ({ 'font-size': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^leading-([\.\d]+)$/, ([_, num]) => ({ 'line-height': `calc(100vw * (${num} / var(--width-base)))` })],

    [/^w-([\.\d]+)$/, ([_, num]) => ({ width: `calc(100vw * (${num} / var(--width-base)))` })],
    [/^max-w-([\.\d]+)$/, ([_, num]) => ({ 'max-width': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^min-w-([\.\d]+)$/, ([_, num]) => ({ 'min-width': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^h-([\.\d]+)$/, ([_, num]) => ({ height: `calc(100vw * (${num} / var(--width-base)))` })],

    [/^min-h-([\.\d]+)$/, ([_, num]) => ({ 'min-height': `calc(100vw * (${num} / var(--width-base)))` })],

    [/^gap-([\.\d]+)$/, ([_, num]) => ({ gap: `calc(100vw * (${num} / var(--width-base)))` })],

    [/^gap-x-([\.\d]+)$/, ([_, num]) => ({ 'column-gap': `calc(100vw * (${num} / var(--width-base)))` })],

    [/^gap-y-([\.\d]+)$/, ([_, num]) => ({ 'row-gap': `calc(100vw * (${num} / var(--width-base)))` })],

    //border-radius
    [/^rounded-([\.\d]+)$/, ([_, num]) => ({ 'border-radius': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^rounded-tl-([\.\d]+)$/, ([_, num]) => ({ 'border-top-left-radius': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^rounded-t-([\.\d]+)$/, ([_, num]) => ({
      'border-top-right-radius': `calc(100vw * (${num} / var(--width-base)))`,
      'border-top-left-radius': `calc(100vw * (${num} / var(--width-base)))`,
    })],
    [/^rounded-l-([\.\d]+)$/, ([_, num]) => ({
      'border-top-left-radius': `calc(100vw * (${num} / var(--width-base)))`,
      'border-bottom-left-radius': `calc(100vw * (${num} / var(--width-base)))`
    })],
    [/^rounded-r-([\.\d]+)$/, ([_, num]) => ({
      'border-top-right-radius': `calc(100vw * (${num} / var(--width-base)))`,
      'border-bottom-right-radius': `calc(100vw * (${num} / var(--width-base)))`
    })],

    //postisitons
    [/^top-([\.\d]+)$/, ([_, num]) => ({ 'top': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^left-([\.\d]+)$/, ([_, num]) => ({ 'left': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^right-([\.\d]+)$/, ([_, num]) => ({ 'right': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^bottom-([\.\d]+)$/, ([_, num]) => ({ 'bottom': `calc(100vw * (${num} / var(--width-base)))` })],

    //margins
    [/^m-([\.\d]+)$/, ([_, num]) => ({ 'margin': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^mt-([\.\d]+)$/, ([_, num]) => ({ 'margin-top': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^ml-([\.\d]+)$/, ([_, num]) => ({ 'margin-left': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^mr-([\.\d]+)$/, ([_, num]) => ({ 'margin-right': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^mb-([\.\d]+)$/, ([_, num]) => ({ 'margin-bottom': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^mx-([\.\d]+)$/, ([_, num]) => ({
      'margin-left': `calc(100vw * (${num} / var(--width-base)))`,
      'margin-right': `calc(100vw * (${num} / var(--width-base)))`
    })],
    [/^my-([\.\d]+)$/, ([_, num]) => ({
      'margin-top': `calc(100vw * (${num} / var(--width-base)))`,
      'margin-bottom': `calc(100vw * (${num} / var(--width-base)))`
    })],

    //paddings
    [/^p-([\.\d]+)$/, ([_, num]) => ({ 'padding': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^pt-([\.\d]+)$/, ([_, num]) => ({ 'padding-top': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^pl-([\.\d]+)$/, ([_, num]) => ({ 'padding-left': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^pr-([\.\d]+)$/, ([_, num]) => ({ 'padding-right': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^pb-([\.\d]+)$/, ([_, num]) => ({ 'padding-bottom': `calc(100vw * (${num} / var(--width-base)))` })],
    [/^px-([\.\d]+)$/, ([_, num]) => ({
      'padding-left': `calc(100vw * (${num} / var(--width-base)))`,
      'padding-right': `calc(100vw * (${num} / var(--width-base)))`
    })],
    [/^py-([\.\d]+)$/, ([_, num]) => ({
      'padding-top': `calc(100vw * (${num} / var(--width-base)))`,
      'padding-bottom': `calc(100vw * (${num} / var(--width-base)))`
    })],

    //image
    // ['object-cover', { 'object-fit': 'cover' }],

    ['shadow', { 'box-shadow': '0px 8px 26px -1px rgba(0, 0, 0, 0.04);' }],
    ['mask', {
      // background: 'linear-gradient(180deg, rgba(0, 0, 0, 0.00) 25.52%, rgba(0, 0, 0, 0.70) 75.52%)',
      position: 'absolute',
      inset: 0,
      margin: 'auto'
    }]
  ],
  // shortcuts: [
  //   {
  //     'page-title': 'text-28 md:text-54 leading-[110%] font-black uppercase font-Luxura',
  //   },
  // ],
  theme: {
    colors: {
      primary: '#CD714E',
      orange: '#D7A043',
      blue: '#25659B',
      blue2: '#123553',
      green: '#316860',
      green2: '#1C403B',
      brown: '#CD714E',
      brown2: '#713D2A',
      gray: '#5A5A5A',
      gray2: '#E2E2E2',
      yellow: '#FFF3DF',
      pink2: '#ffa187',
      coffee: '#a65a41',
      coffee2: '#302622',
      cyan: '#00CDFE',
      black: '#000000',
      lightblack: '#374141',
      green3: '#436363;'
    },
    fontFamily: {
      'main': ['GeogrotesqueCyr', 'sans-serif'],
    },
    container: {
      center: true,
      padding: {
        DEFAULT: 'calc(100vw * 16 / var(--width-base))',
        md: 'calc(100vw * 138 / var(--width-base))',
        lg: 'calc(100vw * 138 / var(--width-base))',
        xl: 'calc(100vw * 138 / var(--width-base))',
        '2xl': 'calc(100vw * 138 / var(--width-base))',
        '3xl': 'calc(100vw * 138 / var(--width-base))',
        // '4xl': 'calc(100vw * 138 / var(--width-base))',
      },
      maxWidth: {
        // md: 'calc(100vw * 1654 / var(--width-base))'
        md: '100%'
      }
    }
  },
  transformers: [
    transformerDirectives(),
  ],

})