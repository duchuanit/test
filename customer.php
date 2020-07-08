<?php 
header("Content-type: application/json; charset=utf-8");
$customers = [
    [
        'customer_name' => 'Nguyễn Văn A',
        'address' => 'Hai Bà Trưng, Hà Nội',
        'phone' => '0846669669',
        'birthday' => '22/12/2009',
        'email' => 'test@test.com'
    ],
    [
        'customer_name' => 'Nguyễn Văn B',
        'address' => 'Thanh Xuân, Hà Nội',
        'phone' => '09123456789',
        'birthday' => '27/07/2001',
        'email' => 'test2@test.com'
    ],
    [
        'customer_name' => 'Nguyễn Văn C',
        'address' => 'Từ Liêm, Hà Nội',
        'phone' => '09122223323',
        'birthday' => '08/03/2002',
        'email' => 'test3@test.com'
    ],
    [
        'customer_name' => 'Nguyễn Văn D',
        'address' => 'Cầu Giấy, Hà Nội',
        'phone' => '0845553333',
        'birthday' => '20/10/2001',
        'email' => 'test4@test.com'
    ]
];
echo json_encode($customers);
?>