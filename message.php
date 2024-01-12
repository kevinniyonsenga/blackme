<?php

include("form.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="usercontrol.css">

    <title>message</title>
</head>
<body>
<i class='bx bxs-universal-access'></i>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="border.php">
                 <i class='bx bxs-no-entry'></i>
                    <span class="text">border control</span>
                </a>
            </li>
            <li  >
                <a href="usercontrol.php">
                    <i class='bx bxs-contact'></i>
                    <span class="text">user control</span>
                </a>
            </li>
            <li class="active">
                <a href="message.php">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="text">Message</span>
                </a>
            </li>
                          <li>
                <a href="adduser.php">
                    <i class='bx bxs-group' ></i>
                    <span class="text">add user</span>
                </a>
            </li>
        
        </ul>
        <ul class="side-menu">
         
            <li>
                <a href="attention.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="message.php" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">.</span>
            </a>
            <a href="#" class="profile">
                <img src="PIC/logo.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            

            <div class="table-data">
                <div class="order">
                    
                    <table >
                        <thead >
                            <tr>
                                <th>ID</th>
                                <th>full name</th>
                                <th>email</th>
                                <th>subject</th>
                                <th>message</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                         
                        <?php  
                       $sql="select * from contact";
                        $result=mysqli_query($con,$sql);
                     if($result){
                       while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $fname=$row['fullname'];
                        $email=$row['email'];
                        $subject=$row['subject'];
                        $message=$row['message'];
                        echo '<tr >
                        <td> '.$id.'</td>
                    <td>'.$fname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$subject.'</td> 
                    <td>'.$message.'</td>
                    

                   
                            </tr>';
                       }
                    
                     }
                     
                    ?>
                   
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    

    <script src="dashboard.js"></script>
</body>
</html>