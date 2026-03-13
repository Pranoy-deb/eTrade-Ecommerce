@extends('layouts.frontend')
@section('title', 'Blog Details')
@section('frontend')

    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <h1 class="title">Blog Details</h1>
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
    <!-- End Breadcrumb Area  -->

    <!-- Start Blog Details Area -->
    <div class="bd-blog-details-area axil-section-gap">
        <div class="container">
            <div class="row row--30">

                <!-- Main Blog Content -->
                <div class="col-lg-8">
                    <article class="bd-article">

                        <!-- Header -->
                        <header class="bd-header">
                            <span class="bd-category-badge">Technology</span>
                            <h1 class="bd-title">
                                The Future of E‑Commerce: AI‑Powered Shopping Experience
                            </h1>

                            <div class="bd-meta">
                                <div class="bd-meta-left">
                                    <div class="bd-author">
                                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=3577f0&color=fff&size=60" alt="Author">
                                        <div class="bd-author-info">
                                            <h6>John Doe</h6>
                                            <span>Senior Content Writer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-meta-right">
                                    <span><i class="far fa-calendar-alt"></i> Jan 15, 2024</span>
                                    <span><i class="far fa-clock"></i> 8 min read</span>
                                    <span><i class="far fa-eye"></i> 2,543 Views</span>
                                </div>
                            </div>
                        </header>

                        <!-- Featured Image -->
                        <div class="bd-featured-img">
                            <img src="https://images.unsplash.com/photo-1557821552-17105176677c?w=1200&q=80" alt="AI Shopping">
                        </div>

                        <!-- Content Body -->
                        <div class="bd-content">

                            <p class="bd-lead">
                                Artificial Intelligence is transforming the way we shop online. From personalized product
                                recommendations to virtual try‑ons and smart chatbots, AI is making e‑commerce more intuitive,
                                efficient, and enjoyable for customers all over the world.
                            </p>

                            <h2>What is AI in E‑Commerce?</h2>
                            <p>
                                AI in e‑commerce refers to the use of machine learning, data analysis, and automation to improve
                                the shopping experience. It helps brands understand customer behavior, predict demand, and offer
                                more accurate product suggestions in real time.
                            </p>

                            <div class="bd-quote">
                                <i class="fas fa-quote-left"></i>
                                <p>
                                    “The brands that will win are the ones that use AI not just to sell more, but to serve
                                    customers better.”
                                </p>
                                <span>— Sarah Johnson, E‑Commerce Strategist</span>
                            </div>

                            <h2>Key Ways AI is Changing Online Shopping</h2>

                            <h3>1. Personalized Product Recommendations</h3>
                            <p>
                                You’ve probably noticed how online stores “magically” know what you want to buy. AI analyzes
                                browsing history, previous orders, and even time spent on a product page to show items you’re most
                                likely to purchase.
                            </p>

                            <div class="bd-img-grid">
                                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=600&q=80" alt="Data">
                                <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?w=600&q=80" alt="Online Shopping">
                            </div>

                            <h3>2. Virtual Try‑On & AR Shopping</h3>
                            <p>
                                With augmented reality (AR), customers can see how a product will look on them or in their home
                                before buying. From glasses and makeup to furniture and decor, virtual try‑ons reduce doubt and
                                increase confidence.
                            </p>

                            <h3>3. Smart Chatbots & 24/7 Support</h3>
                            <p>
                                AI chatbots can answer common questions, suggest products, track orders, and even handle basic
                                complaints — instantly and at any time of the day. This reduces pressure on support teams and
                                keeps customers happy.
                            </p>

                            <div class="bd-info-box">
                                <div class="bd-info-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div class="bd-info-text">
                                    <h4>Did You Know?</h4>
                                    <p>
                                        By 2025, over 80% of customer interactions in e‑commerce are expected to be handled by AI‑powered tools.
                                    </p>
                                </div>
                            </div>

                            <h2>Benefits of Using AI in Your Store</h2>
                            <ul class="bd-list">
                                <li><i class="fas fa-check-circle"></i> Better product discovery and search results</li>
                                <li><i class="fas fa-check-circle"></i> Higher conversion rates with personalized offers</li>
                                <li><i class="fas fa-check-circle"></i> Lower return rates thanks to better recommendations</li>
                                <li><i class="fas fa-check-circle"></i> Smarter inventory and demand forecasting</li>
                                <li><i class="fas fa-check-circle"></i> Faster, more accurate customer support</li>
                            </ul>

                            <h2>Challenges & Things to Consider</h2>
                            <p>
                                While AI is powerful, it’s not magic. You still need good data, clear goals, and ethical
                                practices. Be transparent about how you use customer data, and always give people control over
                                their privacy.
                            </p>

                            <div class="bd-conclusion">
                                <h3>Final Thoughts</h3>
                                <p>
                                    AI won’t replace humans in e‑commerce — but it will empower them. When used correctly,
                                    AI lets brands create shopping experiences that feel personal, helpful, and enjoyable. 
                                    The future of online shopping is not just digital, it’s intelligent.
                                </p>
                            </div>

                        </div>

                        <!-- Footer (tags + share) -->
                        <footer class="bd-footer">
                            <div class="bd-tags">
                                <span class="bd-tags-label"><i class="fas fa-tags"></i> Tags:</span>
                                <a href="#">AI</a>
                                <a href="#">E‑Commerce</a>
                                <a href="#">Technology</a>
                                <a href="#">Shopping</a>
                            </div>
                            <div class="bd-share">
                                <span class="bd-share-label"><i class="fas fa-share-alt"></i> Share:</span>
                                <a href="#" class="bd-share-btn fb"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="bd-share-btn tw"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="bd-share-btn ln"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="bd-share-btn pt"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </footer>

                        <!-- Author Box -->
                        <section class="bd-author-box">
                            <div class="bd-author-avatar">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=3577f0&color=fff&size=100" alt="Author">
                            </div>
                            <div class="bd-author-body">
                                <h4>About John Doe</h4>
                                <p>
                                    John is a technology and e‑commerce writer with 8+ years of experience. He loves breaking down
                                    complex topics into simple, actionable guides for online business owners.
                                </p>
                                <div class="bd-author-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </section>

                        <!-- Related Posts -->
                        <section class="bd-related">
                            <h3 class="bd-section-title">You may also like</h3>
                            <div class="row row--15">
                                <div class="col-md-6 mb--20">
                                    <div class="bd-related-card">
                                        <a href="" class="bd-related-thumb">
                                            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&q=80" alt="Fashion">
                                        </a>
                                        <div class="bd-related-body">
                                            <span class="bd-related-cat">Fashion</span>
                                            <h4>
                                                <a href="">
                                                    10 Must‑Have Fashion Trends for Spring 2024
                                                </a>
                                            </h4>
                                            <span class="bd-related-date"><i class="far fa-calendar-alt"></i> Jan 12, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb--20">
                                    <div class="bd-related-card">
                                        <a href="" class="bd-related-thumb">
                                            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600&q=80" alt="Gadgets">
                                        </a>
                                        <div class="bd-related-body">
                                            <span class="bd-related-cat">Tech</span>
                                            <h4>
                                                <a href="">
                                                    Top 10 Smart Gadgets That Make Life Easier
                                                </a>
                                            </h4>
                                            <span class="bd-related-date"><i class="far fa-calendar-alt"></i> Dec 22, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Comment Form (simple) -->
                        <section class="bd-comment-form">
                            <h3 class="bd-section-title">Leave a Comment</h3>
                            <form action="#" method="POST">
                                @csrf
                                <div class="row row--10">
                                    <div class="col-md-6">
                                        <div class="bd-form-group">
                                            <input type="text" name="name" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bd-form-group">
                                            <input type="email" name="email" placeholder="Your Email *" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="bd-form-group">
                                            <textarea name="comment" rows="4" placeholder="Your Comment *" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="axil-btn btn-bg-primary">
                                            <i class="fas fa-paper-plane"></i> Post Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </section>

                    </article>
                </div>

                <!-- Sidebar (same vibe as blog list) -->
                <div class="col-lg-4">

                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-search"></i> Search Posts</h4>
                        <form class="eb-search-form" action="{{ route('frontend.blog') }}" method="GET">
                            <input type="text" name="search" placeholder="Search articles...">
                            <button type="submit"><i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>

                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-folder-open"></i> Categories</h4>
                        <ul class="eb-cat-list">
                            <li>
                                <a href="#"><span class="eb-cat-icon"><i class="fas fa-tshirt"></i></span><span class="eb-cat-name">Fashion</span></a>
                                <span class="eb-cat-count">12</span>
                            </li>
                            <li>
                                <a href="#"><span class="eb-cat-icon"><i class="fas fa-laptop"></i></span><span class="eb-cat-name">Technology</span></a>
                                <span class="eb-cat-count">8</span>
                            </li>
                            <li>
                                <a href="#"><span class="eb-cat-icon"><i class="fas fa-couch"></i></span><span class="eb-cat-name">Lifestyle</span></a>
                                <span class="eb-cat-count">15</span>
                            </li>
                        </ul>
                    </div>

                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-fire"></i> Trending Now</h4>
                        <div class="eb-trending-item">
                            <span class="eb-trending-num">01</span>
                            <div class="eb-trending-content">
                                <h6><a href="">AI‑Powered Shopping Experience</a></h6>
                                <span><i class="far fa-calendar-alt"></i> Jan 15, 2024</span>
                            </div>
                            <div class="eb-trending-thumb">
                                <img src="https://images.unsplash.com/photo-1557821552-17105176677c?w=100&q=80" alt="Post">
                            </div>
                        </div>
                        <div class="eb-trending-item">
                            <span class="eb-trending-num">02</span>
                            <div class="eb-trending-content">
                                <h6><a href="">Must‑Have Fashion Trends</a></h6>
                                <span><i class="far fa-calendar-alt"></i> Jan 12, 2024</span>
                            </div>
                            <div class="eb-trending-thumb">
                                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=100&q=80" alt="Post">
                            </div>
                        </div>
                    </div>

                    <div class="eb-widget">
                        <h4 class="eb-widget-title"><i class="fas fa-tags"></i> Popular Tags</h4>
                        <div class="eb-tags-cloud">
                            <a href="#">AI</a>
                            <a href="#">E‑Commerce</a>
                            <a href="#">Fashion</a>
                            <a href="#">Gadgets</a>
                            <a href="#">Tips</a>
                            <a href="#">Deals</a>
                        </div>
                    </div>

                    <div class="eb-widget eb-widget-newsletter">
                        <div class="eb-nl-icon"><i class="fas fa-paper-plane"></i></div>
                        <h4>Stay Updated!</h4>
                        <p>Get our latest articles and shopping tips directly in your inbox.</p>
                        <form action="#" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Your email address..." required>
                            <button type="submit" class="axil-btn btn-bg-primary">
                                Subscribe <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                        <span class="eb-nl-note"><i class="fas fa-lock"></i> We never share your email</span>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Blog Details Area -->

    <style>
        /* ===== MAIN ARTICLE ===== */
        .bd-article{
            background:#fff;border-radius:12px;padding:35px 35px 40px;
            box-shadow:0 5px 25px rgba(0,0,0,0.06)
        }
        .bd-category-badge{
            display:inline-block;background:#3577f0;color:#fff;
            padding:6px 18px;border-radius:999px;font-size:12px;
            font-weight:700;text-transform:uppercase;letter-spacing:.5px;
            margin-bottom:12px
        }
        .bd-title{
            font-size:30px;font-weight:700;color:#292930;
            line-height:1.4;margin-bottom:20px
        }
        .bd-meta{
            display:flex;justify-content:space-between;align-items:center;
            padding:18px 0;border-top:1px solid #eee;border-bottom:1px solid #eee;
            margin-bottom:25px
        }
        .bd-author{display:flex;align-items:center;gap:12px}
        .bd-author img{width:50px;height:50px;border-radius:50%;object-fit:cover}
        .bd-author-info h6{margin:0;font-size:15px;font-weight:600;color:#292930}
        .bd-author-info span{font-size:13px;color:#999}
        .bd-meta-right span{font-size:13px;color:#999;margin-left:15px}
        .bd-meta-right i{margin-right:5px;color:#3577f0}

        .bd-featured-img{border-radius:10px;overflow:hidden;margin-bottom:25px}
        .bd-featured-img img{width:100%;display:block;object-fit:cover}

        .bd-content{color:#555;font-size:15px;line-height:1.8}
        .bd-lead{
            font-size:18px;color:#292930;font-weight:500;
            margin-bottom:25px
        }
        .bd-content h2{
            font-size:24px;font-weight:700;color:#292930;
            margin:30px 0 15px
        }
        .bd-content h3{
            font-size:19px;font-weight:700;color:#292930;
            margin:25px 0 10px
        }
        .bd-content p{margin-bottom:15px}

        .bd-quote{
            position:relative;margin:30px 0;padding:25px 25px 20px 25px;
            background:linear-gradient(135deg,#f6f7fb,#e8eaf6);
            border-left:4px solid #3577f0;border-radius:8px
        }
        .bd-quote i{
            position:absolute;top:15px;left:15px;font-size:32px;
            color:#3577f0;opacity:.2
        }
        .bd-quote p{
            margin:0 0 10px 30px;font-style:italic;font-size:16px;
            color:#292930
        }
        .bd-quote span{margin-left:30px;font-size:13px;color:#555;font-weight:600}

        .bd-img-grid{
            display:grid;grid-template-columns:1fr 1fr;gap:15px;
            margin:20px 0
        }
        .bd-img-grid img{
            width:100%;height:210px;object-fit:cover;border-radius:8px
        }

        .bd-info-box{
            display:flex;gap:15px;align-items:flex-start;
            background:linear-gradient(135deg,#fff4e6,#ffffff);
            border:1px solid #ffd59b;border-radius:8px;padding:18px 18px 15px;
            margin:22px 0
        }
        .bd-info-icon{
            width:40px;height:40px;border-radius:50%;
            background:#ffd59b;display:flex;align-items:center;
            justify-content:center;color:#8c5400
        }
        .bd-info-text h4{margin:0 0 6px;font-size:15px;color:#292930}
        .bd-info-text p{margin:0;font-size:14px;color:#555}

        .bd-list{list-style:none;padding:0;margin:15px 0 20px}
        .bd-list li{position:relative;padding-left:26px;margin-bottom:8px;font-size:14px}
        .bd-list i{
            position:absolute;left:0;top:3px;color:#22c55e;font-size:14px
        }

        .bd-conclusion{
            margin-top:25px;padding:18px 18px 15px;border-radius:8px;
            background:#f6f7fb
        }
        .bd-conclusion h3{margin-top:0;font-size:18px;color:#292930}

        /* ===== Footer tags & share ===== */
        .bd-footer{
            display:flex;justify-content:space-between;align-items:center;
            flex-wrap:wrap;gap:15px;padding-top:20px;border-top:1px solid #eee;
            margin-top:25px
        }
        .bd-tags{display:flex;flex-wrap:wrap;gap:8px;align-items:center}
        .bd-tags-label{font-size:14px;font-weight:600;color:#292930;margin-right:5px}
        .bd-tags-label i{margin-right:5px}
        .bd-tags a{
            padding:5px 14px;border-radius:16px;border:1px solid #e4e4e4;
            background:#f6f7fb;font-size:13px;color:#555;text-decoration:none;
            transition:.25s
        }
        .bd-tags a:hover{
            background:#3577f0;color:#fff;border-color:#3577f0
        }

        .bd-share{display:flex;align-items:center;gap:8px}
        .bd-share-label{font-size:14px;font-weight:600;color:#292930}
        .bd-share-label i{margin-right:5px}
        .bd-share-btn{
            width:34px;height:34px;border-radius:50%;display:flex;
            align-items:center;justify-content:center;color:#fff;
            text-decoration:none;font-size:14px;transition:.25s
        }
        .bd-share-btn.fb{background:#1877f2}
        .bd-share-btn.tw{background:#1da1f2}
        .bd-share-btn.ln{background:#0a66c2}
        .bd-share-btn.pt{background:#e60023}
        .bd-share-btn:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,0.2)}

        /* ===== Author Box ===== */
        .bd-author-box{
            display:flex;gap:18px;margin-top:30px;padding:20px;
            border-radius:10px;background:linear-gradient(135deg,#f6f7fb,#e9ecff)
        }
        .bd-author-avatar img{
            width:80px;height:80px;border-radius:50%;object-fit:cover;
            border:3px solid #fff
        }
        .bd-author-body h4{margin:0 0 8px;font-size:18px;color:#292930}
        .bd-author-body p{margin:0 0 10px;font-size:14px;color:#555}
        .bd-author-social{display:flex;gap:8px}
        .bd-author-social a{
            width:32px;height:32px;border-radius:50%;display:flex;
            align-items:center;justify-content:center;background:#fff;
            color:#3577f0;font-size:14px;text-decoration:none;transition:.25s
        }
        .bd-author-social a:hover{
            background:#3577f0;color:#fff;transform:translateY(-2px)
        }

        /* ===== Related posts ===== */
        .bd-section-title{
            font-size:20px;font-weight:700;color:#292930;margin:30px 0 18px;
            position:relative;padding-bottom:10px
        }
        .bd-section-title::after{
            content:'';position:absolute;bottom:0;left:0;width:50px;height:2px;
            background:#3577f0
        }
        .bd-related-card{
            background:#fff;border-radius:10px;overflow:hidden;
            box-shadow:0 3px 15px rgba(0,0,0,0.05);transition:.25s
        }
        .bd-related-card:hover{
            transform:translateY(-4px);
            box-shadow:0 8px 25px rgba(0,0,0,0.12)
        }
        .bd-related-thumb{
            display:block;height:170px;overflow:hidden
        }
        .bd-related-thumb img{
            width:100%;height:100%;object-fit:cover;transition:.35s
        }
        .bd-related-card:hover .bd-related-thumb img{transform:scale(1.08)}
        .bd-related-body{padding:15px 16px 16px}
        .bd-related-cat{
            display:inline-block;background:#f6f7fb;color:#3577f0;
            font-size:11px;font-weight:600;border-radius:12px;
            padding:3px 10px;margin-bottom:8px
        }
        .bd-related-body h4{
            margin:0 0 8px;font-size:15px;line-height:1.4
        }
        .bd-related-body h4 a{
            color:#292930;text-decoration:none;transition:.25s
        }
        .bd-related-body h4 a:hover{color:#3577f0}
        .bd-related-date{font-size:12px;color:#999}
        .bd-related-date i{margin-right:4px}

        /* ===== Comment form (simple styling) ===== */
        .bd-comment-form{margin-top:30px}
        .bd-form-group{margin-bottom:15px}
        .bd-form-group input,
        .bd-form-group textarea{
            width:100%;padding:12px 14px;border-radius:8px;
            border:1px solid #e4e4e4;font-size:14px;outline:none;
            transition:.25s;background:#f9fafb
        }
        .bd-form-group input:focus,
        .bd-form-group textarea:focus{
            border-color:#3577f0;background:#fff
        }
        .bd-form-group textarea{resize:vertical}

        /* ===== Reuse some sidebar CSS from previous page ===== */
        .eb-widget{
            background:#fff;border-radius:12px;padding:24px;
            margin-bottom:22px;box-shadow:0 3px 15px rgba(0,0,0,0.05)
        }
        .eb-widget-title{
            font-size:17px;font-weight:700;color:#292930;
            margin-bottom:16px;padding-bottom:10px;border-bottom:1px solid #f0f0f0
        }
        .eb-widget-title i{color:#3577f0;margin-right:6px}
        .eb-search-form{position:relative}
        .eb-search-form input{
            width:100%;padding:12px 45px 12px 14px;border-radius:8px;
            border:1px solid #e4e4e4;font-size:14px;background:#f9fafb;
            outline:none;transition:.25s
        }
        .eb-search-form input:focus{border-color:#3577f0;background:#fff}
        .eb-search-form button{
            position:absolute;right:4px;top:50%;transform:translateY(-50%);
            width:38px;height:38px;border-radius:8px;border:none;
            background:#3577f0;color:#fff;cursor:pointer
        }

        .eb-cat-list{list-style:none;padding:0;margin:0}
        .eb-cat-list li{
            display:flex;justify-content:space-between;align-items:center;
            padding:10px 0;border-bottom:1px solid #f3f3f3
        }
        .eb-cat-list li:last-child{border-bottom:none}
        .eb-cat-list li a{
            display:flex;align-items:center;gap:10px;color:#292930;
            text-decoration:none;font-size:14px;transition:.25s
        }
        .eb-cat-list li a:hover{color:#3577f0;padding-left:3px}
        .eb-cat-icon{
            width:28px;height:28px;border-radius:8px;background:#f0f3ff;
            display:flex;align-items:center;justify-content:center;
            color:#3577f0;font-size:13px
        }
        .eb-cat-count{
            padding:3px 10px;border-radius:14px;background:#3577f0;
            color:#fff;font-size:12px
        }

        .eb-trending-item{
            display:flex;align-items:center;gap:10px;padding:10px 0;
            border-bottom:1px solid #f3f3f3
        }
        .eb-trending-item:last-child{border-bottom:none}
        .eb-trending-num{
            font-size:22px;font-weight:800;color:#e1e1e1;min-width:28px
        }
        .eb-trending-content h6{margin:0 0 4px;font-size:14px}
        .eb-trending-content h6 a{
            color:#292930;text-decoration:none;transition:.25s
        }
        .eb-trending-content h6 a:hover{color:#3577f0}
        .eb-trending-content span{font-size:12px;color:#999}
        .eb-trending-thumb{
            width:55px;height:55px;border-radius:8px;overflow:hidden;
            flex-shrink:0
        }
        .eb-trending-thumb img{
            width:100%;height:100%;object-fit:cover;transition:.3s
        }
        .eb-trending-item:hover .eb-trending-thumb img{transform:scale(1.08)}

        .eb-tags-cloud{display:flex;flex-wrap:wrap;gap:8px}
        .eb-tags-cloud a{
            padding:6px 14px;border-radius:999px;background:#f6f7fb;
            font-size:13px;color:#555;text-decoration:none;
            border:1px solid #eee;transition:.25s
        }
        .eb-tags-cloud a:hover{
            background:#3577f0;color:#fff;border-color:#3577f0
        }

        .eb-widget-newsletter{
            background:linear-gradient(135deg,#292930,#1d1d24);
            color:#fff;text-align:center
        }
        .eb-nl-icon{
            width:60px;height:60px;border-radius:50%;
            background:rgba(53,119,240,0.15);display:flex;
            align-items:center;justify-content:center;margin:0 auto 14px;
            font-size:24px;color:#3577f0
        }
        .eb-widget-newsletter h4{margin:0 0 6px;font-size:20px}
        .eb-widget-newsletter p{font-size:14px;color:#aaa;margin-bottom:14px}
        .eb-widget-newsletter input{
            width:100%;padding:12px 14px;border-radius:8px;border:none;
            margin-bottom:10px;background:rgba(255,255,255,0.06);
            color:#fff;font-size:14px;outline:none
        }
        .eb-widget-newsletter input::placeholder{color:#888}
        .eb-widget-newsletter button{
            width:100%;padding:12px;border-radius:8px;font-size:14px
        }
        .eb-nl-note{font-size:11px;color:#777;margin-top:8px;display:block}
        .eb-nl-note i{margin-right:4px}

        /* ===== Responsive ===== */
        @media (max-width: 991px){
            .bd-article{padding:25px}
            .bd-meta{flex-direction:column;align-items:flex-start;gap:10px}
            .bd-meta-right span{margin-left:0;margin-right:10px}
        }
        @media (max-width: 767px){
            .bd-title{font-size:24px}
            .bd-img-grid{grid-template-columns:1fr}
            .bd-author-box{
                flex-direction:column;align-items:center;text-align:center
            }
            .bd-meta{padding:15px 0}
        }
    </style>

@endsection