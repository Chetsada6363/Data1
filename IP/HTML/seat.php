<?php
include("checkSession.php");
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<script src="../JS/page7-JS.js">
</script>


<html>
    <title>Cinevault+</title>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../Assets/Icon.png" style="width: 60px;">
            </a>
            <span class="navbar-text" style="color: white;">Cinevault+</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="collapse navbar-collapse" id="mynavbar">
                
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                  <a class="nav-link active" href="javascript:void(0)" " onclick="location.href ='LoginMain.php';">หน้าแรก </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)" onclick="location.href ='movieSh.php';"style="color: orange;">ภาพยนตร์</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <img src="../Assets/Ticket.png" style="width: 30px;" onclick="location.href ='myticket.php';">
                                </a>
                            </li>
                        </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary" type="button">Search</button>
                </form>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="logout.php">
                <img src="../Assets/logout.png" style="width: 40px;">
            </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
            </div>
        </div>
    </nav>
    <div class="page7">
        <div class="sh">
            <div>
                <div class="screen">
                    <table width=100% cellpadding="4" cellspacing="2" style="border:1px solid hsl(39, 100%, 51%);">
                        <tr>
                            <td bgcolor="#ff9800">SCREEN</td>
                        </tr>
                    </table>
                    <br>
                </div>
        <div class="Chair">
            <bold style="color: #ffffff;"> J </bold>&nbsp;&nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J1')" id = "J1"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J2')" id = "J2"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J3')" id = "J3"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J4')" id = "J4"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J5')" id = "J5"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J6')" id = "J6"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J7')" id = "J7"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J8')" id = "J8"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J9')" id = "J9"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('J10')" id = "J10"> &nbsp;&nbsp;&nbsp;
            <bold style="color: #ffffff;"></bold>
            <br><br>
            <bold style="color: #ffffff;"> I </bold>&nbsp;&nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I1')" id = "I1"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I2')" id = "I2"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I3')" id = "I3"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I4')" id = "I4"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I5')" id = "I5"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I6')" id = "I6"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I7')" id = "I7"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I8')" id = "I8"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I9')" id = "I9"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('I10')" id = "I10"> &nbsp;&nbsp;&nbsp;
            <bold style="color: #ffffff;"></bold>
            <br><br>
            <bold style="color: #ffffff;"> H </bold>&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H1')" id = "H1"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H2')" id = "H2"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H3')" id = "H3"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H4')" id = "H4"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H5')" id = "H5"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H6')" id = "H6"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H7')" id = "H7"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H8')" id = "H8"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H9')" id = "H9"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('H10')" id = "H10"> &nbsp;&nbsp;&nbsp;
            <bold style="color: #ffffff;"></bold>
            <br><br>
            <bold style="color: #ffffff;"> G </bold>&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G1')" id = "G1"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G2')" id = "G2"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G3')" id = "G3"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G4')" id = "G4"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G5')" id = "G5"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G6')" id = "G6"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G7')" id = "G7"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G8')" id = "G8"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G9')" id = "G9"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('G10')" id = "G10"> &nbsp;&nbsp;&nbsp;
            <bold style="color: #ffffff;"></bold>
            <br><br>
            <bold style="color: #ffffff;"> F </bold>&nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F1')" id = "F1"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F2')" id = "F2"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F3')" id = "F3"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F4')" id = "F4"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F5')" id = "F5"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F6')" id = "F6"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F7')" id = "F7"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F8')" id = "F8"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F9')" id = "F9"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('F10')" id = "F10"> &nbsp;&nbsp;&nbsp;
            <bold style="color: #ffffff;"></bold>
            <br><br>
            <bold style="color: #ffffff;"> E </bold>&nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E1')" id = "E1"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E2')" id = "E2"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E3')" id = "E3"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E4')" id = "E4"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E5')" id = "E5"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E6')" id = "E6"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E7')" id = "E7"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E8')" id = "E8"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E9')" id = "E9"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('E10')" id = "E10"> &nbsp;&nbsp;&nbsp;
            <bold style="color: #ffffff;"></bold>
            <br><br>
            <bold style="color: #ffffff;"> D </bold>&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D1')" id = "D1"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D2')" id = "D2"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D3')" id = "D3"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D4')" id = "D4"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D5')" id = "D5"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D6')" id = "D6"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D7')" id = "D7"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D8')" id = "D8"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D9')" id = "D9"> &nbsp;&nbsp;
            <img src="../Assets/chair.png" style="width: 50px;" onclick="changeImage('D10')" id = "D10"> &nbsp;&nbsp;&nbsp;
            <bold style="color: #ffffff;"></bold>
            <br><br>
            <bold style="color: #ffffff;"> C </bold>&nbsp;
            <img src="../Assets/sofa.png" id = "C1" onclick="changeImageSofa('C1')" 
                style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "C2" onclick="changeImageSofa('C2')" 
                 style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "C3" onclick="changeImageSofa('C3')" 
                  style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "C4" onclick="changeImageSofa('C4')" 
                   style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "C5" onclick="changeImageSofa('C5')" 
                style="width: 60px;">
            <br>
            <bold style="color: #ffffff;"> B </bold>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "B1" onclick="changeImageSofa('B1')" 
                style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "B2" onclick="changeImageSofa('B2')" 
                 style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "B3" onclick="changeImageSofa('B3')" 
                  style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "B4" onclick="changeImageSofa('B4')" 
                   style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "B5" onclick="changeImageSofa('B5')" 
                style="width: 60px;">
            <br>
            <bold style="color: #ffffff;"> A </bold>&nbsp;
            <img src="../Assets/sofa.png" id = "A1" onclick="changeImageSofa('A1')" 
                style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "A2" onclick="changeImageSofa('A2')" 
                 style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "A3" onclick="changeImageSofa('A3')" 
                  style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "A4" onclick="changeImageSofa('A4')" 
                   style="width: 60px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../Assets/sofa.png" id = "A5" onclick="changeImageSofa('A5')" 
                style="width: 60px;">
            <br><br>
            </div>
        </div>


        <?php
            include("db.php");
            $date = date('Y-m-d');
            $id = $_GET['ID'];
            $time = $_GET['Showtime'];
            $str = "SELECT * from `movie` WHERE ID = '$id'";
            $objquery = mysqli_query($con,$str);
            $col = mysqli_fetch_assoc($objquery);
            $seatID = array("A1", "A2", "A3", "A4","A5","B1","B2","B3","B4","B5","C1","C2","C3","C4","C5","D1","D2","D3","D4","D5","D6","D7","D8","D9","D10",
            "E1","E2","E3","E4","E5","E6","E7","E8","E9","E10","F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","G1","G2","G3","G4","G5","G6","G7","G8","G9","G10",
            "H1","H2","H3","H4","H5","H6","H7","H8","H9","H10","I1","I2","I3","I4","I5","I6","I7","I8","I9","I10","J1","J2","J3","J4","J5","J6","J7","J8","J9","J10");

            foreach($seatID as $s){
                $strSQL = "SELECT * FROM `seat` WHERE Seat_number = '$s' and Showtime = '$time' and MovieName = '".$col['MovieName']."' and Date = '$date'";
                $q = mysqli_query($con,$strSQL);
                if(mysqli_num_rows($q) > 0){
                    echo "<script type='text/javascript'>checkExist('".$s."');</script>";
                }
            }
        ?>
    
