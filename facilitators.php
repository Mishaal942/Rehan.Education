<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Facilitators - Rehan.Education Clone</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #333;
    min-height: 100vh;
}

header {
    background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
    color: #fff;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

header h1 {
    font-size: 2.5em;
    margin-bottom: 15px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

nav {
    margin-top: 20px;
}

nav a {
    color: #fff;
    margin: 0 20px;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.1em;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

nav a:hover {
    background: rgba(255,255,255,0.2);
    transform: translateY(-2px);
}

.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 40px 20px;
}

.section-title {
    text-align: center;
    color: #fff;
    font-size: 2em;
    margin-bottom: 40px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.facilitators {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    padding: 20px;
}

.facilitator {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.facilitator::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
}

.facilitator:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
}

.facilitator-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5em;
    color: #fff;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}

.facilitator h3 {
    color: #0056b3;
    font-size: 1.5em;
    margin-bottom: 10px;
}

.facilitator .role {
    color: #666;
    font-style: italic;
    margin-bottom: 20px;
    font-size: 1.1em;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    text-decoration: none;
    color: #fff;
    font-size: 1.3em;
    transition: all 0.3s ease;
    box-shadow: 0 3px 10px rgba(0,0,0,0.2);
}

.social-links a.facebook {
    background: #1877f2;
}

.social-links a.linkedin {
    background: #0077b5;
}

.social-links a.youtube {
    background: #ff0000;
}

.social-links a:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

@media (max-width: 768px) {
    header h1 {
        font-size: 1.8em;
    }
    
    nav a {
        display: block;
        margin: 10px 0;
    }
    
    .facilitators {
        grid-template-columns: 1fr;
    }
}
</style>
<script>
function redirect(page) {
    window.location.href = page;
}
</script>
</head>
<body>
<header>
    <h1>🎓 Our Facilitators</h1>
    <nav>
        <a href="#" onclick="redirect('index.php')">Home</a>
        <a href="#" onclick="redirect('curriculum.php')">Curriculum</a>
        <a href="#" onclick="redirect('contact.php')">Contact Us</a>
    </nav>
</header>

<div class="container">
    <h2 class="section-title">Meet Our Expert Team</h2>
    
    <div class="facilitators">
        <!-- Rehan Allahwala -->
        <div class="facilitator">
            <div class="facilitator-icon">
                <i class="fas fa-user-tie"></i>
            </div>
            <h3>Rehan Allahwala</h3>
            <p class="role">Founder & Mentor of Rehan School</p>
            <div class="social-links">
                <a href="https://www.facebook.com/rehan33/" target="_blank" class="facebook" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.linkedin.com/in/rehanallahwala" target="_blank" class="linkedin" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.youtube.com/@rehanallahwala" target="_blank" class="youtube" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <!-- Momina Allahwala -->
        <div class="facilitator">
            <div class="facilitator-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h3>Momina Allahwala</h3>
            <p class="role">Director of Rehan School</p>
            <div class="social-links">
                <a href="https://www.facebook.com/allahwali" target="_blank" class="facebook" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/@rehanschoolkorangicampus" target="_blank" class="youtube" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/allahwali/" target="_blank" class="linkedin" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <!-- Doulat EducationWala -->
        <div class="facilitator">
            <div class="facilitator-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <h3>Doulat EducationWala</h3>
            <p class="role">Principal of Rehan School Online Academy</p>
            <div class="social-links">
                <a href="https://www.facebook.com/doulateducationwala/" target="_blank" class="facebook" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.linkedin.com/in/doulattailorswala/" target="_blank" class="linkedin" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.youtube.com/@DoulatEducationWala" target="_blank" class="youtube" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <!-- Maryam Zulfiqar -->
        <div class="facilitator">
            <div class="facilitator-icon">
                <i class="fas fa-user-friends"></i>
            </div>
            <h3>Maryam Zulfiqar TrainingWali</h3>
            <p class="role">Vice Principal of Rehan School Online Academy</p>
            <div class="social-links">
                <a href="https://www.facebook.com/maryamzulfiqar.trainingwali" target="_blank" class="facebook" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCiuRWaZ0NVQmPk2gXbi-OaQ" target="_blank" class="youtube" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/maryam-zulfiqar-trainingwali/" target="_blank" class="linkedin" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
