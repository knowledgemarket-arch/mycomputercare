<?php
require_once 'includes/config.php';
$page_title = 'Terms & Conditions';
$page_desc  = 'MyComputerCare Terms and Conditions — authorized reseller of consumer technology products. Read our terms of sale, refund eligibility, and dispute resolution policy.';
include 'includes/header.php';
?>
<section class="page-hero page-hero--sm">
  <div class="container">
    <h1>Terms &amp; Conditions</h1>
    <p>Last Updated: January 1, 2025</p>
  </div>
</section>
<section class="section policy-section">
<div class="container policy-content">

<p><strong>MyComputerCare</strong> ("Company," "we," "us," or "our"), located at <?php echo SITE_ADDRESS_FULL; ?>, operates as an authorized independent reseller of consumer technology products including software, hardware, and accessories. By placing an order or using our website, you agree to the following Terms &amp; Conditions.</p>

<h2>1. Business Identity &amp; Nature of Services</h2>
<p>MyComputerCare is a <strong>product retailer</strong>, not a technology service provider. We sell genuine consumer technology products sourced through authorized distribution channels. Any post-sale setup assistance or technician support offered is a complimentary benefit bundled with product purchases — it is not a separately priced or advertised service. We are not affiliated with, endorsed by, or agents of any manufacturer whose products we sell.</p>

<h2>2. Product Authenticity</h2>
<p>All products sold by MyComputerCare are genuine items sourced from authorized distributors. Software licenses are valid, activatable, and manufacturer-supported. Physical hardware carries applicable manufacturer warranties. MyComputerCare does not sell counterfeit, gray-market, or OEM-restricted products to consumers.</p>

<h2>3. Pricing &amp; Payment</h2>
<p>All prices are listed in US Dollars (USD) and are subject to change without notice. Payment is due in full at time of order. We accept major credit cards and other payment methods as displayed at checkout. Sales tax is applied where required by law.</p>

<h2>4. Orders &amp; Fulfillment</h2>
<p>Orders are subject to product availability and payment verification. Digital products (software licenses, activation codes) are typically delivered within 24 hours via email. Physical products ship within 1–2 business days via tracked carrier. MyComputerCare reserves the right to cancel any order if fulfillment is not possible, with a full refund issued.</p>

<h2>5. Refunds &amp; Returns</h2>
<p>Please see our separate <a href="refund.php">Refund Policy</a> for full details. In summary:</p>
<ul>
  <li><strong>Physical products:</strong> Unopened items may be returned within 30 days of delivery for a full product refund.</li>
  <li><strong>Digital products / software:</strong> Refunds are available within 30 days if the license key is non-functional or not as described. Activated keys are non-refundable.</li>
  <li>Return shipping costs for physical goods are the responsibility of the buyer unless the item arrived damaged or incorrect.</li>
</ul>

<h2>6. Complimentary Post-Sale Support</h2>
<p>MyComputerCare offers complimentary setup assistance and post-sale technician support as a bundled benefit with all purchases. This support is limited to helping customers install, activate, and configure products they have purchased from us. This benefit does not constitute a separate technical support service and is not available as a standalone purchase.</p>

<h2>7. Intellectual Property</h2>
<p>All software products sold retain the intellectual property rights of their respective manufacturers. Purchasing a software license grants the buyer a right to use the software per the manufacturer's end-user license agreement (EULA). MyComputerCare does not transfer ownership of software intellectual property.</p>

<h2>8. Limitation of Liability</h2>
<p>MyComputerCare's liability for any claim arising from a product purchase is limited to the amount paid for the specific product. We are not liable for indirect, incidental, or consequential damages including data loss, system damage, or lost profits arising from product use.</p>

<h2>9. Dispute Resolution</h2>
<p>Any disputes shall first be submitted to MyComputerCare in writing at <?php echo SITE_EMAIL; ?>. If unresolved within 30 days, disputes shall be subject to binding arbitration under the rules of the American Arbitration Association, in Travis County, Texas. You waive the right to participate in class-action proceedings.</p>

<h2>10. Governing Law</h2>
<p>These Terms are governed by the laws of the State of Texas, United States of America, without regard to conflict of law principles.</p>

<h2>11. Changes to Terms</h2>
<p>We reserve the right to update these Terms at any time. Continued use of our website after changes constitutes acceptance. The "Last Updated" date at the top of this page reflects the most recent revision.</p>

<h2>12. Contact</h2>
<p>For questions regarding these Terms, contact us at:<br>
<strong><?php echo SITE_NAME; ?></strong><br>
<?php echo SITE_ADDRESS_FULL; ?><br>
Email: <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a><br>
Phone: <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a></p>

</div>
</section>
<?php include 'includes/footer.php'; ?>
