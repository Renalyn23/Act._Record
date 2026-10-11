<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Studio Ghibli</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    :root {
        --garfield-orange: #ff8c00;
        --garfield-brown: #8b4513;
        --garfield-dark: #5c2e0c;
        --garfield-light: #fff3e0;
        --ghibli-dark: #2c3e50;
        --ghibli-blue: #5dade2;
    }

    body {
        background: url('assets/bg.jpg') no-repeat center center fixed;
        min-height: 100vh;
        font-family: "Segoe UI", Roboto, bold;
    }

    .navbar {
        background-color: #d33d4ad9;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .navbar-brand {
        color: var(--ghibli-dark) !important;
        font-weight: 700;
    }

    .nav-link {
        color: var(--ghibli-dark) !important;
        margin: 0 0.5rem;
        cursor: pointer;
    }

    .nav-link:hover {
        color: var(--ghibli-blue) !important;
    }

    .nav-link.active {
        font-weight: 700;
        border-bottom: 2px solid var(--garfield-orange);
    }

    .hero-section {
        padding: 4rem 2rem;
        overflow: hidden;
    }

    .hero-text h1 {
        color: var(--ghibli-dark);
        font-weight: 700;
    }

    .hero-text p {
        color: #444;
        max-width: 500px;
        line-height: 1.7;
    }

    .btn-ghibli {
        background-color: var(--ghibli-blue);
        color: #ca1919;
        border-radius: 20px;
        padding: 0.5rem 1.5rem;
        border: none;
    }

    .btn-ghibli:hover {
        background-color: var(--ghibli-dark);
        color: #31c50b;
    }

    .btn-garfield {
        background-color: var(--garfield-orange);
        color: hsl(251, 68%, 61%);
        border-radius: 20px;
        padding: 0.5rem 1.5rem;
        border: none;
    }

    .btn-garfield:hover {
        background-color: var(--garfield-dark);
        color: white;
    }

    .hero-img {
        max-width: 100%;
        height: auto;
    }

    .tab-content-section {
        display: none;
        padding: 3rem 2rem;
        animation: fadeIn 0.4s ease-in-out;
    }

    .tab-content-section.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .content-card {
        background: rgba(255, 255, 255, 0.92);
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 767.98px) {
        .hero-section {
            text-align: center;
            padding: 2rem 1rem;
        }

        .hero-text {
            margin-bottom: 2rem;
        }
    }
</style>