<!-- index.php -->

<?php
    $pageTitle = "Home - Celestial Tech Ltd";
    include('header.php');
    include('navigation.php');
?>

<section>
    <h2>Welcome to Celestial Tech Ltd</h2>
    <p>Discover cutting-edge technology that reaches for the stars. At Celestial Tech Ltd, we are committed to
        pushing the boundaries of innovation to new heights. Explore our range of marine solutions designed to
        elevate your experience.</p>

    <a href="#contact" class="cta-button">Get in Touch</a>
</section>
<script>
    window.addEventListener('scroll', function () {
        var header = document.querySelector('header');
        header.classList.toggle('small', window.scrollY > 0);
    });
</script>

<?php include('footer.php'); ?>
