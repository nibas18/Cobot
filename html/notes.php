<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href='https://fonts.googleapis.com/css?family=Pathway Gothic One' rel='stylesheet'>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</head>
<style>
body{font-family: Roboto;}
.content{
	background-color:rgba(255, 255, 255, 1);
	width:375px;
	height:812px;
	position:absolute;
	left: 154px;
	top: 75px;
    border: 1px solid black;
}
.task_list{
	position: absolute;
	left: -1px;
	top: 426px;
	width: 367px;
	height: 381px;
	background-color: #FFFFFF;
	border-top:5px solid #1A1487;
	border-right:5px solid #1A1487;
	border-left:5px solid #1A1487;
	border-top-left-radius:40px;
	border-top-right-radius:40px;
	display: block;
}
.top_line{
	background-color:#9F9CCC;
	width: 135px;
	height: 4px;
}
.task_title{
	color: #1A1487;
	font-size: 24px;
	line-height: 28px;
	font-weight: bold;
	position: absolute;
	width: 149px;
	height: 28px;
	left: 106px;
	top: 3px;
}
.hr_line{
	background-color:#C4C4C4;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	position: relative;
	margin-top: 55px;
}
.the_list{
    height: 292px;
    width: 360px;
    overflow-y: scroll;
}
.each_task{
    height: 90px;
    width: 341px;
}
div #x{
	font-size:30px;
	position: relative;
    left: 300px;
    top: 26px;
}
div #assignments{
	font-size:35px;
    position: relative;
    top: 30px;
    color: #9796D4;  
}
.task_txt{
	color: #1A1487;
    font-weight: bold;
	position: relative;
    left: 90px;
    top: -34px;
    width: 200px;
}
.underlines{
	background-color:#C4C4C4;
	box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25);
	position: relative;
	top: 0px;
}

</style>
<body>

<div class="content">
	<div id="overall_task_list" class="task_list">
		<hr class="top_line">
    	<p class="task_title">Lists of Tasks</p>
    	<hr class="hr_line">
    	<div class="the_list">
    		<div class="each_task">
    			<i id="x" class="iconify" data-icon="bi:x"></i>
        		<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            	<div class="task_txt">
                	<p class="rt">Task 1:</p>
                	<li>Cleaning Zone 3</li>
            	</div>
        	</div>
            <hr class="underlines">
        
        	<div class="each_task">
    			<i id="x" class="iconify" data-icon="bi:x"></i>
        		<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            	<div class="task_txt">
                	<p class="rt">Task 1:</p>
                	<li>Cleaning Zone 3</li>
            	</div>
        	</div>
            <hr class="underlines">
        
        	<div class="each_task">
    			<i id="x" class="iconify" data-icon="bi:x"></i>
        		<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            	<div class="task_txt">
                	<p class="rt">Task 1:</p>
                	<li>Cleaning Zone 3</li>
            	</div>
        	</div>
            <hr class="underlines">
        
        	<div class="each_task">
    			<i id="x" class="iconify" data-icon="bi:x"></i>
        		<i id="assignments" class="iconify" data-icon="ic:baseline-assignment"></i>
            	<div class="task_txt">
                	<p class="rt">Task 1:</p>
                	<li>Cleaning Zone 3</li>
            	</div>
        	</div>
            <hr class="underlines">
    	
    	</div>
	</div>
</div>


</body>
</html>
