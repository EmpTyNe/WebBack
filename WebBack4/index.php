<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $messages = array();
    $messages_fio = array();
    $messages_date = array();
    $messages_phone = array();
    $messages_email = array();
    $messages_biography = array();
    $messages_gender=array();
    $messages_contract=array();



  if (!empty($_COOKIE['save1']) || !empty($_COOKIE['save2']) || !empty($_COOKIE['save3']) || !empty($_COOKIE['save4'])  || !empty($_COOKIE['save7'])) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('save1', '', 100000);
      setcookie('save2', '', 100000);
      setcookie('save3', '', 100000);
      setcookie('save4', '', 100000);

      setcookie('save7', '', 100000);


    $messages[] = 'Спасибо, результаты сохранены.';
  }

  $errors = array();

    $errors['name'] = !empty($_COOKIE['name_error']);
    $errors['phone'] = !empty($_COOKIE['phone_error']);
    $errors['email'] = !empty($_COOKIE['email_error']);
    $errors['date'] = !empty($_COOKIE['date_error']);
    $errors['biography'] = !empty($_COOKIE['biography_error']);
    $errors['gender'] = !empty($_COOKIE['gender_error']);
    $errors['contract']= !empty($_COOKIE['conract_error']);
 
    if ($errors['name']) {

    setcookie('name_error', '', 100000);
    setcookie('name_value', '', 100000);

    $messages_fio[] = '<div class="error">Укажите ваше ФИО.</div>';
  }
   if ($errors['phone']) {

        setcookie('phone_error', '', 100000);
        setcookie('phone_value', '', 100000);

        $messages_phone[] = '<div class="error">Укажите корректный номер телефона.</div>';


   }
    if ($errors['email']) {

        setcookie('email_error', '', 100000);
        setcookie('email_value', '', 100000);
        // Выводим сообщение.
        $messages_email[] = '<div class="error">Введите корректный Email.</div>';
    }
    if ($errors['date']) {

        setcookie('date_error', '', 100000);
        setcookie('date_value', '', 100000);

        $messages_date[] = '<div class="error">Укажите дату рождения.</div>';
    }

    if ($errors['gender']) {

        setcookie('gender_error', '', 100000);
        setcookie('gender_value', '', 100000);

        $messages_gender[] = '<div class="error">Укажите пол.</div>';
    }


    if ($errors['biography']) {

        setcookie('biography_error', '', 100000);
        setcookie('biography_value', '', 100000);

        $messages_biography[] = '<div class="error">Заполните поле биография.</div>';
    }
    if ($errors['contract']) {

        setcookie('contract_error', '', 100000);
        setcookie('contract_value', '', 100000);

        $messages_biography[] = '<div class="error">Ознакомьтесь с контрактом</div>';
    }


  $values = array();
  $values['name'] = empty($_COOKIE['name_value']) ? '' : $_COOKIE['name_value'];
  $values['phone'] = empty($_COOKIE['phone_value']) ? '' : $_COOKIE['phone_value'];
    $values['email'] = empty($_COOKIE['email_value']) ? '' : $_COOKIE['email_value'];
    $values['date'] = empty($_COOKIE['date_value']) ? '' : $_COOKIE['date_value'];

    $values['gender'] = empty($_COOKIE['gender_value']) ? '' : $_COOKIE['gender_value'];
    $values['biography'] = empty($_COOKIE['biography_value']) ? '' : $_COOKIE['biography_value'];
    $values['contract'] = empty($_COOKIE['contract_value']) ? '' : $_COOKIE['contract_value'];


  include('form.php');
}
else {
    $errors = FALSE;

    if (empty($_POST['name'])) {

        setcookie('name_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }

    $errors = FALSE;
        if (empty($_POST['phone']) || !preg_match('~^(?:\+7|8)\d{10}$~', $_POST['phone']) ) {

        setcookie('phone_error', '2', time() + 24 * 60 * 60);
        $errors = TRUE;
        }



        if (empty($_POST['email']) || preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST['phone'])) {

        setcookie('email_error', '3', time() + 24 * 60 * 60);
            $errors = TRUE;
        }

   if (empty($_POST['date'])) {

       setcookie('date_error', '4', time() + 24 * 60 * 60);
       $errors = TRUE;
   }

   if (empty($_POST['gender'])) {

    setcookie('gender_error', '5', time() + 24 * 60 * 60);
    $errors = TRUE;
   }



    if (empty($_POST['biography'])|| preg_match('/^[a-zA-Zа-яА-Яе0-9,.!? ]+$/',$_POST['biography'])) {

        setcookie('biography_error', '7', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    if (empty($_POST['contract'])) {

        setcookie('contract_error', '8', time() + 24 * 60 * 60);
        $errors = TRUE;
       }



    setcookie('name_value', $_POST['name'], time() + 30 * 24 * 60 * 60);
    setcookie('phone_value', $_POST['phone'], time() + 30 * 24 * 60 * 60);
    setcookie('email_value', $_POST['email'], time() + 30 * 24 * 60 * 60);
    setcookie('date_value', $_POST['date'], time() + 30 * 24 * 60 * 60);
    setcookie('gender_value', $_POST['gender'], time() + 30 * 24 * 60 * 60);
    setcookie('biography_value', $_POST['biography'], time() + 30 * 24 * 60 * 60);
    setcookie('contract_value', $_POST['contract'], time() + 30 * 24 * 60 * 60);


    if ($errors) {

        header('Location: index.php');
        exit();
    } else {

        setcookie('name_error', '', 100000);
        setcookie('phone_error', '', 100000);
        setcookie('email_error', '', 100000);
        setcookie('date_error', '', 100000);
        setcookie('gender_error', '', 100000);
        setcookie('Languages[]_error', '', 100000);
        setcookie('biography_error', '', 100000);
        setcookie('contract_error', '', 100000);

    }
    if ($errors) {
        exit();
    }
    $name  = $_POST['name'];
    $phone = $_POST['phone'];
    $email  = $_POST['email'];
    $date  = $_POST['date'];
    $gender = $_POST['gender'];
    $biography = $_POST['biography'];
    $contract = $_POST['contract'];

    $user = 'u67363';
    $pass = '9719047';
    $db = new PDO('mysql:host=localhost;dbname=u67363', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($_POST['languages[]'] as $language) {
        $stmt = $db->prepare("SELECT id FROM languages WHERE id= :id");
        $stmt->bindParam(':id', $language);
        $stmt->execute();
        if ($stmt->rowCount() == 0) {
            print('Ошибка при добавлении языка.<br/>');
            exit();
        }
    }

    try {
        $stmt = $db->prepare("INSERT INTO application (names,phones,email,dates,gender,biography)" . "VALUES (:name,:phone,:email,:date,:gender,:biography)");
        $stmt->execute(array('name' =>  $name, 'phone' => $phone, 'email' => $email, 'date' => $date, 'gender' => $gender, 'biography' => $biography));
        $applicationId = $db->lastInsertId();

        foreach ($_POST['languages[]'] as $language) {
            $stmt = $db->prepare("SELECT id FROM languages WHERE title = :title");
            $stmt->bindParam(':title', $language);
            $stmt->execute();
            $languageRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($languageRow) {
                $languageId = $languageRow['id'];

                $stmt = $db->prepare("INSERT INTO application_lang (id_lang, id_app) VALUES (:languageId, :applicationId)");
                $stmt->bindParam(':languageId', $languageId);
                $stmt->bindParam(':applicationId', $applicationId);
                $stmt->execute();
            } else {
                print('Ошибка: Не удалось найти ID для языка программирования: ' . $language . '<br/>');
                exit();
            }
        }

        print('Спасибо, форма сохранена.');
    }

    catch(PDOException $e){
        print('Error : ' . $e->getMessage());
        exit();
    }

    setcookie('save1', '1');
    setcookie('save2', '2');
    setcookie('save3', '3');
    setcookie('save4', '4');
    setcookie('save6', '7');


    header('Location: index.php');

}