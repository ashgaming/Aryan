<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php $path = $_SERVER["DOCUMENT_ROOT"]."/aryan/assets/components/";
    include($path."navbar.html"); ?>

<div class="container">
    <h2>Company</h2>
    <p>Aryan Travels</p>
    <h2>Our Mission</h2>
    <p>

At Aryan Tours & Travels, our passion lies in creating unforgettable travel experiences for our valued customers. With years of expertise in the industry, we specialize in designing and organizing adventurous and culturally enriching tours to destinations around the world.

Our dedicated team of travel experts meticulously plans each itinerary, ensuring that every aspect of the journey exceeds expectations. We believe that travel should be a seamless and hassle-free experience, which is why we take care of all the details, from booking flights and accommodations to arranging local transportation and expert guides.

We offer a wide range of tour options, catering to various interests and preferences. Whether you're looking to explore vibrant cities, immerse yourself in stunning natural landscapes, embark on thrilling outdoor adventures, or experience the rich history and culture of a new destination, we have the perfect tour for you.

At Wanderlust Tours & Travels, we prioritize customer satisfaction and safety above all else. Our guides are highly trained professionals who are passionate about sharing their knowledge and ensuring that each traveler has an enriching and enjoyable experience. We also prioritize sustainable and responsible travel practices, aiming to minimize our impact on the environment and support local communities.

Whether you're a solo traveler, a couple, a family, or a group of friends, we are dedicated to creating personalized and tailor-made adventures that suit your needs and desires. Get ready to embark on unforgettable journeys with Wanderlust Tours & Travels, where every step of the way is filled with discovery, excitement, and lifelong memories.
</p>
    <h2>Our Team</h2>
    <ul>
        <li>ABC - CEO</li>
        <li>XYZ - COO</li>
        <li>MLD - CFO</li>
    </ul>
</div>

   <?php include($path."footer.html"); ?>
</body>
</html>