# Salon Builder

Salon Builder is a visual page builder for the **Zibo** plugin. It allows salon owners and administrators to create beautiful salon pages using a modern drag-and-drop interface.

> **Note:** Salon Builder requires the **Zibo** plugin to be installed and activated.

---

## Features

### Current

- Builder page for Salon posts
- "Build with Salon Builder" button
- Modern two-column builder interface
- Featured image management
- Modular architecture

### Planned

- Drag & Drop Sections
- Hero Banner
- Services
- Gallery
- Team Members
- Contact Information
- Google Maps
- Testimonials
- Templates
- Live Preview
- Responsive Controls
- Global Styles
- Revision History
- AI Section Generator

---

# Requirements

- WordPress 6.8+
- PHP 8.1+
- Zibo Plugin 1.0+

---

# Installation

1. Install and activate the **Zibo** plugin.
2. Copy this plugin into:

```
wp-content/plugins/salon-builder/
```

3. Activate **Salon Builder**.
4. Edit a **Salon**.
5. Click **Build with Salon Builder**.

---

# Folder Structure

```
salon-builder/
│
├── admin/
│   ├── css/
│   │   └── builder.css
│   │
│   ├── js/
│   │   └── builder.js
│   │
│   └── views/
│       └── builder-page.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── includes/
│   ├── class-admin.php
│   ├── class-builder.php
│   ├── class-post-hooks.php
│   └── helpers.php
│
├── salon-builder.php
├── uninstall.php
├── readme.txt
└── README.md
```

---

# Architecture

The plugin follows a modular object-oriented architecture.

| Class | Responsibility |
|--------|----------------|
| class-admin.php | Admin menus and builder buttons |
| class-builder.php | Builder logic |
| class-post-hooks.php | Hooks into Salon post editing |
| helpers.php | Shared helper functions |

---

# Builder Layout

```
+---------------------------------------------------------+
| Toolbar                                                  |
+----------------------+----------------------------------+
| Sidebar              | Canvas                           |
|                      |                                  |
| Featured Image       |                                  |
| Salon Settings       |                                  |
| Sections             |          Live Builder            |
| Templates            |                                  |
| Global Styles        |                                  |
|                      |                                  |
+----------------------+----------------------------------+
```

---

# Supported Post Types

Current

- Salon

Future

- Spa
- Beauty Center
- Barber Shop

Additional post types can be added using filters.

---

# Roadmap

## Version 1.0

- [x] Builder Page
- [x] Builder Button
- [x] Sidebar
- [x] Canvas

## Version 1.1

- [ ] Add Sections
- [ ] Duplicate Sections
- [ ] Delete Sections
- [ ] Save Layout

## Version 1.2

- [ ] Templates
- [ ] Import / Export
- [ ] Global Colors
- [ ] Typography

## Version 2.0

- [ ] Drag & Drop
- [ ] Responsive Editing
- [ ] Live Preview
- [ ] Theme Builder

---

# Integration

Salon Builder works together with **Zibo**.

### Zibo

Responsible for:

- Salon Management
- User Roles
- Cities
- Memberships
- Booking
- Reviews

### Salon Builder

Responsible for:

- Layout
- Sections
- Styling
- Templates
- Frontend Rendering

Keeping these responsibilities separate makes both plugins easier to maintain and extend.

---

# Coding Standards

This project follows:

- WordPress Coding Standards (WPCS)
- Object-Oriented PHP
- WordPress Security Best Practices
- Escaping & Sanitization
- WordPress Media API
- WordPress Settings API

---

# License

GPL-2.0-or-later

---

# Author

Developed by Katibeh Naji.

---

# Changelog

## 1.0.0

- Initial release
- Builder interface
- Sidebar
- Canvas
- Salon integration