import path from 'path';

/** @type {import('vite').UserConfig} */
export default {
  root: path.resolve(__dirname, 'resources'),  // Usamos 'resources' como root en lugar de la raíz
  build: {
    outDir: path.resolve(__dirname, 'public/build'),  // Salida en 'public/build'
    emptyOutDir: true,  // Limpiar la carpeta 'build' antes de construir
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources'),
    },
  },
};
