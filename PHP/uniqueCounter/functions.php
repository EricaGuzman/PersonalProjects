<?php
//intialize session counters:

		if(isset($_SESSION['count1']))echo '<br/>You have visited Page 2 => '.($_SESSION['count1']).' times in this session<br/>';
		if(isset($_SESSION['count2']))echo '<br/>You have visited Page 3 =>'.($_SESSION['count2']).' times in this session<br/>';
		if(isset($_SESSION['count3']))echo '<br/>You have visited Page 4 => '.($_SESSION['count3']).' times in this session<br/>';
		if(isset($_SESSION['count4']))echo '<br/>You have visited Page 5 =>'.($_SESSION['count4']).' times in this session';
		
?>