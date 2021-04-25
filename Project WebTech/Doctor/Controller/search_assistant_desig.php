<?php
        
       
            $srdesig=$_REQUEST["searchelement"];
            $dbname = "medico";
            $dbuser	= "root";
            $dbpass	= "";
            $host	= "localhost";
        
            $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
            $sql="select * from assistant where designation like '%{$srdesig}%'";
            $result= mysqli_query($conn,$sql);
            $response =  "<h1> Assistant List </h1>
            <hr>
            <table border=2 width=700> <tr> <td> ID</td> <td> Name </td> <td> Email  </td> <td> Designation </td>  <td> Gender  </td> </tr>
            ";
            
            
            while ($data = mysqli_fetch_assoc($result))
            {
            
                $response .=
                    "<tr>
                        <td>{$data['id']} </td>
                        <td> {$data['name']} </td>
                        <td> {$data['email']} </td>
                        <td> {$data['designation']} </td>
                        <td> {$data['gender']} </td>
                    </tr>
                    <br>";
                    
               
            
            }
            $response .= "</table>";
           
        echo $response;
       

?>