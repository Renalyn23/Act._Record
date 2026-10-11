<?php
$nameErr = $emailErr = $passErr = $confirmErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty(trim($_POST["name"]))) {
        $nameErr = "Full name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]{3,}$/", trim($_POST["name"]))) {
        $nameErr = "Only letters and spaces allowed; min 3 characters";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Email validation
    if (empty(trim($_POST["email"]))) {
        $emailErr = "Email is required";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($_POST["email"]))) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } elseif (strlen($_POST["password"]) < 5) {
        $passErr = "Password must be at least 5 characters";
    }

    // Confirm password
    if (empty($_POST["confirm_password"])) {
        $confirmErr = "Please confirm password";
    } elseif (!empty($_POST["password"]) && $_POST["password"] !== $_POST["confirm_password"]) {
        $confirmErr = "Passwords do not match";
    }

    // If no errors
    if (empty($nameErr) && empty($emailErr) && empty($passErr) && empty($confirmErr)) {
        echo "<div class='alert alert-success text-center mt-4'>✅ Registration successful! Welcome, $name!</div>";
        // In real app: save to DB, redirect to login.php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register — Garfield Paradise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: url('assets/print.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px 20px;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.92);
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            padding: 2.5rem;
            max-width: 440px;
            width: 100%;
            margin: 0 auto;
        }

        .cat-icon {
            color: #ffb300;
            font-size: 1.8rem;
            margin-right: 0.5rem;
        }

        .btn-garfield {
            background-color: #ff8c00;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-garfield:hover {
            background-color: #e67e00;
        }

        .error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main class="w-100">
        <section class="register-card">
            <header class="text-center mb-4">
                <h2 class="d-flex align-items-center justify-content-center">
                    <i class="fas fa-cat cat-icon"></i> Create Account
                </h2>
                <p class="text-muted">Join Garfield Paradise today!</p>
            </header>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>"
                        placeholder="Juan Dela Cruz">
                    <span class="error"><?php echo $nameErr; ?></span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"
                        placeholder="name@example.com">
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="At least 5 characters">
                    <span class="error"><?php echo $passErr; ?></span>
                </div>
                <div class="mb-4">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                        placeholder="Re-enter password">
                    <span class="error"><?php echo $confirmErr; ?></span>
                </div>
                <button type="submit" class="btn btn-garfield w-100 text-white fw-medium">Register</button>
            </form>
            <footer class="mt-4">
                <p class="text-center mb-2">
                    Already have an account? <a href="login.php">Login here</a>
                </p>
                <p class="text-center mb-0">
                    <a href="index.php" class="d-inline-flex align-items-center">
                        <i class="fas fa-arrow-left me-1"></i> Back to Home
                    </a>
                </p>
            </footer>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>