import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import path from "path";

export default defineConfig({
  plugins: [react()],
  build: {
    outDir: "assets/dist",
    emptyOutDir: false,
    lib: {
      entry: path.resolve(__dirname, "src/react/main.jsx"),
      name: "RawrReactApp",
      fileName: () => "react-app.js",
      formats: ["iife"],
    },
    rollupOptions: {
      output: {
        extend: true,
      },
    },
  },
});
