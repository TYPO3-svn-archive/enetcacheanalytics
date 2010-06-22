<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2009-10-28 18:04

$extensionPath = t3lib_extMgm::extPath('enetcacheanalytics');
return array(
	'tx_enetcacheanalytics_log' => $extensionPath . 'hooks/class.tx_enetcacheanalytics_log.php',
	'tx_enetcacheanalytics_module1' => $extensionPath . 'mod1/index.php',
	'tx_enetcacheanalytics_eofe' => $extensionPath . 'hooks/class.tx_enetcacheanalytics_eofe.php',
	'tx_enetcacheanalytics_bemodule' => $extensionPath . 'classes/bemodule/interfaces/interface.tx_enetcacheanalytics_bemodule.php',
	'tx_enetcacheanalytics_bemodule_cacheanalyzer' => $extensionPath . 'classes/bemodule/class.tx_enetcacheanalytics_bemodule_cacheanalyzer.php',
	'tx_enetcacheanalytics_bemodule_performance' => $extensionPath . 'classes/bemodule/class.tx_enetcacheanalytics_bemodule_performance.php',
	'tx_enetcacheanalytics_exception_invaliddata' => $extensionPath . 'classes/exception/class.tx_enetcacheanalytics_exception_invaliddata.php',
	'tx_enetcacheanalytics_exception_unavailablebackend' => $extensionPath . 'classes/exception/class.tx_enetcacheanalytics_exception_unavailablebackend.php',
	'tx_enetcacheanalytics_performance_backend_backend' => $extensionPath . 'classes/performance/backend/interfaces/interface.tx_enetcacheanalytics_performance_backend_backend.php',
	'tx_enetcacheanalytics_performance_backend_abstractbackend' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_abstractbackend.php',
	'tx_enetcacheanalytics_performance_backend_apcbackend' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_apcbackend.php',
	'tx_enetcacheanalytics_performance_backend_dbbackend' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_dbbackend.php',
	'tx_enetcacheanalytics_performance_backend_dbbackendcompressed' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_dbbackendcompressed.php',
	'tx_enetcacheanalytics_performance_backend_filebackend' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_filebackend.php',
	'tx_enetcacheanalytics_performance_backend_memcachedbackend' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_memcachedbackend.php',
	'tx_enetcacheanalytics_performance_backend_memcachedbackendcompressed' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_memcachedbackendcompressed.php',
	'tx_enetcacheanalytics_performance_backend_pdobackendsqlite' => $extensionPath . 'classes/performance/backend/class.tx_enetcacheanalytics_performance_backend_pdobackendsqlite.php',
	'tx_enetcacheanalytics_performance_message_message' => $extensionPath . 'classes/performance/message/interfaces/interface.tx_enetcacheanalytics_performance_message_message.php',
	'tx_enetcacheanalytics_performance_message_abstractmessage' => $extensionPath . 'classes/performance/message/class.tx_enetcacheanalytics_performance_message_abstractmessage.php',
	'tx_enetcacheanalytics_performance_message_cachemissmessage' => $extensionPath . 'classes/performance/message/class.tx_enetcacheanalytics_performance_message_cachemissmessage.php',
	'tx_enetcacheanalytics_performance_message_list' => $extensionPath . 'classes/performance/message/class.tx_enetcacheanalytics_performance_message_list.php',
	'tx_enetcacheanalytics_performance_message_operationcountmessage' => $extensionPath . 'classes/performance/message/class.tx_enetcacheanalytics_performance_message_operationcountmessage.php',
	'tx_enetcacheanalytics_performance_message_timemessage' => $extensionPath . 'classes/performance/message/class.tx_enetcacheanalytics_performance_message_timemessage.php',
	'tx_enetcacheanalytics_performance_message_unavailablebackendmessage' => $extensionPath . 'classes/performance/message/class.tx_enetcacheanalytics_performance_message_unavailablebackendmessage.php',
	'tx_enetcacheanalytics_performance_testcase_testcase' => $extensionPath . 'classes/performance/testcase/interfaces/interface.tx_enetcacheanalytics_performance_testcase_testcase.php',
	'tx_enetcacheanalytics_performance_testcase_abstracttestcase' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_abstracttestcase.php',
	'tx_enetcacheanalytics_performance_testcase_dropbysingletag' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_dropbysingletag.php',
	'tx_enetcacheanalytics_performance_testcase_dropmultipletags' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_dropmultipletags.php',
	'tx_enetcacheanalytics_performance_testcase_flushsingletag' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_flushsingletag.php',
	'tx_enetcacheanalytics_performance_testcase_flushmultipletags' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_flushmultipletags.php',
	'tx_enetcacheanalytics_performance_testcase_getbyidentifier' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_getbyidentifier.php',
	'tx_enetcacheanalytics_performance_testcase_getmultipletimes' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_getmultipletimes.php',
	'tx_enetcacheanalytics_performance_testcase_getkilobytesofdata' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_getkilobytesofdata.php',
	'tx_enetcacheanalytics_performance_testcase_setkilobytesofdata' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_setkilobytesofdata.php',
	'tx_enetcacheanalytics_performance_testcase_setmultipletimes' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_setmultipletimes.php',
	'tx_enetcacheanalytics_performance_testcase_setmultipletags' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_setmultipletags.php',
	'tx_enetcacheanalytics_performance_testcase_setsingletag' => $extensionPath . 'classes/performance/testcase/class.tx_enetcacheanalytics_performance_testcase_setsingletag.php',
	'tx_enetcacheanalytics_performance_testsuite' => $extensionPath . 'classes/performance/class.tx_enetcacheanalytics_performance_testsuite.php',
	'tx_enetcacheanalytics_performance_utility_mockfrontend' => $extensionPath . 'classes/performance/utility/class.tx_enetcacheanalytics_performance_utility_mockfrontend.php',
	'tx_enetcacheanalytics_utility_data' => $extensionPath . 'classes/utility/class.tx_enetcacheanalytics_utility_data.php',
	'tx_enetcacheanalytics_utility_formhelper' => $extensionPath . 'classes/utility/class.tx_enetcacheanalytics_utility_formhelper.php',
	'tx_enetcacheanalytics_utility_list' => $extensionPath . 'classes/utility/class.tx_enetcacheanalytics_utility_list.php',
	'tx_enetcacheanalytics_utility_userdata' => $extensionPath . 'classes/utility/class.tx_enetcacheanalytics_utility_userdata.php',
);
?>
