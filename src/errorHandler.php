<?php 

    ini_set( 'log_errors', 1 );
    ini_set( 'error_log', $_SERVER["DOCUMENT_ROOT"]."/mayco-php-debugger/PHP_error_log.log"  );


    class ErrorHandler {

        private function __construct(public int $errorType, public string $errorMessage, string $errorFile, int $errorLine){
            $this -> throw();
        }
        private function throw(){
            $message = StringTools::indent("\n" . $this -> errorMessage) . "\n";
            $message .= $this -> getBase();
            file_put_contents(ini_get('error_log'), $message.PHP_EOL, FILE_APPEND );
        }
        private function getBase() : string {
            $type = "";
            switch($this -> errorType){
                case E_USER_ERROR   : $type = "[DEBUG][ERROR]"; break;
                case E_USER_WARNING : $type = "[DEBUG][WARN]"; break;
                case E_USER_NOTICE  : $type = "[DEBUG][NOTICE]"; break;
                default : $type = "[ERROR]";break;
            }
        $res = "";
        $bt = debug_backtrace();
        foreach($bt as $key => $trace){
            if(!isset($trace['file']) || str_contains($trace['file'], 'Debugger')){
                continue;
            }
            $res .= sprintf( '[%s]%s at %s(%s)', date('d-m H:i'), $type, $trace['file'], $trace['line']) . "\n";
        }
        return $res;
        }
        public static function call(int $errorType, string $errorMessage, string $errorFile, int $errorLine){
            new self($errorType, $errorMessage, $errorFile, $errorLine);
        }
    }
    set_error_handler( 'ErrorHandler::call' );