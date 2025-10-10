<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verify Two-Factor Authentication</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f6f9fc; padding:20px;">
    <div style="max-width:600px; background:#fff; border-radius:8px; padding:20px; margin:auto;">
        <h2 style="color:#2c7be5;">Verify Your Two-Factor Authentication</h2>
        <p>Click the button below to confirm and enable Two-Factor Authentication on your account:</p>

        <a href="{{ $url }}"
           style="display:inline-block; background:#2c7be5; color:#fff; padding:12px 20px; border-radius:6px; text-decoration:none; font-weight:bold;">
            Verify 2FA
        </a>

        <p style="margin-top:20px;">If you didn’t request this, please ignore this email.</p>
        <p>Thanks,<br>{{ config('app.name') }} Team</p>
    </div>
</body>
</html>
