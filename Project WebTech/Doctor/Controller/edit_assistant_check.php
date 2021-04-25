<?php
        require_once('../Model/db.php');
        require_once('../Model/assistant.php');

            $id=$_GET["id"];
            $name=$_GET["name"];
            
            $assistant = [
                        'id' =>$id , 
                        'name' => $name
                        
            ];?>
            <form method ="POST" action="../Controller/edit_assistant_final.php">
            Assistant ID <br><input type ="text" name="idn" value=<?php  echo $assistant['id']; ?>> </input> <br>
            Assistant Current Name <br> <input type ="text" name="crname"value=<?php echo $name; ?>> </input> <br>
            
            Assistant New Name <br> <input type ="text" name="newname" > </input> <br>
            Assistant New Email <br> <input type ="text" name="email"> </input> <br>
            Assistant New Designation <br>  <select id="desig1" name="desig">
                                            <option value=""> </option>
                                            <option value="Nurst">Nurse</option>
                                            <option value="Word Boy">Word Boy</option>
                                            <option value="OT Assistant">OT Assistant</option>
                                            <option value="Research Assistant">Research Assistant</option>
                                            <option value="Lab Assistant">Lab Assistant</option>
                                      
                                        </select> <br>
            Assistant New Gender <br> <input type ="text" name="gender"> </input> <br>
            Product New Buying Price <br> <input type ="submit" value="Submit"> </input> <br>
            </form>
            