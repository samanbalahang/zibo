# Zibo

A modern WordPress theme for beauty salons, beauty professionals, and multi-vendor beauty marketplaces.

Zibo is designed to provide a premium experience for salon owners, beauty experts, and marketplace operators. The project combines modern frontend development tools with WordPress theme development best practices.

---

## Features

* Modern responsive design
* Beauty salon focused UI/UX
* Multi-vendor marketplace ready
* WooCommerce compatible
* Tailwind CSS workflow
* RTL support
* SEO friendly structure
* Performance optimized assets
* WordPress coding standards

---

## Project Structure

```text
repository/
│
├── docs/
│   ├── index.html
│   ├── assets/
│   └── node_modules/
│
├── wordpress/
│   ├── wp-admin/
│   ├── wp-content/
│   │   └── themes/
│   │       └── zibo/
│   └── ...
│
├── .gitignore
└── README.md
```

### Directory Description

| Directory                           | Purpose                                         |
| ----------------------------------- | ----------------------------------------------- |
| `docs/`                             | Frontend development environment and prototypes |
| `wordpress/`                        | Local WordPress installation                    |
| `wordpress/wp-content/themes/zibo/` | Main Zibo theme source code                     |

---

## Requirements

* PHP 8.0+
* WordPress 6.7+
* Node.js 20+
* npm
* MySQL or MariaDB
* XAMPP, Laragon, LocalWP, or Docker

---

## Installation

### Clone Repository

```bash
git clone https://github.com/samanbalahang/zibo.git
```

### Navigate to Project

```bash
cd zibo
```

### Install Frontend Dependencies

```bash
cd docs
npm install
```

### Start Tailwind Watch Mode

```bash
npx @tailwindcss/cli -i ./tailwind/style.css -o ./assets/css/style.css --watch --minify
```

---

## Theme Development

The WordPress theme is located in:

```text
wordpress/wp-content/themes/zibo/
```

### Theme Structure

```text
zibo/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
|
├── tailwind/
│   └── style.css
|
├── inc/
│   ├── setup.php
│   ├── enqueue.php
│   ├── helpers.php
│   ├── widgets.php
│   ├── template-tags.php
│   ├── customizer.php
│   ├── ajax.php
│   ├── security.php
│   └── performance.php
│
├── functions.php
├── style.css
└── screenshot.png
```

---

## Development Workflow

### Build Frontend

Edit files inside:

```text
docs/
```

### Transfer Assets

Compiled assets should be copied into:

```text
wordpress/wp-content/themes/zibo/assets/
```

## run tialwind for wordpress theme 
we use tailwind as css framework for use it do 


```text
cd  wordpress/wp-content
npm install
npx @tailwindcss/cli -i ./themes\zibo\tailwind\style.css -o ./themes/zibo/assets/css/style.min.css --watch --minify
```

### Test Locally

Run WordPress through your local development environment and activate the Zibo theme.


---

## Versioning

Current Version:

```text
0.1.0
```

Version numbers follow Semantic Versioning:

```text
0.1.0 Initial development
0.2.0 New features
0.3.0 Improvements
1.0.0 Stable release
1.0.1 Bug fixes
1.1.0 New functionality
```

---

## License

This project is licensed under the GNU General Public License v2 or later (GPL-2.0+).

Third-party libraries may be distributed under their respective licenses, including the MIT License.

---

## Author

**Saman Balahang**

GitHub:
https://github.com/samanbalahang

---

## Roadmap

### Phase 1

* Core theme structure
* Responsive layout
* Tailwind integration

### Phase 2

* WooCommerce support
* Beauty salon templates
* Booking components

### Phase 3

* Multi-vendor marketplace support
* Vendor dashboards
* Advanced customization options

---

## Contributing

Contributions, suggestions, and bug reports are welcome.

Please create an Issue or Pull Request to contribute to the project.

---

## Support

If you find this project useful:

⭐ Star the repository

🐛 Report bugs

💡 Suggest improvements

🚀 Share the project


## full tuts in:

https://github.com/samanbalahang/wordpressTuts

-----------------------------------------------

## راهنمای فارسی

# زیبو (Zibo)

یک قالب مدرن وردپرس برای سالن‌های زیبایی، آرایشگران، متخصصان حوزه زیبایی و مارکت‌پلیس‌های چندفروشندگی.

زیبو با هدف ارائه تجربه‌ای حرفه‌ای و لوکس برای صاحبان سالن‌های زیبایی، ارائه‌دهندگان خدمات آرایشی و مدیران مارکت‌پلیس‌ها توسعه داده شده است. این پروژه از ابزارهای مدرن فرانت‌اند و استانداردهای توسعه وردپرس بهره می‌برد.

---

## ✨ امکانات

* طراحی مدرن و واکنش‌گرا (Responsive)
* رابط کاربری مناسب صنعت زیبایی
* آماده برای توسعه به مارکت‌پلیس چندفروشندگی
* سازگار با ووکامرس
* استفاده از Tailwind CSS
* پشتیبانی از زبان‌های راست‌به‌چپ (RTL)
* ساختار مناسب برای سئو (SEO)
* بهینه‌سازی عملکرد و سرعت
* رعایت استانداردهای کدنویسی وردپرس

