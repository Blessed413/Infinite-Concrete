<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!--Christine Muhimbisa-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Concrete - Home</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --brand-red: #ef233c; 
            --brand-red-hover: #d90429;
            --brand-black: #000000;
            --concrete-grey: #F4F4F4;
            --white: #FFFFFF;
            --bg-dark: #0a0a0a;
            --text-gray: #a1a1aa;
            --border: rgba(255, 255, 255, 0.1);
            --glass: rgba(10, 10, 10, 0.9);
        }
        body { 
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--concrete-grey); 
            color: var(--brand-black); 
            line-height: 1.6;
            padding-top: 80px;
        }
        nav { 
            padding: 0 5%; 
            box-sizing: border-box;
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
        nav a:has(img)::after, .logo-link::after {
            display: none !important;
        }
        .slider {
            height: 550px;
            position: relative;
            overflow: hidden; 
        }
        .slide { 
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 1s ease-in-out, visibility 1s; 
        }
        .slide.active { 
            opacity: 1; 
            visibility: visible;
        }
        .slide img { width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(50%); 
        }
        .motto-container { 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
            text-align: center;
            color: var(--white);
            width: 80%; 
        }
        .motto-main {
            display: block; font-size: 3.5rem; font-weight: 800; text-transform: uppercase;
            text-shadow: 2px 2px 15px rgba(0,0,0,0.7);
        }
        .motto-tagline {
            font-family: 'Playfair Display', serif; font-style: italic; font-size: 1.8rem;
            color: var(--concrete-grey); display: inline-block; padding: 10px 60px;
            background: linear-gradient(90deg, transparent, rgba(0,0,0,0.5) 50%, transparent);
            backdrop-filter: blur(2px);
        }
        .catalog-snapshot { 
            padding: 80px 20px; text-align: center; background: var(--bg-dark);
            margin: 40px 20px; border-radius: 4px; border-top: 8px solid var(--brand-red); 
        }
        .catalog-snapshot h2 {
            font-size: 2.5rem;
            text-transform: uppercase;
            font-weight: 800; }
        .catalog-snapshot h2 span { color: var(--brand-red); }
        .catalog-snapshot h2 {color: var(--white);}
        p{color: var(--white);}
        .btn-pill { 
            display: inline-block; margin-top: 30px; padding: 16px 50px;
            background-color: var(--brand-red); color: var(--white);
            text-decoration: none; font-weight: 700; text-transform: uppercase;
            border-radius: 50px; transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(239, 35, 60, 0.4);
        }
        .btn-pill:hover { background-color: var(--brand-red-hover); transform: translateY(-3px); }
        .why-choose-section {
            padding: 80px 0;
            background: var(--white); }
        .why-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        .why-card {
            background: var(--brand-black);
            color: var(--white);
            padding: 35px 25px;
            text-align: center;
            border: 1px solid #333;
            border-bottom: 4px solid var(--brand-red); 
            transition: all 0.3s ease;
        }
        .why-card:hover {
            transform: translateY(-5px);
            background: #282828; }
        .why-icon { 
            color: var(--brand-red);
            margin-bottom: 20px; }
        .why-icon svg {
            width: 45px;
            height: 45px; }
        .why-card h3 { color: var(--white);
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 15px; }
        .why-card p {
            color: var(--text-gray);
            font-size: 0.95rem; }
        footer { 
            text-align: center;
            padding: 40px; 
            background: var(--brand-black);
            color: #555; }
        footer p { margin: 0; color: #666; }
    </style>
</head>
<body> 
    <?php include 'nav.php'; ?>
    <div class="slider">
        <div class="slide active">
            <img src="Photos/concrete1.jpg" alt="Future">
            <div class="motto-container">
                <span class="motto-main">Building the Future</span>
                <span class="motto-tagline">with Infinite Concrete</span>
            </div>
        </div>
        <div class="slide">
            <img src="Photos/concrete2.jpg" alt="Trust">
            <div class="motto-container">
                <span class="motto-main">Durability You Can Trust</span>
                <span class="motto-tagline">Quality in every mix</span>
            </div>
        </div>
        <div class="slide">
            <img src="Photos/concrete3.jpg" alt="Finished Project View">
            <div class="motto-container">
                <span class="motto-main">Innovative Solutions</span>
                <span class="motto-tagline">Your Home of Concrete</span>
            </div>
        </div>
        <div class="slide">
            <img src="Photos 2/IMG_5641.jpg" alt="Team Stacking Pavers">
            <div class="motto-container">
                <span class="motto-main">A Vision of Quality</span>
                <span class="motto-tagline">Strength that inspires every view.</span>
            </div>
        </div>
        <div class="slide">
            <img src="Photos 2/IMG_5671.jpg" alt="Precision Curing">
            <div class="motto-container">
                <span class="motto-main">Cured to Last</span>
                <span class="motto-tagline">Ensuring optimal hydration for maximum strength.</span>
            </div>
        </div>
        <div class="slide">
            <img src="Photos 2/IMG_5682.jpg" alt="Branded Stack">
            <div class="motto-container">
                <span class="motto-main">Durability in Every Detail</span>
                <span class="motto-tagline">Quality you can see and feel.</span>
            </div>
        </div>
          <div class="slide">
            <img src="Photos 2/IMG_5687.jpg" alt="Strong Partnerships Stacking Bricks">
            <div class="motto-container">
                <span class="motto-main">Elegant Paving Solutions</span>
                <span class="motto-tagline">Durable style for your landscape.</span>
            </div>
        </div>
        <div class="slide">
            <img src="Photos 2/IMG_5706.jpg" alt="Pavement Solutions">
            <div class="motto-container">
                <span class="motto-main">Building the Future</span>
                <span class="motto-tagline">Precision and teamwork on every project.</span>
            </div>
        </div>
        <div class="slide">
            <img src="Photos 2/IMG_5696.jpg" alt="A Vision of Quality">
            <div class="motto-container">
                <span class="motto-main">Solid Partnerships</span>
                <span class="motto-tagline">Your project is built on our collective effort.</span>
            </div>
        </div>
    </div>

    <div class="catalog-snapshot">
        <h2>Quality <span>Blocks</span> For Every Project</h2>
        <p>Explore our professional range: Blocks, Ready Mix, and Precast Slabs.</p>
        <a href="catalog.php" class="btn-pill">View Full Catalog</a>
    </div>

    <section class="why-choose-section">
        <h2 style="text-align: center; text-transform: uppercase; font-weight: 800; margin-bottom: 40px;">Why Choose Infinite Concrete?</h2>
        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                </div>
                <h3>High-quality materials</h3>
            <p>We use premium cement and vibrated sand-to-stone ratios to ensure every block and paver withstands heavy weight and harsh weather conditions.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                </div>
                 <h3>Expert craftsmanship</h3>
            <p>Precision-molded and expertly finished. Our products have sharp edges and uniform dimensions for a seamless fit on your construction site.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                </div>
               <h3>Timely delivery</h3>
            <p>We value your construction timeline. Whether you are in Kampala or Mbarara, our logistics team ensures your order arrives exactly when you need it.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                </div>
               <h3>Competitive prices</h3>
            <p>High quality doesn't have to be overpriced. We offer factory-direct rates that provide the best value for residential and commercial projects.</p>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        let slides = document.querySelectorAll('.slide');
        let currentSlide = 0;
        let slideInterval = 4000; 

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }
        if(slides.length > 0) {
            setInterval(nextSlide, slideInterval);
        }
    </script>
</body>
</html>