
	<!-- Slider Bar Starst -->
	<div class="slider container1">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <div class="slide first ">
                    <img src="images/slider4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/slider2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/slider3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/slider1.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
        <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter>4){
                counter = 1;
            }
        }, 5000);
        </script>
        <br/><br/>
    <!-- Slider Bar End -->