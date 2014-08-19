<?php  
$to_do_list = array(); 

// do {
// 	//iterate through each chore on a new line, with a new number each time
// 	foreach ($variable as $key => $value) {
// 		# code...
// 	}
// }
      
do {
	foreach ($to_do_list as $chore => $item) {
		//echo "[{$chore}] {$item + 1}\PHP.EOL";
		$chore ++;
  	    echo "[{$chore}]  {$item}" . PHP_EOL;
	}

    echo '(N)ew chore, (R)emove chore, (Q)uit : ' . PHP_EOL;
    //here, get the info / STDIN from user. Use trim() to clean up

    $input = trim(fgets(STDIN));
    //decipher next action by inut given (STDIN)         
      
   if ($input == 'N' || $input == 'n') {
       	echo 'Enter a new chore : ' . PHP_EOL;
       	//add the (N)ew item to the array
        
       $items[] = trim(fgets(STDIN));

    } elseif ($input == 'R' || $input == 'r') {
       	//prompt user for more input (which $item to remove; with echo)

       	echo 'Which chore would you like to remove? ' . PHP_EOL;

       	//find array $key to remove from array. 

       	     $chore = trim(fgets(STDIN));
       	     $chore-- ;
             unset($items[$chore]);
             //remove $key. 


  }
} while ($input != 'Q' && $input != 'q');
echo "Goodbye!\PHP.EOL";
?>
