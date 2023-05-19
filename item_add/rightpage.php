<?php
include("../side_menu.php");
// $del_id=0;
// $i=0;
require("../db.class.php");
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
    <head>


       </head>


        <style type="text/css">
          .form-control
          {
            width: 60%;
          }
          .card .category, .card label {
            font-size: 14px;
           font-weight: 400;
           color: black;
           margin-bottom: 20px;
           }

        .card-header {
            margin-bottom: 40px;
            background: red;
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
          margin: 50px;



        }

        td {
          padding: 10px;
          vertical-align: middle;
        }

        label {
          display: inline-block;
          color: black;
          width: 100%;
          max-width: 120px;
          
          font-weight: bold;
          
        }

        input[type="text"],
        textarea,
        select {
          width: 60%;
          padding: 8px;
          border-radius: 5px;
          border: 1px solid #ccc;
          box-sizing: border-box;
          font-size: 16px;
        }

        input[type="number"] {
          width: 60%;
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
          margin-bottom: 20px;

        }
        .bu{
        margin-left: 35%;

        }

        button[type="submit"]:hover {
          background-color: #3e8
        </style>
        <div class="card">
          <div class="card-header">
            <center><h2>Item Adding Form</h2></center>
          </div>
          <div class="card-body">
            <form action="add.php" method="post">
              <table>
                <tr>
                  <td><label for="name">Item Name:</label></td>
                  <td><input type="text" id="name" name="item_name" required></td>
              <!--  </tr>
                <tr>-->
                  <td><label for="description">Description:</label></td>
                  <td><textarea id="description" name="desc"></textarea required></td>
                </tr>   
                <tr>
                  <td><label for="category">Category:</label></td>
                  <td>
                    <select id="category" name="category" required>
                      <option value="electronics">Electronics</option>
                      <option value="clothing">Clothing</option>
                      <option value="books">Books</option>
                    </select>
                  </td>
               <!--  </tr>
                <tr>-->
                  <td><label for="price">Price:</label></td>
                  <td><input type="number" id="price" name="price" required></td>
                </tr>
                <tr>
                  <td><label for="quantity">Quantity:</label></td>
                  <td><input type="number" id="quantity" name="quantity" required></td>
               <!--  </tr>
                <tr>-->
                  <td><label for="image">Image:</label></td>
                  <td><input class="form-control" type="file" id="image" name="image"  required></td>
                </tr>
                <tr>
                  
                    
                    </script>
                </tr>
              </table>
         <div class="bu"><button style="border-radius: 20px; background: #67d952 ;" type="submit" name="enter">Add Item</button>
                <button style="border-radius: 20px; background: #526dd9;" type="reset" name="enter">Clear Item</button></div>




            </form>
          </div>
        </div>


 