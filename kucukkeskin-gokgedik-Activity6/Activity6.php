<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 350px;
            margin: auto;
        }
        h2 {
            text-align: left;
        }
        form {
            width: 100%;
        }
        .form-group {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
            text-align: left;
        }
        input, select, textarea {
            width: 200px;
            padding: 5px;
            border: 1px solid #000;
        }
        .radio-group, .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .radio-group input,
        .checkbox-group input {
            margin: 0;
            width: auto;
        }
        .radio-group label,
        .checkbox-group label {
            width: auto;
            font-weight: normal;
            margin: 0;
        }
        .checkbox-group {
            justify-content: flex-start;
        }
        .submit-btn {
            width: auto;
            padding: 5px 10px;
            background-color: #ccc;
            color: black;
            border: 1px solid #000;
            cursor: pointer;
            text-align: center;
        }
        .submit-btn:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="Activity6-preview.php" method="post">
            <div class="form-group">
                <label>Name:</label> <input type="text" name="name">
            </div>
            <div class="form-group">
                <label>Username:</label> <input type="text" name="username">
            </div>
            <div class="form-group">
                <label>Password:</label> <input type="password" name="password">
            </div>
            <div class="form-group">
                <label>Address:</label> <input type="text" name="address">
            </div>
            <div class="form-group">
                <label>Country:</label> 
                <select name="country">
                    <option value="">Please select a country</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="UK">UK</option>
                </select>
            </div>
            <div class="form-group">
                <label>ZIP Code:</label> <input type="text" name="zip">
            </div>
            <div class="form-group">
                <label>Email:</label> <input type="email" name="email">
            </div>
            <div class="form-group">
                <label>Sex:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="sex" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="Female">
                    <label for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label>Language:</label>
                <div class="checkbox-group">
                    <label for="english">English</label>
                    <input type="checkbox" id="english" name="language[]" value="English">
                    <label for="french">French</label>
                    <input type="checkbox" id="french" name="language[]" value="French">
                    <label for="german">German</label>
                    <input type="checkbox" id="german" name="language[]" value="German">
                </div>
            </div>
            <div class="form-group">
                <label>About:</label> <textarea name="about"></textarea>
            </div>
            <div class="form-group">
                <input class="submit-btn" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
