<html>
  <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Doc</title>
          <link rel="stylesheet" href="../style.css">
    <style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
    .error {
    border: 2px solid red;
        border-radius: 4px;
}

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #000000;
        border-radius: 4px;
        box-sizing: border-box;

    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }
    .title, .btn {
        display: block;
        margin: 10px 0 0 0;

    }
    img {
        width: 100%;

    }
    </style>
  </head>
  <body>
<div class="margin:0;">
  <?php
  if (!empty($messages)) {
      print('<div id="messages">');
      // Выводим все сообщения.
      foreach ($messages as $message) {
          print($message);
      }
      print('</div>');
  }
  ?>
</div>


        <div class="block3">
        <div class="text1">
            <h2>Регистрационная форма</h2>
            <form action="index.php" method="post">


                <label for="name">ФИО:</label><br>
                <input type="text" id="name" name="name" <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>"
                   /> <?php if (!empty($messages_fio)) {
                        print('<div id="messages_fio">');
                        // Выводим все сообщения.
                        foreach ($messages_fio as $message_fio) {
                            print($message_fio);
                        }

                    }?><br>

                <label for="phone">Телефон:</label><br>
                <input type="tel" id="phone" name="phone"  <?php if ($errors['phone']) {print 'class="error"';} ?> value="<?php print $values['phone']; ?>" /><?php if (!empty($messages_phone)) {
                print('<div id="messages">');
                // Выводим все сообщения.
                foreach ($messages_phone as $message_phone) {
                    print($message_phone);
                }
            }?> <br>

                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" <?php if ($errors['email']) {print 'class="error"';}?>  value="<?php print $values['email']; ?>"/><?php if (!empty($messages_email)) {
                print('<div id="messages">');
                // Выводим все сообщения.
                foreach ($messages_email as $message_email) {
                    print($message_email);
                }
            }?> <br>

                <label for="dob">Дата рождения:</label><br>
                <input type="date" id="dob" name="date" <?php if ($errors['date']) {print 'class="error"';} ?> value="<?php print $values['date']; ?>"/><?php if (!empty($messages_date)) {
                print('<div id="messages">');
                // Выводим все сообщения.
                foreach ($messages_date as $message_date) {
                    print($message_date);
                }
            }?><br>
            <?php
            if(isset($_POST["gender"]))
            {
            $course = $_POST["gender"];
            echo $course;
            }
            ?>
            <label> Пол </label> <br>
            <input type="radio" name="gender" value="m" />Мужской <br>
            <input type="radio" name="gender" value="f" />Женский
               <?php  ?><?php if (!empty($messages_gender)) {
                print('<div id="messages">');
                // Выводим все сообщения.
                foreach ($messages_gender as $message_gender) {
                    print($message_gender);
                }
            }?>
           
          <br>

            <label class="title" for="prog_lang">Любимый язык программирования:</label>
                <!-- <select id="prog_lang" name="prog_lang[]" multiple required> -->
                <select id="prog_lang"  name="Languages[]" multiple="multiple" >
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
            <textarea id="biography" name="biography" rows="4" <?php if($errors['biography']){print 'class="error"';}?>><?php print $values['biography'];?></textarea><?php if (!empty($messages_biography)){
                print('<div id="messages">');
                // Выводим все сообщения.
                foreach ($messages_biography as $message_biography) {
                    print($message_biography);
                }
                print('</div>');}?><br>

            <label>С контрактом ознакомлен(а)</label> <input type="checkbox" name="contract" <?php if($errors['contract']){print 'class="error"';}?> />
           <?php print $values['contract'];?><?php if (!empty($messages_contract)){
                print('<div id="messages">');
                // Выводим все сообщения.
                foreach ($messages_contract as $message_contract) {
                    print($message_contract);
                }
                }?><br>
                <input class="btn" type="submit" value="Сохранить">
            </form>
        </div>
            </div>
  </body>
</html>
