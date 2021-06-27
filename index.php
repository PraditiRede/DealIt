<?php
session_start();
error_reporting(0);
include 'partials/db_conn.php';
include 'partials/dbconn_.php';
include 'partials/dbconn_rev.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>DEAL IT</title>
    <meta charset="utf-8">
    <meta name="keywords" content="You, can, add, all, the, necessary, keywords, related, to, your, website, here">
    <meta name="description" content="You can write about your website description here">
    <meta name="author" content="hpthemes23">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="website/images/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="website/css/main_style.css" rel="stylesheet">
    <link href="website/css/media1.css" rel="stylesheet">
</head>

<body id="fabtheme-body" class="body">
    <nav id="fabtheme-navbar home" class="navbar navbar-expand-lg navbar-expand-xl navbar-dark fixed-top"
        style="background-color: rgb(0,0,36); opacity: 0.95;">
        <a class="navbar-brand" href="#">
			<div class="logo">
				<img class="img" src="./website/images/logo.png" width="100" height="120">
				<p>DEAL IT</p>
			</div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expands"
            aria-controls="expands" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav" id="expands">
            <ul class="navbar-nav text-center ml-auto">
                <li class="nav-item">
                    <a class="nav-link fabtheme-nav-link" href="#home" style="font-size: x-large;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fabtheme-nav-link" href="#about" style="font-size: x-large;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fabtheme-nav-link" href="#products" style="font-size: x-large;">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fabtheme-nav-link" href="#reviews" style="font-size: x-large;">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fabtheme-nav-link" href="#blog" style="font-size: x-large;">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fabtheme-nav-link" href="#contact" style="font-size: x-large;">Contact</a>
                </li>
            </ul>
            <form class="search form-inline my-2 my-lg-0" action="http://192.168.64.2/wt_semifinal/index.php#products" method="get">
                <div class="button">
                    <input type="search" name="search" id="search" center placeholder="Search..." style="padding-left: 22px;">
                    <a href="search.php"><button type="submit" name="searchbar" id="searchbar" class="fa fa-search bttn" style="background-color: transparent; border-color: white; background-image: none;"> </button></a>
                </div>
			</form>
            <?php 
			if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {
			echo '<div class="ls">
			<p style="font-size: larger; margin-top: 20px;"><i class="fas fa-user-check fa-inverse"> <b>  '. $_SESSION["username"].'</b></i></p>
			<div id="logout">
				<a href="logout.php" style="margin-left: 0px;">
					<button style="margin-bottom: 0px;" class="btn center fabtheme-headings center">Log Out</button>
				</a>
			</div>
			</div>'; } 
			else {
				echo '<div class="ls">
			     <div id="login">
				<a href="login.php">
					<button class="btn center fabtheme-headings center">Log In</button>
				</a>
			</div>
			<div id="signin">
				<a href="register.php">
					<button class="btn center fabtheme-headings center">Sign Up</button>
				</a>
			</div>
			</div>';
			} ?>
            <a href="sellform.php" style="margin-left: 165px; text-decoration: none;">
                <button style="border-radius: 50%;height: 70px;width: 80px;font-size: x-large;" class="sellbtn"><p class="sell">SELL</p></button>
            </a>
        </div>
    </nav>

    <header id="home" class="fabtheme-parallax-1 img-fluid fabtheme-thetop">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-start">
                <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
                    <div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-headings"
                        data-wow-duration="2s">
                        <h2>THOUGHT OF THE DAY</h2>
                        <p style="font-size: x-large;" class="pt-2 mb-0"><sup><i class="fas fa-quote-left"></i></sup> Don’t Let Yesterday Take Up Too Much Of Today <sup><i class="fas fa-quote-right"></i></sup>
                        </p>
                        <p class="pt-1 my-0">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                        <h5 class="my-0">Sahaana Iyer</h5>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="fabtheme-link-show">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-5 justify-content-end">
                <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
                    <div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-about"
                        data-wow-duration="2s">
                        <h2>ABOUT</h2>
                        <p class="py-2">Have you ever faced difficulty in contacting your juniors or seniors for buying or selling your previous semester resources ?? Did you ever wonder how useful it would be if you could have access to buy and sell the products on a common platform where everyone could view and purchase the items ? <br>Ta-da! Here it is !! One such platform that will release you of the tension on how you would sell your products or how you could contact others who wanna sell theirs...</p>
                        <a href="#team" class="btn fabtheme-button">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br>
    <section id="products" class="fabtheme-link-show">
        <div class="container text-center mt-5" style="background-color: black; opacity: 90%; ">
             <div class="tab-content" id="pills-tabContent">
               <div class="fade show active" id="all" role="tabpanel" aria-labelledby="all-tab"><br>
                    <div class="inl">
                    <h1 style="font-size: 210%; width: 60%;">Available Products</h1>
                    <form action="http://192.168.64.2/wt_semifinalprad/index.php#products" method="post" class="sort">
                        <select class="filter" name="filter" value="filter">
                            <option selected>Filter..</option>
                            <option name="old" value="old">Old to New</option>
                            <option name="new" value="new">New to Old</option>
                        </select>
                        <button type="submit" name="send" id="send" class="fa fa-paper-plane fa-3x fa-inverse" value="&#xf043" style="font-size: large; width: 10%; height: 10%; border-color: black; background-color: black; margin-top: 7px;"></button></form>
                    </div>
                    <div class="mb-5">
                        <form action="http://192.168.64.2/wt_semifinalprad/index.php#products" method="post" class="filteration">
                            <div id="myBtnContainer">
                                <button class="btn" type="submit" name="all" id="all"> Show All</button>
                                <button class="btn" type="submit" name="ed" id="ed"> Engineering Drawing</button>
                                <button class="btn" type="submit" name="rb" id="rb"> Reference Books</button>
                                <button class="btn" type="submit" name="bs" id="bs"> Boiler Suit</button>
                                <button class="btn" type="submit" name="others" id="others"> Others</button>
                            </div><br>
                        </form>
                        <div class="masonry masonry-brick wow fadeInLeft fabtheme-card-rows container" data-wow-duration="3s">
                            <div class="row">
                        <?php
                        if (isset($_GET["searchbar"])) {
                            $query = $_GET['search'];
                            $sql = "select * from sellform where match (category, title, description) against ('$query')";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                $title = $row['title'];
                                $category = $row['category'];
                                $descr = $row['description'];
                                echo '
                                    <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4">
                                        <a href="#"><img src="' . $row["image"] .'" class="card-img mx-auto" style="width: "100px"; height: "400px";" alt="All2"></a>
                                            <div class="price" style="background-color: black;">
                                             '. $row["category"] .'"<br>"'. $row["title"] .' "<br>"'. $row["description"] .' "<br> Price : Rs. "'. $row["price"].'"/-"
                                            </div>
                                    </div>';
                            }
                        }
                        else if (isset($_POST["send"])) {
                            $form = $_POST["filter"];
                            switch ($form) {
                                case "old" : 
                                    $res = mysqli_query($conn, "select * from sellform order by date");
					            	while ($row = mysqli_fetch_array($res)) { ?>
                                        <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                        <div id="contain">
                                        <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img mx-auto" width="200" height="400" alt="All2"></a>
                                        <div class="overlay"></div>
                                <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
			
                                            <form action="index.php" method="post" id="imageform">
                                            <?php
                                                if ($_SESSION["username"] == $row["email"]) {          ?>
                                                    <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <span class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span><br>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            <td></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            <td></td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                   }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                        <?php   }
                                                else {
                                                    $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                        <?php   }      ?>
                                            </form>
                                 <?php  }   ?>
                                    </div>
                                    <div class="price" style="background-color: black;">
                                            <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-";?>
                                        </div>
                                    </div>
                            <?php   } 
                                    break;
                            
                                case "new" : 
                                    $res = mysqli_query($conn, "select * from sellform order by date desc");
					            	while ($row = mysqli_fetch_array($res)) { ?>
                                        <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                        <div id="contain">
                                        <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img mx-auto" width="200" height="400" alt="All2"></a>
                                        <div class="overlay"></div>
                                        <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
                    
                                                    <form action="index.php" method="post" id="imageform">
                                                    <?php
                                                        if ($_SESSION["username"] == $row["email"]) {          ?>
                                                            <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <span class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span><br>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            <td></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            <td></td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                   }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                <?php   }
                                                        else {
                                                            $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                                <?php   }      ?>
                                                    </form>
                                        <?php  }   ?>
                                            </div>
                                            <div class="price" style="background-color: black;">
                                            <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-";?>
                                        </div>
                                    </div>
                            <?php    }
                                     break;
                            }
                        }
                        else if (isset($_POST["all"])) {
                            $res = mysqli_query($conn, "select * from sellform");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                <div id="contain">
                                    <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img mx-auto" width="200" height="400" alt="All2"></a>
                                    <div class="overlay"></div>
                                <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
			
                                            <form action="index.php" method="post" id="imageform">
                                            <?php
                                                if ($_SESSION["username"] == $row["email"]) {          ?>
                                                    <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <span class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span><br>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            <td></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            <td></td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                     }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                        <?php   }
                                                else {
                                                    $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                        <?php   }      ?>
                                            </form>
                                 <?php  }   ?>
                                    </div>
                                    <div class="price" style="background-color: black;">
                                        <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-";?>
                                    </div>
                                </div>
                                <?php  } 
                        }
                        else if (isset($_POST["ed"])) {
                            $res = mysqli_query($conn, "select * from sellform where category='ed' or category='engg drawing'");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                <div id="contain">
                                    <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img mx-auto" width="200" height="400" alt="All2"></a>
                                    <div class="overlay"></div>
                                <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
			
                                            <form action="index.php" method="post" id="imageform">
                                            <?php
                                                if ($_SESSION["username"] == $row["email"]) {          ?>
                                                    <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <span class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span><br>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            <td></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            <td></td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                     }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                        <?php   }
                                                else {
                                                    $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                        <?php   }      ?>
                                            </form>
                                 <?php  }   ?>
                                    </div>
                                    <div class="price" style="background-color: black;">
                                        <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-";?>
                                    </div>
                                </div>
                                <?php  }
                        }
                        else if (isset($_POST["rb"])) {
                            $res = mysqli_query($conn, "select * from sellform where category='rb' or category='reference books' or category='refrencebooks'");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                <div id="contain">
                                    <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img mx-auto" width="200" height="400" alt="All2"></a>
                                    <div class="overlay"></div>
                                <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
			
                                            <form action="index.php" method="post" id="imageform">
                                            <?php
                                                if ($_SESSION["username"] == $row["email"]) {          ?>
                                                    <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <span class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span><br>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            <td></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            <td></td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                     }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                        <?php   }
                                                else {
                                                    $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                        <?php   }      ?>
                                            </form>
                                 <?php  }   ?>
                                    </div>
                                    <div class="price" style="background-color: black;">
                                        <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-";?>
                                    </div>
                                </div>
                                <?php  }
                        }
                        else if (isset($_POST["bs"])) {
                            $res = mysqli_query($conn, "select * from sellform where category='bs' or category='boiler suit' or category='boilersuit'");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                <div id="contain">
                                    <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img mx-auto" width="200" height="400" alt="All2"></a>
                                    <div class="overlay"></div>
                                <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
			
                                            <form action="index.php" method="post" id="imageform">
                                            <?php
                                                if ($_SESSION["username"] == $row["email"]) {          ?>
                                                    <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <span class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span><br>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            <td></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            <td></td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                     }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                        <?php   }
                                                else {
                                                    $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                        <?php   }      ?>
                                            </form>
                                 <?php  }   ?>
                                    </div>
                                    <div class="price" style="background-color: black;">
                                        <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-";?>
                                    </div>
                                </div>
                                <?php  }
                        }
                        else if (isset($_POST["others"])) {
                            $res = mysqli_query($conn, "select * from sellform where category<>'boilersuit' and category<>'bs' and category<>'boiler suit' and category<>'ed' and category!='engg drawing' and category!='rb' and  category!='reference books' and category!='refrencebooks'");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                <div id="contain">
                                    <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img mx-auto" width="200" height="400" alt="All2"></a>
                                    <div class="overlay"></div>
                                <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
                                            <form action="index.php" method="post" id="imageform">
                                            <?php
                                                if ($_SESSION["username"] == $row["email"]) {          ?>
                                                    <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <span class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span><br>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            <td></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            <td></td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                     }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                        <?php   }
                                                else {
                                                    $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                        <?php   }      ?>
                                            </form>
                                <?php  }   ?>
                                    </div>
                                    <div class="price" style="background-color: black;">
                                        <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-";?>
                                    </div>
                                </div>
                     <?php  }
                        }
                        else { 
                            $res = mysqli_query($conn, "select * from sellform");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <div class="card fabtheme-zoom rounded-0 col-sm-12 col-lg-4" id="card_<?php echo $row['sr_no'] ?>">
                                    <div id="contain">
                                        <a href="#"><img src="<?php echo $row['image']; ?>" class="card-img image mx-auto" width="200" height="400" alt="All2"></a>
                                        <div class="overlay"></div>
                                <?php   if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)) {   ?>
                                            <form action="index.php" method="post" id="imageform">
                                            <?php
                                                if ($_SESSION["username"] == $row["email"]) {          ?>
                                                    <button type="button" class="viewchats" id="viewchats"><i class="fa fa-comment fa-3x" aria-hidden="true" id="vc_<?php echo $row['sr_no']; ?>" onclick="hello('<?php echo $row['sr_no']; ?>')"></i></button>
                                                    <button class="but" type="button" id="<?php echo $row['sr_no']; ?>" onclick="delete_prod('<?php echo $row['sr_no']; ?>')"> DELETE POST  </button>

                                <?php               $count_no_of_chats = 0;   ?>
                                                    <div id="myModal_<?php echo $row['sr_no']; ?>" class="modal">
                                                        <div class="modal-content modalpara">
                                                <?php       $conn_users = mysqli_connect("localhost", "root", "", "users");
                                                            $conn_sellform = mysqli_connect("localhost", "root", "", "sellform");
                                                            $id = $row["sr_no"];         
                                                            $uname = $_SESSION["username"];
                                                            $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
                                                            $modalres = mysqli_query($conn_users, $tab);
                                                            $modalrow = mysqli_fetch_assoc($modalres);
                                                            $fname = $modalrow['fname'];
                                                            $lname = $modalrow['lname'];                                          
                                                ?>
                                                            <span class="modal-desc">
                                                                <table class="modal-chats-table row">
                                                                    <tr>
                                                                        <td rowspan="4"><img src="<?php echo $row['image']; ?>" class="modal-img"></td>
                                                                        <td>Title : <?php echo $row["title"]; ?></td>
                                                                        <td><span rowspan="4" class="close modalclose_<?php echo $row['sr_no']; ?>">&times;</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description : <?php echo $row["description"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price : <?php echo $row["price"]; ?>/-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="small"><span class="smalltext">Posted by <?php echo $fname." ".$lname; ?> on <?php echo $row["date"]; ?></span></td>
                                                                    </tr> 
                                                                </table>
                                                            </span>
                                                            <table class="modaltable" border="1">
                                                <?php           $select_table = "SELECT * FROM all_tables WHERE sr_no='$id' AND table_name LIKE '%_$id' ORDER BY id DESC";
                                                                $table_res = mysqli_query($conn_, $select_table);
                                                                $count = mysqli_num_rows($table_res);
                                                                if($count>0) {
                                                                    while($row_res = mysqli_fetch_array($table_res)){
                                                                        $tab_tablename = $row_res['table_name'];
                                                                        $name_of_buyer = $row_res['username'];
                                                                        $select_name_of_buyer = "SELECT fname, lname FROM users WHERE email='$name_of_buyer'";
                                                                        $buyer_name_res = mysqli_query($conn_users, $select_name_of_buyer);
                                                                        $buyer_name_row = mysqli_fetch_assoc($buyer_name_res);
                                                                        $buyer_fname = $buyer_name_row['fname'];
                                                                        $buyer_lname = $buyer_name_row['lname'];                                          

                                                                        $select_tab_tablename = "SELECT datetime FROM `$tab_tablename` ORDER BY ID DESC LIMIT 1";
                                                                        $tab_table_res = mysqli_query($conn_, $select_tab_tablename);
                                                                        while($tab_row_res = mysqli_fetch_array($tab_table_res)){     
                                                ?>
                                                                            <tr class="modalrow">
                                                                                <td> 
                                                                                    <table class="modal-chats-table row" style="width: 300px;">
                                                                                        <?php $count_no_of_chats = $count_no_of_chats + 1; ?>
                                                                                        <tr>
                                                                                            <td rowspan="3"><span class="numbering"><?php  echo $count_no_of_chats; ?></span></td>
                                                                                            <td><span class="buyer-name">Chats from <?php   echo $name_of_buyer;  ?>  </span></td>
                                                                                            
                                                                                            
                                                                                        </tr>
                                                                                        <tr>
                                                                                        
                                                                                            <td><span class="buyer-name"><?php  echo $buyer_fname . " " . $buyer_lname;  ?></span></td>
                                                                                            
                                                                                        </tr>   
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><span class="buyer-chat-datetime">  <?php   echo $tab_row_res['datetime'];  ?>   </span></td>
                                                                                            <td rowspan="3"><button class="openchats openchatsbutton" type="button" onclick="openchats('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $id; ?>', '<?php echo $tab_tablename; ?>')">Open</button></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                <?php                     }
                                                                    }
                                                                }     
                                                                else {       
                                                ?>
                                                                    <br><p class="sorry-no-chats"> Sorry! No chats yet..</p>
                                                <?php           }           ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                        <?php   }
                                                else { 
                                                    $uname = $_SESSION["username"];              ?>
                                                    <button class="but" type="button" name="drop2" id="drop2" onclick="contact('<?php echo $row['email']; ?>', '<?php echo $uname; ?>', '<?php echo $row['sr_no']; ?>')"> CONTACT OWNER  </button>
                                        <?php   }      ?>
                                            </form>
                                 <?php  }   ?>
                                    </div>
                                    <div class="price" style="background-color: black;">
                                        <?php echo $row["category"]; echo "<br>"; echo $row["title"]; echo "<br>"; echo $row["description"]; echo "<br>"; echo "Price : Rs. ".$row["price"]."/-"; ?>
                                    </div>
                                </div>
                                <?php  }  ?>
                            <?php    } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section><br><br><br><br><br>
    <section id="chatchat" data-aos="fade-up" data-aos-delay="100"> 
        <div class="msgbox chat-popup" id="myForm">
            <form name="form1" id="chatform" action="">
                <label for="name">Name :&nbsp;<input type="text" id="chatname" name="chatname" value="<?php echo $_SESSION['username']; ?>" readonly></label>
                <button type="button" class="chatclose" id="cancelbtn" onclick="closeChat()">&times;</button><br><br>
                <textarea rows="3" id="msg" name="msg" class="chattext" placeholder="Type your message here"></textarea><br><br>
                <button type="button" name="anchorchat" id="anchorchat" class="anchorchat" onclick="submitChat()">Send</button><br><br>
                <div id="block">
                    <label style="color: black;"><b>Your chats will appear here:-</b></label><br><br>
                    <div id="chatlogs" style="color: black;">Loading...</div>
                </div>
            </form>
        </div>
    </section>
    <section id="team" class="fabtheme-link-show">
        <div class="container-fluid">
            <div class="row align-items-center mt-5 justify-content-start">
                <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
                    <div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-team-1" data-wow-duration="2s">
                        <h2>TEAM</h2>
                        <p style="font-size: x-large" class="card-text py-2">Meet our team...</p>
                        <div class="fabtheme-owl-2 owl-carousel">
                            <div class="row" style="padding: 0px;">
                            <div class="teamcard fabtheme-team-2 cont center col-sm-12 col-lg-4">
                                <img class="card-img mx-auto rounded-0 imgg" src="./website/images/3.jpeg" alt="Sahaana">
                                <div class="container"><br>
                                    <h4>Sahaana Iyer</h4>
                                    <p class="titleteam" style="color: rgb(118, 201, 248);">Contact : +91 9742246787</p>
                                    <p style="font-size: medium">8609.sahaana.tecomp@gmail.com</p>
                                    <span class="center">
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                        class="fab fa-twitter fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-facebook-f fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-instagram fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-whatsapp fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-linkedin fa-lg" style="color: white"></i></a>
                                    </span>
                                    <p><button style="background-color: rgb(118, 201, 248); color: rgb(0,0,36);" class="button center portfolio"><a style="text-decoration: none; color: rgb(0,0,36); text-align: center; margin-left: 93px;" href="https://sahaanaiyer.github.io/">Portfolio</a></button></p>
                                </div>
                            </div>

                            <div class="teamcard fabtheme-team-2 cont center col-sm-12 col-lg-4">
                                <img class="card-img mx-auto rounded-0 imgg" src="./website/images/1.jpeg" alt="Sheetal">
                                <div class="container"><br>
                                    <h4>Sheetal Sharma</h4>
                                    <p class="titleteam" style="color: rgb(118, 201, 248);">Contact : +91 8945424322</p>
                                    <p style="font-size: medium">8639.sheetal.tecomp@gmail.com</p>
                                    <span class="center">
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                        class="fab fa-twitter fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-facebook-f fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-instagram fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-whatsapp fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-linkedin fa-lg" style="color: white"></i></a>
                                    </span>
                                    <p><button style="background-color: rgb(118, 201, 248); color: rgb(0,0,36);" class="button portfolio"><a style="text-decoration: none; color: rgb(0,0,36);  margin-left: 93px;" href="https://sharmasheetal.github.io/">Portfolio</a></button></p>
                                </div>
                            </div>

                            <div class="teamcard fabtheme-team-2 cont center col-sm-12 col-lg-4">
                                <img class="card-img mx-auto rounded-0 imgg" src="./website/images/2a.jfif" width="100%" height="1600px" alt="Praditi">
                                <div class="container"><br>
                                    <h4>Praditi Rede</h4>
                                    <p class="titleteam" style="color: rgb(118, 201, 248);">Contact : +91 9844324677</p>
                                    <p style="font-size: medium">8632.praditi.tecomp@gmail.com</p>
                                    <span class="center">
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                        class="fab fa-twitter fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-facebook-f fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-instagram fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-whatsapp fa-lg" style="color: white"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-1" style="padding: 5px"><i
                                                class="fab fa-linkedin fa-lg" style="color: white"></i></a>
                                    </span>
                                    <p><button style="background-color: rgb(118, 201, 248); color: rgb(0,0,36);" class="button portfolio"><a style="text-decoration: none; color: rgb(0,0,36);  margin-left: 93px;" href="https://praditirede.github.io/webCV/">Portfolio</a></button></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="fabtheme-parallax-3 img-fluid" >
        <div class="container-fluid h-100 ">
            <div class="row h-100 align-items-right text-right justify-content-end">
                <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
                    <div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-reviews-1" data-wow-duration="3s">
                        <h2>REVIEWS</h2>
            <?php       $result = mysqli_query($conn_rev, "select * from review");
                        while ($row = mysqli_fetch_array($result)) {
            ?>        
                        <form method="post" action="review.php">
                            <div class="fabtheme-owl-1 owl-carousel d-flex text-right reviewalign">
                                <div class="fabtheme-reviews-2 carousel">
                                    <table class="table-review" width="100%" align="right" border="1">
                                        <tr>
                                            <td>
                                                <p class="py-2 fabtheme-reviews-3">
                                                    <sup><i class="fas fa-quote-left fa-inverse py-2"></i></sup>
                                <?php                   echo $row["message"];          ?>
                                                    <sup><i class="fas fa-quote-right fa-inverse"></i></sup>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                <?php
                                                if ($row["rating"] == 1) {          ?>
                                                    <p class="pt-1 my-0">
                                                        <i class="fa fa-star"></i>
                                                    </p>
                                <?php           }
                                                else if ($row["rating"] == 2) {     ?>
                                                    <p class="pt-1 my-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </p>
                                <?php           }
                                                else if ($row["rating"] == 3) {     ?>
                                                    <p class="pt-1 my-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </p>
                                <?php           }
                                                else if ($row["rating"] == 4) {     ?>
                                                    <p class="pt-1 my-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </p>
                                <?php           }
                                                else if ($row["rating"] == 5) {     ?>
                                                    <p class="pt-1 my-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </p>
                                <?php           }                                   ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="my-0" style="color: black;">
                                                    <?php       echo $row["fname"] . " " . $row["lname"];       ?>
                                                </h5>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div><br>
                        </form>
            <?php       }        ?>
            <?php       if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']!=true)) {   }  
                        else {  ?>
                            <button type="button" class="btn fabtheme-button rev-btn" onclick="openreview()">Add Review</button><br>
            <?php       }       ?>        
                        <span class="review-form" id="review-form">
                            <form name="formrev" action="review.php" method="post" >
                                <span class="star-rating">
                                    <ul class="stars">
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                        <li class="star fa fa-star"></li>
                                    </ul><br>
                                    <span><input type="text" class="output" name="output" id="output" readonly></span>
                                </span>
                                    <span class="col-lg-4 col-md-4 col-sm-12">
                                        <textarea class="form-contr" rows="4" placeholder="Write your review here..." name="revmsg" id="rev-msg"></textarea>
                                        <button type="submit" class="btn btn-default btn-sm btn-info" id="sub-rating" name="sub-rating">Submit</button>
            <?php       
                                        $star_empty = $_SESSION['star_empty'];
                                        if ($star_empty) {
                                            echo "<script> alert('You have not rated us..'); </script>"; 
                                            $_SESSION['star_empty'] = 0;
                                        }
                                        $flag_val = $_SESSION["flag_val"];
                                        if ($flag_val) {
                                            echo "<script> alert('Review Noted..!'); </script>";   
                                            $_SESSION["flag_val"] = 0;
                                        }
            ?>
                                    </span>
                                <!-- </span> -->
                            </form>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="fabtheme-link-show">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-5 justify-content-start">
                <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
                    <div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-team-1"
                        data-wow-duration="2s">
                        <h2>Latest News</h2>
                        <div class="card-body pt-5 pr-0">
                            <h4 class="card-title font-weight-bold">Covid lies go viral thanks to unchecked social
                                media.</h4>
                            <p class="card-text pt-3">If someone had fallen asleep a decade ago and only just woken
                                up today, they could hardly avoid the conclusion that the world had gone mad. Why, they
                                may ask, are conspiracy theorists and white supremacists taking to the streets to
                                protest against public health guidelines designed to protect them from a deadly
                                pandemic? And why are some politicians going out of their way to trash expert opinion
                                and, in the process, lending credence to wild conspiracy theories?</p>
                        </div>
                        <a href="https://www.chathamhouse.org/publications/the-world-today/2020-10/covid-lies-go-viral-thanks-unchecked-social-media" class="btn btn-default btn-sm btn-info">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section><br><br><br><br>
    <section id="contact" class="fabtheme-link-show">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-5 justify-content-end">
                <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
                    <div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-contact"
                        data-wow-duration="3s">
                        <h2>Contact Us</h2>
                        <form id="form" class="contact-form" method="post" action="contact.php">
                            <div class="row pt-2">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <a href="javascript:void(0);" class="fabtheme-link-2">
                                        <i class="fas fa-envelope-open"></i>
                                        <p>dealit@gmail.com</p>
                                    </a>
                                    <i class="fas fa-phone-alt"></i>
                                    <p>022 65217895 </p>
                                    <i class="fas fa-map-marker"></i>
                                    <p>Building Number, Street Name, Neighborhood, City, Postal Code or Zip Code,
                                        Additional Number</p>
                                    <i class="fas fa-clock"></i>
                                    <p>Monday-Friday: 9:00 AM to 5:00 PM, <br>Saturday and Sunday: Holidays</p>
                                    <div class="col-12 py-2 pr-0">
                                        <a href="javascript:void(0);" class="fabtheme-link-2"><i
                                                class="fab fa-instagram fa-lg mr-2"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-2"><i
                                                class="fab fa-facebook-f fa-lg mr-2"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-2"><i
                                                class="fab fa-twitter fa-lg mr-2"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-2"><i
                                                class="fab fa-whatsapp fa-lg mr-2"></i></a>
                                        <a href="javascript:void(0);" class="fabtheme-link-2"><i
                                                class="fab fa-reddit-alien fa-lg"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group fabtheme-field">
                                        <label for="form_name">Firstname <span class="red">*</span></label>
                                        <input id="form_name" type="text" name="fname" class="form-control" placeholder="Firstname" required="required">
                                    </div>
                                    <div class="form-group fabtheme-field">
                                        <label for="form_lastname">Lastname <span class="red">*</span></label>
                                        <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Lastname" required="required">
                                    </div>
                                    <div class="form-group fabtheme-field">
                                        <label for="form_email">Email <span class="red">*</span></label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group fabtheme-field">
                                        <label for="form_message">Message <span class="red">*</span></label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
                                    </div>
                                    <div class="form-group fabtheme-field">
                                        <button type="submit" name="msg" class="btn btn-default btn-sm btn-info">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fabtheme-footer">
        <div class="container-fluid h-100 p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                    <p>
                        <a href="#home" class="fabtheme-link-3">Home</a>
                    </p>
                    <p>
                        <a href="#about" class="fabtheme-link-3">About</a>
                    </p>
                    <p>
                        <a href="#products" class="fabtheme-link-3">Products</a>
                    </p>
                    <p>
                        <a href="#reviews" class="fabtheme-link-3">Reviews</a>
                    </p>
                    <p>
                        <a href="#blog" class="fabtheme-link-3">Blog</a>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                    <p>
                        <a href="#team" class="fabtheme-link-3">Team</a>
                    </p>
                    <p>
                        <a href="#contact" class="fabtheme-link-3">Contact Us</a>
                    </p>
                    <p>
                        <a href="javascript:void(0);" class="fabtheme-link-3">Terms of Services</a>
                    </p>
                    <p>
                        <a href="javascript:void(0);" class="fabtheme-link-3">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="javascript:void(0);" class="fabtheme-link-3">Site Map</a>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                    <h5 style="color: rgb(118, 201, 248); margin-left: -40px;"> QUICK LINKS </h5><br>
                    <a href="javascript:void(0);" class="fabtheme-link-3"><i class="fab fa-instagram fa-lg mr-2 fa-inverse"></i></a>
                    <a href="javascript:void(0);" class="fabtheme-link-3"><i class="fab fa-facebook-f fa-lg mr-2 fa-inverse"></i></a>
                    <a href="javascript:void(0);" class="fabtheme-link-3"><i class="fab fa-twitter fa-lg mr-2 fa-inverse"></i></a>
                    <a href="javascript:void(0);" class="fabtheme-link-3"><i class="fab fa-whatsapp fa-lg mr-2 fa-inverse"></i></a>
                    <a href="javascript:void(0);" class="fabtheme-link-3"><i class="fab fa-linkedin fa-lg mr-2 fa-inverse"></i></a>
                    <br><br><br><br>
                    <h5 style="color: rgb(118, 201, 248); margin-left: -40px;"> CONNECT WITH US </h5><br>
                    Sheetal Sharma : +91 9488475648
                    <br><br>
                    Email : dealit@gmail.com
                </div>
                <div class="col-12 text-center pt-3 pt-sm-4 pt-md-4 pt-lg-5 pt-xl-5">
                    <h6>DEAL IT © 2020. <br>All Rights Reserved.</h6>
                </div>
            </div>
        </div>
    </section>
    <button class="scrolltop" onclick="topFunction()" id="scrollbtn">
        <div class="scroll" id="scroll">
            <i class="fas fa-angle-up"></i>
        </div>
    </button>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>     
    <script src="website/js/script.js"></script>
</body>
</html>