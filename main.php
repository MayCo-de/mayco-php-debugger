
<?php
    define('S_DEBUGGER_CONFIG', getDebuggerConfig());
    require_once dirname(__FILE__) . "/src/StringTools.php";
    require_once dirname(__FILE__) . "/src/Path.php";
    require_once dirname(__FILE__) . "/src/Debugger.php";
    require_once dirname(__FILE__) . "/src/errorHandler.php";
    // Debugg::log(S_DEBUGGER_CONFIG);
    
    function getDebuggerConfig() : stdClass {
        return json_decode(file_get_contents(dirname(__FILE__) . "\debugger.config.json"));
    }

