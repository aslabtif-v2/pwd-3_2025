<?php
$array =[
    [
    'nama' => 'haris',
    'alamat' => 'rancagoong'
    ],
    [
    'nama' => 'kevin',
    'alamat' => 'bumi mas',
    ]
];

header("Content-type:text/html;charset-UTF-8");
header("Content-type:application/json");
echo json_encode($array, JSON_PRETTY_PRINT);