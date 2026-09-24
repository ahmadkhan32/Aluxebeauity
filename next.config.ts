import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  /* Performance & SEO */
  compress: true,
  poweredByHeader: false,
  
  /* Image optimization */
  images: {
    formats: ["image/avif", "image/webp"],
    remotePatterns: [
      {
        protocol: "https",
        hostname: "**",
      },
    ],
  },

  /* Headers for security */
  async headers() {
    return [
      {
        source: "/(.*)",
        headers: [
          { key: "X-Content-Type-Options", value: "nosniff" },
          { key: "X-Frame-Options", value: "DENY" },
          { key: "X-XSS-Protection", value: "1; mode=block" },
          { key: "Referrer-Policy", value: "strict-origin-when-cross-origin" },
        ],
      },
    ];
  },

  /* Redirects */
  async redirects() {
    return [
      {
        source: "/home",
        destination: "/",
        permanent: true,
      },
      {
        source: "/services/pricing",
        destination: "/services",
        permanent: true,
      },
      {
        source: "/services/price-list",
        destination: "/services",
        permanent: true,
      },
    ];
  },
};

export default nextConfig;
