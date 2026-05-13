<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!--Christine Muhimbisa-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Concrete - Full Catalog</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-red: #D3212D;
            --brand-black: #000000;
            --concrete-grey: #f4f4f4;
            --white: #FFFFFF;
            --shadow: 0 4px 12px rgba(0,0,0,0.08);
            --primary: #D32F2F;
            --accent: #B71C1C;
            --bg: #f5f5f5;
            --surface: #ffffff;
            --text: #111111;
            --text-dim: #555555;
            --border: rgba(0,0,0,0.08);
            --glass: rgba(255,255,255,0.92);
            --ease: cubic-bezier(0.16, 1, 0.3, 1);
            /* New Nav Variables */
            --primary-red: #ef233c;   
            --primary-hover: #d90429;
            --bg-dark: #0a0a0a;
            --text-white: #ffffff;
            --text-gray: #a1a1aa;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { 
            font-family: 'Inter', sans-serif;
            background-color: var(--concrete-grey); 
            color: var(--brand-black); 
            overflow-x: hidden;
            line-height: 1.4;
        }
        #nav-menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }
        .nav-li { margin-left: 35px; }
        .nav-link {
            color: var(--bg-dark); 
            text-decoration: none;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            position: relative; 
            padding: 10px 0;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px; 
            background-color: var(--brand-red);
            transition: width 0.3s ease; 
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .nav-link.active::after {
            width: 100%;
        }
        .nav-link:hover, .nav-link.active { 
            color: var(--brand-red); 
        }
        #nav-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
            margin-left: 20px;
            z-index: 10001;
            position: relative;
        }
        #main-nav {
            position: fixed !important;
            top: 0;
            left: 0;
            width: 100%;
        }
        body {
            padding-top: 80px;
        }
        .main-container { 
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 30px;
            max-width: 1300px;
            margin: 30px auto;
            padding: 0 20px;
            padding-bottom: 120px !important; 
            }
        .products-grid { 
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            }
        .products-grid h2 { 
            margin: 40px 0 20px 0; 
            text-transform: uppercase; 
            font-weight: 800;
            border-left: 5px solid var(--brand-red);
            padding-left: 15px;
            }
        .products-grid h2:first-of-type { margin-top: 0; }
            
        .product-card { 
            display: flex;
            align-items: center;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: 0.3s;
        }
        .product-card:hover { 
            transform: translateY(-3px);
            border-color: var(--brand-red);
            box-shadow: var(--shadow); 
        }
        .product-card img { 
            width: 160px; height: 160px; 
            object-fit: cover; border-radius: 8px;
            margin-right: 25px; border: 1px solid #f0f0f0; 
        }
        .product-info { flex: 1; }
        .product-info h3 { 
            margin-bottom: 5px; font-size: 1.1rem;
            text-transform: uppercase; font-weight: 800; 
        }
        .tagline {
            color: #666; font-size: 0.85rem;
            margin-bottom: 12px; display: block;
            font-style: italic;
        }
        .price { 
            color: var(--brand-red); font-weight: 800; 
            font-size: 1.1rem; margin-bottom: 15px; display: block; 
        }
        .qty-wrap { 
            display: flex; align-items: center; gap: 10px; margin-bottom: 15px; }
        .qty-btn { 
            width: 32px; height: 32px; border: 1px solid #ddd;
            background: #fff; cursor: pointer; border-radius: 4px; font-weight: bold; 
        }
        .qty-input { 
            width: 50px; text-align: center; border: 1px solid #ddd;
            padding: 5px; border-radius: 4px; font-weight: 700; 
        }
        .add-btn {
            background: var(--brand-red); color: #fff; border: none;
            padding: 12px 25px; border-radius: 6px; font-weight: 700; 
            text-transform: uppercase; cursor: pointer; transition: 0.3s; width: 100%; max-width: 220px; 
        }
        .add-btn:hover { background: var(--brand-black); }
        .cart-sidebar { 
            background: var(--brand-black); color: #fff;
            padding: 25px; border-radius: 12px; height: fit-content; 
            position: sticky; top: 110px;
        }
        .cart-sidebar h2 {
            color: var(--brand-red); margin-top: 0; font-size: 1.4rem;
            text-transform: uppercase; border-bottom: 1px solid #333; padding-bottom: 10px; 
        }
        .cart-item { 
            display: flex; justify-content: space-between; align-items: center;
            border-bottom: 1px solid #222; padding: 12px 0; font-size: 0.85rem; 
        }
        .remove { color: #ff4d4d; cursor: pointer; background: none; border: none; font-size: 1.1rem; }
        .total-row { 
            display: flex; justify-content: space-between; margin-top: 20px;
            font-weight: 800; font-size: 1.2rem; border-top: 2px solid var(--brand-red); padding-top: 15px; 
        }
        .checkout-btn {
            width: 100%; padding: 0.75rem; background: var(--primary);
            color: #fff; border: none; border-radius: 4px; font-weight: 700;
            font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.04em;
            cursor: pointer; transition: all 0.25s var(--ease); margin-top: 15px;
        }
        .checkout-btn:hover { background: var(--accent); }
        .checkout-section {
            max-width: 1300px; margin: 40px auto; padding: 0 20px; display: none;
        }
        .checkout-container {
            background: var(--white); padding: 40px; border-radius: 12px;
            box-shadow: var(--shadow); border-top: 10px solid var(--brand-red);
        }
        .checkout-container h2 { text-transform: uppercase; font-weight: 800; margin-bottom: 30px; }
        .form-grid { 
            display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
            gap: 25px; margin-bottom: 30px;
        }
        .input-group { display: flex; flex-direction: column; gap: 8px; }
        .input-group label { font-weight: 800; text-transform: uppercase; font-size: 0.75rem; color: #555; }
        .input-group input { padding: 15px; border: 2px solid #eee; border-radius: 6px; font-family: inherit; }
        .input-group input:focus { border-color: var(--brand-red); outline: none; }
        @media (min-width: 993px) {
            .mobile-float { display: none !important; }
        }
        .mobile-float {
            position: fixed;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%) translateY(100px); 
            background-color: var(--brand-black);
            color: #fff;
            padding: 12px 20px;
            border-radius: 50px;
            display: none; 
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            z-index: 9998;
            transition: transform 0.4s var(--ease);
        }
        .mobile-float.visible { 
            display: flex; 
            transform: translateX(-50%) translateY(0); 
        }
        .mobile-float-info { display: flex; flex-direction: column; }
        .mobile-float-info .label { font-size: 0.7rem; text-transform: uppercase; color: #aaa; font-weight: 700; }
        .mobile-float-info .amount { font-weight: 800; font-size: 1.1rem; color: var(--brand-red); }
        .mobile-float-btn {
            background: var(--brand-red); color: #fff; border: none; padding: 5px 10px;
            border-radius: 100px; font-weight: 800; text-transform: uppercase; font-size: 0.75rem;
            cursor: pointer;
        }
        .sheet-overlay {
            position: fixed; inset: 0; background: rgba(0,0,0,0.6);
            backdrop-filter: blur(4px); z-index: 10000; opacity: 0; visibility: hidden; transition: 0.3s;
        }
        .sheet-overlay.active { opacity: 1; visibility: visible; }
        .sheet {
            position: fixed; 
            bottom: 0; 
            left: 50%;
            transform: translate(-50%, 100%);
            width: 100%;
            max-width: 500px;
            background: var(--white); 
            border-radius: 20px 20px 0 0;
            z-index: 10001; 
            padding: 25px; 
            transition: transform 0.4s var(--ease); 
            max-height: 80vh; 
            overflow-y: auto;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.2);
        }
        .sheet.active { transform: translate(-50%, 0); }
        .sheet-handle { width: 40px; height: 5px; background: #ddd; margin: 0 auto 20px; border-radius: 10px; }
        .sheet-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 15px; }
        .sheet-close { background: #f0f0f0; border: none; width: 30px; height: 30px; border-radius: 50%; font-size: 1.2rem; color: #666; cursor: pointer; display: flex; align-items: center; justify-content: center; }
        @media (max-width: 1000px) {
            .main-container { grid-template-columns: 1fr; }
            .cart-sidebar { display: none; }
            .product-card { flex-direction: column; text-align: center; }
            .product-card img { margin-right: 0; margin-bottom: 15px; width: 100%; height: 200px; }
            .add-btn { max-width: 100%; }
        }
       footer { 
            text-align: center;
            padding: 40px; 
            background: var(--brand-black);
            color: #555; }
        footer p { margin: 0; color: #666; }
html,
body {
    width: 100%;
    max-width: 100%;
    overflow-x: hidden;
}
*,
*::before,
*::after {
    box-sizing: border-box;
}
img,
video,
canvas,
svg {
    max-width: 100%;
    height: auto;
    display: block;
}
.main-container {
    width: 100%;
    max-width: 1300px;
}
.product-card {
    width: 100%;
    overflow: hidden;
}
.product-card img {
    max-width: 100%;
    object-fit: cover;
}
.add-btn,
.checkout-btn,
.mobile-float-btn {
    width: auto;
    padding: 8px 14px;
    font-size: 0.7rem;
    border-radius: 999px;
    flex-shrink: 0;
}

@media screen and (max-width: 480px) {
    .mobile-float-btn {
        padding: 7px 12px;
        font-size: 0.65rem;
    }
}
.sheet-overlay {
    width: 100vw;
    overflow: hidden;
}
.sheet {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100vw;
    max-width: 500px;
    margin: 0 auto;
    transform: translateY(100%);
    transition: transform 0.4s var(--ease);
    background: var(--white);
    border-radius: 20px 20px 0 0;
    padding: 25px;
    overflow-x: hidden;
    overflow-y: auto;
    box-sizing: border-box;
    max-height: 80vh;
    z-index: 10001;
}
.sheet.active {
    transform: translateY(0);
}
.sheet * {
    max-width: 100%;
    box-sizing: border-box;
}
.cart-item,
.total-row {
    width: 100%;
    overflow-wrap: break-word;
    word-break: break-word;
}
.mobile-float {
    width: calc(100% - 24px);
    max-width: 400px;
    left: 50%;
    transform: translateX(-50%) translateY(100px);
}
.mobile-float.visible {
    transform: translateX(-50%) translateY(0);
}
@media screen and (max-width: 992px) {
    .main-container {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .cart-sidebar {
        display: none;
    }
    .product-card {
        flex-direction: column;
        text-align: center;
    }
    .product-card img {
        width: 100%;
        max-width: 320px;
        height: auto;
        margin: 0 auto 15px;
    }
    .qty-wrap {
        justify-content: center;
    }
    .add-btn {
        max-width: 100%;
    }
}
@media screen and (max-width: 768px) {
    body {
        font-size: 15px;
    }
    .main-container,
    .checkout-section {
        padding-left: 15px;
        padding-right: 15px;
    }
    .products-grid {
        padding: 18px;
    }
    .product-card {
        padding: 16px;
    }
    .checkout-container {
        padding: 24px 18px;
    }
    .form-grid {
        grid-template-columns: 1fr;
    }
    .input-group input {
        width: 100%;
        font-size: 16px; 
    }
    .sheet {
        width: 100vw;
        max-width: 100vw;
        left: 0;
        right: 0;
        margin: 0;
        border-radius: 20px 20px 0 0;
        padding:
            20px
            16px
            calc(env(safe-area-inset-bottom) + 20px);
        max-height: 85vh;
    }
    .checkout-btn {
        padding: 14px;
        font-size: 0.8rem;
    }
}
@media screen and (max-width: 480px) {
    .main-container {
        padding-left: 10px;
        padding-right: 10px;
    }
    .products-grid {
        padding: 14px;
    }
    .product-card {
        padding: 14px;
    }
    .product-info h3 {
        font-size: 0.95rem;
    }
    .tagline {
        font-size: 0.75rem;
    }
    .price {
        font-size: 1rem;
    }
    .mobile-float {
        width: calc(100% - 16px);
        bottom: 12px;
        padding: 12px 14px;
    }
    .mobile-float-btn {
        font-size: 0.72rem;
        padding: 10px 14px;
    }
    .sheet {
        padding:
            18px
            14px
            calc(env(safe-area-inset-bottom) + 18px);
    }
    footer {
        padding: 35px 16px;
    }
}
@media screen and (max-width: 360px) {
    .qty-wrap {
        gap: 6px;
    }
    .qty-btn {
        width: 36px;
        height: 36px;
    }
    .qty-input {
        width: 44px;
    }
    .mobile-float {
        flex-direction: column;
        gap: 10px;
        align-items: stretch;
        text-align: center;
    }
    .mobile-float-btn {
        width: 100%;
    }
}
.sheet,
.mobile-float,
footer {
    padding-bottom:
        calc(env(safe-area-inset-bottom, 0px) + 10px);
}
@media (prefers-color-scheme: dark) {

    body {
        background: var(--concrete-grey);
        color: var(--brand-black);
    }
    .products-grid,
    .checkout-container,
    .sheet {
        background: var(--white);
        color: var(--brand-black);
    }
    .input-group input {
        background: #fff;
        color: #000;
        border-color: #eee;
    }
    .product-card {
        border-color: #eee;
    }
    .tagline {
        color: #666;
    }
}
.mobile-float-info,
.mobile-float-info .amount,
.mobile-float-info .label {
    white-space: nowrap;
    word-break: keep-all;
    overflow-wrap: normal;
}
.mobile-float-info .amount {
    display: inline-block;
    font-size: 1.1rem;
    line-height: 1;
}
.mobile-float-info .label {
    display: inline-block;
    font-size: 0.75rem;
}
@media screen and (max-width: 360px) {
    .mobile-float {
        flex-direction: row; 
        align-items: center;
    }
    .mobile-float-info {
        min-width: 0;
    }
    .mobile-float-btn {
        white-space: nowrap;
    }
}
    </style>
</head>
<body>
<nav id="main-nav" style="
    background-color: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    padding: 0 5%;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 9999;
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
    border-bottom: 4px solid #D3212D;
">
    <div class="nav-logo" style="flex-shrink: 0;">
        <a href="index.php">
            <img src="logo.png" alt="Logo" style="height: 55px; width: auto; display: block;">
        </a>
    </div>
    <div style="display: flex; align-items: center;">
        <ul id="nav-menu">
            <li class="nav-li"><a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li class="nav-li"><a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
            <li class="nav-li"><a href="catalog.php" class="nav-link <?php echo ($current_page == 'catalog.php') ? 'active' : ''; ?>">Catalog</a></li>
            <li class="nav-li"><a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        <div id="nav-toggle" onclick="toggleMenu()">
            <span style="background: black;"></span>
            <span style="background: black;"></span>
            <span style="background: black;"></span>
        </div>
    </div>
    <style>
        #nav-toggle span {
            height: 3px;
            width: 100%;
            transition: 0.4s;
            border-radius: 2px;
        }
        @media (max-width: 1000px) {
            #nav-toggle { display: flex !important; }
            #nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 280px;
                height: 100vh;
                background: var(--bg-dark);
                flex-direction: column;
                justify-content: center;
                gap: 30px;
                transition: 0.5s cubic-bezier(0.77, 0.2, 0.05, 1);
                box-shadow: -10px 0 30px rgba(0,0,0,0.5);
            }
            #nav-menu.open { right: 0; }
            .nav-li { margin-left: 0; text-align: center; width: 100%; }
            .nav-link { 
                color: var(--text-gray); 
                font-size: 1.2rem; 
                display: block; 
            }
            .nav-link:hover, .nav-link.active { color: var(--text-white); }
            #nav-toggle.active span:nth-child(1) { 
                transform: translateY(9px) rotate(45deg); 
                background: #FFFFFF !important; 
            }
            #nav-toggle.active span:nth-child(2) { 
                opacity: 0; 
            }
            #nav-toggle.active span:nth-child(3) { 
                transform: translateY(-9px) rotate(-45deg); 
                background: #FFFFFF !important; 
            }
        }
    </style>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('nav-menu');
            const toggle = document.getElementById('nav-toggle');
            menu.classList.toggle('open');
            toggle.classList.toggle('active');
            document.body.style.overflow = menu.classList.contains('open') ? 'hidden' : 'auto';
        }
    </script>
