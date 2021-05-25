<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>calulator</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

   

    <form class="form box" action="" method="post">
        <h1 class="login-title">Calculator</h1>
        <input type="number" class="login-input" name="salary" placeholder="Salary in USD" autofocus="true" required/>
        
        <input type="radio" id="month" name="date" value="month" required>
        <label for="month">monthly</label><br>
        
        <input type="radio" id="year" name="date" value="year" >
        <label for="year">Yearly</label><br><br><br>
        
        <input type="submit" value="Calculate" name="submit" class="login-button"/>




        <?php
$message = "";
if(isset($_POST['submit'])){
    $result=0;
    $tax=0;
    $taxamout=0;
    $socialFee=0;
    $radioValue = $_POST["date"];
  $input = $_POST['salary'];
  if($input<=10000){
      echo "no taxes";
      $result = $input;
  }
  elseif($input<=25000){
$tax=11;
$taxamout = $input * ($tax/100);
$socialFee= $input * (4/100);
$result = $input - ($taxamout)-($social);
  }
  elseif($input<=50000){
$tax=30;
$taxamout = $input * ($tax/100);
$socialFee= $input * (4/100);
$result = $input - ($taxamout)-($social);
  }
  elseif($input>50000){
$tax=45;
$taxamout = $input * ($tax/100);
$socialFee= $input * (4/100);
$result = $input - ($taxamout)-($social);
  }
  if($radioValue =="month"){
       echo "<h2><u>Result:<u></h2><table class=\"tableS\"> 
       <tr>
       <td colspan=\"2\">Monthly data</td>
       </tr>

      <tr>
      <td>Salary:</td> 
      <td>".($input/12)."</td>
      </tr>
      
      <tr>
      <td>tax rate</td> <td>".$tax."% </td>
      </tr>

      <tr>
      <td>Tax amount</td> <td>".($taxamout/12)."</td>
      </tr>

      <tr>
      <td>Social security fee</td> <td>".($socialFee/12)."</td>
      </tr>

      <tr>
      <td>Salary after tax</td><td>".($result/12)."</td>
      </tr>
      </table>";
  }
  else{
    echo "<h2><u>Result:<u></h2><table class=\"tableS\"> 
    <tr>
    <td colspan=\"2\">Yearly data</td>
    </tr>

   <tr>
   <td>Salary:</td> 
   <td>".$input."</td>
   </tr>
   
   <tr>
   <td>tax rate</td> <td>".$tax."% </td>
   </tr>

   <tr>
   <td>Tax amount</td> <td>".$taxamout."</td>
   </tr>

   <tr>
   <td>Social security fee</td> <td>".$socialFee."</td>
   </tr>

   <tr>
   <td>Salary after tax</td><td>".$result."</td>
   </tr>
   </table>";
  }
  
}    
?>
        
  </form>


</body>
</html>