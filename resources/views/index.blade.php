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
            border: 2px solid black;
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            color: #7c9c3b;
        }

        #about-us .about-text {
            flex: 1 1 450px;
            font-weight: 600;
            font-size: 15px;
            line-height: 1.5;
        }

        #about-us img {
            flex: 0 0 300px;
            height: auto;
            max-width: 300px;
            object-fit: contain;
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
            max-width: 700px;
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
    </style>
</head>

<body>

    <header>
        <div class="logo">Logo</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About us</a>
            <a href="#">contact us</a>
        </nav>
    </header>

    <main>
        <img src="{{ asset('images/a9eab53c-5648-43e1-a4e8-f8eb75cc2a72.png') }}" alt="Environment Machine" />
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
        <p class="about-text">
            We are a passionate community committed to protecting the environment and promoting sustainable living. One
            of our key initiatives is the Reverse Vending Machine (RVM) program, which encourages recycling by rewarding
            users for returning plastic bottles
            and cans. Through innovative solutions like the RVM, along with education and community action, we aim to
            reduce waste, conserve resources, and inspire lasting change for a cleaner, greener future.
        </p>
        <img src="{{ asset('images/a9eab53c-5648-43e1-a4e8-f8eb75cc2a72.png') }}" alt="Reverse Vending Machine" />
    </section>

    <!-- Section 4: Our Locations -->
    <section id="locations">
        <h2 class="section-title">Our Locations</h2>
        <div class="locations-list">
            <div class="location-item">
                <img src="{{ asset('images/google-location-icon.png') }}" alt="Location" />
                <h3>Station Name</h3>
                <button>See Location</button>
            </div>
            <div class="location-item">
                <img src="{{ asset('images/google-location-icon.png') }}" alt="Location" />
                <h3>Station Name</h3>
                <button>See Location</button>
            </div>
            <div class="location-item">
                <img src="{{ asset('images/google-location-icon.png') }}" alt="Location" />
                <h3>Station Name</h3>
                <button>See Location</button>
            </div>
            <div class="location-item">
                <img src="{{ asset('images/google-location-icon.png') }}" alt="Location" />
                <h3>Station Name</h3>
                <button>See Location</button>
            </div>
            <div class="location-item">
                <img src="{{ asset('images/google-location-icon.png') }}" alt="Location" />
                <h3>Station Name</h3>
                <button>See Location</button>
            </div>
        </div>
    </section>

    <!-- Section 5: Contact Us -->
    <section id="contact-us">
        <h2 class="section-title">Contact Us</h2>
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <label for="name">Name</label>
            <select id="name" name="name">
                <option value="andrew" selected>Andrew</option>
            </select>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" />

            <label for="contact-number">Contact Number</label>
            <input type="text" id="contact-number" name="contact-number" />

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="optional" />

            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

</body>

</html>
