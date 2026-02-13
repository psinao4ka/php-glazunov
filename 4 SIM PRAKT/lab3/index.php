<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Пройдите путь от рядового водителя до владельца целой транспортной империи. Вас ждут тысячи километров реалистичных трасс, десятки городов Европы и лицензированные грузовики ведущих мировых марок">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="yandex" content="index, follow">
    <meta property="og:title" content="качественные и быстрые доставки">
    <meta property="og:description" content="заказать перевозку груза">
    <meta property="og:image" content="https://example.com/images/tyres.jpg">
    <meta property="og:url" content="https://example.com/tyres/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Euro Track Simulator">
    <link rel="canonical" href="http://localhost/ets/index.html">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<link rel="manifest" href="/site.webmanifest" />

    <title>Euro Truck Simulator 2🚙 - Официальный русский сайт</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #1a6fb4;
            --primary-dark: #0d4d7a;
            --secondary: #ff9800;
            --dark: #1a1a2e;
            --light: #f8f9fa;
            --gray: #6c757d;
        }

        body {
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            background-color: var(--dark);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            color: white;
            text-decoration: none;
        }

        .logo img {
            height: 50px;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .logo-text span {
            color: var(--secondary);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: color 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
        }

        nav a:hover {
            color: var(--secondary);
            background-color: rgba(255, 255, 255, 0.1);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 180px 0 100px;
            text-align: center;
            margin-top: 80px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
            border: 2px solid var(--secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn:hover {
            background-color: transparent;
            color: var(--secondary);
        }

        .btn-secondary {
            background-color: transparent;
            border-color: white;
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: white;
            color: var(--dark);
        }

        /* Game Features */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--dark);
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: var(--secondary);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        section {
            padding: 80px 0;
        }

        .features {
            background-color: white;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        /* DLC & Addons */
        .dlc-section {
            background-color: #f8f9fa;
        }

        .dlc-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .dlc-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .dlc-card:hover {
            transform: translateY(-10px);
        }

        .dlc-image {
            height: 180px;
            background-color: var(--primary);
            background-size: cover;
            background-position: center;
        }

        .dlc-content {
            padding: 20px;
        }

        .dlc-content h3 {
            margin-bottom: 10px;
            color: var(--dark);
        }

        .dlc-price {
            color: var(--secondary);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        /* Requirements */
        .requirements {
            background-color: white;
        }

        .req-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .req-card {
            background-color: var(--light);
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid var(--primary);
        }

        .req-card h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .req-list {
            list-style: none;
        }

        .req-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .req-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--secondary);
            font-weight: bold;
        }

        /* Gallery */
        .gallery {
            background-color: #f8f9fa;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer-logo span {
            color: var(--secondary);
        }

        .footer-about p {
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background-color: var(--secondary);
            transform: translateY(-5px);
        }

        .footer-links h3, .footer-contact h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: white;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--secondary);
        }

        .footer-contact p {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0.8;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            nav {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--dark);
                padding: 20px;
                transform: translateY(-100%);
                opacity: 0;
                transition: all 0.3s;
                visibility: hidden;
            }
            
            nav.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            nav ul {
                flex-direction: column;
                gap: 15px;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero {
                padding: 150px 0 80px;
            }
            
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .btn {
                display: block;
                margin-bottom: 15px;
                width: 100%;
                max-width: 300px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .btn-secondary {
                margin-left: 0;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .feature-card, .req-card {
                padding: 20px;
            }
        }
    </style>


</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org", //ресурс schema.org
  "@graph": [ {
  
  
      "@type": "WebPage", 
      "name": "перевозка",
      "description": "советы по перевозке грузов",
      "url": "https://resultup.agency/blog"
    },
    {
      "@type": "Blog", 
      "name": "перевозка грузов",
      "description": "Ообучение вождению на фурах",
      "url": "https://seomeat.ru/blog"
    }
  ]
}
</script>
<script type="application/ld+json">
{
    {
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "ETS.inc",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Unter-Den-Linden",
    "postalCode": "CA 95014",
    "addressLocality": "Germany Berlin"
  },
  "telephone": "8 800 555 35 35",
  "email": "etsim@gmail.com"
},
{
  "@type": "BreadcrumbList", 
  "itemListElement": [ 
    {
      "@type": "ListItem", 
      "position": 1, 
      "name": "Грузы", 
      "item": "https://store.steampowered.com/?l=russian" 
    },
{
      "@type": "ListItem",
      "position": 2,
      "name": "фантастика перевозки",
      "item": "https://store.steampowered.com/?l=russian"
    }
  ]
},

{
 
  "@type": "ItemList", 
  "name": "Полезные разделы сайта",
  "itemListElement": [ 
    {
      "@type": "ListItem",
      "position": 1,
      "name": "подбор фуры",
      "url": "https://store.steampowered.com/?l=russian"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "погрузочная платформа",
      "url": "https://store.steampowered.com/?l=russian"
    },
   
  ]
}

},
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage", 
  "mainEntity": [ 
    {
      "@type": "Question", 
      "name": "как взяться за доставку груза",
      "acceptedAnswer": { 
        "@type": "Answer", 
        "text": "перейдите в раздел "заказы" и наши логисты выдадут вам документы на груз"
      }
    },
    
  ]
}
</script>

