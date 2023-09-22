<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    /* Form Styles */
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        margin-right: 20px; /* Move the form to the right */
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="hidden"],
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    input[type="hidden"],
    input[type="text"],
    select {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    select {
        background-color: #fff;
    }

   

    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Table Styles */
    table {
        width: 80%; /* Adjust the table width as needed */
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 12px;
        text-align: left;
        font-size: 14px;
    }

    th {
        background-color: violet;
        color: #fff;
    }

    /* Table Actions */
    .action-links {
        text-decoration: none;
        margin-right: 10px;
        color: #007BFF;
        font-weight: bold;
    }

    /* Highlighted Row */
    tr:hover {
        background-color: #f2f2f2;
    }
</style>


</head>
<body>
<form action="/save" method="post">

<label>ProductName</label>
<input type="hidden" name="id">
<input type="text" name="ProductName" placeholder="ProductName">
<br>
<label>ProductDescription</label>
<input type="text" name="ProductDescription" placeholder="ProductDescription">
<br>
<label>ProductCategory</label>
<select name="ProductCategory">
            <br>
            <option value="Drinks">Drinks</option>
            <option value="Foods">Foods</option>
        </select>
<br>
<label>ProductQuantity</label>
<input type="text" name="ProductQuantity" placeholder="ProductQuantity">
<br>
<label>ProductPrice</label>
<input type="text" name="ProductPrice" placeholder="ProductPrice">
<br>
<input type="submit" value="save">
</form>
<table border="1">
    <tr>
        <th>id </th>
        <th>ProductName </th>
        <th>ProductDescription </th>
        <th>ProductCategory </th>
        <th>ProductQuantity </th>
        <th>ProductPrice </th>
        <th>Action </th>
   

</tr>
<?php foreach ($product as $pr):?>
    <tr>
    <td><?= $pr ['id']?></td>
        <td><?= $pr ['ProductName']?></td>
        <td><?= $pr ['ProductDescription']?></td>
        <td><?= $pr ['ProductCategory']?></td>
        <td><?= $pr ['ProductQuantity']?></td>
        <td><?= $pr ['ProductPrice']?></td>
        <td>
        <a href="/delete/<?= $pr['id'] ?>"> delete</a> 
         <a href="/edit/<?= $pr['id'] ?>"> edit</a>
        </td>
     
  </tr>
<?php endforeach;?>

        


</table>
</body>
</html>