<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyPet</title>
    <base href="{{ asset('landing-page') }}">
    <link rel="stylesheet" href="landing-page/assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Healthy</span>Pet</a>

        <nav class="navbar">
            <a href="/landingpage" class="active">Beranda</a>
            <a href="/menu">Menu</a>
            <a href="/kontak">Kontak</a>
            <a href="/tentang">Tentang</a>
        </nav>

        <a href="/mitra" class="contact">Mitra Kami</a>
    </header>

    {{-- <section class="home">
        <div class="home-content">
            <h1>Pelayanan <span>Kami<br></span>
            </h1>

            <p>Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. <br>Qui nemo error modi 
                unde hic debitis, et molestiae eac <br> 
                temporibus reprehenderit quam 
                voluptates deserunt laboriosam <br>
                assumenda! Debitis culpa omnis
                rem nisi?</p>
        </div>
        <div class="img-box">
            <img src="landing-page/assets/images/dog.png" alt="">
        </div>
    </section> --}}

    {{-- <section class="about">
        <div class="about-img">
            <img src="landing-page/assets/images/puppy.jpg" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">Menjadi <br>Mitra <span>Kami</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Numquam unde tenetur expedita quam at, ullam optio aut 
                dignissimos. Cumque vitae aliquam sunt tempora magni 
                deleniti atque commodi eveniet qui eum?</p>
            <div class="btn-box">
            <a href="/mitra_healthypet"><button class="btn-daftar">Selengkapnya</button></a> 
        </div>
    </section> --}}
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="contact-form">
        <h2 class="contact-us">Kontak <span>kami</span></h2>
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Nama Lengkap">
                <input type="email" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Nomor Telepon">
                <input type="text" placeholder="Subjek">
            </div>
            <textarea name="" id="" cols="30" 
            rows="10" placeholder="Tulis Pesan"></textarea>
            <input type="submit" value="Kirim Pesan" class="btn-daftar">
        </form>
    </section>
    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-facebook-circle bx-sm'></i></a>
            <a href="#"><i class='bx bxl-twitter bx-sm'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt bx-sm'></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">FAQ</a>
            </li>
            <li>
                <a href="#">Pelayanan</a>
            </li>
            <li>
                <a href="#">Tentang kami</a>
            </li>
            <li>
                <a href="#">Kontak</a>
            </li>
            <li>
                <a href="#">Keamanan Ketentuan</a>
            </li>
        </ul>
        <p class="copyright">&copy; 2024 HealthyPet | All Rights Reserved</p>
    </footer>
</body>
</html>