</nav>

<div class="main-container">
    <div class="products-grid">
        <h2>Construction Blocks and Finishing</h2>
        
        <div class="product-card">
            <img src="Catalog Photos/hollow block six inch.jpg" alt="6-Inch Hollow">
            <div class="product-info">
                <h3>Hollow Blocks (6-inch)</h3>
                <span class="tagline">Perfect for perimeter walls and lightweight partitions.</span>
                <span class="price">UGX 2,000 per piece</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('6-Inch Hollow', 2000, this)">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="Catalog Photos/hollow block 8 inch .jpg" alt="8-Inch Hollow">
            <div class="product-info">
                <h3>Hollow Blocks (8-inch)</h3>
                <span class="tagline">Commercial standard for structural load-bearing walls.</span>
                <span class="price">UGX 2,400 per piece</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('8-Inch Hollow', 2400, this)">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="Catalog Photos/solid blocks.jpg" alt="6-Inch Solid">
            <div class="product-info">
                <h3>Solid Blocks (6-inch)</h3>
                <span class="tagline">High density for soundproofing and heavy loads.</span>
                <span class="price">UGX 3,000 per piece</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('6-Inch Solid', 3000, this)">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="Catalog Photos/solid blocks 2.jpg" alt="8-Inch Solid">
            <div class="product-info">
                <h3>Solid Blocks (8-inch)</h3>
                <span class="tagline">Engineered for multi-story foundations and high-pressure walls.</span>
                <span class="price">UGX 3,400 per piece</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('8-Inch Solid', 3400, this)">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="Catalog Photos/kerbstones.jpg" alt="Kerbstones">
            <div class="product-info">
                <h3>Road Kerbstones (600mm)</h3>
                <span class="tagline">Durable road edging for drainage and boundary control.</span>
                <span class="price">UGX 8,000 per piece</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('Kerbstones', 8000, this)">Add to Cart</button>
            </div>
        </div>
        <h2>Premium Pavers</h2>
        <div class="product-card">
            <img src="Catalog Photos/rect pavers 6.jpg" alt="60mm Rect">
            <div class="product-info">
                <h3>Rectangular Pavers (60mm)</h3>
                <span class="tagline">Classic aesthetics for walkways and patios.</span>
                <span class="price">UGX 28,000 per square meter</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('60mm Rect Paver', 28000, this)">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="Catalog Photos/norm pavers .jpg" alt="Double-T">
            <div class="product-info">
                <h3>Double-T Pavers (80mm)</h3>
                <span class="tagline">Industrial interlocking for heavy-duty traffic areas.</span>
                <span class="price">UGX 35,000 per square meter</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('80mm Double-T', 35000, this)">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="Catalog Photos/pavers 4.jpg" alt="Cosmic Moon">
            <div class="product-info">
                <h3>Cosmic Moon Pavers (80mm)</h3>
                <span class="tagline">Decorative pattern with heavy-duty load capacity.</span>
                <span class="price">UGX 35,000 per square meter</span>
                <div class="qty-wrap">
                    <button class="qty-btn" onclick="changeQty(this,-1)">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn" onclick="changeQty(this,1)">+</button>
                </div>
                <button class="add-btn" onclick="addToCart('80mm Cosmic', 35000, this)">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="cart-sidebar" id="cart-view">
        <h2>Order Summary</h2>
        <div id="cartItems"><p style="text-align:center; opacity: 0.5; padding: 20px 0;">Cart is empty.</p></div>
        <div class="total-row"><span>Total</span><span>UGX <span id="total">0</span></span></div>
        <button class="checkout-btn" onclick="openCheckout()">Proceed to Checkout</button>
    </div>
