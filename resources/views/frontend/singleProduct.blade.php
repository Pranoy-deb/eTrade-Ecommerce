@extends('layouts.frontend')
@section('title', $product->title)
@section('frontend')
{{-- @dd($product->category->title) --}}
{{-- @dd($reviews) --}}

        <!-- Start Shop Area  -->
        <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
            <div class="single-product-thumb mb--40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">

                                <!-- Large Images -->
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail-wrap zoom-gallery">
                                        <div class="single-product-thumbnail product-large-thumbnail-3 axil-product">

                                            <!-- Featured Image -->
                                            <div class="thumbnail">
                                                <a href="{{ asset('storage/' . $product->featured_img) }}" class="popup-zoom">
                                                    <img src="{{ asset('storage/' . $product->featured_img) }}" alt="Product Images">
                                                </a>
                                            </div>

                                            <!-- Gallery Images -->
                                            @if (count(json_decode($product->gall_img)) > 0)
                                                
                                            @foreach (json_decode($product->gall_img) as $img)
                                            <div class="thumbnail">
                                                    <a href="{{ asset('storage/' . $img) }}" class="popup-zoom">
                                                        <img src="{{ asset('storage/' . $img) }}" alt="Product Images">
                                                    </a>
                                                </div>
                                            @endforeach
                                            @endif
                                        </div>

                                        <div class="label-block">
                                            <div class="product-badget">20% OFF</div>
                                        </div>

                                        <div class="product-quick-view position-view">
                                            <a href="{{ asset('storage/' . $product->featured_img) }}" class="popup-zoom">
                                                <i class="far fa-search-plus"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <!-- Small Images -->
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb-3 small-thumb-wrapper">

                                        <!-- Featured Small -->
                                        <div class="small-thumb-img">
                                            <img src="{{ asset('storage/' . $product->featured_img) }}" alt="thumb image">
                                        </div>

                                        <!-- Gallery Small -->
                                        @if (count(json_decode($product->gall_img)) > 0)
                                        @foreach (json_decode($product->gall_img) as $img)
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('storage/' . $img) }}" alt="thumb image">
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h2 class="product-title">{{ $product->title }}</h2>
                                    <span class="price-amount">BDT {{ number_format(($product->sellign_price && $product->sellign_price > 0) ? $product->sellign_price : $product->price,2) }}</span>
                                    @php
                                        $filled = round($avg_rating);
                                        $empty  = 5 - $filled;
                                    @endphp

                                    <div class="product-rating">
                                        <div class="star-rating">
                                            @for ($i = 1; $i <= $filled; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                            @for ($i = 1; $i <= $empty; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor
                                        </div>
                                        <div class="review-link">
                                            <a href="single-product-3.html#">(<span>{{count($reviews)}}</span> customer reviews)</a>
                                        </div>
                                    </div>
                                    <ul class="product-meta">
                                        <li><i class="fal fa-check"></i>In stock</li>
                                        <li><i class="fal fa-check"></i>Free delivery available</li>
                                        <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                    </ul>
                                    <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        {{-- <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        {{-- <div class="product-variation product-size-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div> --}}
                                        <!-- End Product Variation  -->

                                    </div>

                                    <form action="{{ route('frontend.cart') }}" method="POST">
                                        @csrf

                                        <!-- Quantity (UNCHANGED) -->
                                        <div class="product-action-wrapper d-flex-center mb-4">
                                            <samp class="fs-3 text-dark">Qantity</samp>

                                            <div class="pro-qty">
                                                <input type="text" name="qty" value="1">
                                            </div>

                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        </div>

                                        <!-- Buttons (Responsive only) -->
                                        <div class="d-flex flex-column flex-md-row gap-2">
                                            <button type="submit" class="axil-btn btn btn-primary w-100 w-md-auto">
                                                Add to Cart
                                            </button>

                                            <button type="submit" class="axil-btn btn btn-warning w-100 w-md-auto">
                                                Buy Now
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

            <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white">
                <div class="container">
                    <ul class="nav tabs" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="active" id="additional-info-tab" data-bs-toggle="tab" href="single-product-3.html#additional-info" role="tab" aria-controls="additional-info" aria-selected="false">Additional Information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a  id="description-tab" data-bs-toggle="tab" href="single-product-3.html#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="reviews-tab" data-bs-toggle="tab" href="single-product-3.html#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                <div class="tab-content" id="myTabContent">
                    @if($product->category->title == 'Earbuds/TWS')
                        {{-- Earbuds/TWS Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>Driver Size</th>
                                        <td>10 mm Dynamic Drivers</td>
                                    </tr>
                                    <tr>
                                        <th>Frequency Response</th>
                                        <td>20 Hz – 20 kHz</td>
                                    </tr>
                                    <tr>
                                        <th>Noise Cancellation</th>
                                        <td>Active Noise Cancellation (ANC) + Transparency Mode</td>
                                    </tr>
                                    <tr>
                                        <th>Microphones</th>
                                        <td>Dual Beamforming Mics (per earbud)</td>
                                    </tr>
                                    <tr>
                                        <th>Connectivity</th>
                                        <td>Bluetooth 5.3</td>
                                    </tr>
                                    <tr>
                                        <th>Codec Support</th>
                                        <td>AAC, SBC, aptX Adaptive</td>
                                    </tr>
                                    <tr>
                                        <th>Battery Life (Earbuds)</th>
                                        <td>Up to 6 hours (with ANC on)</td>
                                    </tr>
                                    <tr>
                                        <th>Battery Life (with Case)</th>
                                        <td>Up to 24 hours total</td>
                                    </tr>
                                    <tr>
                                        <th>Charging</th>
                                        <td>USB-C Fast Charging, Wireless Charging</td>
                                    </tr>
                                    <tr>
                                        <th>Water Resistance</th>
                                        <td>IPX4 (sweat & splash resistant)</td>
                                    </tr>
                                    <tr>
                                        <th>Controls</th>
                                        <td>Touch Controls (play/pause, skip, voice assistant)</td>
                                    </tr>
                                    <tr>
                                        <th>Compatibility</th>
                                        <td>Android & iOS</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td>Earbuds: 21 mm × 18 mm × 24 mm | Case: 60 mm × 45 mm × 25 mm</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>Earbuds: 5 g each | Case: 40 g</td>
                                    </tr>
                                    <tr>
                                        <th>Warranty</th>
                                        <td>12 months</td>
                                    </tr>
                                    <tr>
                                        <th>Color Options</th>
                                        <td>Black, White, Blue</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>

                    @elseif($product->category->title == 'Smart TV')
                        {{-- Smart TV Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                        <div class="product-additional-info">
                            <div class="table-responsive">
                            <table>
                                <tbody>
                                <tr>
                                    <th>Screen Size</th>
                                    <td>55″</td>
                                </tr>
                                <tr>
                                    <th>Display Type</th>
                                    <td>OLED / QLED / LED</td>
                                </tr>
                                <tr>
                                    <th>Resolution</th>
                                    <td>3840 × 2160 (4K UHD)</td>
                                </tr>
                                <tr>
                                    <th>Refresh Rate</th>
                                    <td>120 Hz</td>
                                </tr>
                                <tr>
                                    <th>HDR Support</th>
                                    <td>HDR10+, Dolby Vision</td>
                                </tr>
                                <tr>
                                    <th>Operating System</th>
                                    <td>Google TV / Tizen / webOS</td>
                                </tr>
                                <tr>
                                    <th>Processor</th>
                                    <td>Quad-Core Smart Processor</td>
                                </tr>
                                <tr>
                                    <th>Connectivity</th>
                                    <td>Wi‑Fi 6, Bluetooth 5.0, Ethernet</td>
                                </tr>
                                <tr>
                                    <th>Ports</th>
                                    <td>HDMI 2.1 × 4, USB × 2, Optical Audio</td>
                                </tr>
                                <tr>
                                    <th>Audio</th>
                                    <td>Dolby Atmos, 20W Stereo Speakers</td>
                                </tr>
                                <tr>
                                    <th>Smart Features</th>
                                    <td>Voice Assistant, Screen Mirroring, App Store</td>
                                </tr>
                                <tr>
                                    <th>Dimensions</th>
                                    <td>48.5″W × 28″H × 2.1″D (without stand)</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>17 kg</td>
                                </tr>
                                <tr>
                                    <th>Warranty</th>
                                    <td>24 months</td>
                                </tr>
                                <tr>
                                    <th>Color Options</th>
                                    <td>Black, Silver</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>

                    @elseif($product->category->title == 'Phone')
                        {{-- Phone Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                          <div class="product-additional-info">
                            <div class="table-responsive">
                            <table>
                                <tbody>
                                <tr>
                                    <th>Display</th>
                                    <td>6.7″ AMOLED, 120 Hz</td>
                                </tr>
                                <tr>
                                    <th>Resolution</th>
                                    <td>2400 × 1080 px (FHD+)</td>
                                </tr>
                                <tr>
                                    <th>Processor</th>
                                    <td>Qualcomm Snapdragon 8 Gen 2 / Apple A17 Bionic</td>
                                </tr>
                                <tr>
                                    <th>RAM</th>
                                    <td>8 GB / 12 GB</td>
                                </tr>
                                <tr>
                                    <th>Storage</th>
                                    <td>128 GB / 256 GB / 512 GB</td>
                                </tr>
                                <tr>
                                    <th>Operating System</th>
                                    <td>Android 14 / iOS 17</td>
                                </tr>
                                <tr>
                                    <th>Rear Camera</th>
                                    <td>50 MP (Wide) + 12 MP (Ultra-wide) + 10 MP (Telephoto)</td>
                                </tr>
                                <tr>
                                    <th>Front Camera</th>
                                    <td>32 MP</td>
                                </tr>
                                <tr>
                                    <th>Battery</th>
                                    <td>5000 mAh, Fast Charging 65W, Wireless Charging</td>
                                </tr>
                                <tr>
                                    <th>Connectivity</th>
                                    <td>5G, Wi‑Fi 6E, Bluetooth 5.3, NFC</td>
                                </tr>
                                <tr>
                                    <th>SIM</th>
                                    <td>Dual SIM (Nano + eSIM)</td>
                                </tr>
                                <tr>
                                    <th>Security</th>
                                    <td>Fingerprint (under-display), Face Unlock</td>
                                </tr>
                                <tr>
                                    <th>Dimensions</th>
                                    <td>161 mm × 75 mm × 8.5 mm</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>195 g</td>
                                </tr>
                                <tr>
                                    <th>Warranty</th>
                                    <td>12 months</td>
                                </tr>
                                <tr>
                                    <th>Color Options</th>
                                    <td>Black, Blue, Silver, Gold</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                          </div>
                        </div>

                    @elseif($product->category->title == 'Monitor')
                        {{-- Monitor Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                        <div class="product-additional-info">
                            <div class="table-responsive">
                            <table>
                                <tbody>
                                <tr>
                                    <th>Screen Size</th>
                                    <td>27″</td>
                                </tr>
                                <tr>
                                    <th>Panel Type</th>
                                    <td>IPS / VA / OLED</td>
                                </tr>
                                <tr>
                                    <th>Resolution</th>
                                    <td>2560 × 1440 (QHD)</td>
                                </tr>
                                <tr>
                                    <th>Refresh Rate</th>
                                    <td>165 Hz</td>
                                </tr>
                                <tr>
                                    <th>Response Time</th>
                                    <td>1 ms (GtG)</td>
                                </tr>
                                <tr>
                                    <th>Brightness</th>
                                    <td>350 nits</td>
                                </tr>
                                <tr>
                                    <th>Contrast Ratio</th>
                                    <td>1000:1</td>
                                </tr>
                                <tr>
                                    <th>Color Support</th>
                                    <td>99% sRGB, HDR10</td>
                                </tr>
                                <tr>
                                    <th>Connectivity</th>
                                    <td>HDMI 2.1, DisplayPort 1.4, USB-C</td>
                                </tr>
                                <tr>
                                    <th>Audio</th>
                                    <td>Built-in Speakers (optional)</td>
                                </tr>
                                <tr>
                                    <th>Stand Adjustments</th>
                                    <td>Tilt, Height, Swivel, Pivot</td>
                                </tr>
                                <tr>
                                    <th>VESA Mount</th>
                                    <td>100 × 100 mm</td>
                                </tr>
                                <tr>
                                    <th>Dimensions</th>
                                    <td>24″W × 15″H × 8″D (with stand)</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>6.5 kg</td>
                                </tr>
                                <tr>
                                    <th>Warranty</th>
                                    <td>24 months</td>
                                </tr>
                                <tr>
                                    <th>Color Options</th>
                                    <td>Black, White</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>

                    @elseif($product->category->title == 'Camera')
                        {{-- Camera Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>Camera Type</th>
                                        <td>DSLR / Mirrorless / Compact</td>
                                    </tr>
                                    <tr>
                                        <th>Sensor</th>
                                        <td>Full-Frame CMOS, 24.2 MP</td>
                                    </tr>
                                    <tr>
                                        <th>Lens Mount</th>
                                        <td>Canon RF / Nikon Z / Sony E</td>
                                    </tr>
                                    <tr>
                                        <th>ISO Range</th>
                                        <td>100 – 51,200 (expandable)</td>
                                    </tr>
                                    <tr>
                                        <th>Shutter Speed</th>
                                        <td>1/8000 – 30 sec</td>
                                    </tr>
                                    <tr>
                                        <th>Autofocus</th>
                                        <td>Dual Pixel AF, 1053 points</td>
                                    </tr>
                                    <tr>
                                        <th>Continuous Shooting</th>
                                        <td>Up to 12 fps (mechanical), 20 fps (electronic)</td>
                                    </tr>
                                    <tr>
                                        <th>Video Recording</th>
                                        <td>4K UHD 60 fps, Full HD 120 fps</td>
                                    </tr>
                                    <tr>
                                        <th>Viewfinder</th>
                                        <td>Electronic OLED, 3.69M dots</td>
                                    </tr>
                                    <tr>
                                        <th>Display</th>
                                        <td>3.0″ Vari-angle Touchscreen, 1.04M dots</td>
                                    </tr>
                                    <tr>
                                        <th>Connectivity</th>
                                        <td>Wi‑Fi, Bluetooth, USB-C, HDMI</td>
                                    </tr>
                                    <tr>
                                        <th>Storage Media</th>
                                        <td>SD/SDHC/SDXC (UHS-II)</td>
                                    </tr>
                                    <tr>
                                        <th>Battery</th>
                                        <td>LP-E6NH, up to 800 shots</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td>138 mm × 97 mm × 88 mm</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>650 g (with battery & card)</td>
                                    </tr>
                                    <tr>
                                        <th>Warranty</th>
                                        <td>12 months</td>
                                    </tr>
                                    <tr>
                                        <th>Color Options</th>
                                        <td>Black, Silver</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    
                    @elseif($product->category->title == 'Laptop')
                        {{-- Laptop Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>Processor</th>
                                        <td>Intel Core i7-1360P (13th Gen) / AMD Ryzen 7 7840U</td>
                                    </tr>
                                    <tr>
                                        <th>Graphics</th>
                                        <td>Intel Iris Xe / NVIDIA GeForce RTX 4050</td>
                                    </tr>
                                    <tr>
                                        <th>Memory (RAM)</th>
                                        <td>16 GB DDR5 (expandable up to 32 GB)</td>
                                    </tr>
                                    <tr>
                                        <th>Storage</th>
                                        <td>512 GB NVMe SSD (upgradeable)</td>
                                    </tr>
                                    <tr>
                                        <th>Display</th>
                                        <td>15.6″ FHD IPS, 144 Hz</td>
                                    </tr>
                                    <tr>
                                        <th>Resolution</th>
                                        <td>1920 × 1080 px</td>
                                    </tr>
                                    <tr>
                                        <th>Operating System</th>
                                        <td>Windows 11 Home</td>
                                    </tr>
                                    <tr>
                                        <th>Connectivity</th>
                                        <td>Wi‑Fi 6E, Bluetooth 5.3</td>
                                    </tr>
                                    <tr>
                                        <th>Ports</th>
                                        <td>USB-C, USB 3.2, HDMI 2.1, Audio Jack</td>
                                    </tr>
                                    <tr>
                                        <th>Battery</th>
                                        <td>4-cell 70 Wh, up to 8 hours</td>
                                    </tr>
                                    <tr>
                                        <th>Charging</th>
                                        <td>Fast Charging (50% in 30 mins)</td>
                                    </tr>
                                    <tr>
                                        <th>Camera</th>
                                        <td>1080p HD Webcam with Privacy Shutter</td>
                                    </tr>
                                    <tr>
                                        <th>Audio</th>
                                        <td>Dual Speakers, Dolby Atmos</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td>14.1″W × 9.5″D × 0.75″H</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>1.7 kg</td>
                                    </tr>
                                    <tr>
                                        <th>Warranty</th>
                                        <td>12 months</td>
                                    </tr>
                                    <tr>
                                        <th>Color Options</th>
                                        <td>Silver, Black, Blue</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>

                    @elseif($product->category->title == 'Smart Watch')
                        {{-- Watch Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>Case Size</th>
                                        <td>47 mm (43 mm option available)</td>
                                    </tr>
                                    <tr>
                                        <th>Display</th>
                                        <td>Super AMOLED, Always-On</td>
                                    </tr>
                                    <tr>
                                        <th>Resolution</th>
                                        <td>480 × 480 px</td>
                                    </tr>
                                    <tr>
                                        <th>Body Material</th>
                                        <td>Stainless Steel</td>
                                    </tr>
                                    <tr>
                                        <th>Strap Size</th>
                                        <td>22 mm quick-release</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>59 g (without strap)</td>
                                    </tr>
                                    <tr>
                                        <th>Water Resistance</th>
                                        <td>5 ATM / IP68</td>
                                    </tr>
                                    <tr>
                                        <th>Battery Life</th>
                                        <td>Up to 40 hours (typical use)</td>
                                    </tr>
                                    <tr>
                                        <th>Charging</th>
                                        <td>Wireless fast charging (~2 hours)</td>
                                    </tr>
                                    <tr>
                                        <th>Sensors</th>
                                        <td>Heart Rate, SpO₂, ECG, Accelerometer, Gyroscope, Compass</td>
                                    </tr>
                                    <tr>
                                        <th>Connectivity</th>
                                        <td>Bluetooth 5.3, Wi‑Fi, NFC, LTE (optional)</td>
                                    </tr>
                                    <tr>
                                        <th>GPS</th>
                                        <td>Multi-band GPS/GLONASS/BeiDou</td>
                                    </tr>
                                    <tr>
                                        <th>Compatibility</th>
                                        <td>Android 10.0+ (not compatible with iOS)</td>
                                    </tr>
                                    <tr>
                                        <th>Storage</th>
                                        <td>16 GB</td>
                                    </tr>
                                    <tr>
                                        <th>Microphone/Speaker</th>
                                        <td>Supports calls & voice assistant</td>
                                    </tr>
                                    <tr>
                                        <th>Health Features</th>
                                        <td>Sleep Tracking, Stress Monitoring, VO₂ Max, 100+ Workout Modes</td>
                                    </tr>
                                    <tr>
                                        <th>Notifications</th>
                                        <td>Calls, Messages, App Alerts</td>
                                    </tr>
                                    <tr>
                                        <th>Warranty</th>
                                        <td>12 months</td>
                                    </tr>
                                    <tr>
                                        <th>Colors</th>
                                        <td>Black, Silver</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>

                    @elseif($product->category->title == 'Desktop')
                        {{-- Desktop Friendly Additional info --}}
                        <div class="tab-pane fade show active" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>Processor</th>
                                        <td>Intel Core i7-13700 (13th Gen) / AMD Ryzen 7 7700X</td>
                                    </tr>
                                    <tr>
                                        <th>Graphics</th>
                                        <td>NVIDIA GeForce RTX 4070 8GB / AMD Radeon RX 7800 XT</td>
                                    </tr>
                                    <tr>
                                        <th>Memory (RAM)</th>
                                        <td>16 GB DDR5 (expandable up to 64 GB)</td>
                                    </tr>
                                    <tr>
                                        <th>Storage</th>
                                        <td>1 TB NVMe SSD + 2 TB HDD</td>
                                    </tr>
                                    <tr>
                                        <th>Operating System</th>
                                        <td>Windows 11 Pro</td>
                                    </tr>
                                    <tr>
                                        <th>Connectivity</th>
                                        <td>Wi‑Fi 6E, Bluetooth 5.3, Gigabit Ethernet</td>
                                    </tr>
                                    <tr>
                                        <th>Ports</th>
                                        <td>USB-C, USB 3.2, HDMI 2.1, DisplayPort, Audio Jack</td>
                                    </tr>
                                    <tr>
                                        <th>Power Supply</th>
                                        <td>750W 80+ Gold Certified</td>
                                    </tr>
                                    <tr>
                                        <th>Cooling</th>
                                        <td>Liquid Cooling System (240 mm)</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td>18″H × 8″W × 17″D</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>12 kg</td>
                                    </tr>
                                    <tr>
                                        <th>Warranty</th>
                                        <td>24 months</td>
                                    </tr>
                                    <tr>
                                        <th>Color Options</th>
                                        <td>Black, White, RGB Customizable</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    @endif



                        <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-desc-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mb--30">
                                        <div class="single-desc">
                                            <h5 class="title">Specifications:</h5>
                                            <p>We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather,
                                                initial all the made, have spare to negatives.</p>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                    <div class="col-lg-6 mb--30">
                                        <div class="single-desc">
                                            <h5 class="title">Care & Maintenance:</h5>
                                            <p>Use warm water to describe us as a product team that creates amazing UI/UX experiences, by crafting top-notch user experience.</p>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                </div>
                                <!-- End .row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="pro-des-features">
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="{{ asset('frontend/assets/images/product/product-thumb/icon-3.png')}}" alt="icon">
                                                </div>
                                                Easy Returns
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="{{ asset('frontend/assets/images/product/product-thumb/icon-2.png')}}" alt="icon">
                                                </div>
                                                Quality Service
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="{{ asset('frontend/assets/images/product/product-thumb/icon-1.png')}}" alt="icon">
                                                </div>
                                                Original Product
                                            </li>
                                        </ul>
                                        <!-- End .pro-des-features -->
                                    </div>
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .product-desc-wrapper -->
                        </div>
                        
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="reviews-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mb--40">
                                        <div class="axil-comment-area pro-desc-commnet-area">
                                            <h5 class="title">{{count($reviews)}} Review for this product</h5>
                                            <ul class="comment-list">

                                                @foreach ($reviews as $review)
                                                    
                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img 
                                                                    src="{{ $review->customer->profile_imge 
                                                                        ? asset('storage/' . $review->customer->profile_imge) 
                                                                        : 'https://api.dicebear.com/9.x/notionists/svg?seed=' . $review->customer->first_name 
                                                                    }}" 
                                                                    alt="Author Image"
                                                                    style="
                                                                        width:60px;
                                                                        height:60px;
                                                                        border-radius:50%;
                                                                        object-fit:cover;
                                                                        border:2px solid #fff;
                                                                        box-shadow:0 2px 6px rgba(0,0,0,0.15);
                                                                    "
                                                                >
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="single-product-3.html#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Cameron Williamson">{{$review->customer->first_name}}</span>
                                                                        </span>
                                                                    </a>
                                                                    @php
                                                                        $rating = (int) $review->rating;
                                                                        $empty = 5-$rating;
                                                                    @endphp

                                                                    <span class="commenter-rating">
                                                                        {{-- Filled stars --}}
                                                                        @for ($i = 1; $i <= $rating; $i++)
                                                                            <a><i class="fas fa-star"></i></a>
                                                                        @endfor

                                                                        {{-- Empty stars --}}
                                                                        @for ($i = 1; $i <= $empty; $i++)
                                                                            <a><i class="fas fa-star empty-rating"></i></a>
                                                                        @endfor
                                                                    </span>
                                                                </h6>
                                                                <div class="comment-text">
                                                                    <p>“ {{$review->msg}} ” </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->
                                                @endforeach

                                            </ul>
                                        </div>
                                        <!-- End .axil-commnet-area -->
                                    </div>
                                    <!-- End .col -->
                                    <div class="col-lg-6 mb--40">
                                        <!-- Start Comment Respond  -->
                                        <div class="comment-respond pro-des-commend-respond mt--0">
                                            <h5 class="title mb--30">Add a Review</h5>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <div class="rating-wrapper d-flex-center mb--40">
                                                Your Rating <span class="require">*</span>
                                                <div id="star-rating" class="ml--15">
                                                    <i class="far fa-star" data-value="1"></i>
                                                    <i class="far fa-star" data-value="2"></i>
                                                    <i class="far fa-star" data-value="3"></i>
                                                    <i class="far fa-star" data-value="4"></i>
                                                    <i class="far fa-star" data-value="5"></i>
                                                </div> <br>            
                                                @error('rating')
                                                    <samp class="text-danger">{{$message}}</samp>
                                                @enderror
                                            </div>


                                            <form action="{{route('frontend.product.single.review')}}" method="POST">
                                                @csrf
<input type="hidden" name="rating" id="rating">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="auth_user_id" value="{{auth('customer')->id()}}">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Your Opinion</label>
                                                            <textarea name="user_msg" placeholder="Your Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Name <span class="require">*</span></label>
                                                            <input id="name" name="" value="{{ auth('customer')->check() ? (auth('customer')->user()->first_name." ".auth('customer')->user()->last_name) : ''}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Email <span class="require">*</span> </label>
                                                            <input id="email" name="" value="{{ auth('customer')->check() ? (auth('customer')->user()->email) : ''}}" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <button type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Submit Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Comment Respond  -->
                                    </div>
                                    <!-- End .col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- woocommerce-tabs -->

        </div>
        <!-- End Shop Area  -->

        <!-- Start Recently Viewed Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Your Recently</span>
                    <h2 class="title">Viewed Items</h2>
                </div>
                <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-01.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-02.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">40% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">Media remote</a></h5>
                                    <div class="product-price-variant">
                                         <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-03.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">HD camera</a></h5>
                                    <div class="product-price-variant">
                                         <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-04.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">50% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS Remote Control</a></h5>
                                    <div class="product-price-variant">
                                         <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-05.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">25% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS Remote Control</a></h5>
                                    <div class="product-price-variant">
                                         <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-03.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">HD camera</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-04.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">50% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS Remote Control</a></h5>
                                    <div class="product-price-variant">
                                         <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{ asset('frontend/assets/images/product/electric/product-05.png')}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">25% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{ route('frontend.cart') }}">Add to Cart</a></li>
                                        <li class="quickview"><a href="single-product-3.html#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS5 Remote Control</a></h5>
                                    <div class="product-price-variant">
                                         <span class="price current-price">BDT 2500</span>
                                        <span class="price old-price">BDT 3000</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->

                </div>
            </div>
        </div>
        <!-- End Recently Viewed Product Area  -->
        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->

        @push('js')
        <script>
            const stars = document.querySelectorAll('#star-rating i');
            const ratingInput = document.getElementById('rating');

            stars.forEach(star => {
                star.addEventListener('click', function () {
                    const ratingValue = this.getAttribute('data-value');
                    ratingInput.value = ratingValue;

                    stars.forEach(s => {
                        s.classList.remove('fas');
                        s.classList.add('fal');
                    });

                    for (let i = 0; i < ratingValue; i++) {
                        stars[i].classList.remove('fal');
                        stars[i].classList.add('fas');
                    }
                });
            });
        </script>

        @if($errors->any())
        <script>
            Swal.fire({
                title: 'Validation Error',
                text: '{{ $errors->first() }}',
                icon: 'error',
                confirmButtonText: 'Fix it'
            });
        </script>
        @endif


        @endpush
@endsection