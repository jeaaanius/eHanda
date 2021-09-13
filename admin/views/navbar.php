



<div class="menu">
                <ul class="list">
                    <li class="header">Dashboard</li>
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/admin/views/index.php" ? "active" : "");?>">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/admin/views/senotification.php" ? "active" : "");?>"> 
                        <a href="senotification.php" >
                            <i class="material-icons">swap_calls</i>
                            <span>Send Emergency Alerts</span>
                        </a>
                        
                    </li>
                    
                    
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/admin/views/sgnotification.php" ? "active" : "");?>">
                        <a href="sgnotification.php" >
                            <i class="material-icons">trending_down</i>
                            <span>Send General Notifications</span>
                        </a>
                        
                    </li>
                    
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/admin/views/sendnotification.php" ? "active" : "");?>">
                        <a href="sendnotification.php" >
                            <i class="material-icons">view_list</i>
                            <span>Report Of Sent Alerts</span>
                        </a>
                       
                    </li>
               
                    


                    
                    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/admin/views/manageauth.php" ? "active" : "");?>">
                        <a href="manageauth.php" >
                            <i class="material-icons">widgets</i>
                            <span>Manage Authorities</span>
                        </a>
                    </li>
                    
                    
                </ul>
            </div>