<form id="seat-selection-form" action="sent_seat.php" method="POST">
  <div class="choose-seat">
    <br><br>
    <div class="movie-container">
      <img class="poster" src="<?php echo $col['ImgPull'] ?>" alt="Movie 1 Poster">
      <h3 id="MovieName"><?php echo $col['MovieName']; ?></h3>
      <input type="hidden" name="MovieName" id="MovieName" value="<?php echo $col['MovieName']; ?>">
      <input type="hidden" name="MovieType" id="MovieType" value="<?php echo $col['MovieType']; ?>">
      <p id="date"></p>
      <script src="../JS/RealDate.js"></script>

      <p id="showtime" name="showtime"><?php echo $time ?></p>
      <input type="hidden" name="showtime"  id="showtime" value="<?php echo $time ?>">

      <div class="seat-type">
        <img class="seat-image" src="../Assets/standdart.png" alt="Normal Seat" onclick="changeImage(this.id);">
        <img class="seat-image" src="../Assets/sofa sweet.png" alt="Sofa Seat" onclick="changeImageSofa(this.id);">
      </div>
      <p class="showtime">160บาท&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;180บาท</p>
      <p>Standard: <span id="normal">0</span></p>
      <input type="hidden" id="normalInput" name="normalInput" value="">
      <p>Sofa Sweet: <span id="sofa">0</span></p>
      <input type="hidden" id="sofaInput" name="sofaInput" value="">
      <p>จำนวนที่นั่งทั้งหมด: <span id="all-seats">0</span></p>
      <p>ที่นั่งที่เลือก: <span id="selectedSeats" name="selectedSeats">None</span></p>
      <input type="hidden" id="selectedSeatsInput" name="selectedSeatsInput" value="">
      <p>ราคาทั้งหมด: <span id="total-price">0.00</span>฿</p>
      <button type="submit" id="submit-button">ชำระเงิน</button>
    </div>
  </div>
</form>
</body>s
</html>
