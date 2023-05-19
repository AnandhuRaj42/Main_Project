<?php
include("../side_menu.php");
// $del_id=0;
// $i=0;
require("../db.class.php");
$ob=new db_operations();
?>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="datatables.min.css">
    <script type="text/javascript" src="datatables.min.js"></script>
    <script type="text/javascript" charset="utf-8">

      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
      
  <!--<script>
        function displayOption() {
                  var checkboxes = document.getElementsByClassName('checkbox');
                  var option = document.getElementById('option');
            
            if (option.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].style.display = 'block';
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].style.display = 'none';
                }
            }
        }
    </script>-->
<script type="text/javascript">
     function showCheckboxes() {
    // Get the option select element and checkbox container element
    var optionSelect = document.getElementById('optionSelect');
    var checkboxContainer = document.getElementById('checkboxContainer');

    // Clear the checkbox container
    checkboxContainer.innerHTML = '';

    // Get the selected option value
    var selectedOption = optionSelect.value;

    // Display checkboxes based on the selected option
    if (selectedOption === 'computer') {
      
      //checkboxContainer.innerHTML = 'mouse&nbsp;&nbsp;<input type="checkbox" name="mouse" value="mouse"> &nbsp;&nbsp;printer&nbsp;&nbsp; <input type="checkbox" name="printer" value="printer">&nbsp;&nbsp;  Other&nbsp;&nbsp;<input  type="checkbox" id="myCheckbox" onclick="showTextbox()">';

    } else if (selectedOption === 'keyboard') {
     
           
      //checkboxContainer.innerHTML = 'Mechanical&nbsp;&nbsp;<input type="checkbox" name="mouse" value="mouse"> &nbsp;&nbsp;Basic&nbsp;&nbsp; <input type="checkbox" name="printer" value="printer">&nbsp;&nbsp;  Other&nbsp;&nbsp;<input  type="checkbox" id="myCheckbox" onclick="showTextbox()">';


    } else if (selectedOption === 'mouse') {
           
     //checkboxContainer.innerHTML = 'Wired&nbsp;&nbsp;<input type="checkbox" name="mouse" value="mouse"> &nbsp;&nbsp; wireless&nbsp;&nbsp; <input type="checkbox" name="printer" value="printer">&nbsp;&nbsp;  Other&nbsp;&nbsp;<input  type="checkbox" id="myCheckbox" onclick="showTextbox()">';

    }
    else if (selectedOption ==='printer') {

      //checkboxContainer.innerHTML = 'colour&nbsp;&nbsp;<input type="checkbox" name="mouse" value="mouse"> &nbsp;&nbsp;Basic&nbsp;&nbsp; <input type="checkbox" name="printer" value="printer">&nbsp;&nbsp;  Other&nbsp;&nbsp;<input  type="checkbox" id="myCheckbox" onclick="showTextbox()">';
    }
  }


  

     function showTextbox() {
    
    // Get the checkbox and textbox elements
    var myCheckbox = document.getElementById('myCheckbox');
    var myTextbox = document.getElementById('myTextbox');

    var checkboxContainer = document.getElementById('des');

    // Clear the checkbox container
    checkboxContainer.innerHTML = '';

    // Check if the checkbox is checked
    if (myCheckbox.checked) {
      // Display the textbox
      checkboxContainer.innerHTML = '<textarea name="" placeholder="Enter other specs...">';
    } else {
      // Hide the textbox
      myTextbox.style.display = 'none';
    }




  }




const container = document.getElementById('input-cont');

        // Call addInput() function on button click
        function addInput(){
            let input = document.createElement('input');
            input.placeholder = 'Type something';
            container.appendChild(input);
        }
    
   </script>

    <script type="text/javascript">
        $(document).ready(function(){
        var html ='<tr><td><input type="text" id="" name="spec_type[]" required></td><td><input type="text" id="" name="spec[]" required></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="remove"></td></tr>';
        var max=4;
        var x= 1;
        $("#add").click(function(){

          if( x <= max)
          {
          $("#table_field").append(html);
           x++;
           }
        });


       $("#table_field").on('click','#remove',function(){
          $(this).closest('tr').remove();
          //x--;
        });


        })
    </script>

    
