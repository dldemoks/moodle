<?php
$string['pluginname'] = 'Payeer';
$string['pluginname_desc'] = 'Плагин позволяет принимать оплаты курсов через Payeer.';

$string['status'] = 'Разрешить подписку через Payeer';
$string['status_desc'] = 'Позволить пользователям использовать подписку на курс через Payeer по умолчанию.';
$string['cost'] = 'Стоимость записи';
$string['costerror'] = 'Неверный формат стоимости';
$string['currency'] = 'Валюта';
$string['defaultrole'] = 'Роль по умолчанию';
$string['defaultrole_desc'] = 'Выберите роль, которая будет назначена пользователям при записи через Payeer';
$string['enrolenddate'] = 'Дата окончания';
$string['enrolenddate_help'] = 'Если активно, то пользователь может быть записан только до этой даты.';
$string['enrolenddaterror'] = 'Дата окончания подписки не может быть раньше, чем дата начала';
$string['enrolperiod'] = 'Длительность подписки';
$string['enrolperiod_desc'] = 'Длительность активности подписки по умолчанию (в секундах). Если установлен 0, то по умолчанию длительность будет неограничена.';
$string['enrolperiod_help'] = 'Продолжительность активности записи, начиная с момента записи пользователя на курс. Если отключено, то продолжительность будет неограничена.';
$string['enrolstartdate'] = 'Дата начала';
$string['enrolstartdate_help'] = 'Если активно, то пользователь может быть записан на курс только начиная с этой даты.';
$string['expiredaction'] = 'Действие при истечении зачисления';
$string['expiredaction_help'] = 'Выберите проводимое действие при истечении зачисления пользователя. Пожалуйста, обратите внимание, что некоторые пользовательские данные и настройки будут очищены из курса во время отчисления.';
$string['payeer_merchant_url'] = 'URL Мерчанта';
$string['payeer_shop'] = 'Идентификатор магазина';
$string['payeer_key'] = 'Секретный код';
$string['payeer_log'] = 'Путь до файла для журнала оплат через Payeer (например, /payeer_orders.log)';
$string['payeer_order_description'] = 'Комментарий к заказу от сайта';
$string['payeer_emailerr'] = 'Email для ошибок оплаты';
$string['payeer_ipfilter'] = 'IP фильтр';
$string['assignrole'] = 'Назначить роль';
$string['payeer:config'] = 'Настройка записи через Payeer';
$string['payeer:manage'] = 'Управление записавшимися пользователями';
$string['payeer:unenrol'] = 'Отписать пользователей от курса';
$string['payeer:unenrolself'] = 'Отписаться от курса';
$string['payeeraccepted'] = 'Принимаются оплаты через Payeer';
$string['sendpaymentbutton'] = 'Оплатить через Payeer';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';

$string['coursenotfound'] = 'Курс не найден';
$string['error_usercourseempty'] = 'пользователь или курс не найдены';
$string['error_payeercurrency'] = 'Валюта не принимается платежной системой';
$string['error_txdatabase'] = 'Невозможно создать транзакцию.';