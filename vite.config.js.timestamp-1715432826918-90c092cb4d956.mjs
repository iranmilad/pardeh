// vite.config.js
import { defineConfig } from "file:///E:/pardeh/node_modules/vite/dist/node/index.js";
import laravel from "file:///E:/pardeh/node_modules/laravel-vite-plugin/dist/index.js";
import preact from "file:///E:/pardeh/node_modules/@preact/preset-vite/dist/esm/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    preact({
      prefreshEnabled: true
    }),
    laravel({
      input: [
        "resources/css/vendors/dataTables/datatables.css",
        "resources/css/app.scss",
        "resources/css/style.css",
        "resources/css/vendors/bootstrap/bootstrap.rtl.css",
        "resources/css/vendors/fontawesome/fontawesome.css",
        "resources/js/app.js",
        "resources/js/main.js",
        "resources/js/imageDot.js",
        "resources/js/vendors/jquery/jquery-3.6.0.min.js",
        "resources/js/bootstrap.js",
        "resources/js/vendors/datatables/dataTables.bootstrap5.min.js",
        "resources/js/confirm-code.js",
        "resources/videos/curtain.mp4"
      ],
      refresh: true
    })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJFOlxcXFxwYXJkZWhcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkU6XFxcXHBhcmRlaFxcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vRTovcGFyZGVoL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCBwcmVhY3QgZnJvbSBcIkBwcmVhY3QvcHJlc2V0LXZpdGVcIjtcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIHByZWFjdCh7XG4gICAgICAgICAgICBwcmVmcmVzaEVuYWJsZWQ6IHRydWUsXG4gICAgICAgIH0pLFxuICAgICAgICBsYXJhdmVsKHtcbiAgICAgICAgICAgIGlucHV0OiBbXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvdmVuZG9ycy9kYXRhVGFibGVzL2RhdGF0YWJsZXMuY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9hcHAuc2NzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3Mvc3R5bGUuY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy92ZW5kb3JzL2Jvb3RzdHJhcC9ib290c3RyYXAucnRsLmNzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvdmVuZG9ycy9mb250YXdlc29tZS9mb250YXdlc29tZS5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvYXBwLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL21haW4uanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvaW1hZ2VEb3QuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvdmVuZG9ycy9qcXVlcnkvanF1ZXJ5LTMuNi4wLm1pbi5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9ib290c3RyYXAuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvdmVuZG9ycy9kYXRhdGFibGVzL2RhdGFUYWJsZXMuYm9vdHN0cmFwNS5taW4uanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvY29uZmlybS1jb2RlLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL3ZpZGVvcy9jdXJ0YWluLm1wNCcsXG4gICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgIH0pLFxuICAgIF0sXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBaU4sU0FBUyxvQkFBb0I7QUFDOU8sT0FBTyxhQUFhO0FBQ3BCLE9BQU8sWUFBWTtBQUVuQixJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUN4QixTQUFTO0FBQUEsSUFDTCxPQUFPO0FBQUEsTUFDSCxpQkFBaUI7QUFBQSxJQUNyQixDQUFDO0FBQUEsSUFDRCxRQUFRO0FBQUEsTUFDSixPQUFPO0FBQUEsUUFDSDtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLE1BQ0E7QUFBQSxNQUNKLFNBQVM7QUFBQSxJQUNiLENBQUM7QUFBQSxFQUNMO0FBQ0osQ0FBQzsiLAogICJuYW1lcyI6IFtdCn0K
