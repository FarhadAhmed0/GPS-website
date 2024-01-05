<!-- about.php -->

<?php
    $pageTitle = "About Us - Celestial Tech Ltd";
    include('header.php');
    include('navigation.php');
?>

<section>
    <h2>About Celestial Tech Ltd</h2>
    <p>CELESTIAL TECH LIMITED is a fully integrated solution provider for the marine and for decentralized power & energy systems in Bangladesh.In the Marine sector, CELESTIAL TECH LIMITED focuses on High-Performance Vessels like High-Speed Craft, Survey Boats, Tugs, Fire-fighting Boats, Search & Rescue Boats, Patrol Boats, Research Vessels, Work Boats and other specialized boats/ships for both in the public and private sectors of Bangladesh market. The Company is Bangladesh’s industry leader in providing design and complete propulsion solutions and equipment packages for boats and ships. We also supply various Marine Propulsion Machinery, Outboard Engines, Navigation and Communication Equipment, Underwater Systems, Diving and Ship-Safety Equipment, Land and Marine Survey Equipment and Marine Generators, etc. Our customers include the Bangladesh Army Bangladesh Navy, Bangladesh Coast Guard, Chittagong Port Authority, Paira Port Authority, Bangladesh Inland Water Transport Authority (BIWTA), Bangladesh Inland Water Transport Corporation (BIWTC), Bangladesh Water Development Board, Roads and Highway Department and a good number of Shipyards in Bangladesh.CELESTIAL TECH LIMITED understands that the products and systems provided by the company to our customers are serving a purpose to enable the customers to run their business and duty more effectively and accompanies the customers throughout the life cycle of the products and systems sold. CELESTIAL TECH LIMITED puts a high emphasis on the ability for servicing the products sold with the purpose to ensure their highest possible operational availability. The well-trained service technicians and the workshops established by CELESTIAL TECH LIMITED in Bangladesh ensure the desired service for the local markets.Current strength of the company and its affiliated entities are over 65 persons in various divisions of which more than 40 are engineers and technicians.</p>
    
</section>
<script>
    window.addEventListener('scroll', function () {
        var header = document.querySelector('header');
        header.classList.toggle('small', window.scrollY > 0);
    });
</script>
<?php include('footer.php'); ?>
