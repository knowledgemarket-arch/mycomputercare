<?php
require_once 'includes/config.php';
$page_title = 'Privacy Policy';
$page_desc  = 'MyComputerCare Privacy Policy — how we collect, use, and protect your personal information.';
include 'includes/header.php';
?>
<section class="page-hero page-hero--sm">
  <div class="container"><h1>Privacy Policy</h1><p>Last Updated: January 1, 2025</p></div>
</section>
<section class="section policy-section">
<div class="container policy-content">

<p>MyComputerCare ("we," "us," "our") respects your privacy. This policy explains what data we collect, how we use it, and your rights regarding that data.</p>

<h2>1. Information We Collect</h2>
<ul>
  <li><strong>Contact information:</strong> Name, email address, phone number when you submit our contact form or place an order.</li>
  <li><strong>Order information:</strong> Products purchased, payment confirmation details (we do not store full card numbers).</li>
  <li><strong>Usage data:</strong> IP address, browser type, pages visited, and time spent — collected automatically via server logs and cookies.</li>
</ul>

<h2>2. How We Use Your Information</h2>
<ul>
  <li>To fulfill and communicate about your orders.</li>
  <li>To provide complimentary post-sale technician support bundled with your purchase.</li>
  <li>To respond to contact form inquiries.</li>
  <li>To improve our website and product offerings.</li>
  <li>To comply with legal obligations.</li>
</ul>

<h2>3. Cookies</h2>
<p>We use essential cookies to operate the website (session management, form security). We may also use analytics cookies (e.g., Google Analytics) to understand site traffic. You may disable cookies in your browser settings; some site features may be affected.</p>

<h2>4. Third-Party Services</h2>
<p>We may use third-party services including payment processors, shipping carriers, and analytics providers. These parties have their own privacy policies and we encourage you to review them. We do not sell your personal information to third parties.</p>

<h2>5. Google Ads</h2>
<p>We may run advertising through Google Ads. Google may use cookies to serve ads based on your prior visits to our website. You can opt out via <a href="https://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ad Settings</a>.</p>

<h2>6. Data Retention</h2>
<p>We retain order and contact records for up to 3 years for business and legal purposes. You may request deletion of your personal data by contacting us at <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>.</p>

<h2>7. Security</h2>
<p>We implement SSL encryption on all pages and follow industry-standard security practices. No method of transmission over the internet is 100% secure; we cannot guarantee absolute security.</p>

<h2>8. Children's Privacy</h2>
<p>Our website is not directed to children under 13. We do not knowingly collect personal information from minors.</p>

<h2>9. Your Rights (California Residents)</h2>
<p>Under the CCPA, California residents have the right to know what personal data we collect, request deletion, and opt out of the sale of personal information. We do not sell personal information. To exercise your rights, contact us at <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>.</p>

<h2>10. Contact</h2>
<p><?php echo SITE_NAME; ?> — <?php echo SITE_ADDRESS_FULL; ?><br>
Email: <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a> | Phone: <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a></p>

</div>
</section>
<?php include 'includes/footer.php'; ?>
