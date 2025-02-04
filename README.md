File structure:

/public_html/nichecms2025/
│── /config/              # Configuration files
│   ├── config.php        # Database connection & global settings
│   ├── init.php          # Loads settings, helper functions, and DB
│── /core/                # Core system files
│   ├── router.php        # Detects the domain/subdomain
│   ├── functions.php     # Handles database queries & logic
│   ├── template_engine.php  # Loads the correct template dynamically
│── /templates/           # Stores all site-specific templates
│   ├── default/          # Default templates (fallback)
│   ├── bildelarna.nu/    # Templates for main domain
│   │   ├── county.php
│   │   ├── city.php
│   │   ├── company.php
│   │   ├── layout.php    # Header, footer, meta tags
│   ├── sub1.bildelarna.nu/  # Templates for subdomain
│   │   ├── county.php
│   │   ├── city.php
│   │   ├── company.php
│   │   ├── layout.php
│   ├── sub2.example.com/ # Another domain or subdomain
│   ├── anotherdomain.com/
│── /public/              # CSS, JavaScript, Images
│── /logs/                # Error logs & debugging
│── index.php             # Main entry point
│── .htaccess             # URL rewriting & redirects
│── sitemap.php           # Dynamic sitemap generator
│── robots.txt            # SEO rules
