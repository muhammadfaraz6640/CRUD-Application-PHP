<DOCTYPE!>
<?php
include("connection.php");
include("function.php");
?>
<html>
    <head>
        <title>Database operation</title>
        <link rel = "stylesheet" href= "STYLE.css" media = "all">
    </head>
    <body>
        <div class = "heading">
            INSERT UPDATE DELETE AND SEARCH
        </div>
         <div class = "container">
            <form class = "form" action = "" method = "GET">
                ID : <input type = "number" name = "id" placeholder = "ID" ><br />
                NAME : <input type = "text" name = "Name" placeholder = "NAME" class="name"><br />
                EMAIL : <input type = "text" name = "Email" placeholder = "E-MAIL" ><br />
                PASSWORD : <input type = "text" name = "Pass" placeholder = "PASSWORD" ><br />
                DATE OF BIRTH : <input type = "date" name = "dob" placeholder = "ID" >        <br />        
                GENDER : <select id="gender" name="Gender"><br />
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>                    
                    </select>
                    <input type = "submit" name = "insert" value = "Insert" >  
                    <input type = "submit" name = "get_dat" value = "Search" > 
                    <input type = "submit" name = "Delete" value = "Delete" > 
                    <input type = "submit" name = "update" value = "Update" > 
                    <?php
            if(isset($_GET['insert']))
            {
            insert($con);    
            }
            if(isset($_GET['get_dat']))
            {
            get_data($con);    
            }
?>        
            
               
                <?php
     if(isset($_GET['Delete']))
     {
        Delete($con);    
     }
     if(isset($_GET['update']))
     {
     Update($con);
     }
?>        
        </form>    
         </div>         
        

    </body>


</html>
