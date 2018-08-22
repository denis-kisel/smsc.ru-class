# smsc.ru-class
Класс для системы смс уведомлений smsc.ru

# Настройка
Необходимо заполнить приватные поля  
`$login, $pass, $sender`

# Пример в коде  
`$sms = new SMS();`  
`$sms->phone = '+3800000000'`  
`$sms->message = 'Some message'`  
`$sms->send()`
