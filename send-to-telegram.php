<?php


$BOT_TOKEN = '8069968783:AAEY3TC9H0PUge521fdhJvhjVbX_Bp3IIH4';
$CHAT_ID = '-4993663586';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $name = isset($_POST['user_name']) ? htmlspecialchars(trim($_POST['user_name'])) : 'Не вказано';
    $phone = isset($_POST['user_phone']) ? htmlspecialchars(trim($_POST['user_phone'])) : 'Не вказано';

    
    if (empty($name) || empty($phone) || $name === 'Не вказано' || $phone === 'Не вказано') {
        http_response_code(400); 
        echo json_encode(['status' => 'error', 'message' => 'Будь ласка, заповніть усі поля.']);
        exit;
    }

    
    $message = "<b>Нова заявка з сайту!</b>\n\n";
    $message .= "<b>Ім'я:</b> " . $name . "\n";
    $message .= "<b>Телефон:</b> " . $phone;

  
    $apiUrl = "https://api.telegram.org/bot" . $BOT_TOKEN . "/sendMessage";
    
    
    $data = [
        'chat_id' => $CHAT_ID,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
   
    if ($response) {
        $responseDecoded = json_decode($response, true);
        if ($responseDecoded['ok']) {
            
            echo json_encode(['status' => 'success', 'message' => 'Дякуємо! Ваша заявка прийнята.']);
        } else {
            
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Помилка Telegram: ' . $responseDecoded['description']]);
        }
    } else {
        
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Помилка відправки. Не вдалося з\'єднатися.']);
    }

} else {
    
    http_response_code(405); 
    echo json_encode(['status' => 'error', 'message' => 'Метод не дозволено.']);
}
?>