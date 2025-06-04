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


$numbers = [1,8,2,6,3,12,15,85,26,84,51,53,84,95,20];

// Sort the array in ascending order
sort($numbers);

// Output the sorted array
echo "Sorted numbers: ";
print_r($numbers);

// Find the even numbers in the array

$even_numbers = [];
$odd_numbers = [];

foreach ($numbers as $number){

    if($number % 2 == 0){

        $even_numbers[] = $number;
        
    } else {
        $odd_numbers[] = $number;
        
    }
}
// Output the even and odd numbers
print_r($odd_numbers);
print_r($even_numbers);









