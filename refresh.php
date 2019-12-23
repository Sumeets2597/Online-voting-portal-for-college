<?php
require('connection.php');
// retrieving candidate(s) results based on position
if (isset($_POST['Submit'])){   

  $position = addslashes( $_POST['position'] );
  echo "$position"; 
  if($position=="Soort")
  {
    $results = mysql_query("SELECT * FROM soortincharge where Post='junior deputy secretary post 1'");
   $results1 = mysql_query("SELECT * FROM soortincharge where Post='junior deputy secretary post 2'");
   $results2 = mysql_query("SELECT * FROM soortincharge where Post='junior deputy secretary post 3'");
   $results3 = mysql_query("SELECT * FROM soortincharge where Post='junior deputy secretary post 4'");
   $results4 = mysql_query("SELECT * FROM soortincharge where Post='junior deputy secretary post 5'");
   $results5 = mysql_query("SELECT * FROM soortincharge where Post='senior deputy secretary post 1'");
   $results6 = mysql_query("SELECT * FROM soortincharge where Post='senior deputy secretary post 2'");
   $results7 = mysql_query("SELECT * FROM soortincharge where Post='senior deputy secretary post 3'");
   $results8 = mysql_query("SELECT * FROM soortincharge where Post='senior deputy secretary post 4'");
   $results9 = mysql_query("SELECT * FROM soortincharge where Post='senior deputy secretary post 5'");
   $results10 = mysql_query("SELECT * FROM soortincharge where Post='secretary'");

    $row1 = mysql_fetch_array($results); // for the first candidate
    $row2 = mysql_fetch_array($results); // for the second candidate
    $row3 = mysql_fetch_array($results);
    $row4 = mysql_fetch_array($results1);
    $row5 = mysql_fetch_array($results1);
    $row6 = mysql_fetch_array($results1);
    $row7 = mysql_fetch_array($results2);
    $row8 = mysql_fetch_array($results2);
    $row9 = mysql_fetch_array($results2);
    $row10 = mysql_fetch_array($results3);
    $row11 = mysql_fetch_array($results3);
    $row12 = mysql_fetch_array($results3);
    $row13 = mysql_fetch_array($results4);
    $row14 = mysql_fetch_array($results4);
    $row15 = mysql_fetch_array($results4);
    $row16 = mysql_fetch_array($results5);
    $row17 = mysql_fetch_array($results5);
    $row18 = mysql_fetch_array($results5);
    $row19 = mysql_fetch_array($results6);
    $row20 = mysql_fetch_array($results6);
    $row21 = mysql_fetch_array($results6);
    $row22 = mysql_fetch_array($results7);
    $row23 = mysql_fetch_array($results7);
    $row24 = mysql_fetch_array($results7);
    $row25 = mysql_fetch_array($results8);
    $row26 = mysql_fetch_array($results8);
    $row27 = mysql_fetch_array($results8);
    $row28 = mysql_fetch_array($results9);
    $row29 = mysql_fetch_array($results9);
    $row30 = mysql_fetch_array($results9);
    $row31 = mysql_fetch_array($results10);
    $row32 = mysql_fetch_array($results10);
    $row33 = mysql_fetch_array($results10);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);


    
      if ($row1){
        
      $candidate_name_1=$row1['candidate_name']; // first candidate name
      $candidate_1=$row1['candidate_cvotes'];
       // first candidate votes
      }

      if ($row2){
      $candidate_name_2=$row2['candidate_name']; // second candidate name
      $candidate_2=$row2['candidate_cvotes']; // second candidate votes
      }
      if ($row3){
        
      $candidate_name_3=$row3['candidate_name']; // first candidate name
      $candidate_3=$row3['candidate_cvotes'];
    }
      if ($row4){
       
      $candidate_name_4=$row4['candidate_name']; // first candidate name
      $candidate_4=$row4['candidate_cvotes'];
    }
     if ($row5){
        
      $candidate_name_5=$row5['candidate_name']; // first candidate name
      $candidate_5=$row5['candidate_cvotes'];
    }
     if ($row6){
        
      $candidate_name_6=$row6['candidate_name']; // first candidate name
      $candidate_6=$row6['candidate_cvotes'];
    }
     if ($row7){
        
      $candidate_name_7=$row7['candidate_name']; // first candidate name
      $candidate_7=$row7['candidate_cvotes'];
    }
     if ($row8){
        
      $candidate_name_8=$row8['candidate_name']; // first candidate name
      $candidate_8=$row8['candidate_cvotes'];
    }
     if ($row9){
        
      $candidate_name_9=$row9['candidate_name']; // first candidate name
      $candidate_9=$row9['candidate_cvotes'];
    }
     if ($row10){
        
      $candidate_name_10=$row10['candidate_name']; // first candidate name
      $candidate_10=$row10['candidate_cvotes'];
    }
    if ($row11){
        
      $candidate_name_11=$row11['candidate_name']; // first candidate name
      $candidate_11=$row11['candidate_cvotes'];
    } 
    if ($row12){
        
      $candidate_name_12=$row12['candidate_name']; // first candidate name
      $candidate_12=$row12['candidate_cvotes'];
    } 
    if ($row13){
        
      $candidate_name_13=$row13['candidate_name']; // first candidate name
      $candidate_13=$row13['candidate_cvotes'];
    }
    if ($row14){
        
      $candidate_name_14=$row14['candidate_name']; // first candidate name
      $candidate_14=$row14['candidate_cvotes'];
    } 
    if ($row15){
        
      $candidate_name_15=$row15['candidate_name']; // first candidate name
      $candidate_15=$row15['candidate_cvotes'];
    } 
    if ($row16){
        
      $candidate_name_16=$row16['candidate_name']; // first candidate name
      $candidate_16=$row16['candidate_cvotes'];
    } 
    if ($row17){
        
      $candidate_name_17=$row17['candidate_name']; // first candidate name
      $candidate_17=$row17['candidate_cvotes'];
    } 
    if ($row18){
        
      $candidate_name_18=$row18['candidate_name']; // first candidate name
      $candidate_18=$row18['candidate_cvotes'];
    } 
    if ($row19){
        
      $candidate_name_19=$row19['candidate_name']; // first candidate name
      $candidate_19=$row19['candidate_cvotes'];
    } 
    if ($row20){
        
      $candidate_name_20=$row20['candidate_name']; // first candidate name
      $candidate_20=$row20['candidate_cvotes'];
    } 
    if ($row21){
        
      $candidate_name_21=$row21['candidate_name']; // first candidate name
      $candidate_21=$row21['candidate_cvotes'];
    } 
    if ($row22){
        
      $candidate_name_23=$row22['candidate_name']; // first candidate name
      $candidate_22=$row22['candidate_cvotes'];
    } 
    if ($row23){
        
      $candidate_name_23=$row23['candidate_name']; // first candidate name
      $candidate_23=$row23['candidate_cvotes'];
    } 
    if ($row24){
        
      $candidate_name_24=$row24['candidate_name']; // first candidate name
      $candidate_24=$row24['candidate_cvotes'];
    } 
    if ($row25){
        
      $candidate_name_25=$row25['candidate_name']; // first candidate name
      $candidate_25=$row25['candidate_cvotes'];
    }
        if ($row26){
        
      $candidate_name_26=$row26['candidate_name']; // first candidate name
      $candidate_26=$row26['candidate_cvotes'];
    } 
    if ($row27){
        
      $candidate_name_27=$row27['candidate_name']; // first candidate name
      $candidate_27=$row27['candidate_cvotes'];
    }
    if ($row28){
        
      $candidate_name_28=$row28['candidate_name']; // first candidate name
      $candidate_28=$row28['candidate_cvotes'];
    }  
    if ($row29){
        
      $candidate_name_29=$row29['candidate_name']; // first candidate name
      $candidate_29=$row29['candidate_cvotes'];
    } 
    if ($row30){
        
      $candidate_name_30=$row30['candidate_name']; // first candidate name
      $candidate_30=$row30['candidate_cvotes'];
    } 
    if ($row31){
        
      $candidate_name_31=$row31['candidate_name']; // first candidate name
      $candidate_31=$row31['candidate_cvotes'];
    } 
    if ($row32){
        
      $candidate_name_32=$row32['candidate_name']; // first candidate name
      $candidate_32=$row32['candidate_cvotes'];
    } 
    if ($row33){
        
      $candidate_name_33=$row33['candidate_name']; // first candidate name
      $candidate_33=$row33['candidate_cvotes'];
    } 
   
   
}
elseif($position=='Music')
  {
    $results = mysql_query("SELECT * FROM musicincharge where Post='junior deputy secretary post 1'");
   $results1 = mysql_query("SELECT * FROM musicincharge where Post='junior deputy secretary post 2'");
   $results2 = mysql_query("SELECT * FROM musicincharge where Post='junior deputy secretary post 3'");
   $results3 = mysql_query("SELECT * FROM musicincharge where Post='junior deputy secretary post 4'");
   $results4 = mysql_query("SELECT * FROM musicincharge where Post='junior deputy secretary post 5'");
   $results5 = mysql_query("SELECT * FROM musicincharge where Post='senior deputy secretary post 1'");
   $results6 = mysql_query("SELECT * FROM musicincharge where Post='senior deputy secretary post 2'");
   $results7 = mysql_query("SELECT * FROM musicincharge where Post='senior deputy secretary post 3'");
   $results8 = mysql_query("SELECT * FROM musicincharge where Post='senior deputy secretary post 4'");
   $results9 = mysql_query("SELECT * FROM musicincharge where Post='senior deputy secretary post 5'");
  $results10 = mysql_query("SELECT * FROM musicincharge where Post='secretary'");

    $row1 = mysql_fetch_array($results); // for the first candidate
    $row2 = mysql_fetch_array($results); // for the second candidate
    $row3 = mysql_fetch_array($results);
    $row4 = mysql_fetch_array($results1);
    $row5 = mysql_fetch_array($results1);
    $row6 = mysql_fetch_array($results1);
    $row7 = mysql_fetch_array($results2);
    $row8 = mysql_fetch_array($results2);
    $row9 = mysql_fetch_array($results2);
    $row10 = mysql_fetch_array($results3);
    $row11 = mysql_fetch_array($results3);
    $row12 = mysql_fetch_array($results3);
    $row13 = mysql_fetch_array($results4);
    $row14 = mysql_fetch_array($results4);
    $row15 = mysql_fetch_array($results4);
    $row16 = mysql_fetch_array($results5);
    $row17 = mysql_fetch_array($results5);
    $row18 = mysql_fetch_array($results5);
    $row19 = mysql_fetch_array($results6);
    $row20 = mysql_fetch_array($results6);
    $row21 = mysql_fetch_array($results6);
    $row22 = mysql_fetch_array($results7);
    $row23 = mysql_fetch_array($results7);
    $row24 = mysql_fetch_array($results7);
    $row25 = mysql_fetch_array($results8);
    $row26 = mysql_fetch_array($results8);
    $row27 = mysql_fetch_array($results8);
    $row28 = mysql_fetch_array($results9);
    $row29 = mysql_fetch_array($results9);
    $row30 = mysql_fetch_array($results9);
    $row31 = mysql_fetch_array($results10);
    $row32 = mysql_fetch_array($results10);
    $row33 = mysql_fetch_array($results10);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);


    
      if ($row1){
        
      $candidate_name_1=$row1['candidate_name']; // first candidate name
      $candidate_1=$row1['candidate_cvotes'];
       // first candidate votes
      }

      if ($row2){
      $candidate_name_2=$row2['candidate_name']; // second candidate name
      $candidate_2=$row2['candidate_cvotes']; // second candidate votes
      }
      if ($row3){
        
      $candidate_name_3=$row3['candidate_name']; // first candidate name
      $candidate_3=$row3['candidate_cvotes'];
    }
      if ($row4){
       
      $candidate_name_4=$row4['candidate_name']; // first candidate name
      $candidate_4=$row4['candidate_cvotes'];
    }
     if ($row5){
        
      $candidate_name_5=$row5['candidate_name']; // first candidate name
      $candidate_5=$row5['candidate_cvotes'];
    }
     if ($row6){
        
      $candidate_name_6=$row6['candidate_name']; // first candidate name
      $candidate_6=$row6['candidate_cvotes'];
    }
     if ($row7){
        
      $candidate_name_7=$row7['candidate_name']; // first candidate name
      $candidate_7=$row7['candidate_cvotes'];
    }
     if ($row8){
        
      $candidate_name_8=$row8['candidate_name']; // first candidate name
      $candidate_8=$row8['candidate_cvotes'];
    }
     if ($row9){
        
      $candidate_name_9=$row9['candidate_name']; // first candidate name
      $candidate_9=$row9['candidate_cvotes'];
    }
     if ($row10){
        
      $candidate_name_10=$row10['candidate_name']; // first candidate name
      $candidate_10=$row10['candidate_cvotes'];
    }
    if ($row11){
        
      $candidate_name_11=$row11['candidate_name']; // first candidate name
      $candidate_11=$row11['candidate_cvotes'];
    } 
    if ($row12){
        
      $candidate_name_12=$row12['candidate_name']; // first candidate name
      $candidate_12=$row12['candidate_cvotes'];
    } 
    if ($row13){
        
      $candidate_name_13=$row13['candidate_name']; // first candidate name
      $candidate_13=$row13['candidate_cvotes'];
    }
    if ($row14){
        
      $candidate_name_14=$row14['candidate_name']; // first candidate name
      $candidate_14=$row14['candidate_cvotes'];
    } 
    if ($row15){
        
      $candidate_name_15=$row15['candidate_name']; // first candidate name
      $candidate_15=$row15['candidate_cvotes'];
    } 
    if ($row16){
        
      $candidate_name_16=$row16['candidate_name']; // first candidate name
      $candidate_16=$row16['candidate_cvotes'];
    } 
    if ($row17){
        
      $candidate_name_17=$row17['candidate_name']; // first candidate name
      $candidate_17=$row17['candidate_cvotes'];
    } 
    if ($row18){
        
      $candidate_name_18=$row18['candidate_name']; // first candidate name
      $candidate_18=$row18['candidate_cvotes'];
    } 
    if ($row19){
        
      $candidate_name_19=$row19['candidate_name']; // first candidate name
      $candidate_19=$row19['candidate_cvotes'];
    } 
    if ($row20){
        
      $candidate_name_20=$row20['candidate_name']; // first candidate name
      $candidate_20=$row20['candidate_cvotes'];
    } 
    if ($row21){
        
      $candidate_name_21=$row21['candidate_name']; // first candidate name
      $candidate_21=$row21['candidate_cvotes'];
    } 
    if ($row22){
        
      $candidate_name_23=$row22['candidate_name']; // first candidate name
      $candidate_22=$row22['candidate_cvotes'];
    } 
    if ($row23){
        
      $candidate_name_23=$row23['candidate_name']; // first candidate name
      $candidate_23=$row23['candidate_cvotes'];
    } 
    if ($row24){
        
      $candidate_name_24=$row24['candidate_name']; // first candidate name
      $candidate_24=$row24['candidate_cvotes'];
    } 
    if ($row25){
        
      $candidate_name_25=$row25['candidate_name']; // first candidate name
      $candidate_25=$row25['candidate_cvotes'];
    }
        if ($row26){
        
      $candidate_name_26=$row26['candidate_name']; // first candidate name
      $candidate_26=$row26['candidate_cvotes'];
    } 
    if ($row27){
        
      $candidate_name_27=$row27['candidate_name']; // first candidate name
      $candidate_27=$row27['candidate_cvotes'];
    }
    if ($row28){
        
      $candidate_name_28=$row28['candidate_name']; // first candidate name
      $candidate_28=$row28['candidate_cvotes'];
    }  
    if ($row29){
        
      $candidate_name_29=$row29['candidate_name']; // first candidate name
      $candidate_29=$row29['candidate_cvotes'];
    } 
    if ($row30){
        
      $candidate_name_30=$row30['candidate_name']; // first candidate name
      $candidate_30=$row30['candidate_cvotes'];
    } 
    if ($row31){
        
      $candidate_name_31=$row31['candidate_name']; // first candidate name
      $candidate_31=$row31['candidate_cvotes'];
    } 
    if ($row32){
        
      $candidate_name_32=$row32['candidate_name']; // first candidate name
      $candidate_32=$row32['candidate_cvotes'];
    } 
    if ($row33){
        
      $candidate_name_33=$row33['candidate_name']; // first candidate name
      $candidate_33=$row33['candidate_cvotes'];
    } 
      
   
}
elseif($position=='Cultural')
  {
    $results = mysql_query("SELECT * FROM culturalincharge where Post='junior deputy secretary post 1'");
   $results1 = mysql_query("SELECT * FROM culturalincharge where Post='junior deputy secretary post 2'");
   $results2 = mysql_query("SELECT * FROM culturalincharge where Post='junior deputy secretary post 3'");
   $results3 = mysql_query("SELECT * FROM culturalincharge where Post='junior deputy secretary post 4'");
   $results4 = mysql_query("SELECT * FROM culturalincharge where Post='junior deputy secretary post 5'");
   $results5 = mysql_query("SELECT * FROM culturalincharge where Post='senior deputy secretary post 1'");
   $results6 = mysql_query("SELECT * FROM culturalincharge where Post='senior deputy secretary post 2'");
   $results7 = mysql_query("SELECT * FROM culturalincharge where Post='senior deputy secretary post 3'");
   $results8 = mysql_query("SELECT * FROM culturalincharge where Post='senior deputy secretary post 4'");
   $results9 = mysql_query("SELECT * FROM culturalincharge where Post='senior deputy secretary post 5'");
  $results10 = mysql_query("SELECT * FROM culturalincharge where Post='secretary'");

    $row1 = mysql_fetch_array($results); // for the first candidate
    $row2 = mysql_fetch_array($results); // for the second candidate
    $row3 = mysql_fetch_array($results);
    $row4 = mysql_fetch_array($results1);
    $row5 = mysql_fetch_array($results1);
    $row6 = mysql_fetch_array($results1);
    $row7 = mysql_fetch_array($results2);
    $row8 = mysql_fetch_array($results2);
    $row9 = mysql_fetch_array($results2);
    $row10 = mysql_fetch_array($results3);
    $row11 = mysql_fetch_array($results3);
    $row12 = mysql_fetch_array($results3);
    $row13 = mysql_fetch_array($results4);
    $row14 = mysql_fetch_array($results4);
    $row15 = mysql_fetch_array($results4);
    $row16 = mysql_fetch_array($results5);
    $row17 = mysql_fetch_array($results5);
    $row18 = mysql_fetch_array($results5);
    $row19 = mysql_fetch_array($results6);
    $row20 = mysql_fetch_array($results6);
    $row21 = mysql_fetch_array($results6);
    $row22 = mysql_fetch_array($results7);
    $row23 = mysql_fetch_array($results7);
    $row24 = mysql_fetch_array($results7);
    $row25 = mysql_fetch_array($results8);
    $row26 = mysql_fetch_array($results8);
    $row27 = mysql_fetch_array($results8);
    $row28 = mysql_fetch_array($results9);
    $row29 = mysql_fetch_array($results9);
    $row30 = mysql_fetch_array($results9);
    $row31 = mysql_fetch_array($results10);
    $row32 = mysql_fetch_array($results10);
    $row33 = mysql_fetch_array($results10);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);


    
      if ($row1){
        
      $candidate_name_1=$row1['candidate_name']; // first candidate name
      $candidate_1=$row1['candidate_cvotes'];
       // first candidate votes
      }

      if ($row2){
      $candidate_name_2=$row2['candidate_name']; // second candidate name
      $candidate_2=$row2['candidate_cvotes']; // second candidate votes
      }
      if ($row3){
        
      $candidate_name_3=$row3['candidate_name']; // first candidate name
      $candidate_3=$row3['candidate_cvotes'];
    }
      if ($row4){
       
      $candidate_name_4=$row4['candidate_name']; // first candidate name
      $candidate_4=$row4['candidate_cvotes'];
    }
     if ($row5){
        
      $candidate_name_5=$row5['candidate_name']; // first candidate name
      $candidate_5=$row5['candidate_cvotes'];
    }
     if ($row6){
        
      $candidate_name_6=$row6['candidate_name']; // first candidate name
      $candidate_6=$row6['candidate_cvotes'];
    }
     if ($row7){
        
      $candidate_name_7=$row7['candidate_name']; // first candidate name
      $candidate_7=$row7['candidate_cvotes'];
    }
     if ($row8){
        
      $candidate_name_8=$row8['candidate_name']; // first candidate name
      $candidate_8=$row8['candidate_cvotes'];
    }
     if ($row9){
        
      $candidate_name_9=$row9['candidate_name']; // first candidate name
      $candidate_9=$row9['candidate_cvotes'];
    }
     if ($row10){
        
      $candidate_name_10=$row10['candidate_name']; // first candidate name
      $candidate_10=$row10['candidate_cvotes'];
    }
    if ($row11){
        
      $candidate_name_11=$row11['candidate_name']; // first candidate name
      $candidate_11=$row11['candidate_cvotes'];
    } 
    if ($row12){
        
      $candidate_name_12=$row12['candidate_name']; // first candidate name
      $candidate_12=$row12['candidate_cvotes'];
    } 
    if ($row13){
        
      $candidate_name_13=$row13['candidate_name']; // first candidate name
      $candidate_13=$row13['candidate_cvotes'];
    }
    if ($row14){
        
      $candidate_name_14=$row14['candidate_name']; // first candidate name
      $candidate_14=$row14['candidate_cvotes'];
    } 
    if ($row15){
        
      $candidate_name_15=$row15['candidate_name']; // first candidate name
      $candidate_15=$row15['candidate_cvotes'];
    } 
    if ($row16){
        
      $candidate_name_16=$row16['candidate_name']; // first candidate name
      $candidate_16=$row16['candidate_cvotes'];
    } 
    if ($row17){
        
      $candidate_name_17=$row17['candidate_name']; // first candidate name
      $candidate_17=$row17['candidate_cvotes'];
    } 
    if ($row18){
        
      $candidate_name_18=$row18['candidate_name']; // first candidate name
      $candidate_18=$row18['candidate_cvotes'];
    } 
    if ($row19){
        
      $candidate_name_19=$row19['candidate_name']; // first candidate name
      $candidate_19=$row19['candidate_cvotes'];
    } 
    if ($row20){
        
      $candidate_name_20=$row20['candidate_name']; // first candidate name
      $candidate_20=$row20['candidate_cvotes'];
    } 
    if ($row21){
        
      $candidate_name_21=$row21['candidate_name']; // first candidate name
      $candidate_21=$row21['candidate_cvotes'];
    } 
    if ($row22){
        
      $candidate_name_23=$row22['candidate_name']; // first candidate name
      $candidate_22=$row22['candidate_cvotes'];
    } 
    if ($row23){
        
      $candidate_name_23=$row23['candidate_name']; // first candidate name
      $candidate_23=$row23['candidate_cvotes'];
    } 
    if ($row24){
        
      $candidate_name_24=$row24['candidate_name']; // first candidate name
      $candidate_24=$row24['candidate_cvotes'];
    } 
    if ($row25){
        
      $candidate_name_25=$row25['candidate_name']; // first candidate name
      $candidate_25=$row25['candidate_cvotes'];
    }
        if ($row26){
        
      $candidate_name_26=$row26['candidate_name']; // first candidate name
      $candidate_26=$row26['candidate_cvotes'];
    } 
    if ($row27){
        
      $candidate_name_27=$row27['candidate_name']; // first candidate name
      $candidate_27=$row27['candidate_cvotes'];
    }
    if ($row28){
        
      $candidate_name_28=$row28['candidate_name']; // first candidate name
      $candidate_28=$row28['candidate_cvotes'];
    }  
    if ($row29){
        
      $candidate_name_29=$row29['candidate_name']; // first candidate name
      $candidate_29=$row29['candidate_cvotes'];
    } 
    if ($row30){
        
      $candidate_name_30=$row30['candidate_name']; // first candidate name
      $candidate_30=$row30['candidate_cvotes'];
    } 
    if ($row31){
        
      $candidate_name_31=$row31['candidate_name']; // first candidate name
      $candidate_31=$row31['candidate_cvotes'];
    } 
    if ($row32){
        
      $candidate_name_32=$row32['candidate_name']; // first candidate name
      $candidate_32=$row32['candidate_cvotes'];
    } 
    if ($row33){
        
      $candidate_name_33=$row33['candidate_name']; // first candidate name
      $candidate_33=$row33['candidate_cvotes'];
    }
}
elseif($position=='Sports')
  {
    $results = mysql_query("SELECT * FROM sportsincharge where Post='junior deputy secretary post 1'");
   $results1 = mysql_query("SELECT * FROM sportsincharge where Post='junior deputy secretary post 2'");
   $results2 = mysql_query("SELECT * FROM sportsincharge where Post='junior deputy secretary post 3'");
   $results3 = mysql_query("SELECT * FROM sportsincharge where Post='junior deputy secretary post 4'");
   $results4 = mysql_query("SELECT * FROM sportsincharge where Post='junior deputy secretary post 5'");
   $results5 = mysql_query("SELECT * FROM sportsincharge where Post='senior deputy secretary post 1'");
   $results6 = mysql_query("SELECT * FROM sportsincharge where Post='senior deputy secretary post 2'");
   $results7 = mysql_query("SELECT * FROM sportsincharge where Post='senior deputy secretary post 3'");
   $results8 = mysql_query("SELECT * FROM sportsincharge where Post='senior deputy secretary post 4'");
   $results9 = mysql_query("SELECT * FROM sportsincharge where Post='senior deputy secretary post 5'");
  $results10 = mysql_query("SELECT * FROM sportsincharge where Post='secretary'");

    $row1 = mysql_fetch_array($results); // for the first candidate
    $row2 = mysql_fetch_array($results); // for the second candidate
    $row3 = mysql_fetch_array($results);
    $row4 = mysql_fetch_array($results1);
    $row5 = mysql_fetch_array($results1);
    $row6 = mysql_fetch_array($results1);
    $row7 = mysql_fetch_array($results2);
    $row8 = mysql_fetch_array($results2);
    $row9 = mysql_fetch_array($results2);
    $row10 = mysql_fetch_array($results3);
    $row11 = mysql_fetch_array($results3);
    $row12 = mysql_fetch_array($results3);
    $row13 = mysql_fetch_array($results4);
    $row14 = mysql_fetch_array($results4);
    $row15 = mysql_fetch_array($results4);
    $row16 = mysql_fetch_array($results5);
    $row17 = mysql_fetch_array($results5);
    $row18 = mysql_fetch_array($results5);
    $row19 = mysql_fetch_array($results6);
    $row20 = mysql_fetch_array($results6);
    $row21 = mysql_fetch_array($results6);
    $row22 = mysql_fetch_array($results7);
    $row23 = mysql_fetch_array($results7);
    $row24 = mysql_fetch_array($results7);
    $row25 = mysql_fetch_array($results8);
    $row26 = mysql_fetch_array($results8);
    $row27 = mysql_fetch_array($results8);
    $row28 = mysql_fetch_array($results9);
    $row29 = mysql_fetch_array($results9);
    $row30 = mysql_fetch_array($results9);
    $row31 = mysql_fetch_array($results10);
    $row32 = mysql_fetch_array($results10);
    $row33 = mysql_fetch_array($results10);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);
    $row15 = mysql_fetch_array($results11);


    
      if ($row1){
        
      $candidate_name_1=$row1['candidate_name']; // first candidate name
      $candidate_1=$row1['candidate_cvotes'];
       // first candidate votes
      }

      if ($row2){
      $candidate_name_2=$row2['candidate_name']; // second candidate name
      $candidate_2=$row2['candidate_cvotes']; // second candidate votes
      }
      if ($row3){
        
      $candidate_name_3=$row3['candidate_name']; // first candidate name
      $candidate_3=$row3['candidate_cvotes'];
    }
      if ($row4){
       
      $candidate_name_4=$row4['candidate_name']; // first candidate name
      $candidate_4=$row4['candidate_cvotes'];
    }
     if ($row5){
        
      $candidate_name_5=$row5['candidate_name']; // first candidate name
      $candidate_5=$row5['candidate_cvotes'];
    }
     if ($row6){
        
      $candidate_name_6=$row6['candidate_name']; // first candidate name
      $candidate_6=$row6['candidate_cvotes'];
    }
     if ($row7){
        
      $candidate_name_7=$row7['candidate_name']; // first candidate name
      $candidate_7=$row7['candidate_cvotes'];
    }
     if ($row8){
        
      $candidate_name_8=$row8['candidate_name']; // first candidate name
      $candidate_8=$row8['candidate_cvotes'];
    }
     if ($row9){
        
      $candidate_name_9=$row9['candidate_name']; // first candidate name
      $candidate_9=$row9['candidate_cvotes'];
    }
     if ($row10){
        
      $candidate_name_10=$row10['candidate_name']; // first candidate name
      $candidate_10=$row10['candidate_cvotes'];
    }
    if ($row11){
        
      $candidate_name_11=$row11['candidate_name']; // first candidate name
      $candidate_11=$row11['candidate_cvotes'];
    } 
    if ($row12){
        
      $candidate_name_12=$row12['candidate_name']; // first candidate name
      $candidate_12=$row12['candidate_cvotes'];
    } 
    if ($row13){
        
      $candidate_name_13=$row13['candidate_name']; // first candidate name
      $candidate_13=$row13['candidate_cvotes'];
    }
    if ($row14){
        
      $candidate_name_14=$row14['candidate_name']; // first candidate name
      $candidate_14=$row14['candidate_cvotes'];
    } 
    if ($row15){
        
      $candidate_name_15=$row15['candidate_name']; // first candidate name
      $candidate_15=$row15['candidate_cvotes'];
    } 
    if ($row16){
        
      $candidate_name_16=$row16['candidate_name']; // first candidate name
      $candidate_16=$row16['candidate_cvotes'];
    } 
    if ($row17){
        
      $candidate_name_17=$row17['candidate_name']; // first candidate name
      $candidate_17=$row17['candidate_cvotes'];
    } 
    if ($row18){
        
      $candidate_name_18=$row18['candidate_name']; // first candidate name
      $candidate_18=$row18['candidate_cvotes'];
    } 
    if ($row19){
        
      $candidate_name_19=$row19['candidate_name']; // first candidate name
      $candidate_19=$row19['candidate_cvotes'];
    } 
    if ($row20){
        
      $candidate_name_20=$row20['candidate_name']; // first candidate name
      $candidate_20=$row20['candidate_cvotes'];
    } 
    if ($row21){
        
      $candidate_name_21=$row21['candidate_name']; // first candidate name
      $candidate_21=$row21['candidate_cvotes'];
    } 
    if ($row22){
        
      $candidate_name_23=$row22['candidate_name']; // first candidate name
      $candidate_22=$row22['candidate_cvotes'];
    } 
    if ($row23){
        
      $candidate_name_23=$row23['candidate_name']; // first candidate name
      $candidate_23=$row23['candidate_cvotes'];
    } 
    if ($row24){
        
      $candidate_name_24=$row24['candidate_name']; // first candidate name
      $candidate_24=$row24['candidate_cvotes'];
    } 
    if ($row25){
        
      $candidate_name_25=$row25['candidate_name']; // first candidate name
      $candidate_25=$row25['candidate_cvotes'];
    }
        if ($row26){
        
      $candidate_name_26=$row26['candidate_name']; // first candidate name
      $candidate_26=$row26['candidate_cvotes'];
    } 
    if ($row27){
        
      $candidate_name_27=$row27['candidate_name']; // first candidate name
      $candidate_27=$row27['candidate_cvotes'];
    }
    if ($row28){
        
      $candidate_name_28=$row28['candidate_name']; // first candidate name
      $candidate_28=$row28['candidate_cvotes'];
    }  
    if ($row29){
        
      $candidate_name_29=$row29['candidate_name']; // first candidate name
      $candidate_29=$row29['candidate_cvotes'];
    } 
    if ($row30){
        
      $candidate_name_30=$row30['candidate_name']; // first candidate name
      $candidate_30=$row30['candidate_cvotes'];
    } 
    if ($row31){
        
      $candidate_name_31=$row31['candidate_name']; // first candidate name
      $candidate_31=$row31['candidate_cvotes'];
    } 
    if ($row32){
        
      $candidate_name_32=$row32['candidate_name']; // first candidate name
      $candidate_32=$row32['candidate_cvotes'];
    } 
    if ($row33){
        
      $candidate_name_33=$row33['candidate_name']; // first candidate name
      $candidate_33=$row33['candidate_cvotes'];
    }
      
   
}
}
    else
        // do nothing
