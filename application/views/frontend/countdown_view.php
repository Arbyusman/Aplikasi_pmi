  <!DOCTYPE html>
  <html lang="en">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Countdown Timer</title>
   <style>
    
    #countdown {
      display: flex;
      justify-content: space-around;
      max-width: 600px;
      margin: 50px auto;
      background-color: #333;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .countdown-item {
      text-align: center;
      color: #fff;
    }

    .countdown-item span {
      display: block;
      font-size: 2em;
      font-weight: bold;
    }

    .countdown-item p {
      font-size: 0.8em;
    }

    #countdown-container {
      text-align: center;
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>

  <div id="countdown">
    <div class="countdown-item">
      <span id="months">00</span>
      <p>Months</p>
    </div>
    <div class="countdown-item">
      <span id="days">00</span>
      <p>Days</p>
    </div>
    <div class="countdown-item">
      <span id="hours">00</span>
      <p>Hours</p>
    </div>
    <div class="countdown-item">
      <span id="minutes">00</span>
      <p>Minutes</p>
    </div>
    <div class="countdown-item">
      <span id="seconds">00</span>
      <p>Seconds</p>
    </div>
  </div>

  <script>
   document.addEventListener('DOMContentLoaded', function() {
     var targetDatetime = new Date('<?php echo $targetDatetime; ?>');
     var countdownElement = document.getElementById('countdown');

     function updateCountdown() {
       var now = new Date();
       var difference = targetDatetime - now;

       var days = Math.floor(difference / (1000 * 60 * 60 * 24));
       var months = Math.floor(difference / (1000 * 60 * 60 * 24 * 30.44)); 
       var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
       var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
       var seconds = Math.floor((difference % (1000 * 60)) / 1000);

           // Update HTML elements with the calculated values
           document.getElementById('days').innerText = formatTime(days);
           document.getElementById('months').innerText = formatTime(months);
           document.getElementById('hours').innerText = formatTime(hours);
           document.getElementById('minutes').innerText = formatTime(minutes);
           document.getElementById('seconds').innerText = formatTime(seconds);
         }

         function formatTime(time) {
           return time < 10 ? '0' + time : time;
         }

       // Initial update and set interval to update every second
       updateCountdown();
       setInterval(updateCountdown, 1000);
     });
   </script>

 </body>
 </html>