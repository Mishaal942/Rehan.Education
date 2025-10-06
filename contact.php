<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - Rehan.Education Clone</title>
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
    line-height: 1.6;
    overflow-x: hidden;
    min-height: 100vh;
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
    font-size: 2.5em;
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
.hero-section {
    text-align: center;
    padding: 60px 20px 40px;
    color: #fff;
}

.hero-section h2 {
    font-size: 2.5em;
    margin-bottom: 15px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    animation: fadeInUp 0.8s ease;
}

.hero-section p {
    font-size: 1.2em;
    max-width: 700px;
    margin: 0 auto;
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

/* Main Container */
.contact-container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

/* Contact Form */
.contact-form-section {
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    animation: slideInLeft 0.6s ease;
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.contact-form-section h3 {
    color: #0056b3;
    font-size: 2em;
    margin-bottom: 10px;
}

.contact-form-section .subtitle {
    color: #666;
    margin-bottom: 30px;
    font-size: 1.1em;
}

.form-group {
    margin-bottom: 25px;
    position: relative;
}

.form-group label {
    display: block;
    color: #333;
    font-weight: bold;
    margin-bottom: 8px;
    font-size: 1.05em;
}

.form-group i {
    position: absolute;
    left: 15px;
    top: 46px;
    color: #667eea;
    font-size: 1.2em;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 15px 15px 15px 45px;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    font-size: 1em;
    font-family: inherit;
    transition: all 0.3s ease;
    background: #f9f9f9;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    outline: none;
    border-color: #667eea;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
    padding-top: 15px;
}

.submit-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 15px 40px;
    border: none;
    border-radius: 30px;
    font-size: 1.1em;
    font-weight: bold;
    cursor: pointer;
    width: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
}

.submit-btn i {
    margin-left: 10px;
}

/* Contact Info Section */
.contact-info-section {
    animation: slideInRight 0.6s ease;
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.info-card {
    background: #fff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    margin-bottom: 30px;
}

.info-card h3 {
    color: #0056b3;
    font-size: 1.8em;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-detail {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    border-radius: 15px;
    margin-bottom: 15px;
    transition: all 0.3s ease;
    border-left: 4px solid #667eea;
}

.contact-detail:hover {
    transform: translateX(10px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.contact-detail i {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;
    color: #fff;
    flex-shrink: 0;
    box-shadow: 0 4px 10px rgba(102, 126, 234, 0.3);
}

.contact-detail-text h4 {
    color: #0056b3;
    margin-bottom: 5px;
    font-size: 1.2em;
}

.contact-detail-text p {
    color: #666;
    margin: 0;
}

.contact-detail-text a {
    color: #667eea;
    text-decoration: none;
    font-weight: bold;
}

.contact-detail-text a:hover {
    text-decoration: underline;
}

/* Social Media Section */
.social-section {
    background: #fff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    text-align: center;
}

.social-section h3 {
    color: #0056b3;
    font-size: 1.8em;
    margin-bottom: 20px;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-decoration: none;
    color: #fff;
    font-size: 1.8em;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.social-icon.facebook {
    background: #1877f2;
}

.social-icon.whatsapp {
    background: #25d366;
}

.social-icon.instagram {
    background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
}

.social-icon.youtube {
    background: #ff0000;
}

.social-icon.linkedin {
    background: #0077b5;
}

.social-icon:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

/* Map Section */
.map-section {
    background: #fff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    margin-top: 30px;
}

.map-section h3 {
    color: #0056b3;
    font-size: 1.8em;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.map-placeholder {
    width: 100%;
    height: 300px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 1.2em;
    text-align: center;
}

.map-placeholder i {
    font-size: 3em;
    margin-bottom: 15px;
}

/* FAQ Section */
.faq-section {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
}

.faq-container {
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.faq-container h3 {
    color: #0056b3;
    font-size: 2em;
    margin-bottom: 30px;
    text-align: center;
}

.faq-item {
    margin-bottom: 20px;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    border-color: #667eea;
}

.faq-question {
    padding: 20px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: bold;
    color: #0056b3;
}

.faq-question:hover {
    background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
}

.faq-answer {
    padding: 20px;
    color: #666;
    line-height: 1.8;
}

/* Working Hours */
.hours-section {
    background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    color: #fff;
    padding: 40px;
    border-radius: 20px;
    margin-top: 30px;
    text-align: center;
}

.hours-section h4 {
    font-size: 1.5em;
    margin-bottom: 20px;
}

.hours-section p {
    font-size: 1.1em;
    margin: 10px 0;
}

/* Responsive Design */
@media (max-width: 968px) {
    .contact-container {
        grid-template-columns: 1fr;
    }
    
    header h1 {
        font-size: 1.8em;
    }
    
    .hero-section h2 {
        font-size: 2em;
    }
    
    nav {
        flex-direction: column;
        align-items: center;
    }
}

@media (max-width: 768px) {
    .contact-form-section,
    .info-card,
    .social-section {
        padding: 25px;
    }
    
    .social-icons {
        gap: 15px;
    }
    
    .social-icon {
        width: 50px;
        height: 50px;
        font-size: 1.5em;
    }
}

/* Success Message */
.success-message {
    background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    color: #fff;
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: none;
    animation: slideDown 0.5s ease;
}

.success-message.show {
    display: block;
}
</style>
<script>
function redirect(page) {
    window.location.href = page;
}

// Form submission animation (optional)
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const btn = document.querySelector('.submit-btn');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        });
    }
});
</script>
</head>
<body>
<header>
    <h1>📞 Contact Us</h1>
    <nav>
        <a href="#" onclick="redirect('index.php')"><i class="fas fa-home"></i> Home</a>
        <a href="#" onclick="redirect('curriculum.php')"><i class="fas fa-book"></i> Curriculum</a>
        <a href="#" onclick="redirect('facilitators.php')"><i class="fas fa-users"></i> Facilitators</a>
    </nav>
</header>

<div class="hero-section">
    <h2>Get In Touch With Us</h2>
    <p>Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
</div>

<div class="contact-container">
    <!-- Contact Form -->
    <div class="contact-form-section">
        <h3><i class="fas fa-envelope-open-text"></i> Send Us A Message</h3>
        <p class="subtitle">Fill out the form below and we'll get back to you within 24 hours</p>
        
        <form action="process_contact.php" method="post" class="contact-form">
            <div class="form-group">
                <label for="name"><i class="fas fa-user"></i> Your Name</label>
                <i class="fas fa-user"></i>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
            </div>
            
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                <i class="fas fa-phone"></i>
                <input type="tel" id="phone" name="phone" placeholder="+92 XXX XXXXXXX">
            </div>
            
            <div class="form-group">
                <label for="subject"><i class="fas fa-tag"></i> Subject</label>
                <i class="fas fa-tag"></i>
                <select id="subject" name="subject" required>
                    <option value="">Select a subject</option>
                    <option value="admission">Admission Inquiry</option>
                    <option value="curriculum">Curriculum Questions</option>
                    <option value="fees">Fees & Payment</option>
                    <option value="technical">Technical Support</option>
                    <option value="general">General Inquiry</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="message"><i class="fas fa-comment-dots"></i> Your Message</label>
                <i class="fas fa-comment-dots"></i>
                <textarea id="message" name="message" placeholder="Tell us more about your inquiry..." required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">
                Send Message <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>

    <!-- Contact Information -->
    <div class="contact-info-section">
        <div class="info-card">
            <h3><i class="fas fa-address-book"></i> Contact Information</h3>
            
            <div class="contact-detail">
                <i class="fas fa-phone-alt"></i>
                <div class="contact-detail-text">
                    <h4>Phone / Call</h4>
                    <p><a href="tel:+447418359852">+44 7418 359852</a></p>
                </div>
            </div>
            
            <div class="contact-detail">
                <i class="fab fa-whatsapp"></i>
                <div class="contact-detail-text">
                    <h4>WhatsApp</h4>
                    <p><a href="https://wa.me/447418359852" target="_blank">+44 7418 359852</a></p>
                    <p style="font-size: 0.9em; color: #999;">Click to chat instantly</p>
                </div>
            </div>
            
            <div class="contact-detail">
                <i class="fas fa-envelope"></i>
                <div class="contact-detail-text">
                    <h4>Email</h4>
                    <p><a href="mailto:info@rehan.education">info@rehan.education</a></p>
                    <p><a href="mailto:support@rehan.education">support@rehan.education</a></p>
                </div>
            </div>
            
            <div class="contact-detail">
                <i class="fas fa-map-marker-alt"></i>
                <div class="contact-detail-text">
                    <h4>Location</h4>
                    <p>Rehan School Online Academy</p>
                    <p>Karachi, Pakistan</p>
                </div>
            </div>
        </div>

        <div class="hours-section">
            <h4><i class="fas fa-clock"></i> Working Hours</h4>
            <p><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</p>
            <p><strong>Saturday:</strong> 10:00 AM - 4:00 PM</p>
            <p><strong>Sunday:</strong> Closed</p>
            <p style="margin-top: 15px; font-size: 0.95em;">
                <i class="fas fa-info-circle"></i> We respond to all inquiries within 24 hours
            </p>
        </div>

        <div class="social-section">
            <h3><i class="fas fa-share-alt"></i> Connect With Us</h3>
            <p style="color: #666; margin-bottom: 20px;">Follow us on social media for updates</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/rehan33/" target="_blank" class="social-icon facebook" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://wa.me/447418359852" target="_blank" class="social-icon whatsapp" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon instagram" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/@rehanallahwala" target="_blank" class="social-icon youtube" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/rehanallahwala" target="_blank" class="social-icon linkedin" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="map-section">
            <h3><i class="fas fa-map-marked-alt"></i> Find Us</h3>
            <div class="map-placeholder">
                <div>
                    <i class="fas fa-map-pin"></i>
                    <p>Karachi, Pakistan</p>
                    <p style="font-size: 0.9em;">Online Academy - Accessible Worldwide</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-section">
    <div class="faq-container">
        <h3><i class="fas fa-question-circle"></i> Frequently Asked Questions</h3>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>How do I enroll in a course?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                You can enroll by filling out the contact form above or directly contacting us via WhatsApp at +44 7418 359852. Our team will guide you through the enrollment process.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>What are the course fees?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Course fees vary depending on the level and program. Please contact us for detailed pricing information and available payment plans.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Do you offer online classes?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Yes! We are an online academy accessible worldwide. All our classes are conducted online with live interaction and recorded sessions for review.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>What age groups do you teach?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                We teach students from 5th grade to 13th grade (ages 10-18+). Our curriculum is designed to progress with each level.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>How long does it take to get a response?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                We typically respond to all inquiries within 24 hours during working days. For urgent matters, please contact us via WhatsApp for faster response.
            </div>
        </div>
    </div>
</div>

</body>
</html>
