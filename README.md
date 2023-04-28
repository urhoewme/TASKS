# TASK 7
## Regex
Это определенные шаблоны для поиска, замены и обработки текста
## Regex methods:
+ preg_match($pattern, $subject, &$matches) - ищет первое вхождение паттерна в строке и соответствия сохраняет в массив мэтчей
+ preg_match_all($pattern, $subject, &$matches) - ищет все вхождения и сохраняет их в массив, возвращает количество соответствий
+ preg_replace($pattern, $replacement, $subject) - заменяет все вхождения паттерна в строку на реплейсмент
+ preg_split($pattern, $subject) - разбивает строку используя паттерн как разделитель