<style type="text/css">
          
          .form-control
          {
            width: 40%;
          }

     .card .category, .card label {
            font-size: 14px;
           font-weight: 400;
           color: black;
           margin-bottom: 0px;
           }

        .card-header {
                   margin-bottom: 10px;
                   }

          .ca{
          border-bottom: 1px solid #ccc;
          padding-bottom: 10px;


           }

         .card-header h2 {
         margin: 0;
        background: #ddd ;

         }
        .card-body
        {
         background:white;
        }

      table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      }

      td {
      padding: 10px;
      vertical-align: middle;
      }

      label {
      display: inline-block;
      width: 100%;
      max-width: 120px;
      margin-right: 10px;
      font-weight: bold;

      }

     input[type="text"],
    textarea,
    select {
      width: 50%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
    }

    input[type="number"] {
      width: 50%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
    }

    button[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    button{
        padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="date"]
    {
      color :red;
      width: 50%;
    }
      input[type="file"]
    {
      color :red;
      width: 70%;
    }
     .bu{
        margin-left: 35%;

        }

     embed{
        border: 2px solid black;
       height: 70vh;
       width: 150vh;

      }


    button[type="submit"]:hover {
      background-color: #3e8
    </style>
   <div class="card">
   <div class="card-header">
          <center><h2>Item Adding Form</h2></center>
   </div>
   <div class="card-body">
    <form action="update.php" method="post">
      <table> 
        <tr>
          <td><label for="category"><font>Select Item:</font></label></td>
          <td>
           <!-- <input type="text" name="query" id="search-input">
           <button type="button" onclick="search()">Search</button>-->

                 <select  name="item_name"  id="optionSelect" onchange="showCheckboxes()" required>
                  <option>Select Option</option>
                <?php 
                    $contryData="SELECT item_id,item_name  from tbl_item";
                    $result=$ob->db_read($contryData);
                
                    if(mysqli_num_rows($result)>0)
                      {
                      while($arr=mysqli_fetch_assoc($result))
                            {

                             ?>

                         <option id="item" value="<?php echo $arr['item_name']; ?>"> 
                          <?php echo $arr['item_name']; ?>
                           
                         </option>
                    <?php }} ?>
                </select>

          
               <!--<input type="submit" name="submit">-->
      
                   </td>
          
               <td><label for="price">Price:</label></td>
              <td><input type="number" id="price" name="price" required></td>
              </tr>
               <tr>
               <td><label for="quantity">Quantity:</label></td>
               <td><input type="number" id="quantity" name="quantity" required></td>
               <div>
                <td><label for="description">Specification:</label></td>
                 <td>  
                  <!-- Checkbox container 
                  <div id="checkboxContainer"></div>
                    </td>
                    <tr>
                      <td></td>
                    <td>  
                   Checkbox container -->

       
           <table border="" class="table_field" id="table_field" style="text-align:center;" width="10">
            <tr>
              <th style="text-align:center;">Specification Type</th>
              <th  style="text-align:center;">Specification</th>
            </tr>
            <tr><td><input type="text" id="" name="spec_type[]" required></td>
              <td><input type="text" id="" name="spec[]" required></td>
              <td><input class="btn btn-warning" type="button" id="add" name="addd" value="Add"></td></tr>
           </table>
          
           <!-- <input class="btn btn-success" type="button" id="save" name="save" value="Save Data">-->






                 <!-- <div id="des"></div>-->
                    </td>
                  </tr>
        </tr>  </div>
         <tr>
                <td><label for="description">Warranty Upto:</label></td>
                <td><Input type="date" id="warranty" name="warranty" required></td>
      
               <!--<td><label for="image">Image:</label></td>
               <td><input class="form-control" type="file" id="image" name="image" required></td>-->
               <td><label for="image">Location:</label></td>
               <td><input class="form-control" type="text" id="loc" name="loc"required></td>
               
        </tr>
        <tr>
              <!--   <td></td><td colspan="3"><button type="submit" name="enter" style="border-radius: 20px; background: linear-gradient(to bottom left, #33ccff 0%, #00ff00 100%);">Add Item</button>-->
            
                 
        </tr>
      </table>
       <div class="bu">
        <button  style="border-radius: 20px;background: #67d952 ;" type="submit" name="enter">Add Item</button>


                <button style="border-radius: 20px; background: #526dd9;" type="reset" name="enter">Clear Item</button></div>
    </form>
  </div>
</div>

<!--Next page  -->




<!--  <div class="card">
   <div class="card-header">
          <center><h2>Item Invoice Details</h2></center>
   </div>
                


       <div class="bu"><button style="border-radius: 20px;background: #67d952 ;" type="submit" name="enter">Add Item</button>
                <button style="border-radius: 20px; background: #526dd9;" type="reset" name="enter">Clear Item</button></div>
    </form>
  </div>
</div>-->

 