// <?php
// // Замените 'YOUR_BOT_TOKEN' на токен вашего бота
// $botToken = '6523194156:AAEZLdp4K8obQIAJtJTJUY5JNZHH9R0E3PI';
//
// // Замените 'YOUR_CHAT_ID' на chat_id чата, в который вы хотите отправить данные
// $chatId = '5441483969';
//
// // Данные для отправки
// $name = $_POST['name'];
// $phone = $_POST['tel'];
// $city = $_POST['city'];
// $email = $_POST['email'];
//
// // Сообщение для отправки в Telegram
// $message = "Имя: $name\nТелефон: $phone\nГород: $city\nEmail: $email";
//
// // Формируем URL для отправки запроса к Telegram Bot API
// $apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . $message;
//
// // Отправляем запрос к Telegram Bot API с использованием cURL
// $ch = curl_init($apiUrl);
//
// // Настройки cURL-запроса
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
// // Выполняем запрос
// $response = curl_exec($ch);
//
// // Проверяем ответ на ошибки (можно добавить дополнительную обработку ошибок)
// if ($response === false) {
//     echo "Ошибка при отправке данных в Telegram.";
// } else {
//     echo "Данные успешно отправлены в Telegram.";
// }
//
// // Закрываем соединение cURL
// curl_close($ch);
// ?>
