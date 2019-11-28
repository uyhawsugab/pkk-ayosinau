<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	
</body>

<script>

//Tampil Modul

	$.getJSON("<?=base_url()?>getModul", function(data){
		let content = "";
		$.each(data,function(key,dt) {
			content+= '<div class="col-md-3 card">'+
			'<img src="<?=base_url('assets/uploads/modul')?>'+dt['gambar']+'" class="card-img-top" alt="">'+
			'<div class="card-body">'+
			'<h5 class="card-title">'+dt['nama_modul']+'</h5>'+
			'<p class="card-text">Harga Modul :'+dt['harga']+'</p>'+
			'<p class="card-text">Status :'+dt['status']+'</p>'+
			'<p class="card-text">Stok :'+dt['stok']+'</p>'+
			'<p class="card-text">Jenis Modul :'+dt['jenis_modul']+'</p>'+
			'<p class="card-text">Mapel Modul:'+dt['mapel']+'</p>'+
			'<a class="btn btn-primary" href="#detail" data-toggle="modal" onclick="tmDet('+dt['id_modul']+')">'+
			'</div>'+
			'</div>';
			
		});
		$("#showModul").html(content);
	});





</script>

</html>
