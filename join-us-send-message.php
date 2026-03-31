<?php
$to = "$email";
$subject = "New Message from Website || $title";
$headers = "From: " . strip_tags($_POST['fullName']) . " <" . strip_tags($_POST['email']) . "> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
ob_start();
?>
<?php
if (empty($_POST['fullName'])) {
    echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You did not enter your Full Name.</p>";
}
elseif (empty($_POST['phone'])) {
    echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You did not enter your Phone Number.</p>";
}
else { ?>

<table rules="all" style="border:1px solid  #666; font-size:16px;" cellpadding="10" width="100%">
    <tr style='background: #eee;'>
        <td colspan="4"><strong>PERSONAL INFORMATION</strong> </td>
    </tr>
    <tr>
        <td><strong>Full Name:</strong> </td>
        <td colspan="3">
            <?= strip_tags($_POST["fullName"])?>
        </td>
    </tr>
    <tr>
        <td><strong>Phone Numer:</strong> </td>
        <td>
            <?= strip_tags($_POST["phone"])?>
        </td>
    </tr>
    <tr style='background: #eee;'>
        <td colspan="4"><strong>MESSAGE</strong></td>
    </tr>
    <tr>
        <td colspan="4">
            <?= strip_tags($_POST["message"])?>
        </td>
    </tr>
</table>

<?php
    $message = ob_get_clean();
    if (!@mail($to, $subject, $message, $headers))
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! sending mail failed. Try again.</p>";
    else
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #1815E2; font-size: 25px; text-align: center;'>Thanks for contacting us! We will get in touch with you soon.</p>";
?>
<?php
}
?>