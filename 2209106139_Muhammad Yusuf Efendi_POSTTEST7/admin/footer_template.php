<script type="text/javascript">
            
            var btnBars = document.getElementById('btnBars')
            var sidebar = document.querySelector(".sidebar")

            btnBars.addEventListener('click', function(e){
                e.preventDefault();

                sidebar.classList.toggle('sidebar-show')   
            })

            function updateDateTimeZone() {
            const now = new Date();

            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                timeZoneName: 'short'
            };

            document.getElementById('datetimeZone').innerText = now.toLocaleDateString('id-ID', options) + ', ' + now.toLocaleTimeString('id-ID', { timeZoneName: 'short' });
        }

        setInterval(updateDateTimeZone, 1000);  // Update setiap detik
        updateDateTimeZone();
        </script>
</body>
</html>