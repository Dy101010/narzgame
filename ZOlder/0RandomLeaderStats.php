<?php
  $start_num = 2;
  $end_num = 20;
  
  $down_num = 1;
  $finish_num = 1;
  
  $two_num = 2;
  $three_num = 3;
  $four_num = 4;
  
  
  mt_srand((double)microtime()*1000000);
?>
<HTML>
<HEAD>
<TITLE>World Conquest : Random Stats</TITLE>
</HEAD>
<BODY>
<H2>World Conquest : Random Stats</H2>
<TABLE BORDER=1 align="left">
<?php
  print("<TR>");
  
  	print("<TH>&nbsp&nbsp</TH>");
  
	print("<TH>Gold</TH>");
  		
	print("<TH>Soldiers</TH>");
  		
	print("<TH>Skill</TH>");
	  	
	print("<TH>Economy</TH>");
  		
  		
  	$g=0;
  	$e=0;	
	$s=0;
	$sk=0;





  for ($count_1 = $start_num;
       $count_1 <= $end_num;
       $count_1++)
  {
    print("<TR><TH>$count_1</TH>");
    for ($count_2 = $down_num;
         $count_2 <= $finish_num;
         $count_2++)
      {
        $result = mt_rand(50, 100);
        $g=$g+$result;
        printf("<TD>&nbsp&nbsp  $result &nbsp&nbsp</TD>",
               $result);  // see Chapter 10
      }
      
      
      
      
      
          for ($count_2 = $two_num;
         $count_2 <= $two_num;
         $count_2++)
      {
        $result = mt_rand(37, 123);
        $s=$s+$result;
        printf("<TD>&nbsp&nbsp&nbsp $result &nbsp&nbsp&nbsp</TD>",
               $result);  // see Chapter 10
      }
      
      
      
      
      
           for ($count_2 = $three_num;
         $count_2 <= $three_num;
         $count_2++)
      {
        $result = mt_rand(25, 45);
        $sk=$sk+$result;
                printf("<TD>&nbsp&nbsp&nbsp $result &nbsp&nbsp&nbsp</TD>",
               $result);  // see Chapter 10
      }
      
      
      
                 for ($count_2 = $four_num;
         $count_2 <= $four_num;
         $count_2++)
      {
        $result = mt_rand(175, 325);
        $e=$e+$result;
        printf("<TD>&nbsp&nbsp&nbsp $result &nbsp&nbsp&nbsp</TD>",
               $result);  // see Chapter 10
      }
      
      
      
    print("</TR>\n");
  }
  
print("</TABLE>");


echo("Total World Solidiers &nbsp: $s &nbsp&nbsp&nbsp (average = 1520)<BR>");


  
?>

<br>
<img src="20countryMap.gif" width="475" height="400" align="right">


</BODY>
</HTML>
