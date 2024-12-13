<html lang="en">
<head>
    <title>Sign Up</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 40px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #d63384;
        }
        .welcome-text, .welcome {
            font-size: 24px;
            font-weight: 700;
            margin-top: 20px;
        }
        .sub-text, .subtitle {
            font-size: 14px;
            color: #888888;
            margin-top: 10px;
        }
        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
            border: 1px solid #dddddd;
            border-radius: 5px;
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
        }
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        .divider hr {
            flex: 1;
            border: none;
            border-top: 1px solid #dddddd;
        }
        .divider span {
            margin: 0 10px;
            color: #888888;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .input-group label {
            display: block;
            font-size: 12px;
            color: #888888;
            margin-bottom: 5px;
        }
        .input-group input, .input-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }
        .sign-up-btn, .continue-btn {
            background-color: #000000;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
        }
        .login-link, .footer {
            font-size: 12px;
            color: #888888;
            margin-top: 20px;
        }
        .login-link a, .footer a {
            color: #000000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">LISTIFY</div>
        <div class="welcome-text">WELCOME TO LISTIFY!</div>
        <div class="sub-text">GET MORE DONE EFFORTLESSLY</div>
        <div class="google-btn">Sign up with Google</div>
        <div class="divider">
            <hr/>
            <span>Or Use Email</span>
            <hr/>
        </div>
        
        <form action="/register" method="POST">
            @csrf <!-- This is important for CSRF protection -->
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="input-group">
                <label for="username">USERNAME</label>
                <input id="username" name="username" placeholder="Enter your username" type="text" required />
            </div>
            
            <div class="input-group">
                <label for="email">EMAIL</label>
                <input id="email" name="email" placeholder="Enter your email" type="email" required />
            </div>
            
            <div class="input-group">
                <label for="password">PASSWORD</label>
                <input id="password" name="password" placeholder="Enter your password" type="password" required />
            </div>
            
            <div class="input-group">
                <label for="password_confirmation">CONFIRM PASSWORD</label>
                <input id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" type="password" required />
            </div>
            
            <div class="input-group">
                <label for="user-type">USER TYPE</label>
                <select id="user-type" name="user_type">
                    <option value="student">Student</option>
                    <option value="academic-advisor">Academic Advisor</option>
                </select>
            </div>
            
            <button type="submit" class="sign-up-btn">SIGN ME UP</button>
        </form>

        <div class="login-link">
            Already a Member? <a href="{{ route('login') }}">LOG IN</a>
        </div>
    </div>

    <script>
        // Get references to the dropdown and button elements
        const userTypeDropdown = document.getElementById("user-type");
        const signUpButton = document.getElementById("sign-up-btn");

        // Function to update the button's link based on user type
        userTypeDropdown.addEventListener("change", function () {
            const userType = userTypeDropdown.value;

            if (userType === "student") {
                // Redirect to the student dashboard
                window.location.href = "{{ route('dashboard') }}"; // Use Laravel route helper
            } else if (userType === "academic-advisor") {
                // Redirect to the academic advisor dashboard
                window.location.href = "{{ route('AA_dashboard') }}"; // Use Laravel route helper
            } else {
                alert("Please select a user type."); // Alert if no user type is selected
            }
        });
    </script>
</body>
</html>