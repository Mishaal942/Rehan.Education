<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education Clone - Digital Mastery for a Connected World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9f9f9;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
            color: #fff;
            padding: 20px 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        header h1 {
            font-size: 2em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 15px;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        nav a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 25px;
            transition: all 0.3s ease;
            background: rgba(255,255,255,0.1);
        }

        nav a:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 100px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveBackground 20s linear infinite;
            z-index: 0;
        }

        @keyframes moveBackground {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
        }

        .hero h2 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease;
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: #fff;
            color: #667eea;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.1em;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            animation: fadeInUp 1.2s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
            background: #f0f0f0;
        }

        /* Stats Section */
        .stats {
            background: #fff;
            padding: 60px 40px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
        }

        .stat-box {
            text-align: center;
            flex: 1;
            min-width: 200px;
            animation: countUp 1s ease;
        }

        .stat-box i {
            font-size: 3em;
            color: #667eea;
            margin-bottom: 15px;
        }

        .stat-box h3 {
            font-size: 2.5em;
            color: #0056b3;
            margin-bottom: 10px;
        }

        .stat-box p {
            color: #666;
            font-size: 1.1em;
        }

        /* Features Section */
        .features {
            padding: 80px 40px;
            background: linear-gradient(180deg, #f9f9f9 0%, #e9ecef 100%);
        }

        .features-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .features-header h2 {
            font-size: 2.5em;
            color: #0056b3;
            margin-bottom: 15px;
        }

        .features-header p {
            font-size: 1.2em;
            color: #666;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-box {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-box:hover::before {
            transform: scaleX(1);
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2em;
            color: #fff;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            transition: all 0.3s ease;
        }

        .feature-box:hover .feature-icon {
            transform: rotateY(360deg);
        }

        .feature-box h3 {
            font-size: 1.6em;
            color: #0056b3;
            margin-bottom: 15px;
        }

        .feature-box p {
            color: #666;
            font-size: 1.05em;
            line-height: 1.8;
        }

        /* Additional Features Section */
        .extra-features {
            background: #fff;
            padding: 80px 40px;
        }

        .extra-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .extra-feature-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
            border-left: 4px solid #667eea;
        }

        .extra-feature-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .extra-feature-card i {
            font-size: 2.5em;
            color: #667eea;
            margin-bottom: 15px;
        }

        .extra-feature-card h4 {
            color: #0056b3;
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        /* Testimonials Section */
        .testimonials {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 80px 40px;
            color: #fff;
        }

        .testimonials h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 50px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.25);
        }

        .testimonial-card .stars {
            color: #ffd700;
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        .testimonial-card p {
            font-style: italic;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .testimonial-card .author {
            font-weight: bold;
            text-align: right;
        }

        /* Footer */
        footer {
            background: #222;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a:hover {
            color: #667eea;
            transform: translateY(-2px);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            color: #fff;
            font-size: 1.5em;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-icons a:hover {
            background: #667eea;
            transform: translateY(-3px) scale(1.1);
        }

        .copyright {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #999;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.5em;
            }

            .hero h2 {
                font-size: 2em;
            }

            .hero p {
                font-size: 1.1em;
            }

            .stats {
                flex-direction: column;
            }

            .features-header h2 {
                font-size: 2em;
            }

            nav {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Scroll Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <script>
        function redirect(page){
            window.location.href = page;
        }

        // Scroll Animation
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>🎓 Rehan.Education Clone</h1>
        <nav>
            <a href="#" onclick="redirect('index.php')"><i class="fas fa-home"></i> Home</a>
            <a href="#" onclick="redirect('curriculum.php')"><i class="fas fa-book"></i> Curriculum</a>
            <a href="#" onclick="redirect('facilitators.php')"><i class="fas fa-users"></i> Facilitators</a>
            <a href="#" onclick="redirect('contact.php')"><i class="fas fa-envelope"></i> Contact Us</a>
        </nav>
    </header>

    <div class="hero">
        <div class="hero-content">
            <h2>Digital Mastery for a Connected World</h2>
            <p>Empowering teens to unleash their digital potential and positively impact 10 million lives.</p>
            <a href="#" onclick="redirect('curriculum.php')" class="cta-button">
                Explore Our Programs <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <div class="stats">
        <div class="stat-box fade-in">
            <i class="fas fa-users"></i>
            <h3>10M+</h3>
            <p>Lives Impacted</p>
        </div>
        <div class="stat-box fade-in">
            <i class="fas fa-graduation-cap"></i>
            <h3>5000+</h3>
            <p>Students Trained</p>
        </div>
        <div class="stat-box fade-in">
            <i class="fas fa-certificate"></i>
            <h3>100+</h3>
            <p>Courses Offered</p>
        </div>
        <div class="stat-box fade-in">
            <i class="fas fa-star"></i>
            <h3>4.9/5</h3>
            <p>Student Rating</p>
        </div>
    </div>

    <div class="features">
        <div class="features-header fade-in">
            <h2>Why Choose Rehan.Education?</h2>
            <p>Discover the key features that make us stand out</p>
        </div>
        <div class="features-grid">
            <div class="feature-box fade-in">
                <div class="feature-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>AI-Enabled Education</h3>
                <p>Learn with cutting-edge AI tools to stay ahead in the digital age. Our platform integrates the latest artificial intelligence technologies to enhance your learning experience.</p>
            </div>
            <div class="feature-box fade-in">
                <div class="feature-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Digital Skills Acquisition</h3>
                <p>Master essential digital skills for future success. From coding to digital marketing, we cover all aspects of the modern digital landscape.</p>
            </div>
            <div class="feature-box fade-in">
                <div class="feature-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Online Teaching Proficiency</h3>
                <p>Build your own online teaching career and achieve financial independence. Learn how to create, market, and sell your own courses.</p>
            </div>
        </div>
    </div>

    <div class="extra-features">
        <div class="features-header fade-in">
            <h2>Additional Benefits</h2>
            <p>More reasons to join our learning community</p>
        </div>
        <div class="extra-features-grid">
            <div class="extra-feature-card fade-in">
                <i class="fas fa-clock"></i>
                <h4>Flexible Learning</h4>
                <p>Study at your own pace, anytime, anywhere</p>
            </div>
            <div class="extra-feature-card fade-in">
                <i class="fas fa-certificate"></i>
                <h4>Certifications</h4>
                <p>Earn recognized certificates upon completion</p>
            </div>
            <div class="extra-feature-card fade-in">
                <i class="fas fa-hands-helping"></i>
                <h4>Mentorship</h4>
                <p>Get guidance from industry experts</p>
            </div>
            <div class="extra-feature-card fade-in">
                <i class="fas fa-users-cog"></i>
                <h4>Community Support</h4>
                <p>Join a thriving community of learners</p>
            </div>
            <div class="extra-feature-card fade-in">
                <i class="fas fa-project-diagram"></i>
                <h4>Real Projects</h4>
                <p>Work on practical, industry-relevant projects</p>
            </div>
            <div class="extra-feature-card fade-in">
                <i class="fas fa-briefcase"></i>
                <h4>Career Support</h4>
                <p>Get help with job placement and freelancing</p>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <h2>What Our Students Say</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card fade-in">
                <div class="stars">★★★★★</div>
                <p>"Rehan.Education transformed my life! I learned AI and digital marketing, and now I'm running my own successful online business."</p>
                <div class="author">- Ahmed Khan, Digital Entrepreneur</div>
            </div>
            <div class="testimonial-card fade-in">
                <div class="stars">★★★★★</div>
                <p>"The mentorship program is incredible. The facilitators are so supportive and knowledgeable. I highly recommend this platform!"</p>
                <div class="author">- Fatima Ali, Student</div>
            </div>
            <div class="testimonial-card fade-in">
                <div class="stars">★★★★★</div>
                <p>"Best investment in my education. The courses are practical, engaging, and have helped me land my dream job in tech!"</p>
                <div class="author">- Bilal Hussain, Software Developer</div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <h3>Get In Touch</h3>
            <div class="footer-links">
                <a href="tel:+447418359852"><i class="fas fa-phone"></i> +44 7418 359852</a>
                <a href="https://wa.me/447418359852"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                <a href="mailto:info@rehan.education"><i class="fas fa-envelope"></i> info@rehan.education</a>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/rehan33/" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com" target="_blank" title="Twitter/X">
                    <i class="fab fa-x-twitter"></i>
                </a>
                <a href="https://www.youtube.com/@rehanallahwala" target="_blank" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/rehanallahwala" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Rehan.Education Clone. All rights reserved. | Empowering Digital Excellence</p>
            </div>
        </div>
    </footer>
</body>
</html>
