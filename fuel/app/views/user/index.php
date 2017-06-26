<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User</title>
        <script type="text/javascript">
            function add_row() {
                var user_table = document.getElementById("usertable");
                var row_count = user_table.rows.length;
                var row = user_table.insertRow(row_count);
                row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);

                cell2.innerHTML = "<input type='text' name='fullname' />";
                cell3.innerHTML = "<input type='text' name='username' />";
                cell4.innerHTML = "<input type='text' name='password' />";
                cell5.innerHTML = "<input type='submit' name='add' value='ADD' />";
                
                
                document.getElementById('addrow').style.visibility = 'hidden';
            }
        </script>
    </head>
    <body>
        <form action="user/douser" method="get">
            <table id="usertable" border="1">
                <thead>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    <?php foreach($list_users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['fullname']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td><a href="users/del?id=<?php echo $user['id']; ?>">Del</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        
        <button id="addrow" style="margin-top: 20px" onclick="add_row()">Add Row</button>
    </body>
</html>
