<?php include("test_header.php"); ?>

<div>
<table width="600" border="0" align="center">
    <tr>
       <td align="center">
        <br><br><br><br><br><br>
           <style>
              input[type=text], select {
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
              }
              input[type=password], select {
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
              }

              input[type=submit] {
                width: 20%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
              }

              input[type=submit]:hover {
                background-color: #45a049;
              }

              div {
                border-radius: 5px;
                background-color: #f2f2f2;
              }
            </style>
        <body>
          <div>
            <form action="p_manager.php">
              <br/>
                            <br><br><br><br><br><br>

              <center><font face="Impact" size="16">Login</font></center>
              <br>
              <label for="fname">UserName :</label>
              <input type="text" id="fname" name="username" placeholder="Your UserName..">
            <br>
              <label for="lname">&nbsp;&nbsp;Password :</label>
              <input type="password" id="lname" name="password" placeholder="Your Password..">
            <br><br>
              <input type="submit" value="Go"><br/>
            </form>
          </div>
        </body>

          <script>
          function w3_open() {
              document.getElementById("mySidebar").style.display = "block";
          }
          function w3_close() {
              document.getElementById("mySidebar").style.display = "none";
          }
          </script>
      </td>
    </tr>
</table>
<br><br><br><br>
</div>

 <?php include("footer.php"); ?>
