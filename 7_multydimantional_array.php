<?php

// Multidimantional Array

$mahbub_info = [

  'name'=> [
    'first_name' => 'Mahbub',
    'last_name' => 'Rimon',
  ],
  'address' => [
    'vill'=> 'madbar_kandi',
    'po'=> 'Shokhipur',
    'district'=> 'Shariatpur'
  ],
  'education' => [
    'primary' => [
      'play_to_three'=> 'Zessore',
      'three_to_five'=> 'Shariatpur',
    ],
  ],
];

echo $mahbub_info['education'];

print_r($mahbub_info);