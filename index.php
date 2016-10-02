<?php $title='Home - Angel Academy of the Art'; include ($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');?>

<script>
function enlarge()
{
  if($("#gallery").attr("big") == "false"){
    $("#gallery").css({"height": window.innerHeight, "position": "fixed", "top": "-40px"});
    $("#gallery").attr("big", "true");
  }
  else{
    $("#gallery").css({"height": "400px", "position": "relative", "top": 0});
    $("#gallery").attr("big", "false");
  }
}

$(document).ready(function(){
  $.getJSON("includes/art.json", function(data){
    $("#gallery").append("<div class='slide'><img onclick='enlarge()' src=\"Pictures/artshow2014/" + data.art[0].file + "\" style=\"display:block;height:100%;margin:auto\"><span id='label'>" + data.art[0].label + "</span></div>");

    for(var i = 1; i < data.art.length; i++){
      $("#gallery").append("<div class='slide' style='opacity:0;'><img onclick='enlarge()' src=\"Pictures/artshow2014/" + data.art[i].file + "\" style=\"display:block;height:100%;margin:auto\"><span id='label'>" + data.art[i].label + "</span></div>");
    }

    $("#prev").click(function(){
      var oldInd = $("#gallery").attr("ind");
      if(oldInd == 0){
        $("#gallery").attr("ind", data.art.length - 1);
      }
      else{
        $("#gallery").attr("ind", (parseInt($("#gallery").attr("ind")) - 1));
      }
      $(".slide").eq(oldInd).css("opacity", "0");
      $(".slide").eq($("#gallery").attr("ind")).css("opacity", "1");
    });

    $("#next").click(function(){
      var oldInd = $("#gallery").attr("ind");
      if(oldInd == data.art.length - 1){
        $("#gallery").attr("ind", 0);
      }
      else{
        $("#gallery").attr("ind", (parseInt($("#gallery").attr("ind")) + 1));
      }
      $(".slide").eq(oldInd).css("opacity", "0");
      $(".slide").eq($("#gallery").attr("ind")).css("opacity", "1");
    });

    setInterval(function(){
      var oldInd = $("#gallery").attr("ind");
      if(oldInd == data.art.length - 1){
        $("#gallery").attr("ind", 0);
      }
      else{
        $("#gallery").attr("ind", (parseInt($("#gallery").attr("ind")) + 1));
      }
      $(".slide").eq(oldInd).css("opacity", "0");
      $(".slide").eq($("#gallery").attr("ind")).css("opacity", "1");
    }, 5000);
  });
});
</script>

<div id="gallery" ind="0" big="false" style="background-color:#222222;width:100%;height:400px;position:relative;margin: 40px 0px 20px;">
	<div class="change" id="prev" style="left:0"></div>
	<div class="change" id="next" style="right:0"></div>
</div>
<nav>
	<a href="show" class="box">
		<div>Art Show</div>
		<img src='/Thumbs/class/ArtShow2013-4.jpg'>
	</a>
	<a href="camp" class="box">
		<div>Summer Camp</div>
		<img src='/Thumbs/gallery/cecilia-lau-age-9.jpg'>
	</a>
	<a href="press" class="box">
		<div>Angel Press</div>
		<img src="/Pictures/20131205_211023.jpg">
	</a>
	<a href="photos" class="box">
		<div>Class Photos</div>
		<img src='/Thumbs/class/DSCF0449.jpg'>
	</a>
</nav>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>