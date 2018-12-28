<?php

/*   Classe connexion      */

class Database
{
    /* Information de la bd */

    private static $dbHost = "bdhost";
    private static $dbName = "dbname";
   private static $dbUsername = "username";
    private static $dbUserpassword = "unserpassword";
   
    
    private static $connection = null;
    
    /*Fonction connexion  */

    public static function connect()
    {

        /* UTILISATION DE VARIABLE D'UNE CLASSE : selt::$nom_variable */

        if(self::$connection == null)
        {
            /*CONNEXION */
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    /*
     * Fonction disconnecte
     */
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
