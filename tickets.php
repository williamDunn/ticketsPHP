<?php
$name = $_REQUEST["namefororder"];
$email = $_REQUEST["useremail"];
if (($name == "") || ($email == "")) header("Location:tickets.html"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Untitled Document</title>
    </head>
    <body>
	<h2> 
	<?php echo "Thank you, " . $name . " for purchasing Lake Ukickee Soccer tickets! <br> Below please find a summary of your order:" ?>
	</h2>
        <?php
		
		
         if (isset($_REQUEST['game1']))
		 {
			 $game1price = $_REQUEST["March31price"];
			 $game1qty = $_REQUEST["March31qty"];
			 $game1subtotal = "$game1price * $game1qty";
			 
			 echo "Game: March 31 #Tickets: " . $game1qty . " Price per ticket: " . $game1price . " for a subtotal of $" . $game1subtotal;
		 }
         if (isset($_REQUEST['game2']))
		 {
			 $game2price = $_REQUEST["April1price"];
			 $game2qty = $_REQUEST["April1qty"];
			 $game2subtotal = "$game2price * $game2qty";
			 
			 echo "Game: April 11 #Tickets: " . $game2qty . " Price per ticket: " . $game2price . " for a subtotal of $" . $game2subtotal;
		 }
         if (isset($_REQUEST['game3']))
		 {
			 $game3price = $_REQUEST["April8price"];
			 $game3qty = $_REQUEST["April8qty"];
			 $game3subtotal = "$game3price * $game3qty";
			 
			 echo "Game: April 8 #Tickets: " . $game3qty . " Price per ticket: " . $game3price . " for a subtotal of $" . $game3subtotal;
		 }
         if (isset($_REQUEST['game4']))
		 {
			 $game4price = $_REQUEST["April14price"];
			 $game4qty = $_REQUEST["April14qty"];
			 $game4subtotal = "$game4price * $game4qty";
			 
			 echo "Game: April 14 #Tickets: " . $game4qty . " Price per ticket: " . $game4price . " for a subtotal of $" . $game4subtotal;
		 }
         if (isset($_REQUEST['game5']))
		 {
			 $game5price = $_REQUEST["April18price"];
			 $game5qty = $_REQUEST["April18qty"];
			 $game5subtotal = "$game5price * $game5qty";
			 
			 echo "Game: April 18 #Tickets: " . $game5qty . " Price per ticket: " . $game5price . " for a subtotal of $" . $game5subtotal;
		 }
         if (isset($_REQUEST['game6']))
		 {
			 $game6price = $_REQUEST["April21price"];
			 $game6qty = $_REQUEST["April21qty"];
			 $game6subtotal = "$game6price * $game6qty";
			 
			 echo "Game: April 21 #Tickets: " . $game6qty . " Price per ticket: " . $game6price . " for a subtotal of $" . $game6subtotal;
		 }
		 $total = $game1subtotal + $game2subtotal + $game3subtotal + $game4subtotal + $game1subtotal + $game6subtotal;
		 echo "<br><br> For a grand total of $" . $total . "<br> Tickets will be held at the box office until one hour before game time!" .
		  "<br><br> A reminder will be sent to you at email address " . $email . " one week in advance of the first game.";
		 
        ?>
    </body>
</html>
