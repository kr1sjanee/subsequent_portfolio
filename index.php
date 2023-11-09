<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<header>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" id="services-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <button id="dark-mode-toggle" class="btn btn-primary">Toggle Dark Mode</button>
            </div>
        </div>
    </nav>
</header>

<section id="home" class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4">Hello, I'm Kris Jane Cabilan</h1>
                <p class="lead">Welcome to my portfolio, where I showcase a collection of innovative projects and cutting-edge solutions. With a strong foundation in coding and a passion for pushing boundaries. Explore my work and let's connect to collaborate on transforming ideas into reality. Together, we can make a lasting impact in the world of technology.</p>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img src="krisjane.jpg" alt="Your Photo" class="img-fluid rounded-circle" width="400" height="400">
                </div>
                <!-- Social Media Icons -->
                <div class="contact-icons text-center mt-4">
                    <a href="https://web.facebook.com/krisjane.cabilan" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/krisjane_cabilan/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://twitter.com/CabilanKris05" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/kris-jane-cabilan-003265278/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add more sections for your portfolio and contact information as needed -->
<section id="services" class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title mb-5">My Services</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6"> <!-- Adjusted column width to 6 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Web Development</h2>
                        <p class="card-text">Crafting visually stunning websites with HTML, CSS, JavaScript, and Bootstrap.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6"> <!-- Adjusted column width to 6 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Data Analysis</h2>
                        <p class="card-text">Extracting meaningful insights from data sets, conducting data analysis, and implementing statistical models.</p>
                    </div>
                </div>
            </div>
            <!-- Add more service cards as needed -->
        </div>
    </div>
</section>




<section id="skills" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h2 style="text-align: center;">My Skills</h2>
                <div id="skill-1">
                    <label>Web Development</label>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>
                <div id="skill-2">
                    <label>Data Analysis</label>
                    <ul>
                        <li>SQL</li>
                        <li>Database Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>About Me</h2>
                <p>Hi! I'm Kris Jane A. Cabilan, a passionate student studying at ACLC College of Iriga. I'm not a professional, but I can craft visually stunning websites that provide exceptional user experiences. I am dedicated to gaining more knowledge. Let's collaborate and achieve remarkable outcomes together.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-block">
                <h2 style="text-align: center;">Contact Me</h2>
                    <label id="myLabel">Contact me</label>
                    <form id="myForm">
                        <div class="contact-field">
                            <input type="text" placeholder="Full Name">
                            <input type="text" placeholder="Email Address">
                        </div>
                        <div class="contact-field">
                            <input type="text" placeholder="Mobile Number">
                            <input type="text" placeholder="Email Subject">
                        </div>
                        <div class="contact-msg">
                            <textarea placeholder="Enter your message..."></textarea>
                        </div>
                        <div class="contact-btn">
                            <button class="solid-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const html = document.documentElement;

    darkModeToggle.addEventListener('click', () => {
        if (html.getAttribute('data-bs-theme') === 'dark') {
            html.setAttribute('data-bs-theme', 'light');
        } else {
            html.setAttribute('data-bs-theme', 'dark');
        }
    });
    
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
