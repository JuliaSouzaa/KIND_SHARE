<x-app-layout>

<script>
        // Function to show the message and then hide it
        window.onload = function() {
            const message = document.getElementById('login-message');
            message.style.display = 'block';
            setTimeout(() => {
                message.style.display = 'none';
            }, 3000); // 3 seconds
        };
</script>
</x-app-layout>
