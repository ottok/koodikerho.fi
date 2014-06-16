function animation() {

    var colors = ['#d33', '#3d3', '#33d', '#dd3', '#3dd'];
    var textStyle = "400 100px 'Open Sans',sans-serif";
    var textString = 'KOODIKERHO.FI';

    var offsetX = (window.innerWidth-800)/2;
    var offsetY = (window.innerHeight-400)/2;
    var textStage = new createjs.Stage("text");
    textStage.canvas.width = innerWidth;
    textStage.canvas.height = innerHeight;

    var stage = new createjs.Stage("stage");
    stage.canvas.width = window.innerWidth;
    stage.canvas.height = window.innerHeight;

    var text = new createjs.Text("t", textStyle, "#fff");

    // TODO: Adding dots on the fly would be cool,
    // but running simply addDot() does not weem to work..
    function addDot() {
      var circle = new createjs.Shape();
      var r = 8;
      var x = window.innerWidth*Math.random();
      var y = window.innerHeight*Math.random();
      var color = colors[Math.floor(i%colors.length)];
      var alpha = 0.2 + Math.random()*0.5;
      circle.alpha = alpha;
      circle.radius = r;
      circle.graphics.beginFill(color).drawCircle(0, 0, r);
      circle.x = x;
      circle.y = y;
      circles.push(circle);
      stage.addChild(circle);
    }

    var circles = [];
    for (var i = 1; i < 308; i++) {
      addDot();
    }

    text.text = textString;
    text.font = textStyle;
    text.textAlign = 'center';
    text.x = 400;
    text.y = 0;
    textStage.addChild(text);
    textStage.update();

    var ctx = document.getElementById('text').getContext('2d');
    var pix = ctx.getImageData(0,0,800,200).data;
    textPixels = [];
    for (var i = pix.length; i >= 0; i -= 4) {
      if (pix[i] != 0) {
        var x = (i / 4) % 800;
        var y = Math.floor(Math.floor(i/800)/4);

        if((x && x%8 == 0) && (y && y%8 == 0)) textPixels.push({x: x, y: y});
      }
    }
    // console.log(textPixels.length);

    for (var k = 0, m = textPixels.length; k < m; k++) {

      // if not enough dots, start distributing them randomly
      // to avoid big visible gaps in logo
      if (circles[k] === undefined) {
        t = Math.floor(Math.random()*300);
        circles[t].originX = offsetX + textPixels[k].x;
        circles[t].originY = offsetY + textPixels[k].y;
        tweenCircle(circles[t]);
      } else {
        circles[k].originX = offsetX + textPixels[k].x;
        circles[k].originY = offsetY + textPixels[k].y;
        tweenCircle(circles[k]);
      }

    }

    // https://www.greensock.com/as/docs/tween/
    function tweenCircle(c) {
    	c.tween = TweenLite.to(c, 3, {
    	  x: c.originX,
    	  y: c.originY,
    	  ease:Quad.easeOut,
    	  alpha: 1,
    	  radius: 5,
    	  scaleX: 0.4,
    	  scaleY: 0.4,
    	  onComplete: showSignupForm
    	});
    }

    function showSignupForm(top, left) {
		  document.getElementById('signup').style.opacity = 1;
    }

    // render a frame each 60 ms
    var animationFrame = setInterval(function() {
      stage.update();
    }, 20);

    // stop rendering after 8 seconds
    setTimeout(function() {
      clearInterval(animationFrame);
    }, 8000)

}

window.onload = animation();
