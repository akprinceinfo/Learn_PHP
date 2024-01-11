
      <!-- =============== Php use================= -->
         <?php 
         
            if(isset($_POST['submit'])){
               $fname = $_POST['fname'];
               $lname = $_POST['lname'];
               $email = $_POST['email'];
               $birthday = $_POST['birthday'];
               $cars = $_POST['cars'];

               $error = [];

               if(empty($fname)){
                  $error['fname'] = "Please, Insert Your fname.";
               };
               if(empty($fname)){
                  $error['lname'] = "Please, Insert Your lname.";
               };
               if(empty($fname)){
                  $error['email'] = "Please, Insert Your email.";
               };
               if(empty($fname)){
                  $error['birthday'] = "Please, Insert Your birthday.";
               };
               if(empty($cars)){
                  $error['cars'] = "Please, Insert Your cars.";
               };

            }
         
         ?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel ="stylesheet" href="style.css">
   </head>
   <body>
      <div class="container">
         <form action="" method="POST">
          <fieldset>
              <legend> Personalia: </legend>
              <label for="fname">First name:</label>
              <input type="text" id="fname" name="fname" value="<?php 
                  if(isset($fname)) { echo $fname;}
              ?>"  >

              <span style ="color:red">
               <?php 
                if(isset($error['fname'])){
                  echo $error['fname'];
                }
              ?>
              </span>
               <br><br>       
              <label for="lname">Last name:</label>
              <input type="text" id="lname" name="lname" value="<?php 
                  if(isset($fname)) { echo $fname;}
              ?>">
                <span style ="color:red">
               <?php 
                if(isset($error['lname'])){
                  echo $error['lname'];
                }
              ?>
              </span>
              <br><br>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" value="<?php 
                  if(isset($email)) { echo $email;}
              ?>">
                <span style ="color:red">
               <?php 
                if(isset($error['email'])){
                  echo $error['email'];
                }
              ?>
              </span>
              <br><br>
              <label for="birthday">Birthday:</label>
              <input type="date" id="birthday" name="birthday" value="<?php 
                  if(isset($birthday)) { echo $birthday;}
              ?>">
                <span style ="color:red">
               <?php 
                if(isset($error['birthday'])){
                  echo $error['birthday'];
                }
              ?>
              </span>
              <br><br>
              <label for="cars">Choose a car:</label>
              <select id="cars" name="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
              </select><br><br>
              <input class="btn" type="submit" value="Submit" name="submit">
            </fieldset>
        </form>
      </div>

                <table>
                  <tr>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Email</th>
                     <th>Date</th>
                     <th>cars</th>
                  </tr>
                  <tr>
                     <td><?php echo $fname ;?></td>
                     <td> <?php echo $lname ; ?></td>
                     <td> <?php echo $email;?> </td>
                     <td> <?php echo $birthday ;?></td>
                     <td> <?php echo $cars ;?></td>
                  </tr>
                </table>

   </body>
</html>