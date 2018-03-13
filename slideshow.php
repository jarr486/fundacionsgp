<!--Iniciar plugin slider-->
<script src="Scripts/slide/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="Scripts/slide/js/jssor.slider-21.1.5.mini.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        
        var jssor_1_SlideoTransitions = [
          [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
          [{b:1900,d:2000,x:-379,e:{x:7}}],
          [{b:1900,d:2000,x:-379,e:{x:7}}],
          [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
        ];
        
        var jssor_1_options = {
          $AutoPlay: true,
          $SlideDuration: 800,
          $SlideEasing: $Jease$.$OutQuint,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };
        
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
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
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
    
</script>
<!--fin plugin slider-->

<section id="slideshow">
    <? if($slideActivo=='home'){ ?>
       <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='1' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <? if($seccion['comentario']==''){ ?>
                       <img data-u="image" src="<?=$seccion['imagen']?>" />
                    <? }else{ ?>
                       <a href="<?=$seccion['comentario'];?>"><img data-u="image" src="<?=$seccion['imagen']?>" /></a>
                    <? } ?>
                    
                    <? if($seccion['nombre']!=''){ ?>
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    <? } ?>
                    
                </div>
                <?
                    }
                ?>


            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
    <? } ?>


    <? if($slideActivo=='mecanica'){ ?>
       <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='6' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>


            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
       
    <? } ?>


     <? if($slideActivo=='electricidad'){ ?>
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='7' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
        
    <? } ?>


    <? if($slideActivo=='cocina'){ ?>
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='8' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
      
    <? } ?>


    <? if($slideActivo=='peluqueria'){ ?>
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='9' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
       
    <? } ?>


    <? if($slideActivo=='contabilidad'){ ?>
         <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='10' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
        
        
    <? } ?>

    <? if($slideActivo=='metalmecanica'){ ?>
         <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='11' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
        
        
    <? } ?>

    <? if($slideActivo=='soldadura'){ ?>
         <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='12' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
        
        
    <? } ?>

    <? if($slideActivo=='sistemas'){ ?>
         <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='13' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
        
        
    <? } ?>
    
    <? if($slideActivo=='grafico'){ ?>
         <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='14' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
        
        
    <? } ?>
    
    <? if($slideActivo=='confeccion'){ ?>
         <div id="jssor_1" style="position: relative; margin: 0 auto; top: -18px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('Scripts/slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

                <?
                    $secciones=query("SELECT * FROM fotos WHERE album='15' ORDER BY id");
                    while($seccion=mysql_fetch_array($secciones)){
                ?>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="<?=$seccion['imagen']?>" />
                    
                    <div style="font-family: 'Trebuchet MS',Helvetica,sans-serif; position: absolute; top: 340px; left: 100px; width: 680px; padding: 5px; height: 30px; font-size: 20px; color: #333333; line-height: 38px; background-color: #ffffff; opacity: 0.6;filter: alpha(opacity=60); /* For IE8 and earlier */">
                        <?=utf8_encode($seccion['nombre']);?>
                    </div>
                    
                </div>
                <?
                    }
                ?>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <!-- #endregion Jssor Slider End -->
        
        
    <? } ?>

</section>