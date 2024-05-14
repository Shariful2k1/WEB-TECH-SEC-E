<html>
    <head>
    <link rel="stylesheet" href="../Css/style.css">
    <script src="../Assests/myjs.js"></script>

        <title>DigiFarm</title>
    </head>
    <body>
        <table border="1" align="center" width="850px">
            <tr>
                <td>
                   <h1 class="Head">DigiFarm</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                   <a class="button" href= "#">  Home </a>  <a class="button" href= "Login.php"> Login </a>  <a class="button" href= "Signup.php"> Sign Up </a>
                </td>
                <tr>
                    <td>
                        <p>
                                <hr>
                                <p class="Text"><em>Welcome to DigiFarm where farmers, investors and wholesaler are warmly welcomed. </em></p>
                                <p class="Text"><em>For any kind of enquires, feel free to contact us.</em></p>
                                <p class="Text"><em>Our Email Address: digifarm@email.com<br><br>Our Contact Number : +8801306735555</em></p>
                    <center class="Footer">All Rights Reserved Copyright@2024 </center>
                   
                        </p>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
    <br>
    <center>
    <script>
        function toggleImage() {
            let img1 = "The-concept-of-digital-agriculture-10.jpg";
            let img2 = "download(1).jpg";
            let img3 = "download(2).jpg";
            let img4 = "download(3).jpg";
            let img5 = "download(4).jpg";
            let img6 = "download(5).jpg";
            let img7 = "download(6).jpg";
            
            let imgElement = document.getElementById('toggleImage');
            
            if (imgElement.src.includes(img1)) {
                imgElement.src = img2;
            } else if (imgElement.src.includes(img2)) {
                imgElement.src = img3;
            } else if (imgElement.src.includes(img3)) {
                imgElement.src = img4;
            } else if (imgElement.src.includes(img4)) {
                imgElement.src = img5;
            } else if (imgElement.src.includes(img5)) {
                imgElement.src = img6;
            } else if (imgElement.src.includes(img6)) {
                imgElement.src = img7;
            } else {
                imgElement.src = img1;
            }
        }
    </script>
        <img src="The-concept-of-digital-agriculture-10.jpg" id="toggleImage" width="900" height="350" onclick="toggleImage();">
</center>
</html>