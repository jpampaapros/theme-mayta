// vite.config.js
import { defineConfig } from 'vite'
import UnoCSS from 'unocss/vite'
import FullReload from 'vite-plugin-full-reload'

export default defineConfig({
  plugins: [
    UnoCSS(),
    FullReload([
      'templates/**/*.php',
      'partials/**/*.php',
      './header.php',
      './footer.php',
      './single-productos.php'
    ])
  ],
})