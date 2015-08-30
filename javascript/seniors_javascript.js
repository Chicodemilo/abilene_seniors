// JQuery ****************************************************************************
$(document).ready(function() {

    $('.row1').click( function() {
        window.location = $(this).find('a').attr('href');
    }).hover( function() {
        $(this).toggleClass('row1_hover');
    });

    $('.row2').click( function() {
        window.location = $(this).find('a').attr('href');
    }).hover( function() {
        $(this).toggleClass('row2_hover');
    });

    //SEARCH BUTTON 
    $("#search_button").hover(function(){
        $(this).toggleClass('input_hover');
    });

    //SEARCH NEED PICKER 
    $("#need").hover(function(){
        $(this).toggleClass('search_bar_hover');
    });

    //SCROLLBAR PLUGIN
    $(".content").mCustomScrollbar({scrollButtons:{ enable: true }});

    //SEARCH RESULTS BOX RESIZE
    function result_resize() {
      var bodyheight = $(window).height();
      $("#results").height(bodyheight - 345);
    }

    result_resize();

    $(window).resize(result_resize);

    //NAVBAR POINTERS
    function point_at(pointer_num){
        $('#pointer_' + pointer_num).animate({  borderSpacing: -10 }, {
            step: function(now) {
              $(this).css('-webkit-transform','rotate('+now+'deg)'); 
              $(this).css('-moz-transform','rotate('+now+'deg)');
              $(this).css('transform','rotate('+now+'deg)');
            },
            duration:200
        },'swing');
        $('#pointer_' + pointer_num).animate({  borderSpacing: 105 }, {
            step: function(now) {
              $(this).css('-webkit-transform','rotate('+now+'deg)'); 
              $(this).css('-moz-transform','rotate('+now+'deg)');
              $(this).css('transform','rotate('+now+'deg)');
            },
            duration:'fast'
        },'swing');
        $('#pointer_' + pointer_num).animate({  borderSpacing: 90 }, {
            step: function(now) {
              $(this).css('-webkit-transform','rotate('+now+'deg)'); 
              $(this).css('-moz-transform','rotate('+now+'deg)');
              $(this).css('transform','rotate('+now+'deg)');
            },
            duration:50
        },'swing');
    }

    function point_away(pointer_num){
        $('#pointer_' + pointer_num).animate({  borderSpacing: -15 }, {
            step: function(now) {
              $(this).css('-webkit-transform','rotate('+now+'deg)'); 
              $(this).css('-moz-transform','rotate('+now+'deg)');
              $(this).css('transform','rotate('+now+'deg)');
            },
            duration:'fast'
        },'swing');
        $('#pointer_' + pointer_num).animate({  borderSpacing: 0 }, {
            step: function(now) {
              $(this).css('-webkit-transform','rotate('+now+'deg)'); 
              $(this).css('-moz-transform','rotate('+now+'deg)');
              $(this).css('transform','rotate('+now+'deg)');
            },
            duration:200
        },'swing');
    }

    $('#link_1').mouseenter(function() {
        point_at(1);
    });
    $('#link_1').mouseleave(function() {
        point_away(1);
    });

    $('#link_2').mouseenter(function() {
        point_at(2);
    });
    $('#link_2').mouseleave(function() {
        point_away(2);
    });

    $('#link_3').mouseenter(function() {
        point_at(3);
    });
    $('#link_3').mouseleave(function() {
        point_away(3);
    });
    
    $('#link_4').mouseenter(function() {
        point_at(4);
    });
    $('#link_4').mouseleave(function() {
        point_away(4);
    });

    $('#link_5').mouseenter(function() {
        point_at(5);
    });
    $('#link_5').mouseleave(function() {
        point_away(5);
    });
    
});



