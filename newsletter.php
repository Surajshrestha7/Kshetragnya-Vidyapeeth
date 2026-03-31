<?php
$newsletterMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['newsletter_submit'])) {

    if (empty($_POST['newsletter_email'])) {
        $newsletterMessage = "<p style='color:#fff; margin:0; padding:15px 20px; background:#d35400; border-radius:6px;'>
        Please enter your email address.
        </p>";
    }
    elseif (!filter_var($_POST['newsletter_email'], FILTER_VALIDATE_EMAIL)) {
        $newsletterMessage = "<p style='color:#fff; margin:0; padding:15px 20px; background:#d35400; border-radius:6px;'>
        Please enter a valid email address.
        </p>";
    }
    else {
        $subscriberEmail = strip_tags($_POST['newsletter_email']);

        $to = "your@email.com"; // your email here
        $subject = "New Newsletter Subscription";
        $message = "
            <table rules='all' style='border:1px solid #666; font-size:16px;' cellpadding='10' width='100%'>
                <tr style='background:#eee;'>
                    <td><strong>Subscriber Email</strong></td>
                </tr>
                <tr>
                    <td>{$subscriberEmail}</td>
                </tr>
            </table>
        ";

        $headers = "From: Website Newsletter <noreply@yourdomain.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (@mail($to, $subject, $message, $headers)) {
            $newsletterMessage = "<p style='color:#fff; margin:0; padding:15px 20px; background:#03633D; border-radius:6px;'>
            Thanks for subscribing to our newsletter!
            </p>";
        }
        else {
            $newsletterMessage = "<p style='color:#fff; margin:0; padding:15px 20px; background:#d35400; border-radius:6px;'>
            Sorry! Subscription failed. Please try again.
            </p>";
        }
    }
}
?>