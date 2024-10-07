<?php
    # -------------------------------------------------------------------------------------------- #
    # This file contains the database connection and other configuration parameters
    # Este fichero contiene la conexión a la base de datos y la configuración de otros parámetros
    # -------------------------------------------------------------------------------------------- #

    # -- DataBase Configuration --
    const DB = "ilerna";
    const SERVER = "localhost";
    const USER = "root";
    const PASS = "Vanguard7##";


    # -- Sentence to connect with DB (DBMS) and Security (Hash and Encryption)
    const DBMS = "mysql:host=".SERVER.";dbname=".DB;
    const METHOD = "AES-256-CBC"; # Metodo para pasar las contraseñas por hash y encriptación
    const SECRET_KEY = '$PropMng@2024';
    const SECRET_IV = '19680622';