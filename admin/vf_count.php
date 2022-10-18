<?php
                 $sql = "SELECT * FROM voters WHERE status = 'voted'";
                 $query = mysqli_query($conn, $sql);
                 $result1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
                 ?>