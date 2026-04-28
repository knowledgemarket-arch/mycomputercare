<?php
// ─────────────────────────────────────────────
//  MyComputerCare — Site Configuration
//  Update these values before going live
// ─────────────────────────────────────────────

define('SITE_NAME',    'MyComputerCare');
define('SITE_TAGLINE', 'Authorized Reseller of Trusted Computer & Security Products');
define('SITE_URL',     'https://www.mycomputercare.com');
define('SITE_EMAIL',   'support@mycomputercare.com');
define('SITE_PHONE',   '+1 (800) 867-5309');
define('SITE_PHONE_RAW', '18008675309');

define('SITE_ADDRESS_LINE1', '1234 Tech Boulevard, Suite 200');
define('SITE_ADDRESS_LINE2', 'Austin, TX 78701');
define('SITE_ADDRESS_FULL',  '1234 Tech Boulevard, Suite 200, Austin, TX 78701');

define('SITE_HOURS_WEEKDAY', 'Mon – Fri: 8:00 AM – 8:00 PM CST');
define('SITE_HOURS_WEEKEND', 'Sat – Sun: 10:00 AM – 5:00 PM CST');

define('ADMIN_PASSWORD_HASH', password_hash('Admin@MCC2024', PASSWORD_DEFAULT));

define('DATA_PATH', __DIR__ . '/../data/products.json');
define('ROOT_PATH', __DIR__ . '/..');

// Social (optional — leave blank to hide)
define('SOCIAL_FACEBOOK', '');
define('SOCIAL_TWITTER',  '');
define('SOCIAL_LINKEDIN', '');
