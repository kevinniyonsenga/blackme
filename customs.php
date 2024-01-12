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

    <title>customs</title>
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
             <li  class="active">
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
           <li>
                <a href="usercontrol.php">
                    <i class='bx bxs-contact'></i>
                    <span class="text">user control</span>
                </a>
            </li>
            <li >
                <a href="contact.php">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group' ></i>
                    <span class="text">update</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">

            <li>
                <a href="#" class="logout">
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
                                <th>business name</th>
                                <th>email</th>
                                <th>transport</th>
                                <th>amount</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                         
                        <?php  
                       $sql="select * from custom";
                        $result=mysqli_query($con,$sql);
                     if($result){
                       while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $business=$row['business'];
                        $email=$row['email'];
                        $transport=$row['transport'];
                        $amount=$row['amount'];
                        echo '<tr >
                        <td> '.$id.'</td>
                    <td>'.$business.'</td>
                    <td>'.$email.'</td>
                    <td>'.$transport.'</td> 
                    <td>'.$amount.'</td>
                    

                   
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