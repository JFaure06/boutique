<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 14/02/19
 * Time: 13:18
 */

session_start();



include_once 'Include/functions.php';
include_once 'Include/function_Database.php';


$db = MaConnexion();
$var = GetProduits($db);

