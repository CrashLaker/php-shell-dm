<html>
<head>

	<script type="text/javascript" src="./jquery.js"></script>
	<script type="text/javascript">
		function send(folder){
			var link = $("#link").val();
			$.get("download.php?folder="+folder+"&link="+link);
			$("#link").val("");
		}
		function add(){
			var folder = $("#folder").val();
			//alert(folder);
			$.get("add_folder.php?folder="+folder);
			$("#folder").val("");
			$("#folders").append("<li onclick=\"send('"+folder+"');\">"+folder+"</li>");
		}
		function refreshtable(){
			$.get("gettable.php", function (data){
				//alert(data);
				if (data == 0){
					$("#list").html("<li>Nothing downloading...</li>");
				}else{
					data = data.split("\n");
					$("#list").html("");
					for (i = 0; i < data.length; i++){
						$("#list").append("<li>"+data[i]+"</li>");
					}
				}
			});
		}
	</script>
</head>
<body>
	<input type="text" id="link"/><br>
	<ul id="folders">
		<?php
			$folders = file("folders.txt");
			foreach($folders as $folder){
				$folder = chop($folder);
				if (empty($folder)) continue;
				?>
					<li onclick="send('<?php echo $folder; ?>');"><?php echo $folder; ?></li>
				<?php
			}
		?>
	</ul>
	<input type="text" id="folder"/><button onclick="add();">add folder</button>
	<hr>
	<ul id="list">

	</ul>	



	<script type="text/javascript">
		setInterval(function(){ refreshtable(); }, 1000);
	</script>	

</body>
</html>
