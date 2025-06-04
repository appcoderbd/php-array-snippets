<?php 

// ✅ Student Grade Evaluation Using If-Else Conditions in PHP

$grades_number = 32;

if ($grades_number >= 80 && $grades_number <=100){
    echo "A+";

} elseif ($grades_number >= 70){
    echo "A";
}
elseif ($grades_number >= 60){
    echo "A-";
} elseif ($grades_number >= 50){
    echo "B";
} elseif ($grades_number >= 40){
    echo "C";
}
elseif ($grades_number >= 33){
    echo "D";
}
elseif ($grades_number >=0){
    echo "F";
} else {
    echo "Invalid grade number";
}

// ✅ Public Transport Fare Calculation Based on Age with If-Else

$age = 65;

if ($age <= 5){
    echo "Fare: Free";
} elseif ($age <= 17){
    echo "Fare: 20 BDT";
} elseif ($age <=64){
    echo "Fare: 50 BDT";
} else {
    echo "Fare: 30 BDT (Senior Citizen Discount)";
}


$total_bill = 199;

if ( $total_bill >= 1000){
    $discount = $total_bill * 20 / 100;
    $pay_bill = $total_bill -  $discount;
    echo "Discount: 20% \nYou saved: $discount BDT \nFinal Bill: $pay_bill BDT";	
} elseif ($total_bill >= 500){
    $discount = $total_bill * 10 / 100;
    $pay_bill = $total_bill -  $discount;
    echo "Discount: 10% \nYou saved: $discount BDT \nFinal Bill: $pay_bill BDT";
} elseif ( $total_bill >= 200){
    $discount = $total_bill * 5 / 100;
    $pay_bill = $total_bill -  $discount;
    echo "Discount: 5% \nYou saved: $discount BDT \nFinal Bill: $pay_bill BDT";
} else { 
    echo "No discount \n\nFinal Bill: $total_bill BDT";
}


// ✅ Employee Bonus Calculation Using Experience and Performance Score

$experience_years = 10;
$performance_score = 10;
$basic_salary = 50000;


if ( $experience_years >= 10 && $performance_score >=8 &&  $performance_score <=10){
    $bonus = $basic_salary * 25 / 100;
    echo "Bonus: 25% \nYou will receive: $bonus BDT";
} elseif ($experience_years >= 10 && $performance_score >=5 &&  $performance_score <=7){
    $bonus = $basic_salary * 20 / 100;
    echo "Bonus: 20% \nYou will receive: $bonus BDT";
} elseif ($experience_years >= 10 && $performance_score >=1 &&  $performance_score <=4){
    $bonus = $basic_salary * 10 / 100;
    echo "Bonus: 10% \nYou will receive: $bonus BDT";
} elseif ($experience_years >= 5 && $performance_score >=8 &&  $performance_score <=10){
    $bonus = $basic_salary * 20 / 100;
    echo "Bonus: 20% \nYou will receive: $bonus BDT";
} elseif ($experience_years >= 5 && $performance_score >=5 &&  $performance_score <=7){
    $bonus = $basic_salary * 15 / 100;
    echo "Bonus: 15% \nYou will receive: $bonus BDT";
} elseif ($experience_years >= 5 && $performance_score >=1 &&  $performance_score <=4){
    $bonus = $basic_salary * 5 / 100;
    echo "Bonus: 5% \nYou will receive: $bonus BDT";
} elseif ($experience_years >= 1 && $performance_score >=8 &&  $performance_score <=10){
    $bonus = $basic_salary * 10 / 100;
    echo "Bonus: 10% \nYou will receive: $bonus BDT";
} elseif ($experience_years >= 1 && $performance_score >=5 &&  $performance_score <=7){
    $bonus = $basic_salary * 5 / 100;
    echo "Bonus: 5% \nYou will receive: $bonus BDT";
} else { 
    echo "No Bonus";
}

