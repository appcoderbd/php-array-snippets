<?php

    $numbers = array(1,3,5,4,6,9,7,8);

   // print_r($numbers);

    /*    Output:
        [0] => 1
        [1] => 3
        [2] => 5
        [3] => 4
        [4] => 6
        [5] => 9
        [6] => 7
        [7] => 8
    */

    // Change the value of the first element
    $numbers[0] = 10;
    // print_r($numbers);

    /*    Output:
        [0] => 10
        [1] => 3
        [2] => 5
        [3] => 4
        [4] => 6
        [5] => 9
        [6] => 7
        [7] => 8
    */


    // Add a new element at the end of the array
    $numbers[] = 11;
    // print_r($numbers);
    /*    Output:
        [0] => 10
        [1] => 3
        [2] => 5
        [3] => 4
        [4] => 6
        [5] => 9
        [6] => 7
        [7] => 8
        [8] => 11
    */


    // Remove the last element of the array
    array_pop($numbers);
    print_r($numbers);

    /*    Output:
        [0] => 10
        [1] => 3
        [2] => 5
        [3] => 4
        [4] => 6
        [5] => 9
        [6] => 7
        [7] => 8
    */

    // Remove the first element of the array
    array_shift($numbers);
    print_r($numbers);
    /*    Output:
        [0] => 3
        [1] => 5
        [2] => 4
        [3] => 6
        [4] => 9
        [5] => 7
        [6] => 8
    */

    // Add a new element at the beginning of the array
    array_unshift($numbers, 2);
    print_r($numbers);
    /*    Output:
        [0] => 2
        [1] => 3
        [2] => 5
        [3] => 4
        [4] => 6
        [5] => 9
        [6] => 7
        [7] => 8
    */

    // Remove an any element from the array
    unset($numbers[3]);  // This will remove the element at index 3
    print_r($numbers);
    /*    Output:
        [0] => 2
        [1] => 3
        [2] => 5
        [3] => 
        [4] => 6
        [5] => 9
        [6] => 7
        [7] => 8
    */

    // More Array Functions

    $more_numbers = [10, 20, 30, 40, 50];

    print_r($more_numbers);
    /*    Output:
        [0] => 10
        [1] => 20
        [2] => 30
        [3] => 40
        [4] => 50
    */

    // Array Splice removes a portion of the array and returns it
    $removed_numbers = array_splice($more_numbers, 2, 1); // Removes 3 elements starting from index 1
    print_r($more_numbers);
    /*    Output:
        [0] => 10
        [1] => 20
        [2] => 40
        [1] => 50
    */

    

















