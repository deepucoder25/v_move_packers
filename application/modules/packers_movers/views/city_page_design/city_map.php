<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 
$current_city = strtolower(trim(str_replace('-', ' ', $city)));

if ($current_city == 'ghatkopar') { ?>
    <!-- Custom Map for Ghatkopar -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.440513107956!2d72.9064748!3d19.0767596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7515450f033%3A0xeec6159160968078!2sV%20Move%20Packers%20And%20Movers!5e1!3m2!1sen!2sin!4v1790401435023!5m2!1sen!2sin"
        width="600"
        height="450"
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>

<?php } elseif ($current_city == 'badlapur') { ?>
    <!-- Custom Map for Badlapur -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.559660692195!2d73.23532349999999!3d19.157755700000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be793bc121ba87b%3A0xb81d2df32365b060!2sV%20Move%20Packers%20and%20Movers%20Badlapur!5e1!3m2!1sen!2sin!4v1790401543048!5m2!1sen!2sin" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>

<?php } elseif ($current_city == 'kharghar') { ?>
    <!-- Custom Map for Kharghar -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.6770626476236!2d73.0722554!3d19.066549499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1a23ff6ba91%3A0xea855a5584d135b4!2sV%20Move%20Packers%20And%20Movers!5e1!3m2!1sen!2sin!4v1790401619195!5m2!1sen!2sin" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>

<?php } else { 
    // Dynamic coordinate lookup from $cities
    foreach ($cities as $ct) {
        if (@$ct['nm'] == $city) {
            $lat = $ct['lat'];
            $lon = $ct['lon'];
            $state_code = $ct['sc'];
            break;
        }
    } 

    if (!empty($lat) && !empty($lon)) { ?>
        <iframe
            width="100%"
            height="400"
            class="pm-city-map-iframe"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=en&z=12&output=embed">
        </iframe>
    <?php } else { ?>
        <iframe
            width="100%"
            height="400"
            class="pm-city-map-iframe"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps?q=<?php echo urlencode($city . ', ' . $state); ?>&hl=en&z=12&output=embed">
        </iframe>
    <?php } 
} ?>