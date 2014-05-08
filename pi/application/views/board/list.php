
<div>
	<a href="/index.php/board/write"><button>write</button></a>
</div>

<div style="padding:40px;margin-bottom:40px;margin-left:40px;margin-right:40px; background:#EC971F;" >
	
	
		<div class="row">
		  <div class="col-md-1">No</div>
		  <div class="col-md-2">Name</div>
		  <div class="col-md-7">Subject</div>
		  <div class="col-md-2">Date</div>
		</div>
		
		
		
		<?PHP foreach($item as $obj):?>
		
		<div class="row">
				
		  <div class="col-md-1"><h5><?PHP echo $obj->ID?></h5></div>
		  <div class="col-md-2"><h5><?PHP echo $obj->NAME?></h5></div>
		  <div class="col-md-7"><h5><a href="/index.php/board/view/<?PHP echo $obj->ID?>">
		  	<font color=#ffffff>
		  	<?PHP echo $obj->SUBJECT?></font></h5> </a></div>
		  <div class="col-md-2"><h7><?PHP echo $obj->REG_DT?></h7></div>
		 
		</div>
		
		<?PHP endforeach;?>
		
	
</div>

