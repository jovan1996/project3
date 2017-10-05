 <script src="app/style/javaScript/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
 <script type="text/javascript">
        jssor_1_slider_init = function() {
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;

            margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;

            bottom:16px;right:16px;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/slider/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/slider/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }



    .jsorglavni{
        position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;
    }

    .jssorl-oval{
        position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);
    }
    .jsorload{
        cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;
    }
    .jsorprvi{
         position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);
    }
    .jsorprvidrugi{
        position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;
    }
    .jsorprvitreci{
        position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;
    }
    .jsorprvicetvrti{
        position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);
    }
    .jsorprvipeti{
        position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;
    }
    .jsorprvisesti{
        position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;
    }
    </style>
<main>
<div id="jssor_1" class="jsorglavni"">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval">
            <img src="images/slider/oval.svg" alt="oval" />
        </div>
        <div data-u="slides" class="jsorload">
             <div>
                <img data-u="image" src="images/purple.jpg" alt="purple back" />
                <div class="jsorprvi">
                    <div class="jsorprvidrugi">Why is good nutrition important?</div>
                    <div class="jsorprvitreci">MyShop=Sleep + Nutrition + Workout!</div>
                </div>
               

            </div>

            <div>
                <img data-u="image" src="images/blue.jpg" alt="blue back" />
                <div class="jsorprvi">
                    <div class="jsorprvidrugi">You are your only limit!</div>
                    <div class="jsorprvitreci"></div>
                </div>
                <div class="jsorprvicetvrti">
                    <div class="jsorprvipeti">A little progress each day adds up to big results</div>
                               </div>
            </div>
          
            <div>
                <img data-u="image" src="images/red.jpg" alt="red back" />
                 <div class="jsorprvicetvrti">
                     <div class="jsorprvisesti">BE SO GOOD THEY CANT IGNORE YOU.</div>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l"  style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    </main>
   
<br/><br/>
<section class="homeheader">
<h2 class="grid-12">Why is good nutrition important? </h2></section>
<section class="container-fluid">
    <br/>

<article class="grid-tl-4 grid-t-12">
<h3>1. You are more <i>productive</i> MyShop!</h3>
<p>Protein rich food provide you the amino acids, which are necessary for your brain to be well-functioning. Healthy food helps your concentration and focus level stay high, thus enabling you to be as productive as possible. When you eat a healthy diet, you help your body and mind function smoothly.</p></article>


<article class="grid-tl-4 grid-t-6">
<h3>2. You enjoy more in life</h3>
<p>Nutrient dense food provide energy for your body, adding more quality to your day-to-day life. Proper nutrition strengthens your immune sistem, helps you increase your lifespan and keeps you healthy as you age. It also helps you avoid the bad effects of yo-yo dieting, such as food cravings that lead to binge eating. When we make the choice to eat better and healthier, we begin to feel better about ourselves and our body.</p></article>
<article class="grid-tl-4 grid-t-6">
<h3>3. You are <i>happier</i></h3>
<p>A good nutrition is composed of a perfect balance of healthy meals and appropriate supplements.But its effects are not merely physical; a proper nutrition effects your mental health as well. Research in the fields of neuroscience and nutrition show that people who eat a diet of modern processed foods have increased levels of depression, anxiety, mood swings, hyperactivity, and a variety of other mental and emotional problems. To form and keep a healthy brain be sure to eat a balanced diet with supplements, vitamins, minerals and fatty acids.</p></article>
</section>