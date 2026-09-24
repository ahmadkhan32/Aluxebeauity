import React from "react";

export function Navigation() {
  const navItems = [
    { label: "Home", href: "/" },
    { label: "About", href: "/about/" },
    { label: "Services", href: "/services/" },
    { label: "26 Branches", href: "/branches/" },
    { label: "Shop", href: "/shop/" },
    { label: "Academy", href: "/rawr-training-academy/" },
    { label: "Education", href: "/rawr-education/" },
    { label: "Careers", href: "/careers/" },
    { label: "Franchise", href: "/franchise/" },
    { label: "Blog", href: "/blogs/" },
    { label: "Press", href: "/press/" },
    { label: "Contact", href: "/contact/" }
  ];

  return (
    <nav className="rawr-main-nav">
      <ul style={{ display: "flex", gap: "24px", listStyle: "none", margin: 0, padding: 0 }}>
        {navItems.map((item) => (
          <li key={item.label}>
            <a
              href={item.href}
              style={{
                color: "inherit",
                textDecoration: "none",
                fontSize: "14px",
                fontWeight: "600",
                transition: "color 0.2s ease"
              }}
            >
              {item.label}
            </a>
          </li>
        ))}
      </ul>
    </nav>
  );
}

export default Navigation;