</div>

<div class="checkout-section" id="checkout-section">
    <div class="checkout-container">
        <h2>Delivery & Contact Details</h2>
        <form id="checkoutForm">
            <div class="form-grid">
                <div class="input-group"><label>Full Name</label><input type="text" id="custName" placeholder="Enter your name" required></div>
                <div class="input-group"><label>Email Address</label><input type="email" id="custEmail" placeholder="name@example.com" required></div>
                <div class="input-group"><label>Phone Number</label><input type="tel" id="custPhone" placeholder="07XX XXX XXX" required></div>
                <div class="input-group"><label>Delivery Location</label><input type="text" id="custLocation" placeholder="Site location" required></div>
                <div class="input-group"><label>Preferred Delivery Date</label><input type="date" id="deliveryDate" required></div>
            </div>
            <button type="submit" class="checkout-btn">Confirm Order</button>
        </form>
    </div>
</div>

<div class="mobile-float" id="mobileFloat" onclick="openSheet()">
    <div class="mobile-float-info">
        <div class="label" id="mobileLabel">0 Items in Cart</div>
        <div class="amount" id="mobileTotal">UGX 0</div>
    </div>
    <button class="mobile-float-btn">Review</button>
</div>

<div class="sheet-overlay" id="sheetOverlay" onclick="closeSheet()"></div>
<div class="sheet" id="sheet">
    <div class="sheet-handle"></div>
    <div class="sheet-header">
        <h3 style="font-weight: 800; text-transform: uppercase; font-size: 0.9rem;">Order Summary</h3>
        <button class="sheet-close" onclick="closeSheet()">×</button>
    </div>
    <div id="sheetCartContent">
        <p style="text-align:center; opacity: 0.5; padding: 20px 0;">Cart is empty.</p>
    </div>
    <div class="total-row" style="color: black; margin-bottom: 20px;">
        <span>Total</span><span id="sheetTotalDisplay">UGX 0</span>
    </div>
    <button class="checkout-btn" onclick="closeSheet(); openCheckout();">Checkout Now</button>
