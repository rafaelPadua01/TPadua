<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv="X-UA-Compatible" content='ie=edge'>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Vue Spa Demo</title>
	
</head>
<body>
	
	
	<div class='container'>
	<div id="app">
		<app></app>
	</div>
	<script src="{{ elixir('js/app.js') }}"></script>
	</div>
	
	<div class='container'>
	Gostaria de receber nossas notificações de atualização ?
	<br>
	
	<button type='button' id='btn_permission'>Permission</button>
	
	<button type='button' id='btn_push'>Push Notification</button>
	<script>
		var btnPermission = document.getElementById('btn_permission');
		
		if(Notification.permission !== 'default')
		{
			btnPermission.style.display = 'none';
		}
		else
		{
			btnPermission.style.display = 'inline-block';
		}
		
		btnPermission.onclick = evt => {
			Notification.requestPermission();
		}
		
		function spawnNotification(opcoes)
		{
			var n = new Notification(opcoes.title, opcoes.opt);
			
			if(opcoes.link !== '')
			{
				n.addEventListener('click', function(){
					n.close();
					window.focus();
					window.location.href = opcoes.link;
					
				});
			}
		}
		
		document.getElementById('btn_push').onclick = evt => {
			spawnNotification({
				opt: {
					body: 'Criando Nova Notificação',
					icon: 'public/img/icon/tio01.jpg'
				},
				title: 'Olá, Tuisahudsa',
				link: 'Https://www.google.com.br'
				
			})
		}
	</script>

</body>
</html>