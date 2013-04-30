<form action=<?php echo $_SERVER["PHP_SELF"];?> method="post">
    <label>Виберіть запит</label>
    <select name="select">
        <option value="0">Вибрати</option>
        <option value="1">Вивести всі статті</option>
        <option value="2">Вивести тільки статті зі статусом «1»</option>
        <option value="3">Вивести статті, заголовок яких починається з букви «W»</option>
        <option value="4">Вивести статті, які були опубліковані після 20 квітня</option>
        <option value="5">Вивести кількість опублікованих статей.</option>
        <option value="6">Вивести всі статті, де в тексті зустрічається слово «sensation»</option>
        <option value="7">Вивести всі статті, відсортувавши їх по назві в алфавітному порядку</option>
        <option value="8">Вивести всі статті, які були створені в проміжку часу між 26 січня і 15 квітня</option>
        <option value="9">Вивести всі статті і дані користувача, де вік користувачів більший 25 років</option>
        <option value="10">Вивести користувача з максимальним віком</option>
        <option value="11">Вивести статті, які створені користувачем з ім'ям John</option>
        <option value="12">Вивести 3 статті, які були створені самими останніми</option>
        <option value="13">Вивести всі статті, які були створені користувачами з іменами “Frank” або “Jason” і не створені

            користувачами з іменем “Peter”</option>
        <option value="14">Вивести всі статті, де в тексті згадується слово “product” і які були створені користувачем віком

            старше 30 років</option>
    </select>
    <input type="submit" name="submit" value="Ok">
</form>
<?php require_once("query.php") ?>