</div>


    <?php include 'footer.php'; ?>
<script>
    let cart = {};

    const today = new Date().toISOString().split('T')[0];
    document.getElementById('deliveryDate').setAttribute('min', today);

    function changeQty(btn, delta) {
        let input = btn.parentNode.querySelector('.qty-input');
        let val = parseInt(input.value) + delta;
        if (val >= 1) input.value = val;
    }

    function addToCart(name, price, btn) {
        let qtyInput = btn.closest('.product-info').querySelector('.qty-input');
        let qty = parseInt(qtyInput.value);
        if (cart[name]) { cart[name].qty += qty; } else { cart[name] = { price, qty }; }
        updateCart();
        qtyInput.value = 1;
    }

    function updateCart() {
        const desktopList = document.getElementById('cartItems');
        const sheetList = document.getElementById('sheetCartContent');
        const mobileFloat = document.getElementById('mobileFloat');
        
        desktopList.innerHTML = '';
        sheetList.innerHTML = '';
        
        let total = 0;
        let itemCount = 0;
        let itemsExist = Object.keys(cart).length > 0;

        for (let item in cart) {
            let sub = cart[item].price * cart[item].qty;
            total += sub;
            itemCount += cart[item].qty;
            const itemHTML = `<div class="cart-item"><span>${item} (x${cart[item].qty})</span><span>${sub.toLocaleString()} <button class="remove" onclick="removeItem('${item}')">✕</button></span></div>`;
            desktopList.innerHTML += itemHTML;
            sheetList.innerHTML += itemHTML;
        }

        if (!itemsExist) {
            const emptyMsg = '<p style="text-align:center; opacity: 0.5; padding: 20px 0;">Cart is empty.</p>';
            desktopList.innerHTML = emptyMsg;
            sheetList.innerHTML = emptyMsg;
            mobileFloat.classList.remove('visible');
            document.getElementById('checkout-section').style.display = 'none';
        } else {
            mobileFloat.classList.add('visible');
        }

        const formattedTotal = total.toLocaleString();
        document.getElementById('total').innerText = formattedTotal;
        document.getElementById('mobileTotal').innerText = 'UGX ' + formattedTotal;
        document.getElementById('sheetTotalDisplay').innerText = 'UGX ' + formattedTotal;
        document.getElementById('mobileLabel').innerText = itemCount + (itemCount === 1 ? ' Item' : ' Items');
    }
    function removeItem(name) { delete cart[name]; updateCart(); }

    function openCheckout() {
        if (Object.keys(cart).length === 0) return alert("Your cart is empty!");
        document.getElementById('checkout-section').style.display = 'block';
        window.scrollTo({ top: document.getElementById('checkout-section').offsetTop - 100, behavior: 'smooth' });
    }

    function openSheet() {
        document.getElementById('sheet').classList.add('active');
        document.getElementById('sheetOverlay').classList.add('active');
    }

    function closeSheet() {
        document.getElementById('sheet').classList.remove('active');
        document.getElementById('sheetOverlay').classList.remove('active');
    }

    document.getElementById('checkoutForm').onsubmit = (e) => {
        e.preventDefault();
        const phoneInput = document.getElementById('custPhone');
        const date = document.getElementById('deliveryDate').value;
        const ugPhoneRegex = /^(07|03|02|04)\d{8}$/;
        if (!ugPhoneRegex.test(phoneInput.value)) {
            alert("Please enter a valid Ugandan phone number.");
            phoneInput.focus();
            return; 
        }
        alert(`Thank you, ${document.getElementById('custName').value}!\n Your order is confirmed for delivery on ${date}.`);
        cart = {};
        updateCart();
        document.getElementById('checkoutForm').reset();
        document.getElementById('checkout-section').style.display = 'none';
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>

</body>
</html>