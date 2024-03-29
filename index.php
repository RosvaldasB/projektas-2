<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travello</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../laisvi projektai/normalize.css">
    <link rel="stylesheet" href="../laisvi projektai/style.css">
    <script src="https://kit.fontawesome.com/6337da2237.js" crossorigin="anonymous"></script>
    <script src="../laisvi projektai/scripts.js"></script> 
</head>

<body>
    <?php 
    require __DIR__ . "../forms/app.php"
    ?>
<div id="up-page" onclick="scrollToTop()"><i class="fa-solid fa-circle-arrow-up fa-3x"></i></div>
    <header class="flex-container">
        <div class="header-navigation">
            <div class="top-nav flex-container">
                <div class="contacts">
                    <ul class="flex-container">
                        <li><a href="mailto:info@travello.com"><i class="fa-regular fa-envelope"></i>
                            info@travello.com</a></li>
                        <li><a href="tel:+001 235 1245 2356"><i class="fa-solid fa-headset"></i> +001 235 1245 2356</a>
                        </li>
                    </ul>
                </div>
                <div class="contacts-mobile">
                    <ul class="flex-container">
                        <li><a href="mailto:info@travello.com"><i class="fa-regular fa-envelope"></i></a></li>
                        <li><a href="tel:+001 235 1245 2356"><i class="fa-solid fa-headset"></i></a></li>
                    </ul>
                </div>
                <div class="socials">
                    <ul class="flex-container">
                        <li><a href="/"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="/"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="/"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="/"><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href="/"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="navigation flex-container">
                <div class="logo"><a href="#">Travello.</a></div>
                <div class="nav">
                    <ul class="flex-container">
                        <li><a href="#">home</a></li>
                        <li><a href="/">about</a></li>
                        <li><a href="/">blog</a></li>
                        <li><a href="/">account</a></li>
                        <li><a href="/">login</a></li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="micon" onclick="mobnavbutton()"><i class="fa-solid fa-compass fa-beat-fade fa-2x"  style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;"></i></a>
                <div id="mobile-navigation">
                    <ul class="flex-container">
                        <li><a href="#">home</a></li>
                        <li><a href="/">about</a></li>
                        <li><a href="/">blog</a></li>
                        <li><a href="/">account</a></li>
                        <li><a href="/">login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="introduction flex-container">
        <div class="main flex-container">
            <h2>The travel guide app</h2>
            <h1>Travello</h1>
            <p>Travel booking just a click away</p>
            <form autocomplete="off">
                <div class="autocomplete">
                    <input type="text" name="country" id="main-search-bar" placeholder="Where do you want to go?"><button type="submit" id="search-location"><i class="fa-solid fa-magnifying-glass-location"></i></button>
                </div>
            </form>
        </div>
        <div class="offers flex-container">
            <div class="offer">
                <i class="fa-solid fa-shop fa-2x"></i>
                <h3>100+ Options</h3>
                <p>Select over 100 different locations to spend your holidays.</p>
            </div>
            <div class="offer">
                <i class="fa-solid fa-fire-flame-curved fa-2x"></i>
                <h3>Good Quality</h3>
                <p>We assure top-notch travel quality and service.</p>
            </div>
            <div class="offer">
                <i class="fa-solid fa-comment fa-2x"></i>
                <h3>Easy Interface</h3>
                <p>Our service porvides user-friendly and welcoming travel registry.</p>
            </div>
            <div class="offer">
                <i class="fa-solid fa-desktop fa-2x"></i>
                <h3>Tracking Code</h3>
                <p>We generate an unique code you can use to track all the details of your information.</p>
            </div>
        </div>
        <button id="btn-form" onclick="popUpTask()"><i class="fa-sharp fa-solid fa-comment"></i> Message Us</button>
        <div id="popupform">
            <div class="pop-up-header flex-container">
                <h1 class="pop-up-title">Leave your details bellow!</h1>
                <button id="closebutton" onclick="closeThatForm()">&times;</button>
            </div>
            <div class="pop-up-content">
                <form id="popupcontact" method="post">
                    <input type="text" name="fname" placeholder="Your name" required autofocus><br>
                    <input type="text" name="lname" placeholder="Your last name" required><br>
                    <input type="email" name="email" placeholder="Your email" required><br>
                    <input type="tel" name="phone_number" placeholder="Mobile phone" required><br>
                    <textarea name="text_message" id="text2u" placeholder="Your message" required></textarea><br>
                    <button name="submit" type="submit" id="contact_submit">Submit</button>
                </form>
            </div>
        </div>
        <div id="overlay"></div>
        <div class="statement flex-container">
            <h1>Easily find awesome places<br> to travel this year</h1>
            <p>Welcome to Travello, your ultimate travel partner! Are you ready to embark on an adventure and explore the world's most amazing destinations? Look no further than Travello! We specialize in curating unforgettable travel experiences for our clients. Let us help you easily find awesome places to travel this year and make your dream trip a reality. Trust Travello to handle all the details and create memories that will last a lifetime.</p>
        </div>
        
    </section>
    <section class="hotel container flex-container">
        <div class="country flex-container">
                <button class="button button_active" id="btn_singapore" onclick="changecontentsingapore()">Singapore</button>
                <button class="button" id="btn_china" onclick="changecontentchina()">China</button>
                <button class="button" id="btn_india" onclick="changecontentindia()">India</button>
                <button class="button" id="btn_bhutan" onclick="changecontentbhutan()">Bhutan</button>
                <button class="button" id="btn_thailand" onclick="changecontentthailand()">Thailand</button>
                <button class="button" id="btn_nepal" onclick="changecontentnepal()">Nepal</button>
        </div>
        <div class="hotelroom container flex-container" id="singapore">
            <div class="room">
                <img src="assets/fotosingapore/marina-bay-sands.jpg" alt="hotel_img_singapore">
                <h3>Marina Bay Sands</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$930</div>
                    <div class="newprice">$653</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Located along Marina Bay waterfront with 3 cascading hotel towers, 2,200 rooms, extraordinary Sands ...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotosingapore/the-fullerton-hotel-singapore.jpg" alt="hotel_img_singapore">
                <h3>The Fullerton Hotel Singapore</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$370</div>
                    <div class="newprice">$349</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Set in a former post office built in 1928, this upscale hotel overlooking the Singapore River is a 4-minute ...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotosingapore/hotel-exterior.jpg" alt="hotel_img_singapore">
                <h3>Parkroyal Collection</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$479</div>
                    <div class="newprice">$411</div>
                    <div class="staytime">/night</div>
                </div>
                <p>PARKROYAL COLLECTION offers guests a luxury business hotel in Singapores business district.</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotosingapore/outdoor-pool.jpg"
                    alt="hotel_img_singapore">
                <h3>Shangri-La Singapore</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$338</div>
                    <div class="newprice">$309</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Shangri-La welcomes guests with warmth and offers a luxurious experience in service lobby oasis.</p>
                <a href="/">select rooms</a>
            </div>
        </div>
        <div class="hotelroom container flex-container" id="china">
            <div class="room">
                <img src="assets/fotochina/lobby.jpg" alt="hotel_img_china">
                <h3>Nina Hotel Tsuen Wan West</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$101</div>
                    <div class="newprice">$84</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Nina Hotel Tsuen Wan West is a genuine Hong Kong landmark that presides over the Kowloon...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotochina/exterior-daytime.jpg" alt="hotel_img_china">
                <h3>Legend Palace Hotel</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$189</div>
                    <div class="newprice">$137</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Adjacent to the Outer Harbour Ferry Terminal, Legend Palace Hotel offers a spectacular seaview over the...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotochina/rooftop-swimming-pool.jpg" alt="hotel_img_china">
                <h3>Cordis, Hong Kong</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$226</div>
                    <div class="newprice">$220</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Cordis, Hong Kong is an upscale 5-star hotel located in the vibrant Mongkok district of Kowloon. </p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotochina/mandarin-oriental-hong.jpg"
                    alt="hotel_img_china">
                <h3>Mandarin Oriental, Hong Kong</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$467</div>
                    <div class="newprice">$429</div>
                    <div class="staytime">/night</div>
                </div>
                <p>In the middle of the Central district, Mandarin Oriental, Hong Kong is ideally located for all...</p>
                <a href="/">select rooms</a>
            </div>
        </div>
        <div class="hotelroom container flex-container" id="india">
            <div class="room">
                <img src="assets/fotoindia/exterior-view.jpg" alt="hotel_img_india">
                <h3>Novotel New Delhi Aerocity</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$141</div>
                    <div class="newprice">$125</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Novotel New Delhi Aerocity is an excellent choice for travelers visiting New Delhi, offering a trendy...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotoindia/taj-palace-new-delhi.jpg" alt="hotel_img_india">
                <h3>Taj Palace, New Delhi</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$453</div>
                    <div class="newprice">$396</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Nestled amidst the heart of the historic Indian capital city, the iconic Taj Palace, New Delhi has held...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotoindia/lobby.jpg" alt="hotel_img_india">
                <h3>Sahara Star Hotel</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$199</div>
                    <div class="newprice">$166</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Made by man's greatest strength - Imagination, Sahara Star is yet another masterpiece from Sahara... </p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotoindia/exterior-day.jpg"
                    alt="hotel_img_india">
                <h3>The Leela Palace New Delhi</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$530</div>
                    <div class="newprice">$333</div>
                    <div class="staytime">/night</div>
                </div>
                <p>In the middle of the Central district, Mandarin Oriental, Hong Kong is ideally located for...</p>
                <a href="/">select rooms</a>
            </div>
        </div>
        <div class="hotelroom container flex-container" id="bhutan">
            <div class="room">
                <img src="assets/fotobhutan/exterior2.jpg" alt="hotel_img_bhutan">
                <h3>Taj Tashi</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$398</div>
                    <div class="newprice">$376</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Taj Tashi, perfectly located in the heart of the capital city of Bhutan, enjoys panoramic views of...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotobhutan/exterior-night-view.jpg" alt="hotel_img_bhutan">
                <h3>Le Meridien Thimphu</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$373</div>
                    <div class="newprice">$351</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Rest easy at Le Meridien Thimphu. Our hotel in Thimphu, Bhutan is located near shops and...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotobhutan/exterior.jpg" alt="hotel_img_bhutan">
                <h3>Le Meridien Paro Riverfront</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$346</div>
                    <div class="newprice">$300</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Rest easy at Le Meridien Paro, Riverfront. Our hotel in Paro, Bhutan is located near Taktsang Monastery... </p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotobhutan/bhutan-spirit-sanctuary.jpg"
                    alt="hotel_img_bhutan">
                <h3>Bhutan Spirit Sanctuary</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$830</div>
                    <div class="newprice">$700</div>
                    <div class="staytime">/night</div>
                </div>
                <p>The Bhutan Spirit Sanctuary is the first and only 5-star traditional spa-inclusive resort in Bhutan...</p>
                <a href="/">select rooms</a>
            </div> 
        </div>
        <div class="hotelroom container flex-container" id="thailand">
            <div class="room">
                <img src="assets/fotothailand/entrance.jpg" alt="hotel_img_thailand">
                <h3>Sheraton Grande Sukhumvit</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$230</div>
                    <div class="newprice">$196</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Decorated with exotic teakwood, gleaming marble and shimmering Thai silks, guests ...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotothailand/hotel-entrance.jpg" alt="hotel_img_thailand">
                <h3>The Landmark Bangkok Hotel</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$139</div>
                    <div class="newprice">$87</div>
                    <div class="staytime">/night</div>
                </div>
                <p>The Landmark Bangkok is an all-round impressive hotel offering 31 storeys of elegant and spacious...</p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotothailand/exterior-view.jpg" alt="hotel_img_thailand">
                <h3>Banyan Tree Bangkok</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$214</div>
                    <div class="newprice">$150</div>
                    <div class="staytime">/night</div>
                </div>
                <p>Finding an ideal romantic hotel in Bangkok does not have to be difficult. Welcome to Banyan Tree... </p>
                <a href="/">select rooms</a>
            </div>
            <div class="room">
                <img src="assets/fotothailand/lobby-day-with-kimono.jpg" alt="hotel_img_thailand">
                <h3>The Okura Prestige Bangkok</h3>
                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="price flex-container">
                    <div class="oldprice">$313</div>
                    <div class="newprice">$213</div>
                    <div class="staytime">/night</div>
                </div>
                <p>The Okura Prestige Bangkok combines Japan’s rich service culture and attention to detail with Thailand’s...</p>
                <a href="/">select rooms</a>
            </div> 
        </div>
        <div class="hotelroom container flex-container" id="nepal">
                <div class="room">
                    <img src="assets/fotonepal/fascade.jpg" alt="hotel_img_nepal">
                    <h3>Hyatt Place Kathmandu</h3>
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div class="price flex-container">
                        <div class="oldprice">$150</div>
                        <div class="newprice">$96</div>
                        <div class="staytime">/night</div>
                    </div>
                    <p>Welcome to Hyatt Place Kathmandu, a modern hotel designed for the multi-tasking traveler...</p>
                    <a href="/">select rooms</a>
                </div>
                <div class="room">
                    <img src="assets/fotonepal/exterior2.jpg" alt="hotel_img_nepal">
                    <h3>Hyatt Regency Kathmandu</h3>
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div class="price flex-container">
                        <div class="oldprice">$126</div>
                        <div class="newprice">$107</div>
                        <div class="staytime">/night</div>
                    </div>
                    <p>Hyatt Regency Kathmandu is a 5 star luxury hotel and resort in Kathmandu and is set on 37 acres of landsca...</p>
                    <a href="/">select rooms</a>
                </div>
                <div class="room">
                    <img src="assets/fotonepal/exterior.jpg" alt="hotel_img_nepal">
                    <h3>Kathmandu Marriott Hotel</h3>
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div class="price flex-container">
                        <div class="oldprice">$210</div>
                        <div class="newprice">$177</div>
                        <div class="staytime">/night</div>
                    </div>
                    <p>Marriott Kathmandu, a 214-room contemporary hotel in the capital city Kathmandu, Nepal, combines...</p>
                    <a href="/">select rooms</a>
                </div>
                <div class="room">
                    <img src="assets/fotonepal/meghauli-serai-a-taj.jpg" alt="hotel_img_nepal">
                    <h3>Meghauli Serai, A Taj Safari</h3>
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div class="price flex-container">
                        <div class="oldprice">$532</div>
                        <div class="newprice">$426</div>
                        <div class="staytime">/night</div>
                    </div>
                    <p>Have been to many wild life parks in India,but this experience was simply outstanding-by way ...</p>
                    <a href="/">select rooms</a>
                </div>
        </div>
        <a href="/">view all</a>
    </section>
    <section class="quote flex-container">
        <div class="quotation-words flex-container">
            <div class="quote-mark"><i class="fa-solid fa-quote-left fa-5x"></i></div>
            <div class="comment">Travello made my travel booking experience incredibly comfortable and stress-free. Their service was awesome, and I couldn't be happier with the result. 5/5 stars!</div>
            <div class="bywhom">Steve Wilson,<div class="from">London, Britain</div>
            </div>
        </div>
        <div class="selection-dots"><i class="fa-solid fa-circle"></i><i class="fa-solid fa-circle"></i><i
                class="fa-solid fa-circle"></i></div>
    </section>
    <section class="banners flex-container">
        <div class="banner-1 flex-container">
            <div class="banner-img"><img src="assets/Papildomosfoto/banner1.png" alt="airplane"></div>
            <div class="banner-text">
                <h2>Book your tickets at the comfort of your phone</h2>
                <p>Book your tickets at the comfort of your phone. We're here to provide you the best service possible,
                    so feel free to reach out to us at any time for any questions you might have. Thank you for choosing
                    us as your source of booking! We appreciate your support and look forward to seeing you soon</p>
            </div>
        </div>
        <div class="banner-2 flex-container">
            <div class="banner-text">
                <h2>Easily Find awesome places to travel this year</h2>
                <p>Easily Find Awesome Places to Travel This Year! We love helping travelers find their dream
                    destinations, and we're here to help you find yours! Our advanced search tools make finding the
                    perfect location a breeze. Enter your dates and preferences, and we'll get to work finding you your
                    perfect destination! We can't wait to help you book your next adventure!</p>
            </div>
            <div class="banner-img"><img src="assets/Papildomosfoto/banner2.png" alt="luggage"></div>
        </div>
    </section>
    <section class="plans-contacts">
        <div class="plan-choice flex-container container">
            <div class="plans">
                <div class="subscription flex-container">
                    <div class="plan-price">$50</div>
                    <div class="time">/month</div>
                </div>
                <div class="class">Personal</div>
                <div class="class-descriptions">Our goverment backet plan designed to keep your business legally and secure</div>
                <hr class="line">
                <ul>
                    <li><i class="fa-sharp fa-solid fa-check"></i> Secure your customer usage</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i> View basic analytics</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i> Up to 350 customer profiles</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i>Custom network name</li>
                </ul>
                <a href=".">Your current plan</a>
            </div>
            <div class="plans">
                <div class="subscription flex-container">
                    <div class="plan-price">$150</div>
                    <div class="time">/month</div>
                </div>
                <div class="class">Business</div>
                <div class="class-descriptions">Unlimited analytics, plans, demographic insights. All you need to grow-up your business</div>
                <hr class="line">
                <ul>
                    <li><i class="fa-sharp fa-solid fa-check"></i> Secure your customer usage, statistics and logs</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i> View advanced analytics</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i> Up to 900 customer profiles, or more for extra</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i>Freely customize your network profile</li>
                </ul>
                <a href="/">Upgrade to Social</a>
            </div>
            <div class="plans">
                <div class="subscription flex-container">
                    <div class="plan-price">$450</div>
                    <div class="time">/month</div>
                </div>
                <div class="class">Agency</div>
                <div class="class-descriptions">Our goverment backet plan designed to keep your business legally and secure</div>
                <hr class="line">
                <ul>
                    <li><i class="fa-sharp fa-solid fa-check"></i> Access to all avaible customers data</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i> 24/7 access to our profesional analytics teams with included profesional level analytics</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i> Up to 2000 customer profiles, or more for extra</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i>Freely customize your network profile</li>
                    <li><i class="fa-sharp fa-solid fa-check"></i>And much more...</li>
                </ul>
                <a href="/">Upgrade to Marketing</a>
            </div>
        </div>
        <div class="end-contacts flex-container">
            <h2>Travello.</h2>
            <a href="/">info@travello.com</a>
            <p>15Th Street Avenue, New York, USA<br>
            <a href="tel:011-554-8798-6556">011-554-8798-6556</a></p>
            <div class="end-socials">
                <ul class="flex-container">
                    <li><a href="/"><i class="fa-brands fa-facebook-f fa-xl"></i></a></li>
                    <a href="/"><li><i class="fa-brands fa-twitter fa-xl"></i></a></li>
                    <a href="/"><li><i class="fa-brands fa-pinterest fa-xl"></i></a></li>
                    <a href="/"><li><i class="fa-brands fa-square-instagram fa-xl"></i></a></li>
                    <a href="/"><li><i class="fa-brands fa-youtube fa-xl"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="flex-container">
        <div class="copy">&copy; 2023 RosvaldasButkus/TemplatesJungle. All rights reserved.</div>
        <div class="credits">Made by/Designed by <span>Rosvaldas Butkus, TemplatesJungle</span></div>
    </footer>
</body>
</html>