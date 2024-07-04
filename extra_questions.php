<?php
include("downloads.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
</head>
<style>

form{
    width:30%;
    margin:100px auto;
    padding:30px;
    border:1px solid#555
}
input{
    width:100%;
    border:1px solid#c4adad;
    display:block;
    padding:5px 10px;
}
button{
    border:none;
    padding:10px;
    
}
table{
    width:60%;
    border-collapse: collapse;
    margin:100px auto;
}
th,td{
    height:50px;
    vertical-align:center;
    border:1px solid black;
}
  </style>
<body>
   
        <div class="row">
            <table border="2" align="center"width="60%" height="30%">
                <thead>
                    <th>id</th>
                    <th>file</th>
                    <th>description</th>
                    <th>downloads</th>
          
                </thead>
                <tbody>
                    <?php
                    foreach($files as $row):;
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['file'];?></td>
                        <td><?php echo $row['description'];?></td>
                      
                        <td>
                            <a href="extra_questions.php?file_id=<?php echo $row['id']?>">Download</a>
                        </td>
                    </tr>
                    <?php
                    endforeach;?>
                </tbody>


        </table>
    </div>
    </div>
</body>
</html>