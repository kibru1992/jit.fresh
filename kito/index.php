<?php

$host = "localhost";
$user= "root";
$pass = "";




$con = mysqli_connect($host,$user,$pass);

mysqli_select_db( $con,"customer");



$fname = $_POST["Firstname"];
$lname = $_POST["Lastname"];
$zo = $_POST["Zone"];
$bl = $_POST["Block"];
$tel = $_POST["Telephone"];


$query = " INSERT INTO customer (Firstname,Lastname,Zone,Block,Telephone) VALUES ('$fname','$lname','$zo','$bl','$tel')";

$result = mysqli_query($con,$query);
if ($result) 
        echo '<P>Welcome to jit Evasu fellowship Family <br>Your information has been successfully saved.<br> God bless you <br>
        <hr> 
        About counseling team
        <br>
        <br>
        የ counseling team መጽሐፍ  ቅዱስን መሠረት ባደረገ መልኩ በመንፈስ ቅዱስ ኃይል <br> እና ምሪት ላይ በመደገፍ በተለያዩ የህይወት ፈተና ውስጥ ያሉ ቅዱሳን ተማሪዎችን በመምከር <br> ወደ ግባቸው እንዲደርሱ የመርዳት አገልግሎት ላይ የተሰማራ team ነው።የሁሉም ክርስቲያን ግብ እግዚአብሔርን <br>ወደ መምሰል ማደግ ነውና የcounseling team በጅማ ዩንቨርስቲ ያሉ ቅዱሳን በተሰጣቸው <br>ጸጋ ኃጢአተኝነትንና ዓለማዊን ምኞታቸውን ክደው ፥ የተባረከውን ተስፋቸውን እርሱም<br> የኢየሱስ ክርስቶስን ክብር መገለጥ እየጠበቁ፥ ራሳቸውን በመግዛትና በጽድቅ እግዚአብሔርንም<br> በመምሰል በአሁኑ ዘመን እንዲኖሩ ይመክራል ፤የተለያዩ ፅሑፎችንና መጽሔቶች በማዘጋጀት ያስተምራል። የጌታ ጸጋና ሰላም ከእናንተ ጋር ይሁን!!.</P><hr>';
        
else {
        echo '<P>Something went wrong.</P>';
     }  

/* $query = "select * from customer limit 2";

$result = mysqli_query($con, $query);

echo("<TABLE border = '1'>");

while($row = mysqli_fetch_array($result)){

        echo "<tr>";
        echo("<TD> '$row[ID]' </TD> ");
        echo("<TD> '$row[FirstName]' </TD> ");
        echo("<TD> '$row[LastName]' </TD> ");
        echo("<TD> '$row[Sex]' </TD> ");
        echo("<TD> '$row[Telephone]' </TD> ");
        echo "</tr>";
    }
    echo("</TABLE><BR>\n");

*/


?>
</body>
</html>
