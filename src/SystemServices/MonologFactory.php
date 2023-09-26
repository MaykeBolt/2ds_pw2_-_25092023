<?php
    namespace App\SystemServices;

    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

class MonologFactory {
    private static $logger;

    public static function getInstance() {
        if(self::$logger == null) {
            self::$logger = new Logger('MEUAPP');
            self::$logger->pushHandler(new StreamHandler('meuslogs.log', Level::Debug)); //Debug, Info, Error
            return self::$logger;
        }
        else {
            return self::$logger;
        }
    }

}

?>