---

## 📁 ساختار پروژه

```text
repository/
│
├── docs/
│   ├── index.html
│   ├── assets/
│   └── node_modules/
│
├── wordpress/
│   ├── wp-admin/
│   ├── wp-content/
│   │   └── themes/
│   │       └── zibo/
│   └── ...
│
├── .gitignore
└── README.md
```

### توضیح پوشه‌ها

| پوشه                                | توضیحات                            |
| ----------------------------------- | ---------------------------------- |
| `docs/`                             | محیط توسعه فرانت‌اند و نمونه صفحات |
| `wordpress/`                        | نصب محلی وردپرس                    |
| `wordpress/wp-content/themes/zibo/` | سورس اصلی قالب زیبو                |

---

## ⚙️ پیش‌نیازها

* PHP 8.0 یا بالاتر
* WordPress 6.7 یا بالاتر
* Node.js 20 یا بالاتر
* npm
* MySQL یا MariaDB
* XAMPP، Laragon، LocalWP یا Docker

---


## 🚀 راه‌اندازی پروژه

### دریافت مخزن

```bash
git clone https://github.com/samanbalahang/zibo.git
```

### ورود به پروژه

```bash
cd zibo
```

### نصب وابستگی‌های فرانت‌اند

```bash
cd docs
npm install
```

### اجرای Tailwind در حالت Watch

```bash
npx @tailwindcss/cli -i ./tailwind/style.css -o ./assets/css/style.css --watch --minify
```

---

## 🎨 توسعه قالب وردپرس

مسیر قالب:

```text
wordpress/wp-content/themes/zibo/
```

### ساختار قالب

```text
zibo/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── inc/
│   ├── setup.php
│   ├── enqueue.php
│   ├── helpers.php
│   ├── widgets.php
│   ├── template-tags.php
│   ├── customizer.php
│   ├── ajax.php
│   ├── security.php
│   └── performance.php
│
├── functions.php
├── style.css
└── screenshot.png
```

---

## 🛠 روند توسعه

### توسعه رابط کاربری

فایل‌های مربوط به طراحی اولیه و فرانت‌اند در پوشه زیر قرار دارند:

```text
docs/
```

### انتقال فایل‌های خروجی

فایل‌های CSS و JavaScript نهایی باید به مسیر زیر منتقل شوند:

```text
wordpress/wp-content/themes/zibo/assets/
```

### تست محلی

پس از فعال‌سازی قالب در وردپرس، تغییرات را در محیط محلی بررسی و آزمایش کنید.

---
# اجرای tailwind در وردپرس
در این پروژه ما قالب وردپرس خود را براساس فریم ورک tailwind  ساخته اییم برای استفاده کدهای زیر را بکار گیرید


```text
cd  wordpress/wp-content
npm install
npx @tailwindcss/cli -i ./themes\zibo\tailwind\style.css -o ./themes/zibo/assets/css/style.min.css --watch --minify
```

---

## 📌 نسخه‌بندی

نسخه فعلی:

```text
0.1.0
```

الگوی نسخه‌بندی:

```text
0.1.0  نسخه اولیه توسعه
0.2.0  افزودن امکانات جدید
0.3.0  بهبود ساختار
1.0.0  نسخه پایدار
1.0.1  رفع خطاها
1.1.0  افزودن قابلیت‌های جدید
```

---

## 📜 مجوز استفاده

این پروژه تحت مجوز GNU General Public License v2 یا نسخه‌های بعدی (GPL-2.0+) منتشر شده است.

کتابخانه‌ها و ابزارهای جانبی ممکن است دارای مجوزهای مستقل مانند MIT باشند.

---

## 👨‍💻 توسعه‌دهنده

**سامان بالاهنگ**

گیت‌هاب:

https://github.com/samanbalahang

---

## 🗺 نقشه راه پروژه

### فاز اول

* ایجاد ساختار اصلی قالب
* طراحی واکنش‌گرا
* یکپارچه‌سازی Tailwind CSS

### فاز دوم

* پشتیبانی کامل از ووکامرس
* قالب‌های اختصاصی سالن‌های زیبایی
* بخش رزرو خدمات

### فاز سوم

* پشتیبانی از مارکت‌پلیس چندفروشندگی
* پنل فروشندگان
* امکانات سفارشی‌سازی پیشرفته

---

## 🤝 مشارکت در توسعه

از مشارکت شما استقبال می‌شود.

برای همکاری می‌توانید:

* Issue ثبت کنید
* Pull Request ارسال کنید
* پیشنهادهای خود را مطرح نمایید

---

## ❤️ حمایت از پروژه

اگر این پروژه برای شما مفید بوده است:

⭐ به مخزن Star بدهید

🐛 خطاها را گزارش کنید

💡 پیشنهادهای خود را ارسال کنید

🚀 پروژه را با دیگران به اشتراک بگذارید


## آموزش کامل در 

https://github.com/samanbalahang/wordpressTuts