?> 
<?php
// retrieving positions sql query
$positions=mysql_query("SELECT * FROM tbPositions")
or die("There are no records to display ... \n" . mysql_error()); 
?>
<?php
session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['username'])){
 header("location:access-denied.php");
}
?>

<?php if(isset($_POST['Submit'])){$totalvotes=$candidate_1+$candidate_2;} ?>


<!DOCTYPE html>

<html>
<head>
<title>online voting</title>


<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script language="JavaScript" src="js/admin.js">
</script>

</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
  
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="https://uk.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="https://www.rss.com/"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +8801773254014</li>
        <li><i class="fa fa-envelope-o"></i> r.haque.249.rh@gmail.com </li>
      </ul>
    </div>
   
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="refresh.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <li><a href="manage-admins.php">Manage Admin</a></li>
            <li><a href="positions.php">Manage Positions</a></li>
            <li><a href="candidates.php">Manage Candidates</a></li>
            <li><a href="refresh.php">Results</a></li>
          </ul>
        </li>
        
        <li><a href="http://localhost/online_voting/index.php">Voter Panel</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
    
  </header>
</div>

<div >
 
  <div >
    <table width="420" align="center">
    <form name="fmNames" id="fmNames" method="post" action="refresh.php" onSubmit="return positionValidate(this)">
    <tr>
        <td style="color:#000000";>Choose Position</td>
        <td><SELECT NAME="position" id="position">
        <OPTION  VALUE="select"><p style="color:black";>select</p>
        <?php 
        //loop through all table rows
        while ($row=mysql_fetch_array($positions)){
          echo "<OPTION VALUE=$row[position_name]>$row[position_name]"; 
        }
        ?>
        </SELECT></td>
        <td style="color:black";><input type="submit" name="Submit" value="See Results" /></td>
    </tr>
    <tr>
     
        
    </tr>
    </form> 
    </table>
    <h1><center><b>Junior Deputy Secretary Post 1</b></center></h1>
   <?php if(isset($_POST['Submit'])){ echo $candidate_name_1;} ?>:<br>
    <img src="images/candidate-1.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit']))if(isset($_POST['Submit'])) ?>
   <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_1;} ?>
    <br>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_2;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit']))if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_2;} ?>
    <br>
     <br>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_3;} ?>:<br>
    <img src="images/candidate-1.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_3;} ?>
    <br>
    <h1><center><b>Junior Deputy Secretary Post 2</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_4;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_4;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_5;} ?>:<br>
    <img src="images/candidate-1.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_5;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_6;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_6;} ?>
    <br>
    <h1><center><b>Junior Deputy Secretary Post 3</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_7;} ?>:<br>
    <img src="images/candidate-1.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_7;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_8;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_8;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_9;} ?>:<br>
    <img src="images/candidate-1.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_9;} ?>
    <br>
    <h1><center><b>Junior Deputy Secretary Post 4</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_10;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_10;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_11;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_11;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_12;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_12;} ?>
    <br>

    <h1><center><b>Junior Deputy Secretary Post 5</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_13;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_13;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_14;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_14;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_15;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_15;} ?>
    <br>

    <h1><center><b>Senior Deputy Secretary Post 1</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_16;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_16;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_17;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_17;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_18;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_18;} ?>
    <br>

    <h1><center><b>Senior Deputy Secretary Post 2</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_19;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_19;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_20;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_20;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_21;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_21;} ?>
    <br>

    <h1><center><b>Senior Deputy Secretary Post 3</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_22;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_22;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_23;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_23;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_24;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_24;} ?>
    <br>

    <h1><center><b>Senior Deputy Secretary Post 4</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_25;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_25;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_26;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_26;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_27;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_27;} ?>
    <br>

    <h1><center><b>Senior Deputy Secretary Post 5</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_28;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_28;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_29;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_29;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_30;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_30;} ?>
    <br>

    <h1><center><b>Secretary</b></center></h1>
    <?php if(isset($_POST['Submit'])){ echo $candidate_name_31;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_31;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_32;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_32;} ?>
    <br>

    <?php if(isset($_POST['Submit'])){ echo $candidate_name_33;} ?>:<br>
    <img src="images/candidate-2.gif"
    width='10'
    height='10'>
    <?php if(isset($_POST['Submit'])) if(isset($_POST['Submit'])) ?>
    <br>votes <?php if(isset($_POST['Submit'])){ echo $candidate_33;} ?>
    <br>
    

 



  </div>

</div>


<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
   
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
         
          <p>
          Name        : Md. Rezwanul Haque <br>
          University  : KUET <br>
          Batch       : 2k14 <br>
          Dept        : CSE <br>
          </p>
          </address>
        </li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Phone</h6>
      <ul class="nospace linklist contact">
       
        <li><i class="fa fa-phone"></i> +8801773254014<br>
          +8801521479574</li>


      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Email</h6>
      <ul class="nospace linklist contact">
        
        <li><i class="fa fa-envelope-o"></i> r.haque.249.rh@gmail.com </li>

      </ul>
    </div>

  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Md. Rezwanul Haque</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
   
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>

