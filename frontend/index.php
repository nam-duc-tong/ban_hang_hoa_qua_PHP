<?php
    require_once('../db/dbhelper.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        thead tr td{
           font-weight: bold; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading" style="font-weight: bold; margin-bottom:10px;">
                <h2 class="text-center">Quản Lý Danh Mục</h2>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                <thead>
                     <tr>
                         <th width="50px">STT</th>
                         <th>Tên Danh Mục</th>
                         
                     </tr>
                </thead>
                <tbody>
                     <?php
                            //lay danh sach danh muc tu database
                            $sql = 'select * from category';
                            $categoryList = executeResult($sql);
                            $index = 1;
                            foreach($categoryList as $item){
                                echo '<tr>
                                     <td>'.($index++).'</td>
                                     <td><a href="category.php?id='.$item['id'].'">'.$item['name'].'</a></td>                                   
                                 </tr>';
                            }
                        ?>                     
                    </tbody>
                </table>
           </div>
        </div>
    </div>
</body>
</html>