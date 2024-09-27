<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Contact Us</title>
</head>

<body>
    <?php include 'partials/_navbar.php'; ?>

    <div class="contanner">

        <div class="coverabout"></div>


        <div class="cutlinemenu"></div>

        <div class="content">

            <div class="topabout">
                <div class="topaboutcontent">
                    <p><a href="/index.html">HOME <i class="fas fa-angle-right"></i></a> CONTACT <i
                            class="fas fa-angle-right"></i></p>
                    <h1>Contact Us</h1>
                </div>
            </div>

        </div>

        <div class="topspace"></div>

        <!-- --------------------------------  Contact Us ---------------------------- -->
        <div class="contact">
            <div class="contactcontanner">

                <div class="contanner">

                    <div class="heading">
                        <div class="icon"><i class="far fa-map"></i></div>
                        <div class="info">
                            <p>Address : </p>
                            <p id="contactinfo">Bangalore, Karnataka, India</p>
                        </div>
                    </div>

                    <div class="heading">
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="info">
                            <p>Phone : </p>
                            <p id="contactinfo">+91 6351188112</p>
                        </div>
                    </div>

                    <div class="heading">
                        <div class="icon"><i class="far fa-envelope"></i></div>
                        <div class="info">
                            <p>Email : </p>
                            <p id="contactinfo">ayushkumar412001 @gmail.com</p>
                        </div>
                    </div>

                </div>

                <div class="messageform">

                    <div class="form">
                        <form action="contact.php" method="POST">

                            <style>
                            ::placeholder {
                                color: rgba(0, 0, 0, 0.7);
                            }
                            </style>

                        

                            <input type="text" name="name" placeholder="Your Name" required>

                            <input type="email" name="email" placeholder=" Your Email" required>

                            <input type="text" name="subject" placeholder="Subject" required>

                            <textarea type="message" name="message" id="inputbox" cols="30" rows="10"
                                placeholder="Message" required></textarea>

                            <button type="submit">Send Message</button>

                        </form>
                    </div>

                </div>

            </div>
        </div>

        <!-- map -->
        <div class="map">
        <div class="mapcontanner">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d777007.3387089127!2d76.99048294728457!3d12.953847733987294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670b8aafef9%3A0xe93648a0f4278e16!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1623237879387!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

        <!-- --------------------------------------- Footer  ------------------------------ -->
        <?php include 'partials/_footer.php'; ?>

    </div>

    <!--------------------------------------------------- Script -------------------------------- -->
    <!-- Menu -->
    <script src="js/menu.js"></script>

</body>

</html>