// CreateJS ANIMATION ****************************************************************************
 { function init() {
             var stage = new createjs.Stage("seniors_canvas");
 
             var manifest;
             var preload;
             var flock_background, bird_background;
             var progressText = new createjs.Text("", "20px Arial", "#000000");
             progressText.x = 300 - progressText.getMeasuredWidth() / 2;
             progressText.y = 20;
             stage.addChild(progressText);
             stage.update();
 
             function setupManifest() {
                 manifest = [
                     {src:  "images/animation/backgroundC.jpg",
                     id: "background"},
                     {src: "images/animation/flock.png",
                     id: "flock"},
                     {src: "images/animation/bird.png",
                     id: "bird"},
                     {src: "images/animation/flag1.png",
                     id: "flag1"},
                     {src: "images/animation/flag2.png",
                     id: "flag2"},
                     {src:"images/animation/car1.png",
                     id:"car1"},
                     {src:"images/animation/truck1.png",
                     id:"truck1"},
                     {src:"images/animation/car2.png",
                     id:"car2"},
                     {src:"images/animation/car3.png",
                     id:"car3"},
                     {src:"images/animation/bridgeC.png",
                     id:"bridge"}
                 ];
             }
 
             function startPreload() {
                 preload = new createjs.LoadQueue(true);
                 preload.installPlugin(createjs.Sound);          
                 preload.on("fileload", handleFileLoad);
                 preload.on("progress", handleFileProgress);
                 preload.on("complete", loadComplete);
                 preload.on("error", loadError);
                 preload.loadManifest(manifest);
              
             }
 
             function handleFileLoad(event) {
                 console.log("A file has loaded of type: " + event.item.type);
                 if(event.item.id == "bridge"){
                     console.log("bridge is loaded");
                     var abilene_image = preload.getResult("background");
                     var abilene_background = new createjs.Bitmap(abilene_image);
                     abilene_background.x = 0;
                     abilene_background.y = 0;
                     stage.addChild(abilene_background);
                     stage.update();
 
 
                     var flag1_image = preload.getResult("flag1");
                     flag1 = new createjs.Bitmap(flag1_image);
                     flag1.x = 833;
                     flag1.y = 19;
                     stage.addChild(flag1);
                     stage.update();
 
                     var flag2_image = preload.getResult("flag2");
                     flag2 = new createjs.Bitmap(flag2_image);
                     flag2.x = 833;
                     flag2.y = 19;
                     flag2.alpha = 0;
                     stage.addChild(flag2);
                     stage.update();
 
                     var car1_image = preload.getResult("car1");
                     car1 = new createjs.Bitmap(car1_image);
                     car1.scaleX = .03;
                     car1.scaleY = .03;
                     car1.regX = 100;
                     car1.regY = 100;
                     car1.alpha = 0;
                     car1.x = 647;
                     car1.y = 240;
                     stage.addChild(car1);
                     stage.update();
 
                     var car2_image = preload.getResult("car2");
                     car2 = new createjs.Bitmap(car2_image);
                     car2.scaleX = .03;
                     car2.scaleY = .03;
                     car2.regX = 100;
                     car2.regY = 100;
                     car2.alpha = 0;
                     car2.x = 650;
                     car2.y = 240;
                     stage.addChild(car2);
                     stage.update();
 
                     var truck1_image = preload.getResult("truck1");
                     truck1 = new createjs.Bitmap(truck1_image);
                     truck1.scaleX = .24;
                     truck1.scaleY = .24;
                     truck1.regX = 100;
                     truck1.regY = 100;
                     truck1.alpha = 1;
                     truck1.x = 755;
                     truck1.y = 402;
                     stage.addChild(truck1);
                     stage.update();
 
                     var car3_image = preload.getResult("car3");
                     car3 = new createjs.Bitmap(car3_image);
                     car3.scaleX = .24;
                     car3.scaleY = .24;
                     car3.regX = 100;
                     car3.regY = 100;
                     car3.alpha = 1;
                     car3.x = 755;
                     car3.y = 402;
                     stage.addChild(car3);
                     stage.update();
 
                     var flock_image = preload.getResult("flock");
                     flock_background = new createjs.Bitmap(flock_image);
                     flock_background.alpha = 0;
                     flock_background.x = 850;
                     flock_background.y = 280;
                     flock_background.scaleX = .7;
                     flock_background.scaleY = .7;
                     // flock_background.rotation = 30;
                     stage.addChild(flock_background);
                     stage.update();
 
                     var bird_image = preload.getResult("bird");
                     bird_background = new createjs.Bitmap(bird_image);
                     bird_background.alpha = 0;
                     bird_background.x = 100;
                     bird_background.y = 280;
                     bird_background.scaleY = .7;
                     bird_background.scaleX = .7;
                     stage.addChild(bird_background);
                     stage.update();

                     var bridge_image = preload.getResult("bridge");
                     bridge_background = new createjs.Bitmap(bridge_image);
                     stage.addChild(bridge_background);
                     stage.update();
 
                     createjs.Ticker.setFPS(60);
                     createjs.Ticker.addEventListener("tick", tickHandler);
 
                     var start_x_bird, end_x_bird, start_x_flock, end_x_flock, delay_bird, delay_flock, flag_flipper;
 
                     start_x_flock = Math.floor((Math.random() * 1100) + 1);
                     start_x_bird = Math.floor((Math.random() * 1100) + 1);
                     end_x_flock = start_x_flock + Math.floor((Math.random() * 300) + 1);
                     end_x_bird = Math.floor((Math.random() * 1300) + 1);
                     delay_flock = Math.floor((Math.random() * 1000) + 1000);
                     delay_bird = Math.floor((Math.random() * 1000) + 1000);
 
 
                     var car1_move = new createjs.Tween.get(car1, {loop:true})
                         .to({alpha:1}, 250)
                         .to({x:617, y:400, scaleX:.24 ,scaleY:.24}, 33000, createjs.Ease.quartIn)
                         .to({alpha:0},200)
                         .wait(13000);
 
                     var car2_move = new createjs.Tween.get(car2, {loop:true})
                         .wait(0)
                         .to({alpha:1}, 250)
                         .to({x:672, y:400, scaleX:.24 ,scaleY:.24}, 24000, createjs.Ease.quartIn)
                         .to({alpha:0},200)
                         .wait(8000);
                         
                     var truck1_move = new createjs.Tween.get(truck1, {loop:true})
                         .wait(3000)
                         .to({alpha:1}, 250)
                         .to({x:654, y:240, scaleX:.03 ,scaleY:.04}, 33000, createjs.Ease.quartOut)
                         .to({alpha:0},250)
                         .wait(12000);
                         
                     var car3_move = new createjs.Tween.get(car3, {loop:true})
                         .wait(12000)
                         .to({alpha:1}, 250)
                         .to({x:654, y:240, scaleX:.03 ,scaleY:.04}, 33000, createjs.Ease.quartOut)
                         .to({alpha:0},250)
                         .wait(3000);
 
                     // var logo_image = preload.getResult("logo");
                     //     var logo = new createjs.Bitmap(logo_image);
                     //     logo.x = 0;
                     //     logo.y = 0;
                     //     // abilene_background.scaleX = 1;
                     //     // abilene_background.scaleY = 1;
                     //     stage.addChild(logo);
                     //     stage.update(); 
 
                     var flip = new createjs.Tween.get(flag2, {loop:true})
                             .wait(2000)
                             .to({alpha:1}, 750)
                             .wait(4000)
                             .to({alpha:0}, 500);
 
                     var flip2 = new createjs.Tween.get(flag1, {loop:true})
                             .wait(2000)
                             .to({alpha:0}, 750)
                             .wait(4000)
                             .to({alpha:1}, 500);
                    
                     function tickHandler(e){
 
                         if (flock_background.y > 0){
                             var flock = new createjs.Tween.get(flock_background, {loop:false}, {override:true})
                                 .to({x:start_x_flock}, 1)
                                 .wait(delay_flock)
                                 .to({alpha:1},250)
                                 .to({y:-50, x:end_x_flock, scaleX:.4, scaleY:.4}, 15000);
 
                             stage.update();
                         
                         }else{
                             var flock_image = preload.getResult("flock");
                             flock_background = new createjs.Bitmap(flock_image);
                             flock_background.alpha = 0;
                             flock_background.x = 850;
                             flock_background.y = 280;
                             flock_background.scaleX = .7;
                             flock_background.scaleY = .7;
                             stage.addChild(flock_background);
 
                             start_x_flock = Math.floor((Math.random() * 1100) + 1);

                             var z = (Math.floor((Math.random() * 2) + 1));
                             if(z = 1){
                                end_x_flock = start_x_flock - (Math.floor((Math.random() * 300) + 1));
                                flock_flipper = 2;
                             }else{
                                end_x_flock = start_x_flock + (Math.floor((Math.random() * 300) + 1));
                                flock_flipper = 1;
                             }
                             
                             delay_flock = Math.floor((Math.random() * 43000) + 1000);
 
                             var flock = new createjs.Tween.get(flock_background, {loop:false}, {override:true})
                                 .to({x:start_x_flock}, 1)
                                 .wait(delay_flock)
                                 .to({alpha:1},250)
                                 .to({y:-50, x:end_x_flock, scaleX:.4, scaleY:.4}, 35000);
 
                             stage.update();
                         }
 
                         if (bird_background.y > 0){
                             var bird = new createjs.Tween.get(bird_background, {loop:false}, {override:true})
                                 .to({x:start_x_bird}, 1)
                                 .wait(delay_bird)
                                 .to({alpha:1},250)
                                 .to({y:-50, x:end_x_bird, scaleX:.4, scaleY:.4}, 30000);
                         
                         }else{
                             var bird_image = preload.getResult("bird");
                             bird_background = new createjs.Bitmap(bird_image);
                             bird_background.alpha = 0;
                             bird_background.x = 850;
                             bird_background.y = 280;
                             bird_background.scaleX = .7;
                             bird_background.scaleY = .7;
                             stage.addChild(bird_background);
                             stage.update();
 
                             start_x_bird = Math.floor((Math.random() * 999) + 1);
                             end_x_bird = Math.floor((Math.random() * 1200) + 1);
                             delay_bird = Math.floor((Math.random() * 10000) + 1000);
 
                             var bird = new createjs.Tween.get(bird_background, {loop:false}, {override:true})
                                 .to({x:start_x_bird}, 1)
                                 .wait(delay_bird)
                                 .to({alpha:1},250)
                                 .to({y:-50, x:end_x_bird, scaleX:.4, scaleY:.4}, 17000);
 
                             stage.update();
                         }
 
                     }                           
                 }
             }
              
              
             function loadError(evt) {
                 console.log("Error!",evt.text);
             }
              
              
             function handleFileProgress(event) {
                 // progressText.text = (preload.progress*100|0) + " % Loaded";
                 // stage.update();
             }
              
             function loadComplete(event) {
                 console.log("Finished Loading Assets");
                 // progressText.text = "It's all loaded!";
                 // stage.update();
             }
             setupManifest();
             startPreload();
             
         }
     }