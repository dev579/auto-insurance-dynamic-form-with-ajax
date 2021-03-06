<?php

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : die('error');
$params = isset($_REQUEST['json']) ? json_decode($_REQUEST['json'], true) : array();
$jsonBox = array();
$error = array();
$info = array();
$exemple = array();
$form = array();
$host = $_SERVER['HTTP_HOST'];
$ref = $_SERVER['HTTP_REFERER'];










$form['form-1'] = array(
	'fields' => array(


		'region' => array(
			'title' => 'Регион проживания страхователя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Максимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_name' => array(
			'title' => 'Марка и модель автомобиля',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_year' => array(
			'title' => 'Год выпуска',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'vehicle_mileage' => array(
			'title' => 'Пробег',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'checkbox_car_is_paid_a_loan' => array(
			'title' => 'За автомобиль выплачивается кредит',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),



		'checkbox_unlimited_number_of_drivers' => array(
			'title' => 'Неограниченное кол-во водителей',
			'validate' => array(
				'minlength' => '0',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),




// start: additional section #1 of form # 1

		'bio_driver_1' => array(
			'title' => 'Фамилия / Имя / Отчество (Водитель 1)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_1' => array(
			'title' => 'Дата рождения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				// 'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_1' => array(
			'title' => 'номер Водительского удостоверения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_1' => array(
			'title' => 'Дата начала стажа 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				// 'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),


// end: additional section #1 of form # 1




		'checkbox_processing_of_personal_data' => array(
			'title' => 'согласен на обработку персональных данных',
			'validate' => array(
//				'preg' => "/^[yes]$/",
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),



		'driver_counter' => array(
			'title' => 'Количество водителей',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[1-4]$/",	// original string
				'minlength' => '1',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),





	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Тема письма',
		'title' => 'Заголовок в теле письма',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'noreply@email.com',
		'from_name' => 'noreply',
//		'to_email' => 'noreply1@email.com, noreply2@email.com', //string by default
        'to_email' => 'olegd6@mail.ru, pak975@mail.ru',
		'to_name' => 'noreply1, noreply2',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		// 'tpl' => true,
		'tpl' => false,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
//		'okay' => 'Сообщение отправлено - OK',      //RU-language //string by default
		'okay' => 'Спасибо, Ваше сообщение успешно отправлено. <br />Менеджер свяжется с Вами в ближайшее время.',
//		'err' => 'Сообщение отправлено - ERROR',      //RU-language //string by default
        'err' => 'Message was not sent - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);




// end of form #1


































$form['form-2'] = array(
	'fields' => array(


		'region' => array(
			'title' => 'Регион проживания страхователя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Максимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_name' => array(
			'title' => 'Марка и модель автомобиля',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_year' => array(
			'title' => 'Год выпуска',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'vehicle_mileage' => array(
			'title' => 'Пробег',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'checkbox_car_is_paid_a_loan' => array(
			'title' => 'За автомобиль выплачивается кредит',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),



		'checkbox_unlimited_number_of_drivers' => array(
			'title' => 'Неограниченное кол-во водителей',
			'validate' => array(
				'minlength' => '0',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),



























// start: additional section #1 of form # 2

		'bio_driver_1' => array(
			'title' => '<br />Фамилия / Имя / Отчество (Водитель #1)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_1' => array(
			'title' => 'Дата рождения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_1' => array(
			'title' => 'номер Водительского удостоверения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_1' => array(
			'title' => 'Дата начала стажа 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),


// start: additional section #1 of form # 2		



































// start: additional section #2 of form # 2


		'bio_driver_2' => array(
			'title' => '<br /><br />Фамилия / Имя / Отчество (Водитель #2)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_2' => array(
			'title' => 'Дата рождения 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_2' => array(
			'title' => 'номер Водительского удостоверения 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_2' => array(
			'title' => 'Дата начала стажа 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




// end: additional section #2 of form # 2






		'checkbox_processing_of_personal_data' => array(
			'title' => 'согласен на обработку персональных данных',
			'validate' => array(
//				'preg' => "/^[yes]$/",
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),




		'driver_counter' => array(
			'title' => '<br />Общее количество водителей',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[1-4]$/",	// original string
				'minlength' => '1',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),





	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Тема письма',
		'title' => 'Заголовок в теле письма',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'noreply@email.com',
		'from_name' => 'noreply',
//		'to_email' => 'noreply1@email.com, noreply2@email.com', //string by default
        'to_email' => 'olegd6@mail.ru, pak975@mail.ru',
		'to_name' => 'noreply1, noreply2',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		// 'tpl' => true,
		'tpl' => false,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
//		'okay' => 'Сообщение отправлено - OK',      //RU-language //string by default
		'okay' => 'Спасибо, Ваше сообщение успешно отправлено. <br />Менеджер свяжется с Вами в ближайшее время.',
//		'err' => 'Сообщение отправлено - ERROR',      //RU-language //string by default
        'err' => 'Message was not sent - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);




// end of form #2






























$form['form-3'] = array(
	'fields' => array(


		'region' => array(
			'title' => 'Регион проживания страхователя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Максимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_name' => array(
			'title' => 'Марка и модель автомобиля',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_year' => array(
			'title' => 'Год выпуска',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'vehicle_mileage' => array(
			'title' => 'Пробег',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'checkbox_car_is_paid_a_loan' => array(
			'title' => 'За автомобиль выплачивается кредит',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),



		'checkbox_unlimited_number_of_drivers' => array(
			'title' => 'Неограниченное кол-во водителей',
			'validate' => array(
				'minlength' => '0',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),


























// start: additional section #1 of form # 3

		'bio_driver_1' => array(
			'title' => '<br />Фамилия / Имя / Отчество (Водитель #1)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_1' => array(
			'title' => 'Дата рождения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_1' => array(
			'title' => 'номер Водительского удостоверения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_1' => array(
			'title' => 'Дата начала стажа 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),


// start: additional section #1 of form # 3


































// start: additional section #2 of form # 3


		'bio_driver_2' => array(
			'title' => '<br /><br />Фамилия / Имя / Отчество (Водитель #2)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_2' => array(
			'title' => 'Дата рождения 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_2' => array(
			'title' => 'номер Водительского удостоверения 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_2' => array(
			'title' => 'Дата начала стажа 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




// start: additional section #2 of form # 3












// start: additional section #3 of form # 3


		'bio_driver_3' => array(
			'title' => '<br /><br />Фамилия / Имя / Отчество (Водитель #3)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_3' => array(
			'title' => 'Дата рождения 3-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_3' => array(
			'title' => 'номер Водительского удостоверения 3-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_3' => array(
			'title' => 'Дата начала стажа 3-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),


// start: additional section #3 of form # 3








		'checkbox_processing_of_personal_data' => array(
			'title' => 'согласен на обработку персональных данных',
			'validate' => array(
//				'preg' => "/^[yes]$/",
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),




		'driver_counter' => array(
			'title' => '<br /><br />Общее количество водителей',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[1-4]$/",	// original string
				'minlength' => '1',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),





	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Тема письма',
		'title' => 'Заголовок в теле письма',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'noreply@email.com',
		'from_name' => 'noreply',
//		'to_email' => 'noreply1@email.com, noreply2@email.com', //string by default
        'to_email' => 'olegd6@mail.ru, pak975@mail.ru',
		'to_name' => 'noreply1, noreply2',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		// 'tpl' => true,
		'tpl' => false,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
//		'okay' => 'Сообщение отправлено - OK',      //RU-language //string by default
		'okay' => 'Спасибо, Ваше сообщение успешно отправлено. <br />Менеджер свяжется с Вами в ближайшее время.',
//		'err' => 'Сообщение отправлено - ERROR',      //RU-language //string by default
        'err' => 'Message was not sent - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);




// end of form # 3





























$form['form-4'] = array(
	'fields' => array(


		'region' => array(
			'title' => 'Регион проживания страхователя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Максимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_name' => array(
			'title' => 'Марка и модель автомобиля',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'vehicle_year' => array(
			'title' => 'Год выпуска',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'vehicle_mileage' => array(
			'title' => 'Пробег',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'checkbox_car_is_paid_a_loan' => array(
			'title' => 'За автомобиль выплачивается кредит',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),



		'checkbox_unlimited_number_of_drivers' => array(
			'title' => 'Неограниченное кол-во водителей',
			'validate' => array(
				'minlength' => '0',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),



























// start: additional section #1 of form # 4		

		'bio_driver_1' => array(
			'title' => 'Фамилия / Имя / Отчество (Водитель #1)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_1' => array(
			'title' => 'Дата рождения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_1' => array(
			'title' => 'номер Водительского удостоверения 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_1' => array(
			'title' => 'Дата начала стажа 1-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),


// end: additional section #1 of form # 4


































// start: additional section #2 of form # 4


		'bio_driver_2' => array(
			'title' => '<br />Фамилия / Имя / Отчество (Водитель #2)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_2' => array(
			'title' => 'Дата рождения 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_2' => array(
			'title' => 'номер Водительского удостоверения 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_2' => array(
			'title' => 'Дата начала стажа 2-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




// end: additional section #2 of form # 4











// start: additional section #3 of form # 4


		'bio_driver_3' => array(
			'title' => '<br />Фамилия / Имя / Отчество (Водитель #3)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_3' => array(
			'title' => 'Дата рождения 3-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_3' => array(
			'title' => 'номер Водительского удостоверения 3-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_3' => array(
			'title' => 'Дата начала стажа 3-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),


// end: additional section #3 of form # 4
















// start: additional section #4 of form # 4


		'bio_driver_4' => array(
			'title' => '<br />Фамилия / Имя / Отчество (Водитель #4)',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
				'maxlength' => 'Минимальная длина поля [ %1$s ] превышает допустимую - %2$s',
			)
		),



		'date_of_birth_driver_4' => array(
			'title' => 'Дата рождения 4-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),



		'driver_license_driver_4' => array(
			'title' => 'номер Водительского удостоверения 4-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[A-Z0-9]{4,10}$/",
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),




		'driving_experience_driver_4' => array(
			'title' => 'Дата начала стажа 4-го водителя',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^(0[1-9]|[1-2][0-9]|3[0-1])\.(0[1-9]|1[0-2])\.[0-9]{4}$/",	// original string
				'minlength' => '4',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),


// end: additional section # 4




		'checkbox_processing_of_personal_data' => array(
			'title' => '<br />согласен на обработку персональных данных',
			'validate' => array(
//				'preg' => "/^[yes]$/",
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),




		'driver_counter' => array(
			'title' => 'Общее количество водителей',
			'validate' => array(
//				'preg' => "/^((8|\+)[\-  ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{4,5}$/",	// original string
				'preg' => "/^[1-4]$/",	// original string
				'minlength' => '1',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длина поля [ %1$s ] меньше допустимой - %2$s',
			)
		),





	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Тема письма',
		'title' => 'Заголовок в теле письма',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'noreply@email.com',
		'from_name' => 'noreply',
//		'to_email' => 'noreply1@email.com, noreply2@email.com', //string by default
        'to_email' => 'olegd6@mail.ru, pak975@mail.ru',
		'to_name' => 'noreply1, noreply2',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		// 'tpl' => true,
		'tpl' => false,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
//		'okay' => 'Сообщение отправлено - OK',      //RU-language //string by default
		'okay' => 'Спасибо, Ваше сообщение успешно отправлено. <br />Менеджер свяжется с Вами в ближайшее время.',
//		'err' => 'Сообщение отправлено - ERROR',      //RU-language //string by default
        'err' => 'Message was not sent - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);




// start: additional section #4 of form # 4








































































if($act == 'cfg') {
   $jsonBox['configs'] = ExportConfigs($form);
    die(json_encode($jsonBox));
}

function ExportConfigs($form) {
    $need = array('antispam','antispamjs','notify');
    $conf = array();
     foreach($form as $name => $data) {
         foreach($data['cfg'] as $k => $cfg) {
           if(in_array($k, $need)) {
               $conf[$name]['cfg'][$k] = $cfg;
           }
         }
     }

    return $conf;
}


if(isset($form[$act])) {

   $form = $form[$act];
   $getdata = array();
   $sb = array(); // subject и body


      foreach($form['fields'] as $name => $field) {

            $title = (isset($field['title'])) ? $field['title'] : $name;
            $getdata[$name]['title'] = $title;
            $rawdata = isset($_POST[$name]) ? trim($_POST[$name]) : '';

              if(isset($field['validate'])) {              

                  $def = 'Поле с именем [ '.$name.' ] содержит ошибку.';
                  // -0-
                  if(isset($field['validate']['required']) &&
                      empty($rawdata)) {
                      $error[$name] = isset($field['messages']['required']) ? sprintf($field['messages']['required'], $title) :
                                     (isset($messages['validator']['required']) ? sprintf($messages['validator']['required'], $title) : $def);
                  }
                  // -1-
                  if(isset($field['validate']['minlength']) &&
                      mb_strlen($rawdata) < $field['validate']['minlength']) {
                      $error[$name] = isset($field['messages']['minlength']) ? sprintf($field['messages']['minlength'], $title, $field['validate']['minlength']) : $def;
                  }
                  // -2-
                  if(isset($field['validate']['maxlength']) &&
                    mb_strlen($rawdata) > $field['validate']['maxlength']) {
                        $error[$name] = isset($field['messages']['maxlength']) ? sprintf($field['messages']['maxlength'], $title, $field['validate']['maxlength']) : $def;
                  }
                  // -3-
                  if(isset($field['validate']['preg']) && mb_strlen($rawdata) > 0 &&
                      !preg_match($field['validate']['preg'], $rawdata)) {
                      $error[$name] = isset($field['messages']['preg']) ? sprintf($field['messages']['preg'], $title, $field['validate']['preg']) : $def;
                  }
                  // -4-
                  if(isset($field['validate']['substr']) &&
                      mb_strlen($rawdata) > $field['validate']['substr']) {
                      $rawdata = mb_substr($rawdata, 0, $field['validate']['substr']);
                  }

               $outdata = htmlspecialchars($rawdata);

               $getdata[$name]['value'] = $outdata;

              }
               else {
                 $getdata[$name]['value'] = htmlspecialchars($rawdata);
              }

               if(empty($getdata[$name]['value'])) {
                     unset($getdata[$name]);
               }


      } //foreach end


    if(isset($form['cfg']['antispam']) && isset($_POST[$form['cfg']['antispam']])) {
        if(!empty($_POST[$form['cfg']['antispam']])) {
         $error[] = $form['cfg']['spam'];
        }
    }
     if(isset($form['cfg']['antispamjs']) && isset($_POST[$form['cfg']['antispamjs']])) {
         if(!empty($_POST[$form['cfg']['antispamjs']])) {
             $error[] = $form['cfg']['spam'];
         }
     }


    if(count($error) == 0) {

      if(function_exists("mb_internal_encoding")) mb_internal_encoding($form['cfg']['charset']);
      $get_fromName = (isset($form['fields'][$form['cfg']['from_name']]) && isset($getdata[$form['cfg']['from_name']]['value']) && mb_strlen($getdata[$form['cfg']['from_name']]['value']) > 2) ? $getdata[$form['cfg']['from_name']]['value'] : ((mb_strlen($form['cfg']['from_name']) > 2 && !isset($_POST[$form['cfg']['from_name']])) ? $form['cfg']['from_name'] : 'Anonymous');
      $get_fromEmail = (isset($form['fields'][$form['cfg']['from_email']]) && isset($getdata[$form['cfg']['from_email']]['value']) && mb_strpos('@', $getdata[$form['cfg']['from_email']]['value']) === false) ? $getdata[$form['cfg']['from_email']]['value'] : ((mb_strpos('@', $form['cfg']['from_email']) !== false) ? $form['cfg']['from_email'] : 'no-reply@'.$host);

      $fromName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($get_fromName, $form['cfg']['charset'], "Q") : $get_fromName;
      $sb['subject'] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($form['cfg']['subject'], $form['cfg']['charset'], "Q") : $form['cfg']['subject'];
      
      $toName = trim($form['cfg']['to_name'], " ,");
      $toEmail = trim($form['cfg']['to_email'], " ,");
 
      if(strpos($toName, ",") !== false) { 
         $exp_toName = explode(",", $toName);   
         $c = count($exp_toName);
          for($i=0; $i<$c; $i++) {
           $exp_toName[$i] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader(trim($exp_toName[$i]), $form['cfg']['charset'], "Q") : trim($exp_toName[$i]);
          } 
       } 
        else {
          $toName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($toName, $form['cfg']['charset'], "Q") : $toName;
       }
       
      if(strpos($toEmail, ",") !== false) { 
         $exp_toEmail = explode(",", $toEmail);
      }         
      
      $To = '';
      
       if(isset($exp_toEmail)) {
        $c = count($exp_toEmail);
          for($i=0; $i < $c; $i++) { 
               $To .= ((isset($exp_toName) && isset($exp_toName[$i])) ? $exp_toName[$i] : $toName) . " <".trim($exp_toEmail[$i]).">";
               if($i < ($c-1)) $To .= ", ";
           }
       } 
        else {
           $To = ((isset($exp_toName) && isset($exp_toName[0])) ? $exp_toName[0] : $toName)." <".$toEmail.">";
       }


      $headers = "Return-Path: <".$get_fromEmail.">\r\n";
      $headers .= "From: ".$fromName." <".$get_fromEmail.">\r\n";
      $headers .= "X-Mailer: Feedback, v0.3 (http://artuelle.com)\r\n";
      $headers .= "X-Priority: 3\r\n";
      $headers .= "Reply-To: ".$fromName." <".$get_fromEmail.">\r\n";
      //$headers .= "To: ".$To."\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/" . $form['cfg']['type'] . "; charset=\"" . $form['cfg']['charset'] . "\"\r\n";
      $headers .= "Content-Transfer-Encoding: 8bit\r\n";

      $sb['body'] = "";
      // парсим шаблон
      if($form['cfg']['tpl']) {
       $out = tpl(array('name' => $act, 'getdata' => $getdata, 'cfg' => $form['cfg']));
       if(is_string($out)) {
          $sb['body'] = $out;
       }
     }
      // или отдаем голый текст
        if(mb_strlen(trim($sb['body'])) < 10) {
	          if(isset($form['cfg']['title']))
	              $sb['body'] .= $form['cfg']['title']."\r\n\r\n";

	          foreach($getdata as $name => $data) {
	              $sb['body'] .= $data['title'].": ".$data['value']."<br />\r\n";
	          }

	          if($form['cfg']['referer'])
	              $sb['body'] .= "\r\n\r\n\r\n\r\n".$ref;
      }
      // если есть что добавить
       if(isset($form['cfg']['adds']) &&
          is_array($form['cfg']['adds'])) {
          $sb = adds($sb);
       }

      //отправка письма
      $mail = mail($To, $sb['subject'], $sb['body'], $headers);
      
      $mail_2 = mail($_REQUEST['e-mail'], $sb['subject'], $sb['body'], $headers);
//IF(FALSE):    //  returning JSON respond      //added by OD
      if($mail) {
          $jsonBox['ok'] = 1;
          $info[] = $form['cfg']['okay'];
////////////////////  for testing. start test by OD:
//          $jsonBox['test-e-mail'] = $_REQUEST['e-mail'];        //  так работает нормально    returning JSON respond      //added by OD         

////////////////////

         //setcookie("limit", "1", time() + $form['cfg']['limit']);

      }
       else {
           $info[] = $form['cfg']['err'];
       }
//endif;

    }

 } else {
    $error[] = 'Нет настроек формы с именем #'.$act;
 }
    
    if(count($error) > 0) {
        $jsonBox['errors'] = $error;
    }
    if(count($info) > 0) {
        $jsonBox['infos'] = $info;
    }

    die(json_encode($jsonBox)); //мертвые с косами

/* добавляет любые доп данные из вне в нужное место
 * (например в заголовок письма необходимо дабавить Ник юзера или Номер заказа )
 *
 *  */

function adds($vars) {
    global $form;
    $adds = $form['cfg']['adds'];
    foreach($adds as $key => $opts) {
        if(is_string($key)) {
            $one = array();
            $two = array();
            foreach($opts as $i => $val) {
                if(isset($_POST[$val])) {
                  $one[] = '%%'.$val.'%%';
                  $two[] = $_POST[$val];
                }
            }
           $vars[$key] = str_replace($one, $two, $vars[$key]);
        }
    }
       return $vars;
}
/*
 * парсер шаблона
 */
 function tpl($vars) {
    $tpl = 'tpl/'.$vars['name'].'.tpl';
    if(file_exists($tpl)) {
     $template = file_get_contents($tpl);
        foreach($vars['getdata'] as $name => $data) {
            $template = str_replace(array("%%".$name.".title%%", "%%".$name.".value%%"), array($data['title'], $data['value']), $template);
        }
        return $template;
    }
     else {
      return false;
    }
 }

?>