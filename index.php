<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">DesignerName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section id="home" class="hero d-flex align-items-center">
            <div class="container text-center text-white">
                <h1 class="display-4 mb-3">Creative Designer</h1>
                <p class="lead mb-4">Turning ideas into visual experiences</p>
                <a href="#portfolio" class="btn btn-primary btn-lg">View My Work</a>
            </div>
        </section>

        <section id="portfolio" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">My Portfolio</h2>
                <div class="row portfolio-grid">
                    <!-- Portfolio items will be dynamically added here by JavaScript -->
                </div>
            </div>
        </section>

        <section id="about" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">About Me</h2>
                <div class="row align-items-center">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img src="https://via.placeholder.com/300" alt="Designer's photo" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-8">
                        <p>I'm a passionate designer with a keen eye for detail and a love for creating beautiful, functional designs. With years of experience in graphic design, web design, and user interface design, I bring creativity and innovation to every project.</p>
                        <p>My goal is to create visually stunning and user-friendly designs that leave a lasting impression. Let's work together to bring your ideas to life!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Contact Me</h2>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <form class="contact-form">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Get in Touch</h3>
                        <p><i class="fas fa-envelope me-2"></i> email@example.com</p>
                        <p><i class="fas fa-phone me-2"></i> +1 (123) 456-7890</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> New York, NY</p>
                        <div class="social-links mt-4">
                            <a href="#" class="me-3" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="me-3" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2024 DesignerName. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="json.js"></script>
</body>
</html>
