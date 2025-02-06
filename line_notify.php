<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST['message'];

    // ตรวจสอบว่า $message ไม่ว่าง
    if (!empty($message)) {
        $token = "XeZDpvUIHQA8LxylPRaFxhXLQUCdLVVeJA2UK4nEXiT"; // ใส่ Access Token ที่ได้จาก LINE Notify

        $url = "https://notify-api.line.me/api/notify";
        $data = array('message' => $message);
        $options = array(
            'http' => array(
                'header'  => "Content-Type: application/x-www-form-urlencoded\r\n" .
                             "Authorization: Bearer $token\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        // ตรวจสอบการส่งข้อความ
        if ($result !== false) {
            echo 'ส่งเรียบร้อย';
        } else {
            echo 'ไม่สามารถส่งข้อความได้';
        }
    } else {
        echo 'กรุณากรอกข้อความ';
    }
} else {
    echo 'ไม่สามารถประมวลผลการร้องขอ';
}
