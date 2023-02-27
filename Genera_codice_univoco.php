<?php
use Hidehalo\Nanoid\Client;
require 'vendor/autoload.php';
class Genera_codice_univoco{
    private $db;
    private $ip_db;
    private $porta_db;
    private $user_db;
    private $pass_db;
    private $conn;
    private $client_codici_univoci;

    function __construct($lavoro){
        error_reporting(E_ALL ^ E_DEPRECATED);
        //includo le variabili globali e copio il file nella cartella del programma (se il variabili globali è corrotto importo il variabili globali precedentemente copiato nella cartella del programma)
        try {
            include(getenv("root_progr_php") . "/wamp64/progr/variabili_globali/variabili_globali.php");
            copy(getenv("root_progr_php") . "/wamp64/progr/variabili_globali/variabili_globali.php", __dir__ . "variabili_globali.php");
        } catch (Exception $e) {
            if (file_exists(__dir__ . "variabili_globali.php")) {
                include(__dir__ . "variabili_globali.php");
            } else {
                exit(254);
            }
        }
        $b="";
        $this->db = $dati[$lavoro]["database_cliente"];
        $this->ip_db = $dati[$lavoro]["ip_db"];
        $this->porta_db = "port=" . $dati[$lavoro]["porta_db"];
        $this->user_db = $dati[$lavoro]["user_db"];
        $this->pass_db = $dati[$lavoro]["pass_db"];

        $this->client_codici_univoci = new Client();

        $stringa_connessione = "mysql:host=$this->ip_db;dbname=import_file;charset=utf8;$this->porta_db";
        $this->conn = new PDO($stringa_connessione, $this->user_db, $this->pass_db);
        $this->conn->exec("set names utf8");
    }

    //funzione che restituisce un codice univoco salvato a db
    public
    function getCodUnivoco($n_byte = 9)
    {
        //finchè non riesce a eseguire la query di inserimento nella lista di backup di codici usati cambio il codice e riprovo a fare l'inserimento. così assicuro che non ci saranno mai codici uguali
        $alfabeto_codice = 'ABCDEFGHJKLMNPRSTUVWXYZ3456789';//lista caratteri utilizzabili dal codice univoco
        $cod = $this->client_codici_univoci->formattedId($alphabet = $alfabeto_codice, $size = $n_byte);
        while (!$this->conn->query("insert into codici_univoci (cod) value('$cod')")) {
            $cod = $this->client_codici_univoci->formattedId($alphabet = $alfabeto_codice, $size = $n_byte);
        }
        return $cod;
    }
}
