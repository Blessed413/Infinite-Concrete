<!--Christine Muhimbisa-->
<style>
    :root {
      --primary-red: #ef233c;   
      --primary-hover: #d90429;
      --bg-dark: #0a0a0a;
      --text-white: #ffffff;
      --text-gray: #a1a1aa;
    }
</style>
<nav id="main-nav">
    <div class="nav-logo">
        <a href="index.php">
            <img src="logo.png" alt="Logo">
        </a>
    </div>
    
    <div class="nav-wrapper">
        <ul id="nav-menu">
            <li class="nav-li"><a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li class="nav-li"><a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
            <li class="nav-li"><a href="catalog.php" class="nav-link <?php echo ($current_page == 'catalog.php') ? 'active' : ''; ?>">Catalog</a></li>
            <li class="nav-li"><a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        <button type="button" id="nav-toggle" onclick="toggleMenu()" aria-label="Toggle navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <style>
        #main-nav {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 0 5%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            border-bottom: 4px solid #D3212D;
        }
        .nav-logo { flex-shrink: 0; }
        .nav-logo img { height: 55px; width: auto; display: block; }
        .nav-wrapper { display: flex; align-items: center; }
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
        .nav-link:hover, .nav-link.active { color: var(--primary-red); }
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
            border: none;
            background: transparent;
            color: inherit;
            padding: 0;
        }
        #nav-toggle:focus {
            outline: 3px solid rgba(211, 33, 45, 0.75);
            outline-offset: 4px;
        }
        #nav-toggle span {
            height: 3px;
            width: 100%;
            background: #000;
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
            #nav-toggle:focus, 
            #nav-toggle:active {
                outline: none !important;
                border: none !important;
                -webkit-tap-highlight-color: transparent; 
            }
            #nav-toggle::after {
                display: none !important;
            }
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
            const isOpen = menu.classList.toggle('open');
            toggle.classList.toggle('active');
            toggle.setAttribute('aria-expanded', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : 'auto';
        }
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('nav-menu').classList.remove('open');
                const toggle = document.getElementById('nav-toggle');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', false);
                document.body.style.overflow = 'auto';
            });
        });
    </script>
</nav>