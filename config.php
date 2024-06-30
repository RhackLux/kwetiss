<?php
$fname[] = 'PPCP-CVV.php';
$apiname[] = 'CCN ';


$fname[] = 'ppro.php';
$apiname[] = 'CVV ';

$fname[] = 'stripe1.php';
$apiname[] = 'Stripe ';
?>

<script>


    // Loop through the APIs
for ($i = 0; $i < count($fname); $i++) {
    // Check if the API is active
    $isActive = checkIfApiIsActive($fname[$i]); // This function should return true if the API is active, and false otherwise

    // Output the API name
    echo '<p>' . $apiname[$i];

    // If the API is active, output the active symbol
    if ($isActive) {
        echo ' <span class="active-symbol">✔</span>';
    }

    echo '</p>';

}

function checkIfApiIsActive($fname) {
    // Check if the API is active
    // This is just a placeholder. Replace this with your actual code to check if the API is active.
    return file_exists($fname);
}
</script>