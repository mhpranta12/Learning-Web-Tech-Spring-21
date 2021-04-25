<?php  
    include_once('../Model/db.php');
    include_once('../Partial View/header.php');
    include_once("../Model/serviceModel.php");
?>



<html>
    <head>
        <script>
    //Add bill 
            function addRow()
            {
                
                let iteration  = 1;
                let service = document.getElementById('service').value;
                let cost = document.getElementById('cost').value;
                let sessions = document.getElementById('sessions').value;
                let total = cost * sessions;
                var subtotals = [];
               

                let table = document.getElementsByTagName('table')[0];

                let newRow = table.insertRow(0);

                let cell1 = newRow.insertCell(0);
                let cell2 = newRow.insertCell(1);
                let cell3 = newRow.insertCell(2);
                let cell4 = newRow.insertCell(3);
                let cell5 = newRow.insertCell(4);
              

                cell1.innerHTML = "#";
                cell2.innerHTML = service;
                cell3.innerHTML = cost;
                cell4.innerHTML = sessions;
                cell5.innerHTML = total;

                let orderTable_length = table.rows.length;

                for(let i=0; i<orderTable_length-1; i++)
                {
                    subtotals[i] += total;
                }
            

                let subtotal_field = document.getElementById('txtSubTotal');
                subtotal_field.innerHTML = subtotals;
                for(let i=0; i<orderTable_length-1; i++)
                {
                    console.log(subtotals);
                }

                
                
            }
           
    </script>
        
    </head>
    <body>
        
    </body>
</html>

<div class="content-wraper">
        <section class="content-header">
            <h1>Add Bill <small></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>New Bill</a></li>
                <li class="active"></li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="box box-warning">
                <form action="../Controller/billController.php" method="POST">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Bill</div>
                    </div>

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Patient ID</label>
                                <input type="number" class="form-control" name="P_ID" placeholder="Enter Patient ID">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="datetime-local" class="form-control" name="date">
                            </div>

                        </div>






                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Subtotal</label>
                                    <input type="number" class="form-control" name="txtSubTotal" id="txtSubTotal">
                                </div>

                                <div class="form-group">
                                    <label for="">Vat (5%)</label>
                                    <input type="number" class="form-control" name="txtVat">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Discount</label>
                                    <input type="number" class="form-control" name="txtDiscount">
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" id="total_cost">Total</label>
                                    <input type="number" class="form-control" name="txtTotal">
                                </div>

                                <div class="form-group">
                                    <label for="">Paid</label>
                                    <input type="number" class="form-control" name="txtPaid">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Due</label>
                                    <input type="number" class="form-control" name="txtDue">
                                </div>
                                

                            </div>



                            <hr>
                            

                            <div align="center">
                                <input type="submit" name="btnSaveBill" value="Save Bill" class="btn btn-info"> 
                            </div>

                            <hr>

                        </div>



                        <div class="box-body">
                            <div class="col-md-12">
                               
                                <table class="table table-striped" id="orderTable"> 
                                    <thead>
                                        <tr>
                                            <td><br>#</th>
                                            <td>Service<br><input type="text" name="service[]" id="service"></td>
                                            <td>Cost<br><input type="text" name="cost" id="cost"></td>
                                             <td>Sessions<br><input type="text" name="sessions" id="sessions"></th>   
                                             <th>Total
                                                <br><input type="text" name="total" id="total" readonly="true">
                                             </td> 
                                              <td>
                                                  <br>
                                                  <button type="button" name="add" onclick="return addRow();" class="btn btn-success btn-sm btnAdd">Add</button>
                                              </td>          
                                        </tr>
                                    </thead>
                                </table>
                        </div>



                        </div>

                    </div>
                        
                </form>
            </div>
        </section>

</div>




