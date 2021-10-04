<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>TODO-OUT</title>
</head>
<body>

<div class="container">
    <table class="table" id="myTable">
        <tbody>

        <div>

            <tr >
                <th>WHERE</th>
                <th>TODO</th>


            </tr>
        </div>
        <br><br>
        <?php foreach($input->getRecords() as $record):?>
            <tr>
                <th scope ="row"><?php echo $record['name'];?></th>
                <td><?php echo $record['comments'];?></td>
                <th><u>Delete</th>


            </tr>
        <?php endforeach;?>
        </tbody>



    </table>
</div>

</body>
</html>
