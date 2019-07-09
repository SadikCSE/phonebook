<?php
include_once 'include/header.php'
?>
    <div class="continer">
        <table border="1" style="border-collapse: collapse" cellpadding="10">
            <tr>
                <th>SL NO</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>ACTION</th>
            </tr>
            <tr>
                <th>1</th>
                <th>SADI</th>
                <th>01911-183181</th>
                <th><a href ="edit-contact.php">Edit</a> | <a href ="delete-contact.php">Delete</a> </th>
            </tr>
        </table>
        <p><a href="add-contact.php">Add Contact</a> </p>
    </div>

<?php
include_once 'include/footer.php'
?>