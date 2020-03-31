<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-12-07 00:59:37 --> Config Class Initialized
INFO - 2019-12-07 00:59:37 --> Hooks Class Initialized
DEBUG - 2019-12-07 00:59:38 --> UTF-8 Support Enabled
INFO - 2019-12-07 00:59:38 --> Utf8 Class Initialized
INFO - 2019-12-07 00:59:38 --> URI Class Initialized
INFO - 2019-12-07 00:59:38 --> Router Class Initialized
INFO - 2019-12-07 00:59:38 --> Output Class Initialized
INFO - 2019-12-07 00:59:38 --> Security Class Initialized
DEBUG - 2019-12-07 00:59:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-07 00:59:38 --> Input Class Initialized
INFO - 2019-12-07 00:59:38 --> Language Class Initialized
INFO - 2019-12-07 00:59:38 --> Loader Class Initialized
INFO - 2019-12-07 00:59:38 --> Helper loaded: assets_helper
INFO - 2019-12-07 00:59:38 --> Helper loaded: url_helper
INFO - 2019-12-07 00:59:38 --> Helper loaded: log4php_helper
INFO - 2019-12-07 00:59:38 --> Database Driver Class Initialized
INFO - 2019-12-07 00:59:38 --> Controller Class Initialized
INFO - 2019-12-07 00:59:38 --> File loaded: C:\MAMP\htdocs\apm\application\views\css/mycss.php
INFO - 2019-12-07 00:59:38 --> File loaded: C:\MAMP\htdocs\apm\application\views\js/myjs.php
INFO - 2019-12-07 00:59:38 --> File loaded: C:\MAMP\htdocs\apm\application\views\patient/p1.php
INFO - 2019-12-07 00:59:38 --> Final output sent to browser
DEBUG - 2019-12-07 00:59:38 --> Total execution time: 0.7187
INFO - 2019-12-07 00:59:39 --> Config Class Initialized
INFO - 2019-12-07 00:59:39 --> Config Class Initialized
INFO - 2019-12-07 00:59:39 --> Hooks Class Initialized
INFO - 2019-12-07 00:59:39 --> Config Class Initialized
INFO - 2019-12-07 00:59:39 --> Hooks Class Initialized
INFO - 2019-12-07 00:59:39 --> Hooks Class Initialized
DEBUG - 2019-12-07 00:59:39 --> UTF-8 Support Enabled
DEBUG - 2019-12-07 00:59:39 --> UTF-8 Support Enabled
DEBUG - 2019-12-07 00:59:39 --> UTF-8 Support Enabled
INFO - 2019-12-07 00:59:39 --> Utf8 Class Initialized
INFO - 2019-12-07 00:59:39 --> Utf8 Class Initialized
INFO - 2019-12-07 00:59:39 --> Utf8 Class Initialized
INFO - 2019-12-07 00:59:39 --> URI Class Initialized
INFO - 2019-12-07 00:59:39 --> URI Class Initialized
INFO - 2019-12-07 00:59:39 --> URI Class Initialized
INFO - 2019-12-07 00:59:39 --> Router Class Initialized
INFO - 2019-12-07 00:59:39 --> Router Class Initialized
INFO - 2019-12-07 00:59:39 --> Router Class Initialized
INFO - 2019-12-07 00:59:39 --> Output Class Initialized
INFO - 2019-12-07 00:59:39 --> Output Class Initialized
INFO - 2019-12-07 00:59:39 --> Output Class Initialized
INFO - 2019-12-07 00:59:39 --> Security Class Initialized
INFO - 2019-12-07 00:59:39 --> Security Class Initialized
INFO - 2019-12-07 00:59:39 --> Security Class Initialized
DEBUG - 2019-12-07 00:59:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-12-07 00:59:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-12-07 00:59:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-12-07 00:59:39 --> Input Class Initialized
INFO - 2019-12-07 00:59:39 --> Input Class Initialized
INFO - 2019-12-07 00:59:39 --> Input Class Initialized
INFO - 2019-12-07 00:59:39 --> Language Class Initialized
INFO - 2019-12-07 00:59:39 --> Language Class Initialized
INFO - 2019-12-07 00:59:39 --> Language Class Initialized
INFO - 2019-12-07 00:59:39 --> Loader Class Initialized
INFO - 2019-12-07 00:59:39 --> Loader Class Initialized
INFO - 2019-12-07 00:59:39 --> Loader Class Initialized
INFO - 2019-12-07 00:59:39 --> Helper loaded: assets_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: assets_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: assets_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: url_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: url_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: url_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: log4php_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: log4php_helper
INFO - 2019-12-07 00:59:39 --> Helper loaded: log4php_helper
INFO - 2019-12-07 00:59:39 --> Database Driver Class Initialized
INFO - 2019-12-07 00:59:39 --> Database Driver Class Initialized
INFO - 2019-12-07 00:59:39 --> Database Driver Class Initialized
INFO - 2019-12-07 00:59:39 --> Controller Class Initialized
INFO - 2019-12-07 00:59:39 --> Controller Class Initialized
INFO - 2019-12-07 00:59:39 --> Controller Class Initialized
INFO - 2019-12-07 00:59:39 --> SELECT a.apmid, a.apmdate, a.apmtime, a.tel, a.stid, a.ptid, a.hn, a.newcnt, a.credt, a.updt, a.header, a.sicktxt, p.fname, p.lname, s.stname
FROM `apmpt` `a`
LEFT JOIN `pt` `p` ON `a`.`ptid` = `p`.`ptid`
LEFT JOIN `st` `s` ON `s`.`stid` = `a`.`stid`
WHERE `a`.`ptid` = '4'
AND `a`.`active` <> 'I'
ORDER BY `apmdate` DESC
INFO - 2019-12-07 00:59:39 --> Final output sent to browser
DEBUG - 2019-12-07 00:59:39 --> Total execution time: 0.4429
ERROR - 2019-12-07 00:59:49 --> Severity: error --> Exception: cURL error 28: Connection timed out after 10000 milliseconds C:\MAMP\htdocs\apm\application\third_party\Requests\Transport\cURL.php 422
ERROR - 2019-12-07 01:00:00 --> Severity: Warning --> SoapClient::SoapClient(http://192.168.200.237/ORAWService.asmx?wsdl): failed to open stream: A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 C:\MAMP\htdocs\apm\application\controllers\Appointment.php 582
ERROR - 2019-12-07 01:00:00 --> Severity: Warning --> SoapClient::SoapClient(): I/O warning : failed to load external entity &quot;http://192.168.200.237/ORAWService.asmx?wsdl&quot; C:\MAMP\htdocs\apm\application\controllers\Appointment.php 582
ERROR - 2019-12-07 01:00:00 --> Severity: error --> Exception: SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://192.168.200.237/ORAWService.asmx?wsdl' : failed to load external entity "http://192.168.200.237/ORAWService.asmx?wsdl"
 C:\MAMP\htdocs\apm\application\controllers\Appointment.php 582
