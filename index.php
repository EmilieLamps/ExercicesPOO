<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Employe.php';
$francois = new Employe('2020','François','G','1900','M','5000');
$emilie = new Employe('2021','Emilie','L','1900','F','10000');
?>
<p><?= $francois ?></p>
<p><?= $emilie ?></p>
