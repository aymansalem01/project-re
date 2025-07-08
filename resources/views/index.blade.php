<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Our Environment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
            color: #20551f;
        }

        /* Header */

        header {
            background-color: #20551f;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            color: white;
        }

        header .logo {
            background: white;
            color: black;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 18px;

        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Section 1: Main */

        main {
            border: 2px solid black;
            margin: 30px auto;
            max-width: 900px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        main img {
            height: 300px;
            object-fit: contain;
        }

        main .content {
            text-align: center;
            color: #20551f;
        }

        main .content h2 {
            margin: 10px 0;
        }

        main .content button {
            background-color: #20551f;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 8px;
            margin-top: 15px;
        }

        main .content button:hover {
            background-color: #1a4419;
        }

        /* Section Titles */

        h2.section-title {
            text-align: center;
            font-weight: 700;
            margin: 50px 0 20px;
            font-size: 24px;
            position: relative;
            color: #20551f;
        }

        h2.section-title::before,
        h2.section-title::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 25%;
            height: 2px;
            background: #20551f;
        }

        h2.section-title::before {
            left: 0;
        }

        h2.section-title::after {
            right: 0;
        }

        /* Section 2: Welcome */

        #welcome {
            max-width: 900px;
            margin: 0 auto 50px;
            text-align: center;
            color: #2b5a1e;
        }

        #welcome .icons {
            margin: 20px 0 15px;
            display: flex;
            justify-content: center;
            gap: 60px;
        }

        #welcome .icons img {
            width: 60px;
            height: 60px;
        }

        #welcome p {
            font-weight: 600;
            color: #7c9c3b;
            font-size: 16px;
        }

        /* Section 3: About Us */

        #about-us {
            max-width: 900px;
            margin: 0 auto 60px;
            color: #7c9c3b;
        }

        #about-us .about-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            margin-top: 30px;
        }

        #about-us .about-text {
            flex: 1;
            font-weight: 600;
            font-size: 15px;
            line-height: 1.6;
            padding: 15px;
        }

        #about-us .about-image {
            flex: 0 0 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #about-us .about-image img {
            max-width: 200px;
            height: 400px;
            border-radius: 8px;

        }
        #partnerships{
            max-width: 900px;
            margin: 0 auto 60px;
            color: #7c9c3b;
        }

        @media (max-width: 768px) {

            #about-us .about-image {
                flex: 1;
                width: 100%;
                margin-top: 20px;
            }
        }

        /* Section 4: Our Locations */

        #locations {
            max-width: 900px;
            margin: 0 auto 60px;
            text-align: center;
            color: #20551f;
        }

        #locations .locations-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        #locations .location-item {
            width: 160px;
        }

        #locations .location-item img {
            width: 80px;
            height: 100px;
        }

        #locations .location-item h3 {
            font-weight: 700;
            margin: 12px 0 8px;
        }

        #locations .location-item button {
            background-color: #20551f;
            border: none;
            border-radius: 6px;
            padding: 10px 18px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #locations .location-item button:hover {
            background-color: #1a4419;
        }

        /* Section 5: Contact Us */

        #contact-us {
            max-width: 900px;
            margin: 0 auto 50px;
            text-align: center;
            color: #20551f;
        }

        #contact-us form {
            background-color: #72bd2f;
            padding: 25px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
            box-sizing: border-box;
            color: white;
        }

        #contact-us form label {
            display: block;
            font-weight: 600;
            margin: 10px 0 5px;
            text-align: left;
        }

        #contact-us form input[type="text"],
        #contact-us form input[type="email"],
        #contact-us form textarea,
        #contact-us form select {
            width: 100%;
            padding: 8px 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            font-size: 14px;
            color: black;
        }

        #contact-us form textarea {
            resize: vertical;
            height: 80px;
        }

        #contact-us form button {
            background-color: #20551f;
            color: white;
            font-weight: 700;
            font-size: 16px;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #contact-us form button:hover {
            background-color: #1a4419;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <header>
        <div class="logo"><img src="{{ asset('images/logo.png') }}"></div>
        <nav>
            <a href="#welcome">Home</a>
            <a href="#about-us">About us</a>
            <a href="#contact-us">contact us</a>
        </nav>
    </header>

    <main>
        <img src="{{ asset('images\mach.png') }}" alt="Environment Machine" />
        <div class="content">
            <h2>protecting Nature, Preserving Tomorrow</h2>
            <h2>Join Us in Creating a Greener Future</h2>
            <button>About us</button>
        </div>
    </main>

    <!-- Section 2: Welcome -->
    <section id="welcome">
        <h2 class="section-title">Welcome to Our Environment</h2>
        <div class="icons">
            <img src="{{ asset('images/icon1.png') }}" alt="Eco icon 1" />
            <img src="{{ asset('images/icon2.png') }}" alt="Eco icon 2" />
            <img src="{{ asset('images/icon3.png') }}" alt="Eco icon 3" />
        </div>
        <p>Be part of the change — join us in building a cleaner, greener world.</p>
    </section>

    <!-- Section 3: About Us -->
    <section id="about-us">
        <h2 class="section-title">About Us</h2>
        <div class="about-container" dir="rtl">
            <div>
                <div>
                    <h1 style="font-size: 40px"> " كل عبوة لها قيمة , كن جزءا من التغيير"</h1>
                </div>
                <div class="about-text">
                    <p style="color: black ; font-size: 20px">
                        برزت فكرتنا من رؤيا التحديث الاقتصادي لصاحب الجلالة من محور المبادرات
                        و الاوليات لقطاع الصناعة و استهدفنا رؤية الامتثال البيئي في التصنيع الذي يعمل على (اعداد معايير
                        مماراسات الاقتصاد الدائري في الانشطة الصناعية والتركيز على المجتمعات الصناعية البيئية) و (دعم
                        وتشجيع مفهوم الصتميم الذكي)
                    </p>
                    <p style=" font-size: 20px">
                        استنادا الى البيانات التالية :
                    <ul>
                        <li>نسبة الحاجة للمواد المعاد تدويرها حوالي 30-40 % سنويا</li>
                        <li> معدل المخلفات البلاستيكية 600000 الف طن سنويا</li>
                        <li> معدل المخلفات المعدنية 1000000-150000 الف طن سنويا</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="about-image">
                <img src="{{ asset('images\mach.png') }}" alt="Reverse Vending Machine" />
            </div>
        </div>
    </section>

    <!-- Section 4: Our Locations -->
    <section id="locations">
        <h2 class="section-title">Our Locations</h2>
        <div class="locations-list">
            @forelse ($points as $point)
                <div class="location-item">
                    <img src="{{ asset('images/google-location-icon.png') }}" alt="Location" />
                    <h3>Station Name</h3>
                    <button><a href="{{ $point->location }}" style="text-decoration: none ; color: white;"> See Location
                        </a></button>
                </div>
            @empty
                <p>We add point Soon.</p>
            @endforelse

        </div>
    </section>

    <section id="partnerships">
        <h2 class="section-title">Our partnerships</h2>
            <div style="display: flex; justify-content: between; gap: 40px;">
                <div style="width: 35%; padding: 40px;">
                    <img src="{{ asset('images\Orange_logo.png') }}" alt="" style="width: 100%">
                </div>
                 <div style="width: 35%; padding: 40px;">
                    <img src="{{ asset('images\logo_amman.png') }}" alt="" style="width: 100%; margin-top: 40px;">
                </div>


            </div>
    </section>



    <!-- Section 5: Contact Us -->
    <section id="contact-us">
        <h2 class="section-title">Contact Us</h2>

        @if (session('success'))
            <div
                style="background: #72bd2f; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div style="background: #ff6b6b; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="contact-number">Contact Number</label>
            <input type="text" id="contact-number" name="contact-number" required />

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required />

            <label for="description">Description</label>
            <textarea id="description" name="description" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

</body>

</html>
