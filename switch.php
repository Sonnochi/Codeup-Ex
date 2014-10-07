<?php

// Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
     	echo "Monday\n";
     	break;
         // Output Monday
     case 2:
     	echo "Tuesday\n";
     	break;
         // Output Tuesday
     case 3:
     	echo "Wednesday\n";
     	break;
     	//Output Wednesday
     case 4:
     	echo "Thursday\n";
     	break;
     	//Output Thursday
     case 5:
     	echo "Friday\n";
     	break;
     	//Output Friday
     case 6:
     	echo "Saturday\n";
     	break;
     	//Output Saturday
     case 7:
     	echo "Sunday\n";
     	break;
     	//Output Sunday

 }
