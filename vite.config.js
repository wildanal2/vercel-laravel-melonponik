import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js'
      ],
      refresh: true,
    }),
  ],

  // ⚙️ tambahan penting agar hasil build dikenali oleh Laravel di server Vercel
  build: {
    outDir: 'public/build',
    manifest: true,
    rollupOptions: {
      input: [
        'resources/css/app.css',
        'resources/js/app.js'
      ]
    },
    emptyOutDir: true, // pastikan clean sebelum rebuild
  },

})
