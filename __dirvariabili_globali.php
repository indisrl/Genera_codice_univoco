<?php
$sub_folder_z = "collaborazioni/test";
$sub_folder_z_slash_rovesciato = "collaborazioni/test";
$sub_folder_y = "test";
$sub_folder_5 = "test";
$indirizzo_avvisi_generico = "dev@indi.it";
$ip_db_generico = "172.21.15.5";//questa e la successiva servono per ferrero che va in un server a parte. la successiva variabile sarebbe la porta che è specificata solo per antezza, che sul server non c'è il db 172.21.15.5 e quando faccio eptarget automatico serve la tabella sardegna dentro il db cap_tariffe


$dati = array(
		"user_db"=>"copygraph",
        "pass_db"=>"C0pyGr@ph",
        "cgl" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\commerciale_gas_luce\\fatture\\",
    "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\commerciale_gas_luce\\Fatture\\0_stampa\\",
    "folder_temp" => "c:/datamatrix/temp/cgl/",
    "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\commerciale_gas_luce\\Fatture\\0_input\\",
    "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\made_in_energy\\10_Commerciale_GAS_E_LUCE\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
    "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\made_in_energy\\10_Commerciale_GAS_E_LUCE\\02_instampa\"",
    "database_cliente" => "ulisse_fatture_cgl",
    "fr" => true,
    //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
    "coordinate-stampa_1_8" => array(
        "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
        "progr" => array("x" => 176, "y" => 61),
        "omologa" => array("x" => 145, "y" => 61),
        "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
        "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
    ),
    "coordinate-dati_bustoni" => array(
        "progr" => array("x" => 176, "y" => 61),
        "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
    ),
    "tabelle" => array("stampa_1_8", "dati_bustoni"),
    "nome_campo_folder" => "folder",
    //"cod_omologa"=>"DCOPI1483",
    "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_cgl.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_cgl.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_cgl.xlsx"),
    "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
    "facciate_da_dividere" => false,
    "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
    "limite_kb_light" => 99999,
    "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php",
    "tipo_spedizione" => "contest",
    "layout_accettati"=>array("FTO_20_EE_COMPACT","FTO_20_GAS_COMPACT","FTO_20_EE_COMPAC_GR","FTO_20_GAS_COMPAC_GR"),
    "verifica_dimensioni_pdf"=>false,
    "folder_scarti"=>"//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/made_in_energy/70_commerciale_gas_e_luce_scarti_contest/",
    "ip_db" => "172.21.15.19",
    "porta_db" => "3305"

),
    "jen" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\jen_energia\\fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\jen_energia\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/jen/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\jen_energia\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\jen_energia\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\jen_energia\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_jen",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1511",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_jen.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_jen.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_jen.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "coco" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\controcorrente\\fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\controcorrente\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/coco/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\controcorrente\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\controcorrente\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\controcorrente\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_coco",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1507",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_coco.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_coco.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_coco.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "enpu" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\energia_pulita\\fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\energia_pulita\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/enpu/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\energia_pulita\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\Energia_pulita\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\Energia_pulita\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_enpu",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1497",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_enpu.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_enpu.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_enpu.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "enpu_gn" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\energia_pulita\\green_network\\fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\energia_pulita\\green_network\\fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/enpu_GN/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\energia_pulita\\green_network\\fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\Energia_pulita\\02_FattureAttive\\01_DaElaborare\\GREEN_NETWORK\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\Energia_pulita\\02_FattureAttive\\02_instampa\\GREEN_NETWORK\"",
        "database_cliente" => "ulisse_fatture_enpu",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1497",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_enpu.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_enpu.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_enpu.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "mie" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\made_in_energy\\fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\made_in_energy\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/mie/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\made_in_energy\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\made_in_energy\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\made_in_energy\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_mie",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1469",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_mie.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_mie.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_mie.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "spigas" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\spigas\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\spigas\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/spigas/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\spigas\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\spigas\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\spigas\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_spigas",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 287, "y2" => 5)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_spigas.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_spigas.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_spigas.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        //"cod_omologa"=>"DCOPI1479",
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "miogas" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\MIO_GAS\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\\MIO_GAS\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/miogas/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\MIO_GAS\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\mio_gas\\10_FattureAttiveArgon\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\mio_gas\\10_FattureAttiveArgon\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_miogas",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1486",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_miogas.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_miogas.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_miogas.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "tecniconsul" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Tecniconsul_Energia\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Tecniconsul_Energia\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/tecniconsul/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Tecniconsul_Energia\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\tecniconsul_energia\\01_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\tecniconsul_energia\\01_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_tecniconsul",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1493",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_tecniconsul.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_tecniconsul.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_tecniconsul.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "entra" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Entra\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Entra\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/entra/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Entra\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\entra\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\entra\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_entra",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 287, "y2" => 5)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1504",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_entra.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_entra.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_entra.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"

    ),
    "asm" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\ASM_Garbagnate\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\ASM_Garbagnate\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/ASM_Garbagnate/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\ASM_Garbagnate\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\ASM_Garbagnate\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\ASM_Garbagnate\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_asm",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 287, "y2" => 5)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1504",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_asm.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_asm.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_asm.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"

    ),
    "cpm" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\CPM_Metano\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\CPM_Metano\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/CPM_Metano/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\CPM_Metano\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\CPM_Metano\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\CPM_Metano\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_cpm",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 287, "y2" => 5)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1504",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_cpm.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_cpm.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_cpm.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php",
        "tipo_spedizione"=>"contest",
        "layout_accettati"=>array("FTO_20_EE_COMPACT","FTO_20_GAS_COMPACT","FTO_20_EE_COMPAC_GR","FTO_20_GAS_COMPAC_GR","STANDARD_ODIN"),
        "verifica_dimensioni_pdf"=>false,
        "folder_scarti"=>"//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/cpm_metano/08_scarti_contest/",
        "ip_db" => "172.21.15.5"

    ),
    "asm_test" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\ASM_Garbagnate\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\ASM_Garbagnate\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/ASM_Garbagnate/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\ASM_Garbagnate\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\ASM_Garbagnate\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\ASM_Garbagnate\\02_FattureAttive\\02_instampa\"",
        "database_cliente" => "ulisse_fatture_asm_test",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 287, "y2" => 5)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1504",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_asm.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_asm.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_asm.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 99999,
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"

    ),
    "gesam" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Gesam\\Fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Gesam\\Fatture\\0_stampa\\",
        "folder_temp" => "c:/datamatrix/temp/Gesam/",
        "folder_input" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\Gesam\\Fatture\\0_input\\",
        "folder_y_in" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\Gesam\\02_FattureAttive\\01_DaElaborare\"",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "\"\\\\192.168.0.21\\CopyGraphIT_FTP\\$sub_folder_y\\Gesam\\02_FattureAttive\\02_instampa\"",
        "folder_input_sailpost" => "C:/wamp64/progr/sailpost/input_gesam/",
        "database_cliente" => "ulisse_fatture_gesam",
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-stampa_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "omologa" => array("x" => 145, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 4, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-dati_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 287, "y2" => 5)
        ),
        "coordinate-sailpost_vista" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 51, "y2" => 10),
            "progr" => array("x" => 176, "y" => 61),
            "barcode" => array("x1" => 0.3, "x2" => 4, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10),
            "PPM" => array("x" => 103, "y" => 73),
            "COD_AGENZIA" => array("x" => 143, "y" => 55)
        ),
        "tabelle" => array("stampa_1_8", "dati_bustoni"),
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1504",
        "excel" => array("stampa_1_8" => "ulisse_fatture_1_finestra_11x23_gesam.xlsx", "sailpost_vista" => "ulisse_fatture_1_finestra_11x23_gesam.xlsx", "sailpost" => "ulisse_fatture_1_finestra_11x23_gesam.xlsx", "input_bkp" => "ulisse_fatture_1_finestra_11x23_gesam.xlsx", "dati_bustoni" => "ulisse_fatture_1_finestra_11x23_gesam.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39),
        "limite_kb_light" => 49999,
        "mail"=>"dev@indi.it",//Metto produzione@indi.it e non poste@indi.it come da richiesta di sail post che in caso di problemi scriverà alla produzione rispondendo alla mail
        "tipo_spedizione"=>"sailpost",//se si farà la contest sarà un problema. valutare di fare un altro array del tipo gesam_contest
        "layout_accettati"=>array("FTO_20_EE_COMPACT","FTO_20_GAS_COMPACT","FTO_20_EE_COMPAC_GR","FTO_20_GAS_COMPAC_GR","STANDARD_ODIN","5_FTO_20_EE"),//5_FTO_20_EE codice fatto per gesam che sostituisce FTO_20_EE
        "verifica_dimensioni_pdf"=>false,
        "folder_scarti"=>"//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/Gesam/08_scarti_contest/",
        "user_db"=>"copygraph",
        "pass_db"=>"C0pyGr@ph",
        "sailpost_out_dir" => "\\\\172.21.15.24\\c\\wamp64\\progr\\sailpost\\output_gesam",
        "ip_db"=>"172.21.15.19",
        "porta_db"=>"3305",
        "tabella_input" => "input",
        "associazione_campi" => array("tot_pagine" => "totpagine", "numero_protocollo"=>"cognomenome_ass"),

    ),
    //"racc_gesam"=>array("database_cliente"=>"ulisse_racc_gesam"),
    "racc_asm" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_asm" => "ulisse_asm.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_asm_v2"=>array(
        "nome_campo_folder" => "folder",
        "folder_out" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/ASM_Garbagnate/RACCOMANDATE/00_out/",
        "folder_temp"=>getenv("root_progr_php") . "/connect/ulisse/racc_market/",
        "lettura_excel_config"=>true,
        "excel" => array("destinatari_mysql" => "ulisse_asm.xlsx"),
        "ip_db"=>"172.21.15.19",
        "porta_db"=>"3307",
        "database_cliente"=>"ulisse_racc_asm",
        "tabella_input" => "destinatari_mysql",
        "facciate_da_dividere"=>true,
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "pagine_busta"=>"NUM_FOGLI", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE", "C5"=> "S_FATTURA_DEF"),
        "indirizzo_ritorno" => "ASM GARBAGNATE MILANESE S.P.A.<br>PIAZZA GIOVANNI XXIII, N. 5<br>20024 GARBAGNATE MILANESE MI",
        "tipo_invio"=>"RACCOMANDATA RK",
        "codice_cliente_layout_connect"=>"asm",//serve pechè il layout connect ha salvato i clienti con un codice che corrisponde al codice che era contenuto nel nome file dell'access che passavamo
    ),
    "racc_cgl" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_cgl" => "ulisse_cgl.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_coc" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_coc" => "ulisse_coco.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_epu" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_epu" => "ulisse_enpu.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_epu_gn" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_epu" => "ulisse_enpu_gn.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_jen" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_jen" => "ulisse_jen.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_mie" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_mie" => "ulisse_mie.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_mio" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_mio" => "ulisse_miogas.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_spi" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_spi" => "ulisse_spigas.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_tec" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_tec" => "ulisse_tecniconsul.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_ent" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/entra/RACCOMANDATE/0_stampa/",
        "folder_temp"=>getenv("root_progr_php") . "/connect/ulisse/racc_market/",
        "lettura_excel_config"=>true,
        "excel" => array("destinatari_mysql" => "ulisse_entra.xlsx"),
        "ip_db"=>"172.21.15.19",
        "porta_db"=>"3307",
        "database_cliente"=>"ulisse_racc_entra",
        "tabella_input" => "destinatari_mysql",
        "facciate_da_dividere"=>true,
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "pagine_busta"=>"NUM_FOGLI", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE", "C5"=> "S_FATTURA_DEF"),
        "indirizzo_ritorno" => "ENERGY TRADE S.p.a.<br>VIA VINCENZO MONTI, 48<br>20123 MILANO MI",
        "tipo_invio"=>"RACCOMANDATA RK",
        "codice_cliente_layout_connect"=>"ent",//serve pechè il layout connect ha salvato i clienti con un codice che corrisponde al codice che era contenuto nel nome file dell'access che passavamo
        "sotto_brand" => array("GREEN_NETWORK" => "EPU_GN", "EPU" => "EPU")//serve per enpu green network (la chiave è il sotto brand così come indicato a db, il valore è il codice che il layout connect ha registrato per attivare i loghi corretti)
    ),
    "racc_ges" => array(
        "nome_campo_folder" => "folder",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\Collaborazioni\\ULISSE_GROUP\RACCOMANDATE\\00_out\\",
        "excel" => array("racc_ges" => "ulisse_gesam.xlsx"),
        "tabella_input" => "destinatari",
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE"),

    ),
    "racc_mio_new"=>array(
        "nome_campo_folder" => "folder",
        "folder_out" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/MIO_GAS/RACCOMANDATE/00_out/",
        "folder_temp"=>getenv("root_progr_php") . "/connect/ulisse/racc_market/",
        "lettura_excel_config"=>true,
        "excel" => array("destinatari_mysql" => "ulisse_miogas.xlsx"),
        "ip_db"=>"172.21.15.19",
        "porta_db"=>"3307",
        "database_cliente"=>"ulisse_racc_miogas",
        "tabella_input" => "destinatari_mysql",
        "facciate_da_dividere"=>true,
        "campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "pagine_busta"=>"NUM_FOGLI", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE", "C5"=> "S_FATTURA_DEF"),
        "indirizzo_ritorno" => "MIOGAS SRL<br>VIALE LOMBARDIA 34<br>20089 ROZZANO MI",
        "tipo_invio"=>"RACCOMANDATA RK",
        "codice_cliente_layout_connect"=>"mio"//serve pechè il layout connect ha salvato i clienti con un codice che corrisponde al codice che era contenuto nel nome file dell'access che passavamo

    ),
	"racc_ges_v2"=>array(
		"nome_campo_folder" => "folder",
		"folder_out" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/gesam/RACCOMANDATE/00_out/",
		"folder_temp"=>getenv("root_progr_php") . "/connect/ulisse/racc_market/",
		"sailpost_out_dir" => getenv("root_progr_php") . "/wamp64/progr/sailpost/output_racc_gesam/",
        "folder_input_sailpost" => getenv("root_progr_php") . "/wamp64/progr/sailpost/input_racc_gesam/",
		"lettura_excel_config"=>true,
		"excel" => array("destinatari_mysql" => "ulisse_gesam.xlsx"),
		"ip_db"=>"172.21.15.19",
		"porta_db"=>"3307",
		"user_db"=>"copygraph",
        "pass_db"=>"C0pyGr@ph",
		"database_cliente"=>"ulisse_racc_ges",
		"tabella_input" => "destinatari_mysql",
		"facciate_da_dividere"=>true,
		"campi" => array("ragsoc" => "S_DESTINATARIO", "NOME" => "", "indirizzo" => "S_INDIRIZZO_DEST", "cap" => "S_CAP_DEST", "localita" => "S_LOCALITA_DEST", "provincia" => "S_PROV_DEST", "pagine_busta"=>"NUM_FOGLI", "C1" => "id", "C2" => "CD_INTESTATARIO", "C3" => "COD_CEDOLINO", "C4" => "MARCHIO_COMMERCIALE", "C5"=> "S_FATTURA_DEF"),
		"indirizzo_ritorno" => "GESAM GAS & LUCE S.P.A. UNIPERSONALE<br>VIA I. NIERI ANG. VIALE EUROPA SNC<br>55100 LUCCA LU",
		"tipo_invio"=>"RACCOMANDATA RK",
		"codice_cliente_layout_connect"=>"gesam",//serve pechè il layout connect ha salvato i clienti con un codice che corrisponde al codice che era contenuto nel nome file dell'access che passavamo
        "associazione_campi" => array("tot_pagine" => "NUM_FOGLI", "numero_protocollo"=>"S_FATTURA_DEF"),
        "destinatari_mail_sailpost"=>"dev@indi.it"//separare i destinatari con una virgola
	),
    "withu" => array("database_cliente" => "withu",
        "ip_db" => "172.21.15.19",
        "porta_db" => "3307",
        "nome_db" => "withu",
        "indirizzo_avvisi_a_withu" => "",
        "indirizzo_avvisi_test" => "dev@indi.it",
        "folder_pdf_in" => "",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\WITHU\\Fatture\\00_stampa\\",
        "folder_input_mail" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\WITHU\\Fatture\\elaborazioni\\00_xml_input\\input_invia_mail_mysql\\",
        "folder_input_riepiloghi" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\WITHU\\Fatture\\elaborazioni\\00_xml_input\\input_creazione_pdf_riepiloghi_ritorno_withu_mysql\\",
        "folder_temp" => "",
        "folder_input" => "",
        "fr" => true,
        "coordinate-stampa_1_8" => "",
        "coordinate-dati_bustoni" => "",
        "tabelle" => array("stampa_1_8", "stampa_bustoni", "stampa_1_8_ee", "stampa_bustoni_ee"),
        "nome_campo_folder" => "folder",
        "excel" => array("stampa_1_8" => "withu_fatture_1_finestra_11x23.xlsx", "stampa_bustoni" => "withu_fatture_1_finestra_bustone.xlsx", "stampa_1_8_ee" => "withu_ee_fatture_1_finestra_11x23.xlsx", "stampa_bustoni_ee" => "withu_ee_fatture_1_finestra_bustone.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode_contest", "pagine_busta" => "n_pagine_plico", "C1" => "key_dati"),
        "facciate_da_dividere" => true,
        "tariffe" => array("0-20AM" => 0.56, "0-20CP" => 0.56, "0-20EU" => 0.56, "21-50AM" => 1.10, "21-50CP" => 1.10, "21-50EU" => 1.10, "51-100AM" => 1.37, "51-100CP" => 1.37, "51-100EU" => 1.37, "101-250AM" => 2.31, "101-250CP" => 2.31, "101-250EU" => 2.31, "251-350AM" => 2.32, "251-350CP" => 2.32, "251-350EU" => 2.32, "351-1000AM" => 3.32, "351-1000CP" => 3.32, "351-1000EU" => 3.32, "1001-2000AM" => 3.97, "1001-2000CP" => 3.97, "1001-2000EU" => 3.97)
    ),
    "withu__spot" => array("ip_db" => "172.21.15.19",
        "folder_pdf_in" => "",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\WITHU\\Fatture\\00_stampa\\",
        "folder_input_mail" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\WITHU\\Fatture\\elaborazioni\\00_xml_input\\input_invia_mail_mysql\\",
        "folder_input_riepiloghi" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\WITHU\\Fatture\\elaborazioni\\00_xml_input\\input_creazione_pdf_riepiloghi_ritorno_withu_mysql\\",
        "folder_temp" => "",
        "folder_input" => "",
        "fr" => true,
        "coordinate-stampa_1_8" => "",
        "coordinate-dati_bustoni" => "",
        "tabelle" => array("withu__spot"),
        "nome_campo_folder" => "folder",
        "excel" => array("withu__spot" => "withu_fatture_1_finestra_11x23.xlsx"),
        "campi" => array("RAGSOC" => "DESTINATARIO", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "provincia", "BARCODE" => "barcode_contest", "pagine_busta" => "pagine_busta", "C1" => "id"),
        "facciate_da_dividere" => false, // se true il valore del campo pagine_busta viene diviso per due
        "tariffe" => array("0-20AM" => 0.56, "0-20CP" => 0.56, "0-20EU" => 0.56, "21-50AM" => 1.10, "21-50CP" => 1.10, "21-50EU" => 1.10, "51-100AM" => 1.37, "51-100CP" => 1.37, "51-100EU" => 1.37, "101-250AM" => 2.31, "101-250CP" => 2.31, "101-250EU" => 2.31, "251-350AM" => 2.32, "251-350CP" => 2.32, "251-350EU" => 2.32, "351-1000AM" => 3.32, "351-1000CP" => 3.32, "351-1000EU" => 3.32, "1001-2000AM" => 3.97, "1001-2000CP" => 3.97, "1001-2000EU" => 3.97)
    ),
    "af" => array("folder_pdf_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\af_energia\\fatture\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\AF_Energia\\FATTURE\\0_STAMPA\\",
        "folder_input_mail" => "",
        "folder_temp" => "",
        "folder_base" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\AF_Energia\\FATTURE\\",
        "fr" => true,
        "coordinate-stampa_1_8" => "",
        "coordinate-dati_bustoni" => "",
        "database_cliente" => "af",
        "tabelle" => array(""), // elabora contest prende il valore della tabella dal lancio script, il valore nell'array server solo per l'eventuale lancio di datamatrix
        "nome_campo_folder" => "folder",
        "excel" => array("v_dati_1_8" => "af_fatture_2_finestre_11x23.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "fr" => true,
        "facciate_da_dividere" => true,
        "tariffe" => array("0-20AM" => 0.53, "0-20CP" => 0.53, "0-20EU" => 0.53, "21-50AM" => 1.05, "21-50CP" => 1.05, "21-50EU" => 1.05),
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php",
        "tipo_spedizione" => "contest",//af ha la stessa pagina di tracca di ulisse
        "tabella" => "v_dati_1_8",
        "folder_esiti" => "//172.21.15.5/wamp/www/elabora_poste/import_tracking_contest/TrackingPostaContest/",
        "folder_deposito_esiti" => "//172.21.15.5/wamp/www/elabora_poste/import_tracking_contest/TrackingPostaContest/letti/",//indica dove saranno salvati gli esiti (se php li leggerà potrebbe spostarli)
        "folder_esiti_log" => getenv("root_progr_php") . "/wamp64/progr/af_energia/esiti_contest_log/",
        "oggetto_segnalazioni_errori" => "Errori AF",
        "mittente_segnalazione_errori" => "AF energia",
        "ftp_server_poste" => "mftprod.posteitaliane.it",
        "ftp_user_poste" => "SA-0030295330",
        "ftp_pass_poste" => "Indi_Poste_042021",
        "ftp_porta_poste" => "2222",
        "cancella_file_esiti_contest_dopo" => 180
    ),
    "ideacall" => array("folder_in" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\EWT\\IDEACALL\\0_Input\\",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\EWT\\IDEACALL\\0_stampa\\",
        "folder_base" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\EWT\\IDEACALL\\",
        "folder_input_rabbit" => "//172.21.15.15/c/wamp64/progr/ideacall/input",
        "folder_y_in" => "\\\\192.168.0.21\\CopyGraphIT_FTP\\EWT\\IDEACALL\\IN\\",
        "folder_y_out" => "\\\\192.168.0.21\\CopyGraphIT_FTP\\EWT\\IDEACALL\\elaborati\\",
        "folder_temp" => "C:\wamp64\progr\\ideacall\input\\",
        "database_cliente" => "ideacall",
        "cliente" => "ideacall",
        "folder_rete" => "EWT\IDEACALL",
        "fr" => true,
        "coordinate-stampa_1_8" => "",
        "coordinate-dati_bustoni" => "",
        "tabelle" => array(""), // elabora contest prende il valore della tabella dal lancio script, il valore nell'array server solo per l'eventuale lancio di datamatrix
        "nome_campo_folder" => "folder",
        "excel" => array("stampa__ideacall__1_8__1" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__2" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__3" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__4" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__5" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__6" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__7" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__8" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__1_8__9" => "ideacall_ideacall_1_8.xlsx",
            "stampa__ideacall__bus__1" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__2" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__3" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__4" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__5" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__6" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__7" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__8" => "ideacall_ideacall_bus.xlsx",
            "stampa__ideacall__bus__9" => "ideacall_ideacall_bus.xlsx",
            "stampa__bamado__1_8__1" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__2" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__3" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__4" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__5" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__6" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__7" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__8" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__1_8__9" => "ideacall_bamado_1_8.xlsx",
            "stampa__bamado__bus__1" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__2" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__3" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__4" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__5" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__6" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__7" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__8" => "ideacall_bamado_bus.xlsx",
            "stampa__bamado__bus__9" => "ideacall_bamado_bus.xlsx",
            "stampa__gds__1_8__1" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__2" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__3" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__4" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__5" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__6" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__7" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__8" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__1_8__9" => "ideacall_gds_1_8.xlsx",
            "stampa__gds__bus__1" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__2" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__3" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__4" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__5" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__6" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__7" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__8" => "ideacall_gds_bus.xlsx",
            "stampa__gds__bus__9" => "ideacall_gds_bus.xlsx"),
        "campi" => array("RAGSOC" => "Rag_Soc_Recapito", "NOME" => "", "INDIRIZZO" => "Indirizzo_Recapito", "CAP" => "CAP_Recapito", "LOCALITA" => "Località_Recapito", "PROVINCIA" => "Provincia_Recapito", "BARCODE" => "barcode", "pagine_busta" => "Num_Facciate", "C1" => "id"),
        "facciate_da_dividere" => true,
        "tariffe" => array(
            "0-20AM" => 0.52, "0-20CP" => 0.52, "0-20EU" => 0.52,
            "21-50AM" => 0.95, "21-50CP" => 0.95, "21-50EU" => 0.95,
            "51-100AM" => 1.20, "51-100CP" => 1.20, "51-100EU" => 1.20,
            "101-250AM" => 2.12, "101-250CP" => 2.12, "101-250EU" => 2.12,
            "251-350AM" => 2.34, "251-350CP" => 2.34, "251-350EU" => 2.34,
            "351-1000AM" => 3.55, "351-1000CP" => 3.55, "351-1000EU" => 3.55,
            "1001-2000AM" => 4.55, "1001-2000CP" => 4.55, "1001-2000EU" => 4.55
        ),
        "pagina_tracca" => "//172.21.15.5/wamp/www/elabora_poste/contest/script/pulisci_tabelle_ideacall.php"
    ),
    "test_creative" => array("folder_config_target" => "//172.21.15.24/c/wamp64/progr/eptarget/config//",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\area_it\\creative\\",
        "database_cliente" => "test",
        "ip_db" => "172.21.15.5",
        "porta_db" => "",
        "fr" => true,
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1486",
        "excel" => array("stampa_1_8" => "EWT_FONDAZIONE_VICENTINA.xlsx"),
        "campi" => array("RAGSOC" => "Cognome", "NOME" => "Nome", "INDIRIZZO" => "Indirizzo", "CAP" => "Cap", "LOCALITA" => "Citta", "PROVINCIA" => "Prov", "pagine_busta" => "Field12", "C1" => "ID"),
        //"facciate_da_dividere"=>false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39)
        //"limite_kb_light"=>99999,
        //"pagina_tracca"=>"//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    /*"test_antezza_creative" => array("folder_config_target" => "//172.21.15.24/c/wamp64/progr/eptarget/config//",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\area_it\\creative\\",
        "database_cliente" => "test",
        "ip_db" => "172.21.15.19",
        "porta_db" => "3305",
        "fr" => true,
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1486",
        "excel" => array("dati_b" => "ANTEZZA_FERRERO_PT_CREATIVE.xlsx"),
        "campi" => array("RAGSOC" => "cognome", "NOME" => "nome", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "citta", "PROVINCIA" => "provincia", "C1" => "progressivo", "C2" => "numero_storia"),
        //"facciate_da_dividere"=>false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39)
        //"limite_kb_light"=>99999,
        //"pagina_tracca"=>"//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),
    "test_suzuki_basic" => array("folder_config_target" => "//172.21.15.24/c/wamp64/progr/eptarget/config//",
        "folder_out" => "\\\\netserver2\\CopyGraph\\Produzione\\ARCHIVI COPYGRAPH\\$sub_folder_z\\area_it\\creative\\",
        "database_cliente" => "test",
        "ip_db" => "172.21.15.19",
        "porta_db" => "3305",
        "fr" => true,
        "nome_campo_folder" => "folder",
        //"cod_omologa"=>"DCOPI1486",
        "excel" => array("tagliandi" => "STUDIUM_SUZUKI_AUTO_BASIC.xlsx"),
        "campi" => array("RAGSOC" => "RASAC", "INDIRIZZO" => "INDAC", "CAP" => "CAPAC", "LOCALITA" => "LOCAC", "PROVINCIA" => "PRVAC", "C1" => "ID"),
        //"facciate_da_dividere"=>false,
        "tariffe" => array("0-20AM" => 0.2, "0-20CP" => 0.26, "0-20EU" => 0.35, "21-50AM" => 0.24, "21-50CP" => 0.30, "21-50EU" => 0.39)
        //"limite_kb_light"=>99999,
        //"pagina_tracca"=>"//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php"
    ),*/
    "archive" => array(
        "ip_db" => "172.21.15.19",
        "porta_db" => "3305",
        "tabella" => "dati",
        "db" => "archive",
        "unita_archivio" => "\\\\172.21.15.242\\archivio\\",
        "unita_archivio_user" => "admin",
        "unita_archivio_password" => "xsw234rfv",
        "indirizzo_mail" => "dev@indi.it",
        "orario_massimo_esecuzione" => "18:00:00",//mettere 04:00:00 cioè alle 4 di mattina
        "indirizzo_pagina_web" => "http://172.21.15.19:88/archive/ok.php?percorso="

    ),
    "ferrero" => array(
        "ip_db" => "172.21.15.19",
        "porta_db" => "3307",
        "tabella" => "input",
        "folder_out" => getenv("root_progr_php") . getenv("antezza_root_path") . "folder_out/",//cartella base che conterrà le elaborazioni suddivise in sotto cartelle (una per ogni week
        //"folder_ftp_prenotazioni" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/antezza/prenotazioni/",//variabile usata dal webserver sul 5 per depositare un file di testo che contenga la data di spedizione di una prenotazione
        //"folder_ftp_prenotazioni" => "/172.21.15.24/c/" . "wamp64/progr/antezza/ferrero/folder_input/",
        "folder_ftp_test" => "test",//in produzione lasciare vuota la variabile
        "folder_log" => getenv("root_progr_php") . getenv("antezza_root_path") . "log/",
        "folder_prenotazioni" => getenv("root_progr_php") . getenv("antezza_root_path") . "prenotazioni/",//ci vanno i txt scaricati da ftp indi con le indicazioni delle prenotazioni
        "percorso_7z" => "c:\programmi\7-zip\7z.exe",
        "database_cliente" => "antezza_ferrero",
        "folder_input" => getenv("root_progr_php") . getenv("antezza_root_path") . "folder_input/",
        "folder_scarti" => getenv("root_progr_php") . getenv("antezza_root_path") . "folder_scarti/",
        "folder_esiti" =>getenv("root_progr_php") . getenv("antezza_root_path") . "esiti/",
        "folder_csv_esiti" =>getenv("root_progr_php") . getenv("antezza_root_path") . "esiti/csv_esiti/",
        "folder_deposito_esiti"=>getenv("root_progr_php") . getenv("antezza_root_path") . "esiti/letti/",
        "cancella_file_esiti_contest_dopo"=>180,
        //"folder_config_target" => getenv("root_progr_php") . "/wamp64/progr/eptarget/config//",
        "php_da_usare" => getenv("root_progr_php") . "wamp64/bin/php/php7.3.21/php.exe",
        "php_cgi_da_usare" => getenv("root_progr_php") . "wamp64/bin/php/php7.3.21/php-cgi.exe",
        "intestazione" => true,
        "campi_non_empty" => array("codice_pratica", "nome", "cognome", "indirizzo", "numero_civico", "cap", "citta", "provincia", "libretto_scelto", "nome_pdf_cover", "nome_pdf_interno"),//campi che non devono essere vuoti nel csv
        //campi_intestazione: così come compaiono nell'intestazione del file indice
        "campi_intestazione" => array("numero_sequenza_giornaliera", "data_inserimento", "week_inserimento", "codice_pratica", "nome_personalizzazione", "nome", "cognome", "indirizzo", "numero_civico", "cap", "citta", "provincia", "note_spedizione", "libretto_scelto", "nome_pdf_cover", "nome_pdf_interno"),
        //posizione_dati_in_file_indice: la key dell'array corrisponde al nome colonna a db. sono i campi del file indice necessari nella insert
        "posizione_dati_in_file_indice" => array("progressivo" => 0, "data_inserimento_csv" => 1, "week_csv" => 2, "codice_pratica" => 3, "nome_personalizzazione" => 4, "nome" => 5, "cognome" => 6, "indirizzo" => 7, "numero_civico" => 8, "cap" => 9, "citta" => 10, "provincia" => 11, "note_spedizione" => 12, "libretto_scelto" => 13, "nome_pdf_cover" => 14, "nome_pdf_interno" => 15),
        "programma_genera_dm" => getenv("root_progr_php") . getenv("antezza_root_path") . "dmtxwrite.exe",
        "busta" => array(
            "sfondo_busta" => getenv("root_progr_php") . getenv("antezza_root_path") . "img/linea_evolution_creative.pdf",
            "w" => 210,
            "h" => 130,
            "dm" => array("x" => 106, "w" => 26, "y" => 65, "h" => 10),
            "qr" => array("x" => 168, "w" => 8, "y" => 65, "h" => 8),
            "indirizzo" => array("x" => 106, "w" => 75, "y" => 83, "h" => 4),
            "cod_omologa" => array("x" => 120, "y" => 60),
            "progr" => array("x" => 149, "y" => 68),
            "progr_qr" => array("x" => 169, "y" => 75)
        ),
        "indirizzo_segnalazioni" => array("dev@indi.it"),
        "errori" => array(
            "Non ci sono file" => 1,
            "ci sono ancora dati da elaborare e non sono passati i giorni stabiliti" => 2,
            "non sono riuscito a salvare i dati di input" => 3,
            "non sono riuscito a salvare i dati di ordinati" => 4,
            "Non sono riuscito a spostare i csv nella cartella di bkp" => 5,
            "Non ci sono dati in ordinati" => 6,
            "Non ci sono dati" => 7,
            "Non sono riuscito a creare la cartella" => 8,
            "Nessun record inserito" => 9,
            "Programma di importazione andato in errore" => 10,
            "Non riesco ad aprire la connessione ftp" => 11,
            "Non riesco ad eseguire il login al server ftp" => 12,
            "Non riesco ad eseguire l'upload di un file" => 13,
            "Non riesco ad eliminare il file sul server ftp" => 14,
            "Creazione distinta DU fallita" => 15,
            "Codici figli finiti" => 16,
            "Codici padre finiti" => 17,
            "Prenotazione fallita" => 18,
            "Nessun file prenotazione trovato" => 19,
            "Non riesco ad aggiornare la data di spedizione" => 20,
            "Creazione distinta excel fallita" => 21,
            "non ci sono esiti" => 22,
            "errore lettura esiti"=>23
        ),
        "ftp_server" => "ftp.copygraph.it",
        "ftp_user" => "antezza",
        "ftp_pass" => "7Hcqb@Z&",
        "ftp_server_poste" => "ftp.indi.it",
        "ftp_user_poste" => "antezza",
        "ftp_pass_poste" => "7Hcqb@Z&",
        "ftp_porta_poste" => "22",
        //dati postali per elaborazione creative (ex excel)
        "campi" => array("RAGSOC" => "ragsoc", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "citta", "PROVINCIA" => "provincia", "N_civico" => "numero_civico", "C1" => "id_generale", "C2" => "week", "C3" => "libretto_scelto", "C4" => "id_flusso", "C5" => "note_spedizione", "codice_prenotazione_padre" => "codice_prenotazione_padre", "codice_prenotazione_figlio" => "codice_prenotazione_figlio", "BARCODE" => "barcode"),
        "campi_spare_du" => array("C5"),//massimo 10 elementi
        "campo_identificativo_singolo_ordinamento" => "C3",//indica qualè il campo che in ordinati_bkp differenzia un ordinamento da un altro. serve per la DU
        "peso_busta" => "63",
        "buste_min" => "85",
        "buste_max" => "125",
        "formato" => "M",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "sap" => "32500588-001",//verificato con modulo op in cartella \ANTEZZA_TIPOGRAFI\OMOLOGAZIONE_EVOLUTION\2022
        "azienda" => "FERRERO",//compare nelle etichette e nella distinta excel
        "age" => "AGE68172",
        "cmp" => "VERONA CMP",
        "cod_omologa" => "DCODM1897",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "codice_cliente" => "FBA",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "data_imp" => "",
        "prodotto" => "BASIC",
        "tipologia_prodotto" => "T",
        "codice_prodotto" => "75",//verificato sulla guida della DU
        "tipo_prodotto" => "S",
        "codice_servizio_accessorio" => "CT",//verificato con modulo op in cartella \ANTEZZA_TIPOGRAFI\OMOLOGAZIONE_EVOLUTION\2022 e guida postale per DU, tabella 2, servizio qui e ora + resi report  =  CT
        "identificativo_stampatore" => "FE",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "identificativo_servizio_pallet" => "98",//preso dalla guida etichetta pallet di POSTE
        "tara_scatola" => "200",
        "autorizzazione" => "MBPA/LO-NO/100/2019",
        "partita_iva" => "",
        "indirizzo_sede" => "",
        "telefono" => "",
        "fax" => "",
        "cap_mittente" => "12051",//verificato con quanto indicato in modello op
        "utenza_ps_online" => "vincenzo.antezza.ferrerocommerciale",//come indicato nella mail del 5/12 16:05
        "tariffe" => array(
            "1-10000" => array("A" => 0.4144, "B" => 0.4384, "C" => 0.4414, "D" => 0.4474, "E" => 0.4624),
            "10001-50000" => array("A" => 0.3862, "B" => 0.4102, "C" => 0.4132, "D" => 0.4192, "E" => 0.4342)
        )
    ),
    "otis" => array(
        "non_inviare_mail"=>true,
        "ip_db" => "172.21.15.19",
        "porta_db" => "3307",//mysql nuovo
        "tabella" => "dati_mail",
        "database_cliente" => "otis",
        "folder_elab_csv" => getenv("root_progr_php") . "/wamp64/progr/psf/otis/csv_in/",
        "folder_bkp_csv" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z_slash_rovesciato/POLIGRAFICA_SAN_FAUSTINO/otis_mail/csv_bkp/",
        "folder_bkp_pdf" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z_slash_rovesciato/POLIGRAFICA_SAN_FAUSTINO/otis_mail/pdf_bkp/",
        "folder_supporto" => getenv("root_progr_php") . "/wamp64/progr/psf/otis/folder_supporto/",
        "folder_y" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/psf/otis/",
        "folder_pdf" => getenv("root_progr_php") . "/wamp64/progr/psf/otis/pdf/",
        "indirizzo_segnalazioni" => array("dev@indi.it"),
        "campi_insert" => array(
            "eService" => array("id_file", "email", "nome", "amministratore", "indirizzo", "cap", "comune", "provincia", "campagna", "nome_file_input", "id_flusso"),//il nome pdf lo sistemo alla fine perchè devo gestire il raggruppamento
            "NuovoImpianto" => array("id_file", "email", "filiale", "indirizzo_filiale", "cap_filiale", "localita_filiale", "prov_filiale", "tel_filiale", "fax_filiale", "email_filiale", "nome", "indirizzo", "cap", "comune", "provincia", "impianto", "indirizzo_impianto", "localita_impianto", "prov_impianto", "venditore", "cell_venditore", "email_venditore", "campagna", "nome_file_input", "id_flusso"),
            "CTR_Scad" => array("id_file", "email", "filiale", "indirizzo_filiale", "cap_filiale", "localita_filiale", "prov_filiale", "tel_filiale", "fax_filiale", "email_filiale", "nome", "amministratore", "indirizzo", "cap", "comune", "provincia", "contratto", "mese", "scadenza_definitiva", "venditore", "cell_venditore", "responsabile_filiale", "campagna", "nome_file_input", "id_flusso")
        ),
        "campi_intestazione" => array(
            "eService" => array("ID", "Mail invio", "Nominativo", "Amministratore", "Indirizzo", "CAP", "Città", "Provincia"),
            "NuovoImpianto" => array("ID", "Mail invio", "Filiale", "Indirizzo Filiale", "Cap Filiale", "Localita Filiale", "PV_Fil", "TelFiliale", "FaxFiliale", "EmailFiliale", "Cliente", "Indirizzo_Cli", "CAP Cli", "Città_Cli", "PV Cli", "Impianto", "Indirizzo_Impianto", "Citta_Impianto", "PV_Impianto", "Venditore", "Cell_Vend", "Email_Vend"),
            "CTR_Scad" => array("ID", "Mail invio", "Desc_Filiale", "IndirizzoFiliale", "CapFiliale", "LocalitaFiliale", "ProvinciaFiliale", "TelFiliale", "FaxFiliale", "EmailFiliale", "Nominativo", "Amministratore", "Indirizzo", "CAP", "Città", "Provincia", "Contratto", "Mese", "ScadenzaDefinitiva", "Venditore", "CellulareVenditore", "ResponsabileFiliale")
        ),
        "oggetti" => array(
            "eService" => "OTIS – Servizio eService",
            "NuovoImpianto" => "OTIS – Attivazione Servizio di Assistenza e Manutenzione",
            "CTR_Scad" => "OTIS – Contratto di Assistenza e Manutenzione in scadenza"
        ),
        "user_server_mail" => "italy.otis@indisrl.it",
        "pass_server_mail" => "Password13!",
        "from_mail" => "servizioclienti@italy.otis.com",
        "from_name" => "SERVIZIO CLIENTI OTIS",
        "secondi_attesa_invio_mail" => 3,
        "numero_giorni_attesa_export_tracking" => -1,
        "errori" => array(
            "Non sono riuscito a creare il file csv con le mail errate" => 1,
            "Nessun record inserito" => 2,
            "Fallito aggiornamento nome_pdf" => 3,
            "Non riesco a recuperare i dati per inviare le mail" => 4,
            "Non esiste un allegato" => 5,
            "Non riesco ad aggiornare un record dopo l'invio mail" => 6,
            "Invio mail non completato" => 7,
            "Anomalia tracking: indice superiore al totale messaggi" => 8,
            "Non riesco a spostare in archivio i pdf inviati come allegato" => 9,
            "Intestazione diversa da quella concordata" => 10
        )
    ),
    "global_power" => array(
        "folder_pdf_in" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/Global_Power_Plus/fatture/",
        "folder_out" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/Global_Power_Plus/Fatture/0_stampa/",
        "folder_temp" => getenv("root_progr_php") . "/datamatrix/temp/global_power/",
        "folder_input" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/Global_Power_Plus/Fatture/0_input/",
        "folder_y_in" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/global_power/fatture/",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_y_out" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/global_power/fatture/00_gestiti/",
        "folder_esiti" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/global_power/fatture/esiti/",
        "folder_deposito_esiti" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/global_power/fatture/esiti/",//indica dove saranno salvati gli esiti (se php li leggerà potrebbe spostarli)
        "folder_esiti_log" => getenv("root_progr_php") . "/wamp64/progr/global_power/fatture/esiti_contest_log/",
        "folder_config_excel_contest" => getenv("root_progr_php") . "/wamp64/progr/global_power/fatture/config_contest/",
        "database_cliente" => "global_power",
        "ip_db" => "172.21.15.19",
        "porta_db" => "3305",//mysql vecchio
        "tabella" => "input",
        "estensione_file_indice" => "csv",
        "estensione_archivio" => "zip",
        "separatore_file_indice" => ";",
        "posizione_dati_in_file_indice" => array(//la key corrisponde al nome a db, questi sono campi del file indice usati nella insert
            "ragsoc" => 2, "indirizzo" => 3, "cap" => 4, "localita" => 5, "prov" => 6, "totpagine" => 14, "nome_pdf" => 29, "ramo" => 8, "presso" => 7, "cognome_ass" => 15, "nome_ass" => 16, "chiave" => 17, "prodotto" => 18, "tariffa" => 19, "polizza" => 17//polizza sarebbe il numero protocollo
        ),
        "numero_campi_previsto_in_file_indice" => 30,
        "numero_byte_n_protocollo" => 8,//su global power il campo n protocollo ha due valori al suo interno e devo estrarre i primi 8 caratteri
        "fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
        "coordinate-record_1_8" => array(
            "dm" => array("x1" => 113, "x2" => 26, "y1" => 49.5, "y2" => 10),
            "progr" => array("x" => 176, "y" => 59),
            "omologa" => array("x" => 145, "y" => 59),
            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "coordinate-record_bustoni" => array(
            "progr" => array("x" => 176, "y" => 61),
            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
        ),
        "tabelle" => array("record_1_8", "record_bustoni"),
        "excel" => array("record_1_8" => "global_power_fatture_1_finestra_11x23.xlsx", "input" => "global_power_fatture_1_finestra_11x23.xlsx", "record_bustoni" => "global_power_fatture_1_finestra_11x23.xlsx"),
        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => true,
        "tariffe" => array("0-20AM" => 0.53, "0-20CP" => 0.53, "0-20EU" => 0.53, "21-50AM" => 1.00, "21-50CP" => 1.00, "21-50EU" => 1.00),
        "errori" => array(
            "non riesco ad aprire la cartella temporanea in datamatrix" => 1,
            "non riesco a eliminare i file nella cartella temporanea" => 2,
            "ci sono ancora dati da traccare" => 3,
            "non riesco a creare la folder in z" => 4,
            "non esiste un pdf indicato nel file indice" => 5,
            "non riesco ad aprire un file indice" => 6,
            "non ci sono lotti da elaborare in y" => 7,
            "non ci sono più codici padri o figli" => 8,
            "Ci sono file nella cartella temp" => 9,
            "Non sono stati inseriti record da elaborare" => 10,
            "Programma ruota è fallito" => 11,
            "Non riesco a creare la cartella temporanea" => 12
        ),
        "oggetto_segnalazioni_errori" => "Errori elaborazione Global Power",
        "mittente_segnalazione_errori" => "Global Power",
        "pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php",
        "tipo_spedizione" => "contest",
        "ftp_server_poste" => "mftprod.posteitaliane.it",
        "ftp_user_poste" => "SA-0030295330",
        "ftp_pass_poste" => "Indi_Poste_042021",
        "ftp_porta_poste" => "2222",
        "cancella_file_esiti_contest_dopo" => 180
    ),
    "test_import_file" => array(
        "folder_programma" => getenv("root_progr_php") ."wamp64/progr/import_file/",//indica la folder dove risiede il programma del cliente che contiene la classe import file
        "folder_cliente" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/test_import_file/fatture/",
        //"folder_out" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/test_import_file/Fatture/0_stampa/",
        "folder_innesco" => "//netserver2/CopyGraph/Produzione/ARCHIVI COPYGRAPH/$sub_folder_z/test_import_file/fatture/0_input/",
        "folder_origine_file" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/test_import_file/fatture/",//lo slash iniziale e finale serve per gestire il bat, devo metterci le virgolette iniziali e finali
        "folder_deposito_file" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/test_import_file/fatture/00_gestiti/",
        //"folder_esiti" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/global_power/fatture/esiti/",
        //"folder_deposito_esiti" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/global_power/fatture/esiti/",//indica dove saranno salvati gli esiti (se php li leggerà potrebbe spostarli)
        //"folder_esiti_log" => getenv("root_progr_php") . "/wamp64/progr/global_power/fatture/esiti_contest_log/",
        //"folder_config_excel_contest" => getenv("root_progr_php") . "/wamp64/progr/global_power/fatture/config_contest/",
        "database_cliente" => "test",
        "ip_db" => "172.21.15.19",
        "porta_db" => "3307",//mysql nuovo
        "user_db"=>"copygraph",
        "pass_db"=>"C0pyGr@ph",
        "tabella" => "input_test",
        "estensione_file_indice" => "idx",
        "estensione_archivio" => "zip",
        "separatore_file_indice" => "|",
        "riga_intestazione" => array("ID_AZIENDA","ID_ISTANZA","ID_FORNITORE","TIPODOCUMENTO","ID_DOCUMENTO","S_FATTURA_DEF","ELAB_NOME_FILE","D_EMISSIONE","CD_INTESTATARIO","S_DESTINATARIO","S_LOCALITA_DEST","S_INDIRIZZO_DEST","S_AGGIUNTIVO_DEST","S_CAP_DEST","S_PROV_DEST","PERS_STAMPATORE","PERS_POSTALIZZATORE","NUM_FOGLI","CD_PROTOCOLLO","CD_LAYOUT_RIEP"),//oppure false
        "campo_codice_protocollo" => "polizza",//oppure false
        "posizione_dati_in_file_indice" => array(//la key corrisponde al nome a db, questi sono campi del file indice usati nella insert
            "ragsoc" => 9, "indirizzo" => 11, "cap" => 13, "localita" => 10, "prov" => 14, "totpagine" => 17, "nome_pdf" => 6, "polizza" => 18
        ),//la key è il nome del campo mysql, il valore è la posizione nel file indice
        "numero_campi_previsto_in_file_indice" => 20,
        "associazione_campi"=>array("ragsoc"=>"ragsoc","indirizzo"=>"indirizzo","cap"=>"cap","localita"=>"localita", "prov"=>"prov","tot_pagine"=>"totpagine", "nome_pdf"=>"nome_pdf", "numero_riga_csv"=>"numero_riga_csv", "file_input"=>"file_input", "folder"=>"folder","id_flusso"=>"id_flusso", "numero_protocollo"=>"numero_protocollo"),//serve per indicare come sono associate le info necessarie fra il programma e il db (key=campo così come scritto nei programmi interni, valore=campo così come indicato nel db e corrisponde alle key della variabile posizione_dati_in_file_indice. quelli indicati in questo array sono tutti valori necessari. se manca qualcosa nel file indice provare a mettere valore uguale alla key)

        //"fr" => true,
        //punto in alto a sinistra del barcode rispetto al punto in alto a sx del foglio. x2 e y2 sono larghezza e altezza
//        "coordinate-record_1_8" => array(
//            "dm" => array("x1" => 113, "x2" => 26, "y1" => 49.5, "y2" => 10),
//            "progr" => array("x" => 176, "y" => 59),
//            "omologa" => array("x" => 145, "y" => 59),
//            "barcode" => array("x1" => 0.3, "x2" => 8, "y1" => 47, "y2" => 35),
//            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
//        ),
//        "coordinate-record_bustoni" => array(
//            "progr" => array("x" => 176, "y" => 61),
//            "tacca_nera" => array("x1" => 0, "x2" => 7, "y1" => 5, "y2" => 10)
//        ),
//        "tabelle" => array("record_1_8", "record_bustoni"),
//        "excel" => array("record_1_8" => "global_power_fatture_1_finestra_11x23.xlsx", "input" => "global_power_fatture_1_finestra_11x23.xlsx", "record_bustoni" => "global_power_fatture_1_finestra_11x23.xlsx"),
//        "campi" => array("RAGSOC" => "ragsoc", "NOME" => "", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "prov", "BARCODE" => "barcode", "pagine_busta" => "totpagine", "C1" => "id"),
        "facciate_da_dividere" => true,
        //"tariffe" => array("0-20AM" => 0.53, "0-20CP" => 0.53, "0-20EU" => 0.53, "21-50AM" => 1.00, "21-50CP" => 1.00, "21-50EU" => 1.00),

        "oggetto_segnalazioni_errori" => "Errori elaborazione Test import file",
        "mittente_segnalazione_errori" => "Test import file",
        "indirizzo_segnalazioni" => array("dev@indi.it"),
        "host_segnalazioni" => "smtps.aruba.it",
        "porta_host_segnalazioni"=>465,
        "user_host_segnalazioni"=>"srv_php@slymail.eu",
        "password_host_segnalazioni"=>"Password12!",
        "smtpsecure_segnalazioni"=>"ssl"
        //"pagina_tracca" => "//172.21.15.5/wamp/www/ulisse/lancia_tracca_ulisse_fatture.php",
        //"tipo_spedizione" => "contest",
        //"ftp_server_poste" => "mftprod.posteitaliane.it",
        //"ftp_user_poste" => "SA-0030295330",
        //"ftp_pass_poste" => "Indi_Poste_042021",
        //"ftp_porta_poste" => "2222",
        //"cancella_file_esiti_contest_dopo" => 180

        //---------------------------------------------------------------------------------------------------
        //variabili elaborazione postale
    ),
    "test2" => array(
        "ip_db" => "172.21.15.19",
        "porta_db" => "3307",
        "tabella" => "ordinati_tagliandi",
        "folder_out" => "//172.21.15.24/wamp64/progr/test/",//cartella base che conterrà le elaborazioni suddivise in sotto cartelle (una per ogni week
        //"folder_ftp_prenotazioni" => "//192.168.0.21/CopyGraphIT_FTP/$sub_folder_y/antezza/prenotazioni/",//variabile usata dal webserver sul 5 per depositare un file di testo che contenga la data di spedizione di una prenotazione
        //"folder_ftp_prenotazioni" => "/172.21.15.24/c/" . "wamp64/progr/antezza/ferrero/folder_input/",
        "folder_ftp_test" => "test",//in produzione lasciare vuota la variabile
        "folder_log" => "//172.21.15.24/wamp64/progr/test/",
        "folder_prenotazioni" => getenv("root_progr_php") . getenv("antezza_root_path") . "prenotazioni/",//ci vanno i txt scaricati da ftp indi con le indicazioni delle prenotazioni
        "percorso_7z" => "c:\programmi\7-zip\7z.exe",
        "database_cliente" => "test",
        "folder_input" => "//172.21.15.24/wamp64/progr/test/",
        "folder_scarti" => "//172.21.15.24/wamp64/progr/test/",
        //"folder_config_target" => getenv("root_progr_php") . "/wamp64/progr/eptarget/config//",
        "php_da_usare" => getenv("root_progr_php") . "wamp64/bin/php/php7.3.21/php.exe",
        "php_cgi_da_usare" => getenv("root_progr_php") . "wamp64/bin/php/php7.3.21/php-cgi.exe",
        "intestazione" => true,
        "campi_non_empty" => array("codice_pratica", "nome_personalizzazione", "nome", "cognome", "indirizzo", "numero_civico", "cap", "citta", "provincia", "libretto_scelto", "nome_pdf_cover", "nome_pdf_interno"),//campi che non devono essere vuoti nel csv
        //campi_intestazione: così come compaiono nell'intestazione del file indice
        "campi_intestazione" => array("numero_sequenza_giornaliera", "data_inserimento", "week_inserimento", "codice_pratica", "nome_personalizzazione", "nome", "cognome", "indirizzo", "numero_civico", "cap", "citta", "provincia", "note_spedizione", "libretto_scelto", "nome_pdf_cover", "nome_pdf_interno"),
        //posizione_dati_in_file_indice: la key dell'array corrisponde al nome colonna a db. sono i campi del file indice necessari nella insert
        "posizione_dati_in_file_indice" => array("progressivo" => 0, "data_inserimento_csv" => 1, "week_csv" => 2, "codice_pratica" => 3, "nome_personalizzazione" => 4, "nome" => 5, "cognome" => 6, "indirizzo" => 7, "numero_civico" => 8, "cap" => 9, "citta" => 10, "provincia" => 11, "note_spedizione" => 12, "libretto_scelto" => 13, "nome_pdf_cover" => 14, "nome_pdf_interno" => 15),
        "programma_genera_dm" => getenv("root_progr_php") . getenv("antezza_root_path") . "dmtxwrite.exe",
        "busta" => array(
            "sfondo_busta" => getenv("root_progr_php") . getenv("antezza_root_path") . "img/linea_evolution_creative.pdf",
            "w" => 210,
            "h" => 130,
            "dm" => array("x" => 106, "w" => 26, "y" => 65, "h" => 10),
            "qr" => array("x" => 168, "w" => 8, "y" => 65, "h" => 8),
            "indirizzo" => array("x" => 106, "w" => 75, "y" => 83, "h" => 4),
            "cod_omologa" => array("x" => 120, "y" => 60),
            "progr" => array("x" => 149, "y" => 68),
            "progr_qr" => array("x" => 169, "y" => 75)
        ),
        "indirizzo_segnalazioni" => array("dev@indi.it"),
        "errori" => array(
            "Non ci sono file" => 1,
            "ci sono ancora dati da elaborare e non sono passati i giorni stabiliti" => 2,
            "non sono riuscito a salvare i dati di input" => 3,
            "non sono riuscito a salvare i dati di ordinati" => 4,
            "Non sono riuscito a spostare i csv nella cartella di bkp" => 5,
            "Non ci sono dati in ordinati" => 6,
            "Non ci sono dati" => 7,
            "Non sono riuscito a creare la cartella" => 8,
            "Nessun record inserito" => 9,
            "Programma di importazione andato in errore" => 10,
            "Non riesco ad aprire la connessione ftp" => 11,
            "Non riesco ad eseguire il login al server ftp" => 12,
            "Non riesco ad eseguire l'upload di un file" => 13,
            "Non riesco ad eliminare il file sul server ftp" => 14,
            "Creazione distinta DU fallita" => 15,
            "Codici figli finiti" => 16,
            "Codici padre finiti" => 17,
            "Prenotazione fallita" => 18,
            "Nessun file prenotazione trovato" => 19,
            "Non riesco ad aggiornare la data di spedizione" => 20,
            "Creazione distinta excel fallita" => 21
        ),
        "ftp_server" => "ftp.copygraph.it",
        "ftp_user" => "antezza",
        "ftp_pass" => "7Hcqb@Z&",
        "ftp_server_poste" => "mftprod.posteitaliane.it",
        "ftp_user_poste" => "SA-0031329577",
        "ftp_pass_poste" => "pwd_SA-0031329577_LtY6b",
        "ftp_porta_poste" => "2222",
        //dati postali per elaborazione creative (ex excel)
        "campi" => array("RAGSOC" => "ragsoc", "INDIRIZZO" => "indirizzo", "CAP" => "cap", "LOCALITA" => "localita", "PROVINCIA" => "provincia", "C1" => "c1"),
        "campi_spare_du" => array("C5"),//massimo 10 elementi
        "campo_identificativo_singolo_ordinamento" => "C3",//indica qualè il campo che in ordinati_bkp differenzia un ordinamento da un altro. serve per la DU
        "peso_busta" => "17",
        "buste_min" => "235",
        "buste_max" => "300",
        "formato" => "P",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "sap" => "32500588-001",//verificato con modulo op in cartella \ANTEZZA_TIPOGRAFI\OMOLOGAZIONE_EVOLUTION\2022
        "azienda" => "FERRERO",//compare nelle etichette e nella distinta excel
        "age" => "AGE68172",
        "cmp" => "VERONA CMP",
        "cod_omologa" => "DCODM1897",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "codice_cliente" => "FBA",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "data_imp" => "",
        "prodotto" => "BASIC",
        "tipologia_prodotto" => "T",
        "codice_prodotto" => "75",//verificato sulla guida della DU
        "tipo_prodotto" => "S",
        "codice_servizio_accessorio" => "CT",//verificato con modulo op in cartella \ANTEZZA_TIPOGRAFI\OMOLOGAZIONE_EVOLUTION\2022 e guida postale per DU, tabella 2, servizio qui e ora + resi report  =  CT
        "identificativo_stampatore" => "FE",//verificato con mail all'interno della cartella z\...\ANTEZZA_TIPOGRAFI\Disney Ferrero 2022\documenti progetto
        "identificativo_servizio_pallet" => "98",//preso dalla guida etichetta pallet di POSTE
        "tara_scatola" => "200",
        "tipo" => "PICCOLO",
        "autorizzazione" => "MBPA/NPCT/CSS/0610/2017",
        "partita_iva" => "",
        "indirizzo_sede" => "",
        "telefono" => "",
        "fax" => "",
        "cap_mittente" => "12051",
        "utenza_ps_online" => "vincenzo.antezza.ferrerocommerciale",//come indicato nella mail del 5/12 16:05
        "tariffe" => array("A" => 0.4398, "B" => 0.4398, "C" => 0.4398, "D" => 0.4398, "E" => 0.4398)
    ),
    "import_file"=>array(
        "database_cliente" => "import_file",
        "ip_db" => "172.21.15.19",
        "porta_db" => "3307",//mysql nuovo
        "user_db"=>"copygraph",
        "pass_db"=>"C0pyGr@ph",
    )
);
?>