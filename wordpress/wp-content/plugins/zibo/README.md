# Zibo

Zibo is a modular WordPress plugin for managing salons, salon owners, and salon-related data. It provides the foundation for a complete salon management platform and integrates with the **Salon Builder** plugin for visual page creation.

---

## Features

### Current

- Salon Custom Post Type
- Salon Owner User Role
- Cities Taxonomy
- Admin Dashboard
- Plugin Settings
- WordPress Settings API
- Modular Architecture

### Planned

- Salon Registration
- Salon Approval Workflow
- Membership Plans
- Booking System
- Reviews & Ratings
- Notifications
- REST API
- Payment Gateway Integration
- Multi-language Support

---

## Folder Structure

```
zibo/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── admin/
│   ├── css/
│   ├── js/
│   └── views/
│
├── includes/
│   ├── class-admin-menu.php
│   ├── class-post-types.php
│   ├── class-settings.php
│   ├── class-taxonomies.php
│   ├── class-user-roles.php
│   └── helpers.php
│
├── languages/
│
├── zibo.php
├── uninstall.php
├── readme.txt
└── README.md
```

---

## Requirements

- WordPress 6.8+
- PHP 8.1+

---

## Installation

1. Copy the plugin into:

```
wp-content/plugins/zibo/
```

2. Activate the plugin from the WordPress Admin.

3. A new **Zibo** menu will appear in the dashboard.

---

## Architecture

The plugin follows a modular, class-based architecture.

| Class | Responsibility |
|-------|----------------|
| `class-post-types.php` | Registers custom post types |
| `class-taxonomies.php` | Registers taxonomies |
| `class-user-roles.php` | Creates custom user roles |
| `class-settings.php` | Plugin settings |
| `class-admin-menu.php` | Admin menu pages |
| `helpers.php` | Shared helper functions |

---

## Custom Post Types

### Salon

Slug

```
salon
```

Purpose

- Store salon information
- Connected to Salon Builder
- Assigned to Salon Owners

---

## Taxonomies

### City

Slug

```
city
```

Used for organizing salons by city.

---

## User Roles

### Salon Owner

Capabilities

- Read Dashboard
- Upload Files

Additional capabilities will be added in future versions.

---

## Companion Plugin

Zibo is designed to work together with:

**Salon Builder**

Salon Builder provides:

- Visual Page Builder
- Templates
- Drag & Drop Editor
- Section Management
- Frontend Rendering

Zibo manages the data while Salon Builder manages the design.

---

## Roadmap

### Version 1

- [x] Salon Post Type
- [x] User Roles
- [x] Cities
- [x] Settings

### Version 1.1

- [ ] Salon Registration
- [ ] Owner Dashboard
- [ ] Approval Workflow

### Version 1.2

- [ ] Membership Plans
- [ ] Reviews
- [ ] Notifications

### Version 2.0

- [ ] Booking System
- [ ] Payments
- [ ] REST API
- [ ] Mobile App Support

---

## Coding Standards

This project follows:

- WordPress Coding Standards (WPCS)
- Object-Oriented PHP
- Modular Architecture
- Secure Coding Practices
- WordPress Settings API
- WordPress Nonces and Capability Checks

---

## License

GPL-2.0-or-later

---

## Author

Developed by Katibeh Naji.

---

## Changelog

### 1.0.0

- Initial plugin structure
- Salon custom post type
- City taxonomy
- Salon Owner role
- Admin settings
- Plugin architecture