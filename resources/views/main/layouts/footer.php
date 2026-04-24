</div>

	@include('main.modals.searchModal')
	@include('main.modals.notificationsModal')

	</body>

	<script>
		document.addEventListener('DOMContentLoaded', function(){
			document.querySelectorAll('.btnStarts').forEach(btnStart => {
                const id = btnStart.dataset.zone;
                const zone = document.querySelector('.zone-' + id);

                btnStart.addEventListener('click', function(){
                	zone.classList.remove('hidden');
                });
			})
		});

		document.addEventListener('DOMContentLoaded', function(){
			document.querySelectorAll('.zoneBacks').forEach(zoneBack =>{
				const id = zoneBack.dataset.zone;
                const zone = document.querySelector('.zone-' + id);

				zoneBack.addEventListener('click', function(){
					zone.classList.add('hidden')
				});

			// // Clic en dehors → cacher aussi
			//         document.addEventListener('click', function(e){
			//             if (!zone.classList.contains('hidden') && 
			//                 !zone.contains(e.target) && 
			//                 !zoneBack.contains(e.target)) {
			//                 zone.classList.add('hidden'); // <-- correction ici
			//             }
			//         });
			})
		})
	</script>
</html>