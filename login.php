<?php
$emailErr = $passErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Email validation
    if (empty(trim($_POST["email"]))) {
        $emailErr = "Email is required";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($_POST["email"]))) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Password validation
    if (empty(trim($_POST["password"]))) {
        $passErr = "Password is required";
    }

    // Success message
    if (empty($emailErr) && empty($passErr)) {
        $success = "✅ Login successful! Welcome back!";
        // In real app: verify credentials, set session, redirect
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Garfield Paradise</title>
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
            font-family: 'Segoe UI', Roboto, sans-serif;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.92);
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            padding: 2.5rem;
            max-width: 420px;
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

        .success-msg {
            color: #198754;
            margin-top: 1rem;
            text-align: center;
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
        <section class="auth-card">
            <header class="text-center mb-4">
                <h2 class="d-flex align-items-center justify-content-center">
                    <i class="fas fa-cat cat-icon"></i> Welcome Back
                </h2>
                <p class="text-muted">Login to your account</p>
            </header>
            <?php if (!empty($success)): ?>
                <div class="success-msg"><?php echo $success; ?></div>
            <?php endif; ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"
                        placeholder="name@example.com">
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your password">
                    <span class="error"><?php echo $passErr; ?></span>
                </div>
                <button type="submit" class="btn btn-garfield w-100 text-white fw-medium">Login</button>
            </form>
            <footer class="mt-4">
                <p class="text-center mb-2">
                    Don't have an account? <a href="register.php">Register here</a>
                </p>
                <p class="text-center mb-0">
                    <a href="index.php"><i class="fas fa-arrow-left me-1"></i> Back to Home</a>
                </p>
            </footer>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>