const { resolve } = require('path')
export default {
    mode: 'jit',
    plugins: [],
    server: {
        open: '/index.html',
        port: 4000,
    },
    build: {
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html')
                // another: resolve(__dirname, 'another.html')
            }
        }
    }
}