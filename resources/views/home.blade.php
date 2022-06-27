<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Real Estate Management System | Homepage</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container columns-2 max-w-6xl max-auto sm:px-6 lg:px-8">
        <div class="intro-text">
            <h1>Welcome to Online Real Estate Management System</h1>
            <p>
                We deal with selling, renting and hiring of fixed assets
                 such as lands and buildings both for Commercial use and
                 Residential use.
            </p>
            <p>
                To explore these and many more, kindly create an account and
                login or simply login if you have an account. It's as easy as 123..
            </p>
        </div>
        <div class="login-signup-form">
            <form method="POST" action="#">
                @csrf
                <h1>Login</h1>
                <label for="login">Login as:</label>
                <select name="user-type" id="user-type">
                    <option value="">...Select one...</option>
                    <option value="buyer">Buyer</option>
                    <option value="seller">Seller</option>
                </select>
                <label for="Email">username</label>
                <input type="text" name="username" id="username">
                
            </form>
        </div>
    </div>
</body>
</html>