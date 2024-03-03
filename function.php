<?php

function getData(){
    $api_url = 'http://localhost:5000/xxx';

    // Read JSON file
    $json_data = file_get_contents($api_url);

    // Decode JSON data into PHP array
    return $response_data = json_decode($json_data);

    // All user data exists in 'data' object
    // $data = $response_data->result;
    // echo "name: ".$data;
   
    // foreach ($data as $user) {
    //     echo "name: ".$user->employee_name;
    //     echo "<br />";
    //     echo "name: ".$user->employee_age;
    //     echo "<br /> <br />";
    // }
}