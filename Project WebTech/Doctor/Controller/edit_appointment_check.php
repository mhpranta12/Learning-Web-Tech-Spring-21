<?php
        require_once('../Model/db.php');
        require_once('../Model/appointments.php');

            $serial=$_GET["serial"];
            $name=$_GET["name"];
            
            $appoinment = [
                        'serial' =>$serial , 
                        'name' => $name
                        
            ];?>
            <form method ="POST" action="../Controller/edit_appointment_check_final.php">
            Appoinment serial <br><input type ="text" name="serial" value=<?php  echo $appoinment['serial']; ?>> </input> <br>
            Patient's Current Name <br> <input type ="text" name="crname"value=<?php echo $name; ?>> </input> <br>
            New appoinment serial <br><input type ="text" name="newserial" > </input> <br>
            Patient's New Name <br> <input type ="text" name="newname" > </input> <br>
            Patient's New Problem <br> <input type ="text" name="problem" > </input> <br>
            Patient's New Phone <br> <input type ="text" name="phone" > </input> <br>
            
            
            Patient's New Gender <br> <input type ="text" name="gender"> </input> <br>
             <input type ="submit" value="Submit"> </input> <br>
            </form>
            <a href="../View/dashboard.php"> <input type="button" class="btn" value="Dashboard">  </a>