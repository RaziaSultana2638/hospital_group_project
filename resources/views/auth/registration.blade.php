<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small style="color: white;">Step 1</small></div>
            <div class="step-col"><small style="color: white;">Step 2</small></div>
            <div class="step-col"><small style="color: white;">Step 3</small></div>

        </div>
        <form id="step1">
            <h3>PERSONAL DATA</h3>
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <div class="btn-box">
                <button type="button" id="Next1">Next</button>
            </div>
            <p style="margin-top: -26px">Allready have an account? Please <a href="/">Sign In</a></p>
        </form>
        <form id="step2">
            <h3>CONTACT</h3>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="text" name="email" placeholder="Address" required>
            <input type="text" name="state" placeholder="State" required>
            {{-- <input type="file" name="image" accept="image/*"> --}}
            <div class="btn-box">
                <button type="button" id="Previous1">Previous</button>
                <button type="button" id="Next2">Next</button>
            </div>
            <p>Allready have an account? Please <a href="/">Sign In</a></p>
        </form>
        <form id="step3">
            <h3>SECURITY</h3>
            <input type="password" name="password_1" placeholder="Password" required>
            <input type="password" name="password_2" placeholder="Confirm Password" required>
            <div class="btn-box">
                <button type="button" id="Previous2">Previous</button>
                <button type="button" id="submit">Submit</button>
            </div>
            <p>Allready have an account? Please <a href="/">Sign In</a></p>
        </form>

    </div>

    <script src="./scripts.js"></script>
</body>

</html>
