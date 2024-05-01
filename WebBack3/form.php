<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Backend</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Регистрационная форма</h2>
    <form action="index.php" method="post">
        <label for="full_name">ФИО:</label><br>
        <input type="text" id="full_name" name="name" required><br>

        <label for="phone">Телефон:</label><br>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}"><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="dob">Дата рождения:</label><br>
        <input type="date" id="dob" name="date" required><br>

        <label>Пол:</label><br>
        <input type="radio" id="male" name="gender" value="m" required>
        <label for="male">Мужской</label>
        <input type="radio" id="female" name="gender" value="f" required>
        <label for="female">Женский</label><br>

        <label class="title" for="prog_lang">Любимый язык программирования:</label>

        <!-- <select id="prog_lang" name="prog_lang[]" multiple required> -->
        <select id="prog_lang" name="Languages[]" multiple="multiple">
            <option value="Pascal">Pascal</option>
            <option value="C">C</option>
            <option value="C++">C++</option>
            <option value="JavaScript">JavaScript</option>
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="Haskel">Haskel</option>
            <option value="Clojure">Clojure</option>
            <option value="Prolog">Prolog</option>
            <option value="Scala">Scala</option>
        </select><br>

        <label class="title" for="biography">Биография:</label>
        <textarea id="biography" name="biography" rows="4" required></textarea><br>

        <input type="checkbox" id="contract" name="agree" required>
        <label for="contract">С контрактом ознакомлен(а)</label><br>

        <input class="btn" type="submit" value="Сохранить">
    </form>


    <p>1) Подключение к серверу СУБД</p>
  <img src="pic/maryadb1.PNG" alt="screenshot-1">
  <br>
  <br>
  <p>2) Создание таблицы</p>
  <img src="pic/tableAPP2.PNG" alt="screenshot-2">
  <img src="pic/tableLang3.PNG" alt="screenshot-3">
  <img src="pic/tableApp_Lang4.PNG" alt="screenshot-4">
  <img src="pic/poleLang5.PNG" alt="screenshot-5">
  <br>
  <br>
  <p>3) Заполнение таблицы</p>
  <img src="pic/form7.PNG" alt="screenshot-6">
  <br>
  <br>
  <p>4) Просмотр содеражания таблиц</p>
  <img src="pic/formSave6.PNG" alt="screenshot-7">
</div>

</body>