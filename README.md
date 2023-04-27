# TASK 4
## функции для удаления элементов массива:
+ unset(): удаляет элемент из массива по его ключу
+ array_splice(): удаляет элементы из массива и возвращает массив, содержащий удаленные элементы
+ array_pop(): удаляет и возвращает последний элемент массива
+ array_shift(): удаляет и возвращает первый элемент массива
## для минимизации затрат памяти лучше подходят:
+ unset()
+ array_filter()
### они не создают новый массив и не используют доп память для хранения удаленных элементов
