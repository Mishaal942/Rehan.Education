<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Curriculum - Rehan.Education Clone</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
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
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 80px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
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
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
}

.hero-content {
    position: relative;
    z-index: 1;
    max-width: 1000px;
    margin: 0 auto;
}

.hero-section h2 {
    font-size: 2.8em;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    animation: fadeInUp 0.8s ease;
}

.hero-section p {
    font-size: 1.2em;
    line-height: 1.8;
    margin-bottom: 15px;
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

/* Key Learnings Section */
.key-learnings {
    background: #fff;
    padding: 60px 40px;
    box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
}

.key-learnings-container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

.key-learnings h3 {
    color: #0056b3;
    font-size: 2.2em;
    margin-bottom: 30px;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.skill-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 15px 20px;
    border-radius: 30px;
    font-weight: bold;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    transition: all 0.3s ease;
    cursor: pointer;
}

.skill-badge:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
}

/* Mission Statement */
.mission-statement {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: #fff;
    padding: 50px 40px;
    text-align: center;
    margin: 40px 0;
}

.mission-statement h3 {
    font-size: 2em;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

.mission-statement p {
    font-size: 1.3em;
    max-width: 900px;
    margin: 0 auto;
    line-height: 1.8;
}

/* Grade Levels Container */
.curriculum-container {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 40px;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    color: #0056b3;
    font-size: 2.5em;
    margin-bottom: 15px;
}

.section-header .subtitle {
    color: #666;
    font-size: 1.2em;
}

/* Timeline Design */
.timeline {
    position: relative;
    padding: 20px 0;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
    border-radius: 2px;
}

.grade-level {
    background: #fff;
    padding: 35px;
    margin: 40px 0;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    position: relative;
    transition: all 0.4s ease;
    animation: fadeIn 0.6s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.grade-level:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.25);
}

.grade-level::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 30px;
    height: 30px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    box-shadow: 0 0 0 8px #fff, 0 0 0 12px #667eea;
    z-index: 10;
}

.grade-level:nth-child(odd) {
    margin-left: 0;
    margin-right: 50%;
    padding-right: 60px;
}

.grade-level:nth-child(even) {
    margin-right: 0;
    margin-left: 50%;
    padding-left: 60px;
}

.grade-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.level-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2em;
    color: #fff;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    flex-shrink: 0;
}

.grade-level h3 {
    color: #0056b3;
    font-size: 1.8em;
    margin: 0;
}

.grade-level p {
    color: #555;
    font-size: 1.1em;
    line-height: 1.8;
    margin-top: 15px;
}

.highlights {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 20px;
}

.highlight-tag {
    background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
    color: #667eea;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.95em;
    font-weight: bold;
    border: 2px solid #667eea30;
}

.earning-badge {
    display: inline-block;
    background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    color: #fff;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: bold;
    margin-top: 15px;
    box-shadow: 0 4px 15px rgba(17, 153, 142, 0.3);
}

.startup-badge {
    display: inline-block;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: #fff;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: bold;
    margin-top: 15px;
    box-shadow: 0 4px 15px rgba(245, 87, 108, 0.3);
}

/* Features Grid */
.features-showcase {
    background: #fff;
    padding: 80px 40px;
    margin: 40px 0;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 40px auto 0;
}

.feature-card {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    transition: all 0.3s ease;
    border-left: 5px solid #667eea;
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

.feature-card i {
    font-size: 3em;
    color: #667eea;
    margin-bottom: 15px;
}

.feature-card h4 {
    color: #0056b3;
    font-size: 1.4em;
    margin-bottom: 10px;
}

.feature-card p {
    color: #666;
    line-height: 1.6;
}

/* Call to Action */
.cta-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 80px 40px;
    text-align: center;
}

.cta-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.cta-section p {
    font-size: 1.3em;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    padding: 15px 40px;
    background: #fff;
    color: #667eea;
    text-decoration: none;
    border-radius: 30px;
    font-weight: bold;
    font-size: 1.2em;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    transition: all 0.3s ease;
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    background: #f0f0f0;
}

/* Responsive Design */
@media (max-width: 968px) {
    .timeline::before {
        left: 30px;
    }

    .grade-level:nth-child(odd),
    .grade-level:nth-child(even) {
        margin-left: 60px;
        margin-right: 0;
        padding-left: 40px;
        padding-right: 35px;
    }

    .grade-level::before {
        left: -45px;
        transform: translateY(-50%);
    }
}

