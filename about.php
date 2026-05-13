<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!--Christine Muhimbisa-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Concrete - About Us</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-red: #D3212D;
            --brand-black: #0f0f0f;
            --concrete-grey: #f8f9fa;
            --white: #FFFFFF;
            --glass: rgba(255, 255, 255, 0.85);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            color: var(--brand-black);
            background-color: var(--concrete-grey);
            line-height: 1.6;
            overflow-x: hidden;
        }
        nav a, .nav-link {
            text-decoration: none;
            color: var(--brand-black);
            position: relative;
            padding-bottom: 4px;
            transition: color 0.3s ease;
        }
        nav a::after, .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0%;
            height: 3px;
            background: var(--brand-red);
            transition: width 0.35s ease;
        }
        nav a:hover::after, .nav-link:hover::after,
        nav a.active::after, .nav-link.active::after {
            width: 100%;
        }
        .bg-video-wrap {
            position: fixed;
            inset: 0;
            z-index: -2;
            overflow: hidden;
        }
        .bg-video-wrap video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(40%) brightness(0.9) opacity(0.08);
            transform: scale(1.1);
        }
        .video-hero {
            position: relative;
            height: 85vh;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 0 8%;
            overflow: hidden;
            background: #000;
        }
        .video-hero video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            opacity: 0.7;
        }
        .video-hero::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 2;
            background: linear-gradient(75deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
        }
        .hero-content { 
            position: relative; 
            z-index: 3; 
            max-width: 800px;
            color: var(--white); 
        }
        .hero-label { 
            background: var(--brand-red); 
            padding: 6px 15px; 
            font-size: 0.75rem; 
            font-weight: 800; 
            text-transform: uppercase; 
            letter-spacing: 2px;
            display: inline-block; 
            margin-bottom: 1.5rem; 
            border-radius: 2px;
        }
        .hero-title { 
            font-size: clamp(2.5rem, 6vw, 4.5rem); 
            font-weight: 800; 
            line-height: 1.1; 
            letter-spacing: -0.02em;
        }
        .glass-panel {
            background: var(--glass);
            backdrop-filter: blur(15px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
            padding: clamp(2rem, 5vw, 4rem);
            max-width: 1100px;
            margin: 4rem auto;
        }
        .glass-overlap { 
            margin-top: -100px; 
            position: relative; 
            z-index: 10; 
        }
        .section-heading { 
            font-size: 0.8rem; 
            font-weight: 800; 
            text-transform: uppercase; 
            color: var(--brand-red); 
            letter-spacing: 0.15em; 
            margin-bottom: 1rem; 
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .section-heading::before {
            content: '';
            width: 30px;
            height: 2px;
            background: var(--brand-red);
        }
        .section-title { 
            font-size: clamp(1.8rem, 4vw, 2.8rem); 
            font-weight: 800; 
            margin-bottom: 2rem; 
            color: var(--brand-black);
            line-height: 1.2;
        }
        .info-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2rem; 
            margin-top: 3rem; 
        }
        .info-card { 
            padding: 2rem; 
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.5);
            border-top: 5px solid var(--brand-red);
            transition: all 0.3s ease;
        }
        .info-card:hover {
            background: #fff;
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        }
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        .value-item {
            background: var(--brand-black);
            color: var(--white);
            padding: 3rem 2rem;
            border-radius: 24px;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(211, 33, 45, 0.3);
            position: relative;
            overflow: hidden;
        }
        .value-item:hover {
            transform: translateY(-10px);
            border-color: var(--brand-red);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            background: #282828; 
        }
        .value-icon {
            width: 50px;
            height: 50px;
            background: rgba(211, 33, 45, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--brand-red);
        }
        .value-item h3 { 
            font-size: 1.2rem; 
            font-weight: 800; 
            text-transform: uppercase; 
            margin-bottom: 0.8rem; 
            letter-spacing: 1px;
        }
        .value-item p {
            color: #aaa;
            font-size: 0.95rem;
        }
        .media-row { 
            display: grid; 
            grid-template-columns: 1fr 1.2fr; 
            gap: 4rem; 
            align-items: center; 
        }
        .media-box {
            position: relative; 
            border-radius: 30px; 
            overflow: hidden;
            aspect-ratio: 16/10;
            box-shadow: 0 40px 80px -15px rgba(0,0,0,0.3);
        }
        .media-box video { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
        }
        nav a:has(img)::after, .logo-link::after {
            display: none !important;
        }
        footer { text-align: center; padding: 40px; color: #777; font-size: 0.8rem; letter-spacing: 1px; }
        @media (max-width: 992px) {
            .media-row { grid-template-columns: 1fr; gap: 2rem; }
            .hero-title { font-size: 3rem; }
            .glass-overlap { margin-top: -50px; }
        }
    </style>
</head>
<body>
    <div class="bg-video-wrap">
        <video autoplay muted loop playsinline poster="construct b.mp4">
            <source src="construct b.mp4" type="video/mp4">
        </video>
    </div>

    <?php include 'nav.php'; ?>

    <section class="video-hero">
        <video autoplay muted loop playsinline poster="construct d.mp4">
            <source src="construct d.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <div class="hero-label">Established 2021</div>
            <h1 class="hero-title">Our Backstory &<br>And Answer to a Call.</h1>
        </div>
    </section>
    <section class="glass-panel glass-overlap">
        <div class="section-heading">The Journey</div>
        <h2 class="section-title">From a Shared Vision<br>to Industry Reality</h2>
        <div style="font-size: 1.1rem; color: #444; max-width: 850px;">
            <p style="margin-bottom: 20px;">In <strong>October 2019</strong>, five couples from the Watoto Church Marrieds’ cell group envisioned a commercial venture that would empower them financially while strengthening their bond. Among them, the Kyewas—experts in landscaping—identified a critical need for high-quality, consistent concrete products.</p>
            <p>This spark led to the birth of <strong>Infinite Concrete Investments Ltd</strong>. By <strong>August 2021</strong>, production officially launched at our Matugga site. Today, we have expanded to Kiti and Mbarara, providing the infrastructure that builds Uganda.</p>
        </div>
        <div class="info-grid">
            <div class="info-card">
                <div class="section-heading">Our Vision</div>
                <p style="font-weight: 600; font-size: 1.2rem;">To be the preferred home of quality concrete solutions in Uganda with a global reach.</p>
            </div>
            <div class="info-card">
                <div class="section-heading">Our Mission</div>
                <p style="font-weight: 600; font-size: 1.2rem;">To provide excellent concrete solutions that exceed the customers’ expectations.</p>
            </div>
        </div>
    </section>
    <section class="glass-panel">
        <div class="media-row">
            <div class="media-text">
                <div class="section-heading">Precision in Motion</div>
                <h2 class="section-title">Excellence in Production</h2>
                <p style="font-size: 1.1rem; color: #555;">Our automated batching plants and skilled production teams work in unison to ensure consistency across thousands of units. Every block represents our commitment to durability.</p>
            </div>
            <div class="media-box">
                <video muted loop autoplay playsinline poster="construct c.mp4">
                    <source src="construct c.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    <section class="glass-panel" style="margin-bottom: 8rem;">
        <div class="section-heading">Our Foundation</div>
        <h2 class="section-title">Core Values</h2>
        <div class="values-grid">
            <div class="value-item">
                <div class="value-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3>Integrity</h3>
                <p>Doing what is right, every time, with transparency.</p>
            </div>
            <div class="value-item">
                <div class="value-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3>Customer Centric</h3>
                <p>Your vision is our priority. We build for you.</p>
            </div>
            <div class="value-item">
                <div class="value-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                </div>
                <h3>Team Work</h3>
                <p>Five couples, one vision. Success is built together.</p>
            </div>
            <div class="value-item">
                <div class="value-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                </div>
                <h3>Safety</h3>
                <p>Prioritizing the wellbeing of our team and structures.</p>
            </div>
            <div class="value-item">
                <div class="value-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                </div>
                <h3>Innovation</h3>
                <p>Constantly evolving our designs for better results.</p>
            </div>
            <div class="value-item">
                <div class="value-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
                <h3>Excellence</h3>
                <p>Uncompromising quality in every block and paver.</p>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>

</body>
</html>