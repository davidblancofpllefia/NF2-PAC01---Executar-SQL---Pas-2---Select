<?php

        require("class.user.select.php");
        require("class.pdofactory.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $objUser = new User($objPDO, 1);
        echo "Primer usuario: <br />";
        echo "ID: " . $objUser->getID() . "<br />";
        echo "Nombre: " . $objUser->getFirstName() . "<br />";
        echo "Apellido: " . $objUser->getLastName() . "<br />";
        echo "Contraseña: " . $objUser->getUsername() . "<br />";
        echo "Nombre de usuario: " . $objUser->getPassword() . "<br />";
        echo "Correo electrónico: " . $objUser->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser->getTimeLastLogin() . "<br />";
        echo "Fecha creación de cuenta: " . $objUser->getDateAccountCreated() . "<br />";
        echo "Hora creación de cuenta: " . $objUser->getTimeAccountCreated() . "<br/><br/>";
        
        $objUser2 = new User($objPDO, 2);
        echo "Segundo usuario: <br/>";
        echo "ID: " . $objUser2->getID() . "<br/>";
        echo "Nombre: " . $objUser2->getFirstName() . "<br />";
        echo "Apellido: " . $objUser2->getLastName() . "<br />";
        echo "Contraseña: " . $objUser2->getUsername() . "<br />";
        echo "Nombre de usuario: " . $objUser2->getPassword() . "<br />";
        echo "Correo electrónico: " . $objUser2->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser2->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser2->getTimeLastLogin() . "<br />";
        echo "Fecha creación de cuenta: " . $objUser2->getDateAccountCreated() . "<br />";
        echo "Hora creación de cuenta: " . $objUser2->getTimeAccountCreated() . "<br/><br/>";
        
        $objUser3 = new User($objPDO, 3);
        echo "Tercer usuario: <br />";
        echo "ID: " . $objUser3->getID() . "<br />";
        echo "Nombre: " . $objUser3->getFirstName() . "<br />";
        echo "Apellido: " . $objUser3->getLastName() . "<br />";
        echo "Contraseña: " . $objUser3->getUsername() . "<br />";
        echo "Nombre de usuario: " . $objUser3->getPassword() . "<br />";
        echo "Correo electrónico: " . $objUser3->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser3->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser3->getTimeLastLogin() . "<br />";
        echo "Fecha creación de cuenta: " . $objUser3->getDateAccountCreated() . "<br />";
        echo "Hora creación de cuenta: " . $objUser3->getTimeAccountCreated() . "<br/><br/>";
        
        
        



?>