@media (max-width: 768px) {
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

    .skills-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }

    .grade-level h3 {
        font-size: 1.4em;
    }

    .timeline::before {
        left: 20px;
    }

    .grade-level:nth-child(odd),
    .grade-level:nth-child(even) {
        margin-left: 50px;
        padding-left: 30px;
    }

    .grade-level::before {
        left: -35px;
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
    <h1>📚 Our Curriculum</h1>
    <nav>
        <a href="#" onclick="redirect('index.php')"><i class="fas fa-home"></i> Home</a>
        <a href="#" onclick="redirect('facilitators.php')"><i class="fas fa-users"></i> Facilitators</a>
        <a href="#" onclick="redirect('contact.php')"><i class="fas fa-envelope"></i> Contact Us</a>
    </nav>
</header>

<div class="hero-section">
    <div class="hero-content">
        <h2>Experience-Based Learning</h2>
        <p>We are educating students based on real-life experiences of travel, business, and networking. This curriculum evolves yearly with new technologies and focuses on becoming global citizens.</p>
        <p>See yourself as one in 8 billion unique creations, valuing everyone equally.</p>
    </div>
</div>

<div class="mission-statement">
    <h3><i class="fas fa-bullseye"></i> Our Core Mission</h3>
    <p>To make a positive impact on <strong>10 MILLION</strong> human beings through education, empowerment, and innovation!</p>
</div>

<div class="key-learnings">
    <div class="key-learnings-container">
        <h3><i class="fas fa-star"></i> Key Learnings Across All Levels</h3>
        <p style="color: #666; font-size: 1.1em; margin-bottom: 20px;">Essential skills that help students achieve their life mission</p>
        <div class="skills-grid">
            <div class="skill-badge"><i class="fas fa-comments"></i> Communication</div>
            <div class="skill-badge"><i class="fas fa-handshake"></i> Collaboration</div>
            <div class="skill-badge"><i class="fas fa-heart"></i> Honesty</div>
            <div class="skill-badge"><i class="fas fa-hands-helping"></i> Modesty</div>
            <div class="skill-badge"><i class="fas fa-om"></i> Meditation</div>
            <div class="skill-badge"><i class="fas fa-language"></i> Languages</div>
            <div class="skill-badge"><i class="fas fa-network-wired"></i> Networks</div>
            <div class="skill-badge"><i class="fas fa-user-friends"></i> Friendship</div>
            <div class="skill-badge"><i class="fas fa-lightbulb"></i> Problem-Solving</div>
            <div class="skill-badge"><i class="fas fa-graduation-cap"></i> How to Learn</div>
            <div class="skill-badge"><i class="fas fa-laptop-code"></i> Technology</div>
        </div>
    </div>
</div>

<div class="curriculum-container">
    <div class="section-header">
        <h2>Learning Journey: Grade by Grade</h2>
        <p class="subtitle">A progressive pathway to digital mastery and entrepreneurship</p>
    </div>

    <div class="timeline">
        <div class="grade-level">
            <div class="grade-header">
                <div class="level-icon"><i class="fas fa-seedling"></i></div>
                <h3>5th Grade – Level One</h3>
            </div>
            <p>Foundation building with essential digital technologies and personal development skills.</p>
            <div class="highlights">
                <span class="highlight-tag">Graphic Design</span>
                <span class="highlight-tag">ChatGPT & AI</span>
                <span class="highlight-tag">Interview Skills</span>
                <span class="highlight-tag">Video Making</span>
                <span class="highlight-tag">Learning to Learn</span>
                <span class="highlight-tag">Annie Conversations</span>
                <span class="highlight-tag">Yoga & Meditation</span>
                <span class="highlight-tag">Ethics</span>
                <span class="highlight-tag">TEDx</span>
            </div>
        </div>

        <div class="grade-level">
            <div class="grade-header">
                <div class="level-icon"><i class="fas fa-rocket"></i></div>
                <h3>6th Grade – Level Two</h3>
            </div>
            <p>Discovery of life mission and beginning of professional journey with first earnings.</p>
            <div class="highlights">
                <span class="highlight-tag">All Level One Skills</span>
                <span class="highlight-tag">Life Mission (Wala)</span>
                <span class="highlight-tag">TEDx Talks</span>
                <span class="highlight-tag">Networking</span>
                <span class="highlight-tag">Speaker Interviews</span>
                <span class="highlight-tag">Freelancing Start</span>
            </div>
            <div class="earning-badge"><i class="fas fa-dollar-sign"></i> Target: $100/month via Freelancing</div>
        </div>

        <div class="grade-level">
            <div class="grade-header">
                <div class="level-icon"><i class="fas fa-chart-line"></i></div>
                <h3>7th Grade – Level Three</h3>
            </div>
            <p>Scaling up professional skills and tripling monthly earnings through enhanced freelancing.</p>
            <div class="highlights">
                <span class="highlight-tag">All Level Two Skills</span>
                <span class="highlight-tag">Advanced Freelancing</span>
                <span class="highlight-tag">Client Management</span>
                <span class="highlight-tag">Portfolio Building</span>
            </div>
            <div class="earning-badge"><i class="fas fa-dollar-sign"></i> Target: $300/month</div>
        </div>

        <div class="grade-level">
            <div class="grade-header">
                <div class="level-icon"><i class="fas fa-business-time"></i></div>
                <h3>8th Grade – Level Four</h3>
            </div>
            <p>Entrepreneurship begins! Start building a startup related to your Wala (life mission).</p>
            <div class="highlights">
                <span class="highlight-tag">All Level Three Skills</span>
                <span class="highlight-tag">Startup Launch</span>
                <span class="highlight-tag">Business Planning</span>
                <span class="highlight-tag">Market Research</span>
                <span class="highlight-tag">Product Development</span>
            </div>
            <div class="startup-badge"><i class="fas fa-trophy"></i> 4-Year Journey: Grow Startup to $1M by 12th Grade</div>
        </div>

        <div class="grade-level">
            <div class="grade-header">
                <div class="level-icon"><i class="fas fa-crown"></i></div>
                <h3>12th Grade – Level Five</h3>
            </div>
            <p>Mastery level with advanced skill-building and real-world application of all learned concepts.</p>
            <div class="highlights">
                <span class="highlight-tag">All Previous Skills</span>
                <span class="highlight-tag">Advanced Technologies</span>
                <span class="highlight-tag">Leadership</span>
                <span class="highlight-tag">Startup Scaling</span>
                <span class="highlight-tag">Real-World Applications</span>
            </div>
            <div class="startup-badge"><i class="fas fa-star"></i> Ready to Sell Startup or Continue Growing</div>
        </div>

        <div class="grade-level">
            <div class="grade-header">
                <div class="level-icon"><i class="fas fa-certificate"></i></div>
                <h3>13th Grade – Level Six</h3>
            </div>
            <p>Final preparation for formal certifications and transition to higher education or career.</p>
            <div class="highlights">
                <span class="highlight-tag">GED Preparation</span>
                <span class="highlight-tag">Matric Exam</span>
                <span class="highlight-tag">Career Counseling</span>
                <span class="highlight-tag">University Prep</span>
            </div>
            <div class="earning-badge"><i class="fas fa-graduation-cap"></i> Pass with Flying Colors!</div>
        </div>
    </div>
</div>

<div class="features-showcase">
    <div class="section-header">
        <h2>What Makes Our Curriculum Unique?</h2>
    </div>
    <div class="features-grid">
        <div class="feature-card">
            <i class="fas fa-globe"></i>
            <h4>Global Citizenship</h4>
            <p>Learn to see yourself as one in 8 billion, valuing diversity and equality</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-sync-alt"></i>
            <h4>Evolving Content</h4>
            <p>Curriculum updates yearly with new technologies and trends</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-suitcase"></i>
            <h4>Real Experience</h4>
            <p>Based on actual travel, business, and networking experiences</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-hand-holding-heart"></i>
            <h4>Impact Focused</h4>
            <p>Mission to positively impact 10 million lives</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-user-graduate"></i>
            <h4>Life Mission</h4>
            <p>Every student discovers and pursues their unique "Wala"</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-coins"></i>
            <h4>Early Earnings</h4>
            <p>Students start earning from 6th grade onwards</p>
        </div>
    </div>
</div>

<div class="cta-section">
    <h2>Ready to Start Your Journey?</h2>
    <p>Join thousands of students already making a difference!</p>
    <a href="#" onclick="redirect('contact.php')" class="cta-button">
        <i class="fas fa-paper-plane"></i> Enroll Now
    </a>
</div>

</body>
</html>
