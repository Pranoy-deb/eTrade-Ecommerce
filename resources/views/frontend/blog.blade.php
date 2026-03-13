@extends('layouts.frontend')
@section('title', 'Our Blog')
@section('frontend')

    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <h1 class="title">Our Blog</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{ asset('frontend/assets/images/product/product-45.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Blog Area -->
    <div class="eb-blog-area axil-section-gap">
        <div class="container">
            <div class="row row--30">

                <!-- ====== Blog Posts Column ====== -->
                <div class="col-lg-8">

                    <!-- ===== Hero Featured Row (2 cards side by side) ===== -->
                    <div class="eb-hero-row">
                        <!-- Big Featured Card -->
                        <div class="eb-hero-card eb-hero-card--big">
                            <a href="">
                                <img src="https://images.unsplash.com/photo-1557821552-17105176677c?w=800&q=80" alt="AI Shopping">
                                <div class="eb-hero-overlay">
                                    <span class="eb-badge">Technology</span>
                                    <h2>The Future of E-Commerce: AI-Powered Shopping</h2>
                                    <div class="eb-hero-meta">
                                        <span><i class="far fa-calendar-alt"></i> Jan 15, 2024</span>
                                        <span><i class="far fa-clock"></i> 8 min read</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Small Featured Card -->
                        <div class="eb-hero-card eb-hero-card--small">
                            <a href=" 'fashion-trends') }}">
                                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=800&q=80" alt="Fashion">
                                <div class="eb-hero-overlay">
                                    <span class="eb-badge">Fashion</span>
                                    <h3>10 Must-Have Trends for Spring 2024</h3>
                                    <div class="eb-hero-meta">
                                        <span><i class="far fa-calendar-alt"></i> Jan 12, 2024</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- ===== Horizontal Card ===== -->
                    <article class="eb-hori-card">
                        <div class="eb-hori-thumb">
                            <a href=" 'home-decor') }}">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&q=80" alt="Home Decor">
                            </a>
                            <span class="eb-badge">Lifestyle</span>
                        </div>
                        <div class="eb-hori-body">
                            <div class="eb-card-meta">
                                <span><i class="far fa-calendar-alt"></i> Jan 10, 2024</span>
                                <span><i class="far fa-eye"></i> 856</span>
                                <span><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                            <h3 class="eb-card-title">
                                <a href=" 'home-decor') }}">Transform Your Home with These Modern Decor Ideas</a>
                            </h3>
                            <p class="eb-card-excerpt">
                                Create a cozy and stylish living space with our expert home decor tips. From minimalist designs 
                                to bold statement pieces, discover inspiration for every room.
                            </p>
                            <div class="eb-card-footer">
                                <div class="eb-author">
                                    <img src="https://ui-avatars.com/api/?name=Sarah+Ali&background=3577f0&color=fff&size=40" alt="Author">
                                    <span>Sarah Ali</span>
                                </div>
                                <a href=" 'home-decor') }}" class="eb-read-more">
                                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- ===== 3 Column Mini Grid ===== -->
                    <div class="eb-mini-grid">

                        <div class="eb-mini-card">
                            <div class="eb-mini-thumb">
                                <a href=" 'wireless-earbuds') }}">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&q=80" alt="Earbuds">
                                </a>
                                <span class="eb-badge-sm">Electronics</span>
                            </div>
                            <div class="eb-mini-body">
                                <span class="eb-mini-date"><i class="far fa-calendar-alt"></i> Jan 08</span>
                                <h4><a href=" 'wireless-earbuds') }}">Best Wireless Earbuds Under $100</a></h4>
                                <a href=" 'wireless-earbuds') }}" class="eb-mini-link">Read <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="eb-mini-card">
                            <div class="eb-mini-thumb">
                                <a href=" 'online-deals') }}">
                                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&q=80" alt="Shopping">
                                </a>
                                <span class="eb-badge-sm">Shopping</span>
                            </div>
                            <div class="eb-mini-body">
                                <span class="eb-mini-date"><i class="far fa-calendar-alt"></i> Jan 05</span>
                                <h4><a href=" 'online-deals') }}">How to Find Best Online Deals</a></h4>
                                <a href=" 'online-deals') }}" class="eb-mini-link">Read <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="eb-mini-card">
                            <div class="eb-mini-thumb">
                                <a href=" 'winter-skincare') }}">
                                    <img src="https://images.unsplash.com/photo-1596755389378-c31d21fd1273?w=400&q=80" alt="Skincare">
                                </a>
                                <span class="eb-badge-sm">Beauty</span>
                            </div>
                            <div class="eb-mini-body">
                                <span class="eb-mini-date"><i class="far fa-calendar-alt"></i> Jan 02</span>
                                <h4><a href=" 'winter-skincare') }}">Winter Skincare Routine Guide</a></h4>
                                <a href=" 'winter-skincare') }}" class="eb-mini-link">Read <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>

                    <!-- ===== Horizontal Card 2 ===== -->
                    <article class="eb-hori-card">
                        <div class="eb-hori-thumb">
                            <a href=" 'sneakers-guide') }}">
                                <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=600&q=80" alt="Sneakers">
                            </a>
                            <span class="eb-badge">Fashion</span>
                        </div>
                        <div class="eb-hori-body">
                            <div class="eb-card-meta">
                                <span><i class="far fa-calendar-alt"></i> Dec 28, 2023</span>
                                <span><i class="far fa-eye"></i> 1.8k</span>
                                <span><i class="far fa-clock"></i> 6 min read</span>
                            </div>
                            <h3 class="eb-card-title">
                                <a href=" 'sneakers-guide') }}">The Ultimate Guide to Choosing Perfect Sneakers</a>
                            </h3>
                            <p class="eb-card-excerpt">
                                From comfort to style, learn everything about finding your ideal sneakers. 
                                We compare top brands and help you make the right choice.
                            </p>
                            <div class="eb-card-footer">
                                <div class="eb-author">
                                    <img src="https://ui-avatars.com/api/?name=Mike+Rahman&background=3577f0&color=fff&size=40" alt="Author">
                                    <span>Mike Rahman</span>
                                </div>
                                <a href=" 'sneakers-guide') }}" class="eb-read-more">
                                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- ===== Quote / CTA Banner ===== -->
                    <div class="eb-quote-banner">
                        <div class="eb-quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p>"Shopping is not about stuff. It's about the experience, the discovery, the joy of finding something perfect."</p>
                        <span>— eTrade Blog Team</span>
                    </div>

                    <!-- ===== Horizontal Card 3 ===== -->
                    <article class="eb-hori-card">
                        <div class="eb-hori-thumb">
                            <a href=" 'smart-gadgets') }}">
                                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600&q=80" alt="Gadgets">
                            </a>
                            <span class="eb-badge">Tech</span>
                        </div>
                        <div class="eb-hori-body">
                            <div class="eb-card-meta">
                                <span><i class="far fa-calendar-alt"></i> Dec 22, 2023</span>
                                <span><i class="far fa-eye"></i> 2.3k</span>
                                <span><i class="far fa-clock"></i> 7 min read</span>
                            </div>
                            <h3 class="eb-card-title">
                                <a href=" 'smart-gadgets') }}">Top 10 Smart Gadgets That Make Life Easier in 2024</a>
                            </h3>
                            <p class="eb-card-excerpt">
                                Stay ahead with the latest smart gadgets. From AI assistants to wearable tech, 
                                discover innovations that simplify your daily routine.
                            </p>
                            <div class="eb-card-footer">
                                <div class="eb-author">
                                    <img src="https://ui-avatars.com/api/?name=Tanvir+Khan&background=3577f0&color=fff&size=40" alt="Author">
                                    <span>Tanvir Khan</span>
                                </div>
                                <a href=" 'smart-gadgets') }}" class="eb-read-more">
                                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- ===== 2 Column Grid ===== -->
                    <div class="eb-duo-grid">
                        <div class="eb-duo-card">
                            <div class="eb-duo-thumb">
                                <a href=" 'sustainable-fashion') }}">
                                    <img src="https://images.unsplash.com/photo-1558171813-4c088753af8f?w=500&q=80" alt="Sustainable Fashion">
                                </a>
                            </div>
                            <div class="eb-duo-body">
                                <span class="eb-badge-sm">Fashion</span>
                                <h4><a href=" 'sustainable-fashion') }}">Why Sustainable Fashion Matters More Than Ever</a></h4>
                                <div class="eb-card-meta">
                                    <span><i class="far fa-calendar-alt"></i> Dec 18, 2023</span>
                                    <span><i class="far fa-eye"></i> 1.1k</span>
                                </div>
                                <a href=" 'sustainable-fashion') }}" class="eb-read-more">
                                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="eb-duo-card">
                            <div class="eb-duo-thumb">
                                <a href=" 'kitchen-essentials') }}">
                                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=500&q=80" alt="Kitchen">
                                </a>
                            </div>
                            <div class="eb-duo-body">
                                <span class="eb-badge-sm">Lifestyle</span>
                                <h4><a href=" 'kitchen-essentials') }}">Kitchen Essentials Every Home Cook Needs</a></h4>
                                <div class="eb-card-meta">
                                    <span><i class="far fa-calendar-alt"></i> Dec 15, 2023</span>
                                    <span><i class="far fa-eye"></i> 780</span>
                                </div>
                                <a href=" 'kitchen-essentials') }}" class="eb-read-more">
                                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ===== Pagination ===== -->
                    <div class="eb-pagination">
                        <a href="#" class="eb-page-btn disabled"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="eb-page-btn active">1</a>
                        <a href="#" class="eb-page-btn">2</a>
                        <a href="#" class="eb-page-btn">3</a>
                        <span class="eb-page-dots">...</span>
                        <a href="#" class="eb-page-btn">8</a>
                        <a href="#" class="eb-page-btn"><i class="fas fa-chevron-right"></i></a>
                    </div>

                </div>

                <!-- ====== Sidebar Column ====== -->
                <div class="col-lg-4">

                    <!-- Search -->
                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-search"></i> Search Posts</h4>
                        <form class="eb-search-form" action="#" method="GET">
                            <input type="text" name="search" placeholder="Type and hit enter...">
                            <button type="submit"><i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>

                    <!-- About Blog -->
                    <div class="eb-widget eb-widget-about">
                        <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f?w=400&q=80" alt="About Blog" class="eb-about-img">
                        <h4>Welcome to Our Blog</h4>
                        <p>Discover the latest trends, tips, and stories from the world of e-commerce and lifestyle.</p>
                        <div class="eb-about-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-folder-open"></i> Categories</h4>
                        <ul class="eb-cat-list">
                            <li>
                                <a href="#">
                                    <span class="eb-cat-icon"><i class="fas fa-tshirt"></i></span>
                                    <span class="eb-cat-name">Fashion</span>
                                </a>
                                <span class="eb-cat-count">12</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="eb-cat-icon"><i class="fas fa-laptop"></i></span>
                                    <span class="eb-cat-name">Technology</span>
                                </a>
                                <span class="eb-cat-count">8</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="eb-cat-icon"><i class="fas fa-couch"></i></span>
                                    <span class="eb-cat-name">Lifestyle</span>
                                </a>
                                <span class="eb-cat-count">15</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="eb-cat-icon"><i class="fas fa-shopping-cart"></i></span>
                                    <span class="eb-cat-name">Shopping Tips</span>
                                </a>
                                <span class="eb-cat-count">6</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="eb-cat-icon"><i class="fas fa-headphones"></i></span>
                                    <span class="eb-cat-name">Electronics</span>
                                </a>
                                <span class="eb-cat-count">10</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="eb-cat-icon"><i class="fas fa-spa"></i></span>
                                    <span class="eb-cat-name">Health & Beauty</span>
                                </a>
                                <span class="eb-cat-count">9</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Trending Now -->
                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-fire"></i> Trending Now</h4>

                        <div class="eb-trending-item">
                            <span class="eb-trending-num">01</span>
                            <div class="eb-trending-content">
                                <h6><a href=" 'ai-powered-shopping') }}">AI-Powered Shopping Experience</a></h6>
                                <span><i class="far fa-calendar-alt"></i> Jan 15, 2024</span>
                            </div>
                            <div class="eb-trending-thumb">
                                <img src="https://images.unsplash.com/photo-1557821552-17105176677c?w=100&q=80" alt="Post">
                            </div>
                        </div>

                        <div class="eb-trending-item">
                            <span class="eb-trending-num">02</span>
                            <div class="eb-trending-content">
                                <h6><a href=" 'fashion-trends') }}">10 Must-Have Fashion Trends</a></h6>
                                <span><i class="far fa-calendar-alt"></i> Jan 12, 2024</span>
                            </div>
                            <div class="eb-trending-thumb">
                                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=100&q=80" alt="Post">
                            </div>
                        </div>

                        <div class="eb-trending-item">
                            <span class="eb-trending-num">03</span>
                            <div class="eb-trending-content">
                                <h6><a href=" 'smart-gadgets') }}">Top 10 Smart Gadgets 2024</a></h6>
                                <span><i class="far fa-calendar-alt"></i> Dec 22, 2023</span>
                            </div>
                            <div class="eb-trending-thumb">
                                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=100&q=80" alt="Post">
                            </div>
                        </div>

                        <div class="eb-trending-item">
                            <span class="eb-trending-num">04</span>
                            <div class="eb-trending-content">
                                <h6><a href=" 'sneakers-guide') }}">Ultimate Sneakers Guide</a></h6>
                                <span><i class="far fa-calendar-alt"></i> Dec 28, 2023</span>
                            </div>
                            <div class="eb-trending-thumb">
                                <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=100&q=80" alt="Post">
                            </div>
                        </div>

                    </div>

                    <!-- Tags -->
                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-tags"></i> Popular Tags</h4>
                        <div class="eb-tags-cloud">
                            <a href="#">Fashion</a>
                            <a href="#">AI</a>
                            <a href="#">Gadgets</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Beauty</a>
                            <a href="#">Tech</a>
                            <a href="#">Decor</a>
                            <a href="#">Deals</a>
                            <a href="#">Trends</a>
                            <a href="#">Reviews</a>
                            <a href="#">Sneakers</a>
                            <a href="#">Tips</a>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="eb-widget eb-widget-newsletter">
                        <div class="eb-nl-icon"><i class="fas fa-paper-plane"></i></div>
                        <h4>Stay Updated!</h4>
                        <p>Get the latest posts delivered right to your inbox. No spam, ever.</p>
                        <form action="#" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Your email address..." required>
                            <button type="submit" class="axil-btn btn-bg-primary">
                                Subscribe <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                        <span class="eb-nl-note"><i class="fas fa-lock"></i> We respect your privacy</span>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <style>
        /* =====================================================
           BLOG PAGE - UNIQUE MAGAZINE STYLE
           ===================================================== */

        /* ===== Hero Row (2 cards side by side) ===== */
        .eb-hero-row {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        .eb-hero-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
        }
        .eb-hero-card a {
            display: block;
            height: 100%;
            text-decoration: none;
        }
        .eb-hero-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease, filter 0.4s;
        }
        .eb-hero-card:hover img {
            transform: scale(1.08);
            filter: brightness(0.85);
        }
        .eb-hero-card--big {
            height: 420px;
        }
        .eb-hero-card--small {
            height: 420px;
        }
        .eb-hero-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 30px;
            background: linear-gradient(0deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%);
        }
        .eb-badge {
            display: inline-block;
            background: #3577f0;
            color: #fff;
            padding: 5px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }
        .eb-hero-overlay h2 {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 12px;
        }
        .eb-hero-overlay h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 12px;
        }
        .eb-hero-meta span {
            color: rgba(255,255,255,0.8);
            font-size: 13px;
            margin-right: 15px;
        }
        .eb-hero-meta i {
            margin-right: 5px;
        }

        /* ===== Horizontal Card ===== */
        .eb-hori-card {
            display: flex;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            margin-bottom: 30px;
            transition: transform 0.4s, box-shadow 0.4s;
        }
        .eb-hori-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.12);
        }
        .eb-hori-thumb {
            position: relative;
            width: 320px;
            min-width: 320px;
            overflow: hidden;
        }
        .eb-hori-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .eb-hori-card:hover .eb-hori-thumb img {
            transform: scale(1.08);
        }
        .eb-hori-thumb .eb-badge {
            position: absolute;
            top: 15px;
            left: 15px;
        }
        .eb-hori-body {
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .eb-card-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 12px;
        }
        .eb-card-meta span {
            color: #999;
            font-size: 13px;
        }
        .eb-card-meta i {
            margin-right: 5px;
            color: #3577f0;
        }
        .eb-card-title a {
            color: #292930;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            text-decoration: none;
            transition: color 0.3s;
        }
        .eb-card-title a:hover {
            color: #3577f0;
        }
        .eb-card-excerpt {
            color: #777;
            font-size: 14px;
            line-height: 1.7;
            margin: 12px 0 20px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .eb-card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
        }
        .eb-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .eb-author img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
        }
        .eb-author span {
            color: #292930;
            font-size: 14px;
            font-weight: 600;
        }
        .eb-read-more {
            color: #3577f0;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: gap 0.3s;
        }
        .eb-read-more:hover {
            gap: 14px;
            color: #2563d4;
        }

        /* ===== 3 Column Mini Grid ===== */
        .eb-mini-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        .eb-mini-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.06);
            transition: transform 0.4s, box-shadow 0.4s;
        }
        .eb-mini-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        .eb-mini-thumb {
            position: relative;
            height: 160px;
            overflow: hidden;
        }
        .eb-mini-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .eb-mini-card:hover .eb-mini-thumb img {
            transform: scale(1.1);
        }
        .eb-badge-sm {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(255,255,255,0.95);
            color: #3577f0;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            backdrop-filter: blur(5px);
        }
        .eb-mini-body {
            padding: 18px;
        }
        .eb-mini-date {
            color: #999;
            font-size: 12px;
            display: block;
            margin-bottom: 8px;
        }
        .eb-mini-date i {
            margin-right: 4px;
        }
        .eb-mini-body h4 {
            margin: 0 0 12px;
            line-height: 1.4;
        }
        .eb-mini-body h4 a {
            color: #292930;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.3s;
        }
        .eb-mini-body h4 a:hover {
            color: #3577f0;
        }
        .eb-mini-link {
            color: #3577f0;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: gap 0.3s;
        }
        .eb-mini-link:hover {
            gap: 10px;
        }

        /* ===== Quote Banner ===== */
        .eb-quote-banner {
            background: linear-gradient(135deg, #292930, #3d3d47);
            border-radius: 12px;
            padding: 40px 35px;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .eb-quote-banner::before {
            content: '';
            position: absolute;
            top: -30px;
            right: -30px;
            width: 120px;
            height: 120px;
            background: rgba(53,119,240,0.15);
            border-radius: 50%;
        }
        .eb-quote-banner::after {
            content: '';
            position: absolute;
            bottom: -40px;
            left: -20px;
            width: 100px;
            height: 100px;
            background: rgba(53,119,240,0.1);
            border-radius: 50%;
        }
        .eb-quote-icon {
            color: #3577f0;
            font-size: 35px;
            margin-bottom: 15px;
        }
        .eb-quote-banner p {
            color: #fff;
            font-size: 18px;
            font-style: italic;
            line-height: 1.7;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }
        .eb-quote-banner span {
            color: #3577f0;
            font-weight: 600;
            font-size: 14px;
        }

        /* ===== 2 Column Grid ===== */
        .eb-duo-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        .eb-duo-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.06);
            transition: transform 0.4s, box-shadow 0.4s;
        }
        .eb-duo-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        .eb-duo-thumb {
            height: 200px;
            overflow: hidden;
        }
        .eb-duo-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .eb-duo-card:hover .eb-duo-thumb img {
            transform: scale(1.08);
        }
        .eb-duo-body {
            padding: 22px;
        }
        .eb-duo-body .eb-badge-sm {
            position: static;
            display: inline-block;
            margin-bottom: 10px;
        }
        .eb-duo-body h4 {
            margin-bottom: 12px;
        }
        .eb-duo-body h4 a {
            color: #292930;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.3s;
        }
        .eb-duo-body h4 a:hover {
            color: #3577f0;
        }

        /* ===== Pagination ===== */
        .eb-pagination {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 45px;
        }
        .eb-page-btn {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: #f6f7fb;
            color: #292930;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            border: 2px solid transparent;
            transition: all 0.3s;
        }
        .eb-page-btn:hover {
            background: #fff;
            border-color: #3577f0;
            color: #3577f0;
            transform: translateY(-2px);
        }
        .eb-page-btn.active {
            background: #3577f0;
            color: #fff;
            box-shadow: 0 5px 15px rgba(53,119,240,0.35);
        }
        .eb-page-btn.disabled {
            opacity: 0.4;
            pointer-events: none;
        }
        .eb-page-dots {
            color: #999;
            font-size: 16px;
            padding: 0 5px;
        }

        /* =====================================================
           SIDEBAR WIDGETS
           ===================================================== */
        .eb-widget {
            background: #fff;
            border-radius: 12px;
            padding: 28px;
            margin-bottom: 25px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
        }
        .eb-widget-title {
            font-size: 18px;
            font-weight: 700;
            color: #292930;
            margin-bottom: 20px;
            padding-bottom: 14px;
            border-bottom: 2px solid #f0f0f0;
            position: relative;
        }
        .eb-widget-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 45px;
            height: 2px;
            background: #3577f0;
        }
        .eb-widget-title i {
            color: #3577f0;
            margin-right: 8px;
            font-size: 16px;
        }

        /* Search Widget */
        .eb-search-form {
            position: relative;
        }
        .eb-search-form input {
            width: 100%;
            padding: 14px 55px 14px 18px;
            border: 2px solid #f0f0f0;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            transition: border-color 0.3s;
            background: #f9f9fb;
        }
        .eb-search-form input:focus {
            border-color: #3577f0;
            background: #fff;
        }
        .eb-search-form button {
            position: absolute;
            right: 6px;
            top: 50%;
            transform: translateY(-50%);
            background: #3577f0;
            color: #fff;
            border: none;
            width: 42px;
            height: 42px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .eb-search-form button:hover {
            background: #2563d4;
        }

        /* About Blog Widget */
        .eb-widget-about {
            text-align: center;
        }
        .eb-about-img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 18px;
        }
        .eb-widget-about h4 {
            color: #292930;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .eb-widget-about p {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 18px;
        }
        .eb-about-social {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .eb-about-social a {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f6f7fb;
            color: #3577f0;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 14px;
        }
        .eb-about-social a:hover {
            background: #3577f0;
            color: #fff;
            transform: translateY(-3px);
        }

        /* Categories Widget */
        .eb-cat-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .eb-cat-list li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            transition: padding 0.3s;
        }
        .eb-cat-list li:last-child {
            border-bottom: none;
        }
        .eb-cat-list li:hover {
            padding-left: 5px;
        }
        .eb-cat-list li a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #292930;
            transition: color 0.3s;
        }
        .eb-cat-list li a:hover {
            color: #3577f0;
        }
        .eb-cat-icon {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f3ff;
            color: #3577f0;
            border-radius: 8px;
            font-size: 13px;
        }
        .eb-cat-name {
            font-size: 14px;
            font-weight: 500;
        }
        .eb-cat-count {
            background: linear-gradient(135deg, #3577f0, #2563d4);
            color: #fff;
            padding: 3px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        /* Trending Widget */
        .eb-trending-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .eb-trending-item:last-child {
            border-bottom: none;
        }
        .eb-trending-num {
            font-size: 28px;
            font-weight: 800;
            color: #e8e8e8;
            min-width: 35px;
            line-height: 1;
        }
        .eb-trending-item:hover .eb-trending-num {
            color: #3577f0;
        }
        .eb-trending-content {
            flex-grow: 1;
        }
        .eb-trending-content h6 {
            margin: 0 0 5px;
            line-height: 1.4;
        }
        .eb-trending-content h6 a {
            color: #292930;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }
        .eb-trending-content h6 a:hover {
            color: #3577f0;
        }
        .eb-trending-content span {
            color: #999;
            font-size: 12px;
        }
        .eb-trending-content span i {
            margin-right: 4px;
        }
        .eb-trending-thumb {
            width: 65px;
            height: 65px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }
        .eb-trending-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s;
        }
        .eb-trending-item:hover .eb-trending-thumb img {
            transform: scale(1.1);
        }

        /* Tags Widget */
        .eb-tags-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .eb-tags-cloud a {
            background: #f6f7fb;
            color: #555;
            padding: 7px 16px;
            border-radius: 8px;
            font-size: 13px;
            text-decoration: none;
            border: 1px solid #eee;
            transition: all 0.3s;
        }
        .eb-tags-cloud a:hover {
            background: #3577f0;
            color: #fff;
            border-color: #3577f0;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(53,119,240,0.3);
        }

        /* Newsletter Widget */
        .eb-widget-newsletter {
            background: linear-gradient(135deg, #292930, #1d1d24);
            text-align: center;
            border: none;
            position: relative;
            overflow: hidden;
        }
        .eb-widget-newsletter::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(53,119,240,0.1);
            border-radius: 50%;
        }
        .eb-nl-icon {
            width: 70px;
            height: 70px;
            background: rgba(53,119,240,0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            font-size: 28px;
            color: #3577f0;
        }
        .eb-widget-newsletter h4 {
            color: #fff;
            font-size: 22px;
            margin-bottom: 10px;
        }
        .eb-widget-newsletter p {
            color: #aaa;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 22px;
        }
        .eb-widget-newsletter input {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid rgba(255,255,255,0.08);
            border-radius: 10px;
            background: rgba(255,255,255,0.05);
            color: #fff;
            outline: none;
            margin-bottom: 12px;
            font-size: 14px;
        }
        .eb-widget-newsletter input::placeholder {
            color: #888;
        }
        .eb-widget-newsletter input:focus {
            border-color: #3577f0;
            background: rgba(255,255,255,0.08);
        }
        .eb-widget-newsletter button {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 15px;
        }
        .eb-nl-note {
            display: block;
            color: #666;
            font-size: 12px;
            margin-top: 15px;
        }
        .eb-nl-note i {
            margin-right: 5px;
        }

        /* =====================================================
           RESPONSIVE
           ===================================================== */
        @media (max-width: 991px) {
            .eb-hero-row {
                grid-template-columns: 1fr;
            }
            .eb-hero-card--big,
            .eb-hero-card--small {
                height: 300px;
            }
            .eb-hori-card {
                flex-direction: column;
            }
            .eb-hori-thumb {
                width: 100%;
                min-width: 100%;
                height: 250px;
            }
            .eb-mini-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 767px) {
            .eb-hero-card--big,
            .eb-hero-card--small {
                height: 260px;
            }
            .eb-hero-overlay h2 {
                font-size: 20px;
            }
            .eb-hero-overlay h3 {
                font-size: 18px;
            }
            .eb-mini-grid {
                grid-template-columns: 1fr;
            }
            .eb-duo-grid {
                grid-template-columns: 1fr;
            }
            .eb-hori-body {
                padding: 22px;
            }
            .eb-card-footer {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }
            .eb-pagination {
                gap: 5px;
            }
            .eb-page-btn {
                width: 40px;
                height: 40px;
                font-size: 13px;
            }
        }
    </style>

@endsection