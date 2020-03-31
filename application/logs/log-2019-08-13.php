<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-08-13 00:53:28 --> Config Class Initialized
INFO - 2019-08-13 00:53:28 --> Hooks Class Initialized
DEBUG - 2019-08-13 00:53:29 --> UTF-8 Support Enabled
INFO - 2019-08-13 00:53:29 --> Utf8 Class Initialized
INFO - 2019-08-13 00:53:29 --> URI Class Initialized
INFO - 2019-08-13 00:53:29 --> Router Class Initialized
INFO - 2019-08-13 00:53:29 --> Output Class Initialized
INFO - 2019-08-13 00:53:29 --> Security Class Initialized
DEBUG - 2019-08-13 00:53:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-08-13 00:53:29 --> Input Class Initialized
INFO - 2019-08-13 00:53:29 --> Language Class Initialized
INFO - 2019-08-13 00:53:29 --> Loader Class Initialized
INFO - 2019-08-13 00:53:29 --> Helper loaded: assets_helper
INFO - 2019-08-13 00:53:29 --> Helper loaded: url_helper
INFO - 2019-08-13 00:53:29 --> Helper loaded: log4php_helper
INFO - 2019-08-13 00:53:29 --> Database Driver Class Initialized
INFO - 2019-08-13 00:53:29 --> Controller Class Initialized
INFO - 2019-08-13 00:53:29 --> File loaded: C:\MAMP\htdocs\apm\application\views\css/mycss.php
INFO - 2019-08-13 00:53:29 --> File loaded: C:\MAMP\htdocs\apm\application\views\js/myjs.php
INFO - 2019-08-13 00:53:29 --> File loaded: C:\MAMP\htdocs\apm\application\views\patient/p1.php
INFO - 2019-08-13 00:53:29 --> Final output sent to browser
DEBUG - 2019-08-13 00:53:29 --> Total execution time: 0.5342
INFO - 2019-08-13 00:53:29 --> Config Class Initialized
INFO - 2019-08-13 00:53:29 --> Hooks Class Initialized
DEBUG - 2019-08-13 00:53:29 --> UTF-8 Support Enabled
INFO - 2019-08-13 00:53:29 --> Utf8 Class Initialized
INFO - 2019-08-13 00:53:29 --> URI Class Initialized
INFO - 2019-08-13 00:53:29 --> Router Class Initialized
INFO - 2019-08-13 00:53:29 --> Output Class Initialized
INFO - 2019-08-13 00:53:29 --> Security Class Initialized
DEBUG - 2019-08-13 00:53:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-08-13 00:53:29 --> Input Class Initialized
INFO - 2019-08-13 00:53:29 --> Language Class Initialized
INFO - 2019-08-13 00:53:29 --> Loader Class Initialized
INFO - 2019-08-13 00:53:29 --> Helper loaded: assets_helper
INFO - 2019-08-13 00:53:29 --> Helper loaded: url_helper
INFO - 2019-08-13 00:53:30 --> Helper loaded: log4php_helper
INFO - 2019-08-13 00:53:30 --> Database Driver Class Initialized
INFO - 2019-08-13 00:53:30 --> Controller Class Initialized
INFO - 2019-08-13 00:53:30 --> SELECT a.apmid, a.apmdate, a.apmtime, a.tel, a.stid, a.ptid, a.hn, a.newcnt, a.credt, a.updt, a.header, a.sicktxt, p.fname, p.lname, s.stname
FROM `apmpt` `a`
LEFT JOIN `pt` `p` ON `a`.`ptid` = `p`.`ptid`
LEFT JOIN `st` `s` ON `s`.`stid` = `a`.`stid`
WHERE `a`.`ptid` = '1'
AND `a`.`active` <> 'I'
ORDER BY `apmdate` DESC
INFO - 2019-08-13 00:53:30 --> Final output sent to browser
DEBUG - 2019-08-13 00:53:30 --> Total execution time: 0.2607
