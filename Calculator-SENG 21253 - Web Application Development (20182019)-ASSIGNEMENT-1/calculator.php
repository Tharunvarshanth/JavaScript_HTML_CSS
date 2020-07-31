<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>	
	 <link rel="stylesheet" href="styles.css">
	 <!--  icon library -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Calculator  </title>
    <script type="text/javascript" src="scriptjs.js"></script>
</head>
<body>
 
<?php

  
  if(isset($_POST['equal']))	
    {

       $_SESSION["digit1"] = $_POST["number1"];
       $_SESSION["digit2"] = $_POST["number2"];
       $_SESSION["operator"] = $_POST["operator1"];
       echo $_SESSION["digit1"] ;

       header("Location: http://localhost/Calculator/result.php");
       exit();

    }
  
 
?>


 <div class="calculatorbox">

  <table>
   <tr>     
    <td><input class="calbut" type="button" name="C" value="C" onclick="clearall()" ></td>  
     <td><input class="calbut" type="button" name="pom" value="+/-" onclick="plusorminus()" ></td>   
      <td><input class="calbut" type="button" name="percentage" value="%" onclick="signcall('%')" ></td>  
      <td><input class="calbut"type="button" name="/" value="/"   onclick="signcall('/')" ></td>   
 
    
   </tr>
   <tr>
   	<td><input class="calbut"type="button" name="9" value="9"   onclick="insert(9)" ></td>   
    <td><input class="calbut"type="button" name="8" value="8"   onclick="insert(8)" ></td>
    <td><input class="calbut"type="button" name="7" value="7"   onclick="insert(7)" ></td> 
    <td><input class="calbut"type="button" name="*" value="*"   onclick="signcall('*')" ></td>   
    
              
   </tr>
   <tr>
             
   </tr>
   <tr>
    <td><input class="calbut"type="button" name="6" value="6"   onclick="insert(6)" ></td>   
    <td><input class="calbut"type="button" name="5" value="5"   onclick="insert(5)" ></td>
    <td><input class="calbut"type="button" name="4" value="4"   onclick="insert(4)" ></td> 
     <td><input class="calbut" type="button" name="minus" value="-" onclick="signcall('-')" ></td>             
   </tr>

   <tr>    
    <td><input class="calbut"type="button" name="3" value="3" onclick="insert(3)"  ></td>   
    <td><input class="calbut"type="button" name="2" value="2" onclick="insert(2)" ></td>
    <td><input class="calbut"type="button" name="1" value="1" onclick="insert(1)"></td>  
    <td><input class="calbut" type="button" name="plus" value="+" onclick="signcall('+')" ></td>         
   </tr>

   <tr>
     <td><input class="botbut" type="button" name="dot" value="." onclick="dotinsert()">  </td>
     <td><input class="botbut"type="button" name="0" value="0"   onclick="insert(0)"  ></td>
     <td><button class="botbut" name="C" value="E" onclick="erase()"> <i class="material-icons" style="font-size:18px">backspace</i> </button>     </td> 
     <td>
        <form name="form1" method="post">
        <button class="equbut" type="submit" name="equal" >=</button>   
    	  <input  class="displaybox" type="float" name="number1"  >
    	  <input class="displaybox" type="name" name="operator1"  >
    	  <input class="displaybox" type="float" name="number2"  >
       </form>
      </td>
       
    
   </tr>
   
   <tr>
   	<td colspan="4">
   		 <label id="val1"></label>
         <label id="ope1"></label>
         <label id="val2"></label>
   	</td>
   
   </tr>
  </table>  

 </div>  
  
  















</body>
</html>