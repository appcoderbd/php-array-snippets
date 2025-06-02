<?php 

$country = [
    "USA" => "United States of America",
    "CAN" => "Canada",
    "MEX" => "Mexico",
    "GBR" => "United Kingdom",
    "FRA" => "France",
    "DEU" => "Germany",
    "ITA" => "Italy",
    "ESP" => "Spain",
    "JPN" => "Japan",
    "CHN" => "China"
];


print_r($country);
// Output the value for a specific key

echo "The full name of the country with code 'USA' is: " . $country["USA"] . "\n";
// Add a new key-value pair
$country["IND"] = "India";
// Output the updated associative array
print_r($country);

// Check if a key exists
if (array_key_exists("CAN", $country)) {
    echo "Canada is in the associative array.\n";
} else {
    echo "Canada is not in the associative array.\n";
}








