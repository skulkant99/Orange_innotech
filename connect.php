<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
</head>
<?php


    // $servername = "DESKTOP-BRUSVS6"; //​กำ​หนดชื่อ​ server ​เป็น​ชื่อเครื่องตัวเอง
    // $databasename = "Zmico_Asset"; //​กำ​หนดชื่อ​ database ​บน​ Microsoft SQL
    // $user = "DESKTOP-BRUSVS6\somsakul"; //​กำ​หนดชื่อ​ user name ​ปล่อยว่างเอา​ไว้
    // // $user = "admin_cloud"; //​กำ​หนดชื่อ​ user name ​ปล่อยว่างเอา​ไว้
    // $pass =""; //​กำ​หนด​ password ​ปล่อยว่างเอา​ไว้
    // // $pass ="eniqwER1234!@#$"; //​กำ​หนด​ password ​ปล่อยว่างเอา​ไว้
    // $connection_string = "DRIVER={SQL Server};SERVER=$servername;DATABASE=$databasename;AutoTranslate=no"; //​เป็น​การกำ​หนด​ connection string ​ใน​การ​ connect ODBC
    // $conn = odbc_connect($connection_string,$user, $pass) or die ("Can't connect database");
    // print_r($conn);

    // $serverName = "192.168.1.5:1433";
        // $serverName ="DESKTOP-BRUSVS6,1433";
        // $userName = "DESKTOP-BRUSVS6\somsakul";
        // $userPassword = "";
        // $dbName = "Zmico_Asset";
        
        // $connectionInfo = array("Database"=>$dbName, 
        //                         "UID"=>$userName, 
        //                         "PWD"=>$userPassword, 
        //                         "ReturnDatesAsStrings"=>true,
        //                         "CharacterSet"=>"utf-8");
        
        // $conn = sqlsrv_connect( $serverName, $connectionInfo);
        //     if( $conn === false ) {
        //         die( print_r( sqlsrv_errors(), true));
        //     }
        //     else{
        //         echo "Database Connected.";
        //     }
        
        // sqlsrv_close($conn);

        /* Specify the server and connection string attributes. */  
            $serverName = "(local)";  
            $connectionInfo = array( "Database"=>"Zmico_Asset",
                                     "MultipleActiveResultSets"=>true,
                                     "CharacterSet" => "UTF-8");  
            
            /* Connect using Windows Authentication. */  
            $conn = sqlsrv_connect( $serverName, $connectionInfo);  
           
            if( $conn === false )  
            {  
                echo "Unable to connect.</br>";  
                die( print_r( sqlsrv_errors(), true));  
            }

            $sql = "SELECT TOP (10) * from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF ";   
            $stmt  = sqlsrv_query($conn, $sql);
            $result = array();
    
            while ($row = sqlsrv_fetch_array($stmt , SQLSRV_FETCH_NUMERIC)){
                $result = array_merge( $result, array_values($row));
               
            }
            // print_r($result);
           
            sqlsrv_free_stmt($stmt);
          
            echo (json_encode( [ 'data' => $result ] )); 
        
            // $serverName = "192.168.100.5";  
  
            // /* Get UID and PWD from application-specific files.  */  
            // $uid = "Orange";  
            // $pwd = "Orange$999";  
            // $connectionInfo = array( "UID"=>$uid,  
            //                          "PWD"=>$pwd,  
            //                          "Database"=>"Zmico_Asset");  
            
            // /* Connect using SQL Server Authentication. */  
            // $conn = sqlsrv_connect( $serverName, $connectionInfo);  
            // if( $conn === false )  
            // {  
            //     echo "Unable to connect.</br>";  
            //     die( print_r( sqlsrv_errors(), true));  
            // }  
            
            // /* Query SQL Server for the login of the user accessing the  
            // database. */ 
            // $sql = "SELECT TOP (10) * from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF ";   
            // $stmt  = sqlsrv_query($conn, $sql);
            // $result = array();
    
            // while ($row = sqlsrv_fetch_array($stmt , SQLSRV_FETCH_NUMERIC)){
            //     $result = array_merge( $result, array_values($row));
               
            // }
            // // print_r($result);
           
            // sqlsrv_free_stmt($stmt);
          
            // echo (json_encode( [ 'data' => $result ] )); 

            // $serverName = "SEAMICOASSETSQL";
            // $dbName = "Zmico_Asset";
            // $u = "Orange";
            // $p = "Orange$999";

            // try
            // {

            // $conn = new PDO( "sqlsrv:server=$serverName;Database=$dbName", $u, $p );
            // $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            // $conn->setAttribute( PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_UTF8 );
            // }
            // catch(Exception $e)
            // { 
            // die( print_r( $e->getMessage() ) ); 
            // }


            // try
            // {

            // $sql = " SELECT * from M_FUND ";
            // $stmt = $conn->prepare($sql);
            // $stmt->execute();

            // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // $CountRow = count($row);

            // echo $CountRow."<br>";

            // if($CountRow > 0)
            // {
            // foreach($row as $r )
            // {
            //     echo $r['StrFundShortName'];
            // }
            // }
            // }catch(Exception $e)
            // { 
            // die( print_r( $e->getMessage() ) ); 
            // }

            // $conn = null;
        

                // $serverName = "164.115.26.124";
                // $dbName = "GinDb";
                // $u = "sa";
                // $p = "qwaszx";

                // try
                // {

                // $conn = new PDO( "sqlsrv:server=$serverName;Database=$dbName", $u, $p );
                // $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                // $conn->setAttribute( PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_UTF8 );
                // }
                // catch(Exception $e)
                // { 
                // die( print_r( $e->getMessage() ) ); 
                // }


                // try
                // {

                // $sql = " SELECT * from amphur ";
                // $stmt = $conn->prepare($sql);
                // $stmt->execute();

                // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // $CountRow = count($row);

                // echo $CountRow."<br>";

                // if($CountRow > 0)
                // {
                // foreach($row as $r )
                // {
                // echo $r['AMPHUR_NAME'];
                // }
                // }
                // }catch(Exception $e)
                // { 
                // die( print_r( $e->getMessage() ) ); 
                // }

                // $conn = null;

?>

</html>
