<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Confirmation</title>
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .confirmation-box {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .confirm-btn, .cancel-btn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
        }

        .confirm-btn {
            background: linear-gradient(-135deg, #c850c0, #4158d0);
            color: #fff;
        }

        .cancel-btn {
            background: linear-gradient(-135deg, #c850c0, #4158d0);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h1>Are you sure you want to logout?</h1>
        <button class="confirm-btn" onclick="window.location.href='logoutFS.php';">Yes, Logout</button>
        <button class="cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
    </div>
</body>
</html>