</script>

</script>

</script>

</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container header-content">
            <a href="#" class="logo">
                <i class="fas fa-truck-moving fa-2x"></i>
                <div class="logo-text">ETS2<span>RUS</span></div>
            </a>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            
            <nav id="mainNav">
                <ul>
                    <li><a href="#home">Главная</a></li>
                    <li><a href="#features">Особенности</a></li>
                    <li><a href="#dlc">Дополнения</a></li>
                    <li><a href="#requirements">Системные требования</a></li>
                    <li><a href="#gallery">Галерея</a></li>
                    <li><a href="#buy" class="btn" style="padding: 8px 20px;">Купить сейчас</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>EURO TRUCK SIMULATOR 2</h1>
            <p>Погрузитесь в мир дальнобойщика! Путешествуйте по всей Европе, доставляйте грузы, развивайте свою транспортную компанию и наслаждайтесь невероятно детализированным миром самой популярной симуляторной игры.</p>
            <a href="#buy" class="btn">Купить на Steam</a>
            <a href="#features" class="btn btn-secondary">Узнать больше</a>
        </div>
    </section>

    <!-- Game Features -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Ключевые особенности игры</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Огромная карта Европы</h3>
                    <p>Более 50 европейских городов, тысячи километров дорог, живописные пейзажи и достопримечательности.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Реалистичные грузовики</h3>
                    <p>Официально лицензированные грузовики от ведущих производителей: Scania, Volvo, Mercedes-Benz и других.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3>Развитие компании</h3>
                    <p>Начинайте как водитель-одиночка, развивайте свою транспортную компанию, нанимайте водителей и расширяйте автопарк.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cloud-sun"></i>
                    </div>
                    <h3>Динамичная погода</h3>
                    <p>Реалистичная смена времени суток и погодных условий: дождь, туман, снег, которые влияют на управление.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Глубокая кастомизация</h3>
                    <p>Настройте свой грузовик под себя: двигатель, коробка передач, окраска, тюнинг и внутренняя отделка.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Мультиплеер TruckersMP</h3>
                    <p>Играйте вместе с тысячами других водителей в специальном многопользовательском режиме.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DLC & Addons -->
    <section class="dlc-section" id="dlc">
        <div class="container">
            <h2 class="section-title">Дополнения и DLC</h2>
            <div class="dlc-container">
                <div class="dlc-card">
                    <div class="dlc-image" style="background-image: url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="dlc-content">
                        <h3>Iberia</h3>
                        <p>Исследуйте Испанию и Португалию с новыми городами, дорогами и достопримечательностями.</p>
                        <div class="dlc-price">899 ₽</div>
                        <a href="#" class="btn" style="padding: 8px 20px; font-size: 0.9rem;">Купить</a>
                    </div>
                </div>
                
                <div class="dlc-card">
                    <div class="dlc-image" style="background-image: url('https://images.unsplash.com/photo-1593693399748-2daca4457f3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="dlc-content">
                        <h3>Heart of Russia</h3>
                        <p>Отправляйтесь в путешествие по центральной части России с уникальными локациями.</p>
                        <div class="dlc-price">799 ₽</div>
                        <a href="#" class="btn" style="padding: 8px 20px; font-size: 0.9rem;">Купить</a>
                    </div>
                </div>
                
                <div class="dlc-card">
                    <div class="dlc-image" style="background-image: url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="dlc-content">
                        <h3>Beyond the Baltic Sea</h3>
                        <p>Исследуйте страны Балтийского региона: Литву, Латвию, Эстонию и часть России.</p>
                        <div class="dlc-price">699 ₽</div>
                        <a href="#" class="btn" style="padding: 8px 20px; font-size: 0.9rem;">Купить</a>
                    </div>
                </div>
                
                <div class="dlc-card">
                    <div class="dlc-image" style="background-image: url('https://images.unsplash.com/photo-1513326738677-b964603b136d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="dlc-content">
                        <h3>Road to the Black Sea</h3>
                        <p>Путешествуйте по Турции, Болгарии и Румынии, доставляя грузы к Черному морю.</p>
                        <div class="dlc-price">699 ₽</div>
                        <a href="#" class="btn" style="padding: 8px 20px; font-size: 0.9rem;">Купить</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- System Requirements -->
    <section class="requirements" id="requirements">
        <div class="container">
            <h2 class="section-title">Системные требования</h2>
            <div class="req-grid">
                <div class="req-card">
                    <h3>Минимальные требования</h3>
                    <ul class="req-list">
                        <li>ОС: Windows 7/8/10 64-bit</li>
                        <li>Процессор: Intel Core i5-2300 или AMD FX-4300</li>
                        <li>Оперативная память: 8 GB ОЗУ</li>
                        <li>Видеокарта: NVIDIA GeForce GTX 760 или AMD Radeon R9 270</li>
                        <li>DirectX: Версии 11</li>
                        <li>Место на диске: 25 GB</li>
                    </ul>
                </div>
                
                <div class="req-card">
                    <h3>Рекомендуемые требования</h3>
                    <ul class="req-list">
                        <li>ОС: Windows 7/8/10 64-bit</li>
                        <li>Процессор: Intel Core i5-6600 или AMD Ryzen 5 2600</li>
                        <li>Оперативная память: 12 GB ОЗУ</li>
                        <li>Видеокарта: NVIDIA GeForce GTX 1660 или AMD Radeon RX 590</li>
                        <li>DirectX: Версии 11</li>
                        <li>Место на диске: 25 GB (с DLC - до 50 GB)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="section-title">Галерея игры</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Грузовик в горах">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Грузовик на дороге">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ночная дорога">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Грузовик на закате">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">ETS2<span>RUS</span></div>
                    <p>Официальный русскоязычный сайт игры Euro Truck Simulator 2. Здесь вы найдете всю информацию об игре, дополнениях и сообществе.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-steam"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-vk"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Быстрые ссылки</h3>
                    <ul>
                        <li><a href="#home">Главная</a></li>
                        <li><a href="#features">Особенности игры</a></li>
                        <li><a href="#dlc">Дополнения</a></li>
                        <li><a href="#requirements">Системные требования</a></li>
                        <li><a href="#gallery">Галерея</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact" id="buy">
                    <h3>Купить игру</h3>
                    <p><i class="fas fa-store"></i> Доступна на платформах:</p>
                    <p><i class="fab fa-steam"></i> Steam - <strong>1 299 ₽</strong></p>
                    <p><i class="fas fa-download"></i> Официальный сайт SCS Software</p>
                    <p><i class="fas fa-box"></i> Розничные версии в магазинах</p>
                    <a href="https://store.steampowered.com/app/227300/Euro_Truck_Simulator_2/" class="btn" target="_blank" style="margin-top: 15px;">Купить на Steam</a>
                </div>
            </div>
            
            <div class="copyright">
                <p>© 2023 Euro Truck Simulator 2. Все права защищены. Euro Truck Simulator 2 является товарным знаком SCS Software. Данный сайт является фанатским проектом.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');
        
        mobileMenuBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileMenuBtn.innerHTML = mainNav.classList.contains('active') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
        });
        
        // Close menu when clicking on a link
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                mainNav.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Header background on scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if(window.scrollY > 50) {
                header.style.backgroundColor = 'rgba(26, 26, 46, 0.95)';
            } else {
                header.style.backgroundColor = 'var(--dark)';
            }
        });
    </script>
</body>
</html>