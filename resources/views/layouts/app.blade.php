<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Backend Developer Portfolio - 4 years of experience in PHP, Laravel, Node.js, and more">
    
    <title>GRISHA KHACHATRYAN - Backend Developer Portfolio</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-gradient: linear-gradient(135deg, #0a1628 0%, #020617 100%);
            --secondary-gradient: linear-gradient(135deg, #030712 0%, #000000 100%);
            --accent-gradient: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            --dark-gradient: linear-gradient(135deg, #000000 0%, #020617 100%);
            
            /* Light theme colors */
            --light-primary: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            --light-bg: #f8fafc;
            --light-text: #1e293b;
            --light-card: rgba(255, 255, 255, 0.9);
            
            /* Dark theme colors */
            --dark-primary: linear-gradient(135deg, #0a1628 0%, #000000 100%);
            --dark-bg: #000000;
            --dark-text: #f1f5f9;
            --dark-card: rgba(255, 255, 255, 0.03);
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #f1f5f9;
            background: var(--dark-bg);
            overflow-x: hidden;
            position: relative;
            transition: background 0.3s ease, color 0.3s ease;
        }
        
        body.light-theme {
            background: var(--light-bg);
            color: var(--light-text);
        }
        
        body.dark-theme {
            background: var(--dark-bg);
            color: var(--dark-text);
        }
        
        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }
        
        .animated-bg::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(10, 22, 40, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            top: -250px;
            left: -250px;
            animation: float 20s ease-in-out infinite;
        }
        
        .animated-bg::after {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(3, 7, 18, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -300px;
            right: -300px;
            animation: float 25s ease-in-out infinite reverse;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(50px, 50px) scale(1.1); }
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .portfolio-wrapper {
            position: relative;
            z-index: 1;
        }
        
        /* Header with Hero Section */
        header {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
            background: var(--primary-gradient);
        }
        
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 1s ease-out;
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
        
        .name-title {
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: 0.3em;
            margin-bottom: 1.5rem;
            opacity: 0.9;
            text-transform: uppercase;
            animation: fadeInUp 1s ease-out 0.1s both;
            color: rgba(255, 255, 255, 0.95);
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            display: inline-block;
        }
        
        .name-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background: rgba(255, 255, 255, 0.5);
            animation: expandWidth 0.8s ease-out 0.5s both;
        }
        
        header h1 {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
            background-size: 200% 200%;
        }
        
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        header p {
            font-size: 1.5rem;
            font-weight: 400;
            opacity: 0.95;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }
        
        .contact-links {
            display: flex;
            gap: 2rem;
            justify-content: center;
            align-items: center;
            margin-top: 2.5rem;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 0.4s both;
        }
        
        .contact-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            font-size: 1rem;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .contact-link svg {
            width: 24px;
            height: 24px;
            transition: transform 0.3s ease;
        }
        
        .contact-link:hover {
            transform: translateY(-3px) scale(1.05);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 255, 255, 0.4);
        }
        
        .contact-link:hover svg {
            transform: scale(1.2) rotate(5deg);
        }
        
        .contact-link span {
            position: relative;
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }
        
        .scroll-indicator::before {
            content: '↓';
            font-size: 2rem;
            color: white;
            opacity: 0.7;
        }
        
        /* Sections */
        section {
            padding: 6rem 0;
            position: relative;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        section:nth-child(even) {
            background: rgba(3, 7, 18, 0.5);
        }
        
        .section-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
            padding-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff 0%, #cbd5e1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--accent-gradient);
            border-radius: 2px;
            animation: expandWidth 0.8s ease-out;
        }
        
        @keyframes expandWidth {
            from { width: 0; }
            to { width: 100px; }
        }
        
        /* About Section */
        .about-content {
            max-width: 900px;
            margin: 0 auto;
            font-size: 1.25rem;
            line-height: 2;
            color: #f1f5f9;
            text-align: center;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .about-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
        }
        
        /* Technologies Section */
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .tech-category {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .tech-category::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .tech-category:hover::before {
            left: 100%;
        }
        
        .tech-category:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
            border-color: rgba(30, 41, 59, 0.3);
        }
        
        .tech-category h3 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #cbd5e1 0%, #94a3b8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 1rem;
        }
        
        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .tech-tag {
            background: var(--primary-gradient);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }
        
        .tech-tag::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .tech-tag:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .tech-tag:hover {
            transform: scale(1.1) rotate(2deg);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
        }
        
        .tech-tag span {
            position: relative;
            z-index: 1;
        }
        
        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }
        
        .project-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--accent-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .project-card:hover::before {
            transform: scaleX(1);
        }
        
        .project-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(79, 172, 254, 0.4);
            border-color: rgba(79, 172, 254, 0.5);
        }
        
        .project-card h3 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .project-card p {
            color: #f1f5f9;
            line-height: 1.8;
            font-size: 1.05rem;
        }
        
        /* Experience Section */
        .experience-content {
            max-width: 900px;
            margin: 3rem auto 0;
            font-size: 1.25rem;
            line-height: 2;
            color: #f1f5f9;
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 3rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }
        
        .experience-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(245, 87, 108, 0.3);
        }
        
        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            color: #f1f5f9;
            text-align: center;
            padding: 3rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-items: center;
        }
        
        .footer-contact {
            display: flex;
            gap: 2rem;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .footer-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #f1f5f9;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .footer-link svg {
            width: 20px;
            height: 20px;
            transition: transform 0.3s ease;
        }
        
        .footer-link:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }
        
        .footer-link:hover svg {
            transform: scale(1.2);
        }
        
        footer p {
            margin: 0;
            opacity: 0.8;
        }
        
        /* Theme Toggle Button */
        .theme-toggle {
            position: fixed;
            top: 30px;
            right: 30px;
            z-index: 1000;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-gradient);
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            backdrop-filter: blur(10px);
        }
        
        .theme-toggle:hover {
            transform: scale(1.1) rotate(180deg);
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.6);
        }
        
        .theme-toggle svg {
            width: 28px;
            height: 28px;
            transition: transform 0.3s ease;
        }
        
        body.light-theme .theme-toggle {
            background: var(--light-primary);
        }
        
        body.light-theme section:nth-child(even) {
            background: rgba(241, 245, 249, 0.5);
        }
        
        body.light-theme .about-content,
        body.light-theme .tech-category,
        body.light-theme .project-card,
        body.light-theme .experience-content {
            background: var(--light-card);
            color: var(--light-text);
            border-color: rgba(0, 0, 0, 0.1);
        }
        
        body.light-theme .section-title {
            background: linear-gradient(135deg, #1e293b 0%, #1e40af 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        body.light-theme .tech-category h3 {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        body.light-theme .project-card h3 {
            background: var(--secondary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        body.light-theme .about-content p,
        body.light-theme .project-card p,
        body.light-theme .experience-content p {
            color: #475569;
        }
        
        /* Floating Particles Animation */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(10, 22, 40, 0.4);
            border-radius: 50%;
            animation: float-particle 15s infinite;
        }
        
        @keyframes float-particle {
            0% {
                transform: translateY(100vh) translateX(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px) rotate(360deg);
                opacity: 0;
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }
            
            header p {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .contact-links {
                flex-direction: column;
                gap: 1rem;
            }
            
            .contact-link {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .footer-contact {
                flex-direction: column;
                gap: 1rem;
            }
            
            .tech-grid,
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .about-content,
            .experience-content {
                padding: 2rem;
                font-size: 1.1rem;
            }
            
            .theme-toggle {
                top: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
            
            .theme-toggle svg {
                width: 24px;
                height: 24px;
            }
        }
    </style>
</head>
<body class="dark-theme">
    <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
        <svg id="sunIcon" style="display: none;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
        <svg id="moonIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
        </svg>
    </button>
    <div class="animated-bg"></div>
    <div class="particles" id="particles"></div>
    <div class="portfolio-wrapper">
        @yield('content')
    </div>
    
    <script>
        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        // Theme Toggle Functionality
        const themeToggle = document.getElementById('themeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const body = document.body;
        
        // Get saved theme or default to dark
        const savedTheme = localStorage.getItem('theme') || 'dark';
        if (savedTheme === 'light') {
            body.classList.remove('dark-theme');
            body.classList.add('light-theme');
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';
        } else {
            body.classList.remove('light-theme');
            body.classList.add('dark-theme');
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
        }
        
        themeToggle.addEventListener('click', () => {
            if (body.classList.contains('dark-theme')) {
                body.classList.remove('dark-theme');
                body.classList.add('light-theme');
                localStorage.setItem('theme', 'light');
                sunIcon.style.display = 'block';
                moonIcon.style.display = 'none';
            } else {
                body.classList.remove('light-theme');
                body.classList.add('dark-theme');
                localStorage.setItem('theme', 'dark');
                sunIcon.style.display = 'none';
                moonIcon.style.display = 'block';
            }
        });
        
        document.addEventListener('DOMContentLoaded', () => {
            // Observe all sections
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
            
            // Create floating particles
            const particlesContainer = document.getElementById('particles');
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                particlesContainer.appendChild(particle);
            }
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
