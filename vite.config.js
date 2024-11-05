import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel(['resources/js/main.jsx']),
        react(),
    ],
    build: {
        emptyOutDir: true,
        file: 'resources/dist/main.js',
        outDir: 'resources/dist',
        rollupOptions: {
            output:{
                inlineDynamicImports: true,
            },
        },
    },
});
