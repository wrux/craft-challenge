const port = 5173
const origin = `${process.env.DDEV_PRIMARY_URL}:${port}`

export default ({ command }) => ({
  base: '/dist/',
  build: {
    manifest: true,
    outDir: './web/dist/',
    rollupOptions: {
      input: {
        app: 'src/js/site.js',
      },
    },
  },
  server: {
    host: '0.0.0.0',
    port: port,
    strictPort: true,
    origin: origin,
  },
})
