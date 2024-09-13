
            document.addEventListener("DOMContentLoaded", function() {
            var loader = document.querySelector('.preloader .percentage');
            var percentage = 0;
        
            var interval = setInterval(function() {
                percentage += 1;
                loader.textContent = percentage + '%';
        
                if (percentage >= 100) {
                    clearInterval(interval);
                    // Hide the preloader or trigger an event when loading is complete
                    document.querySelector('.preloader').style.display = 'none';
                }
            }, 30); // Adjust the interval for how fast the percentage increases
        });