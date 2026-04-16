    <script id="notifications">
        
        document.addEventListener('DOMContentLoaded', function() {

            function showNotification(message, type = 'success') {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-x-full ${
                    type === 'success' ? 'bg-green-500/30 backdrop-blur-md text-white' :
                    type === 'warning' ? 'bg-orange-500/30 backdrop-blur-md text-white' :
                    type === 'error' ? 'bg-red-500/30 backdrop-blur-md text-white' :
                    'bg-blue-500/30 backdrop-blur-md text-white'
                }`;
                notification.textContent = message;
                
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 100);
                
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 300);
                }, 5000);
            }
            @if(session('success'))
                showNotification('{{session('success')}}', 'success');
            @endif

        });
    </script>