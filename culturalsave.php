<?php
		require('connection.php');
		$vote = $_REQUEST['vote'];
		
		mysql_query("UPDATE culturalincharge SET candidate_cvotes=candidate_cvotes+1 WHERE candidate_name='$vote'");
		mysql_query("UPDATE culturalincharge SET candidate_cvotes=candidate_cvotes+1 WHERE candidate_name='$vote1'");
		
		mysql_close($con);
?> 