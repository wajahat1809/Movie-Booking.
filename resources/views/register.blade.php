<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowing Registration Form</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #1f1f1f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            color: #ccc;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #222;
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #00bcd4; /* Cyan glow */
            box-shadow: 0 0 8px 2px rgba(0, 188, 212, 0.8);
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #00bcd4;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            outline: none;
        }

        button[type="submit"]:hover {
            background-color: #008c99;
            box-shadow: 0 0 12px rgba(0, 188, 212, 0.8);
        }

        button[type="submit"]:active {
            background-color: #006c74;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-footer {
            text-align: center;
            color: #ccc;
            margin-top: 20px;
        }

        .form-footer a {
            color: #00bcd4;
            text-decoration: none;
        }

    </style>
</head>
<body>

    <div class="container">
        <h2>Register</h2>
        <form action="{{URL::TO('/register')}}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <button type="submit">Register</button>
        </form>
        <div class="form-footer">
            <p>Already have an account? <a href="#">Login</a></p>
        </div>
    </div>

</body>
</html>





     