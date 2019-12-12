<head>
		<title>Drink Tea and Travel</title>
		<meta charset = "UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<script type="text/javascript" src="validation.js"></script>  
		<style type="text/css">
		</style>
		<!--Added by Rafik-->
		<?php include "packages.php";?>

		<script type="text/javascript">
			var imgArray = ["images/package-china.jfif"
							,"images/package-japan.jfif"
							,"images/japan.jfif"
							,"images/japan_tea_tour2.jpg"
							,"images/japan_tea_tour2.jpg"
							,"images/japan_tea_tour2.jpg"
							];
							
						
			/*var paraArray = ["First records of drinking tea date back to ancient China in the 3rd century AD. For millennia, the tea culture was a major part of the Chinese lifestyle, and still is to this day."
							,"In the Chinese culture, tea is considered of the seven necessities of life. There are five basic categories of teas in China; white, green, oolong, black and post-fermented (Puerh). Tea is actually drunk more frequently for healthy living than it is for thirst."
							,"Apart from China, Japan is the most popular place in terms of the tea culture. The Japanese came up with specific tea ceremonies and rules of drinking this beverage."
							,"Westerners are often bewildered when attending a Japanese tea ceremony for the first time. Take a closer look at this fascinating part of traditional Japanese culture which, like onsen, Japanese gardens and tasting sake, is considered unmissable."
							];*/
							
			var paraArray = <?php echo json_encode($pkgRow) ?>;				
							
			var webArrary = ["http://knowledge.ckgsb.edu.cn/2013/07/29/china/chinas-tea-culture/"
							,"https://theculturetrip.com/asia/china/articles/the-top-10-tea-houses-in-shanghai/"
							,"https://www.gocollette.com/en/traveling-well/2017/3/japanese-tea-ceremony"
							,"https://goldengatepark.com/japanese-tea-garden.html"
							,"https://www.skilouise.com/"
							,"https://www.skilouise.com/"
							];
					
			
			function loadImg(){
				for (var i=2; i<imgArray.length; i++){
					var x = document.createElement("IMG");
					x.setAttribute("src", imgArray[i]);
					document.getElementById("image" + i).appendChild(x);
				}
				for (var j=2; j<paraArray.length; j++){
					var y = document.createElement("P");
					y.innerText = paraArray[j];
					document.getElementById("para"+j).appendChild(y);
					
				}
			}
	
				
			var count = [0,0,0,0];
			function imgClick(id)
			{
					var str = id;
					x = document.getElementById("para"+str[5]);
					if(count[str[5]] == 0){
						x.innerHTML="click image";
						count[str[5]]++;
					}else if(count[str[5]] == 1){
						x.innerHTML= paraArray[str[5]];
						count[str[5]] = 0;
					}
			}
			
			function myHidden(id)
			{
				strItem = id;
				document.getElementById("image"+strItem[4]).style.visibility = "hidden";
				}
			
			function myShow(id)
			{
				strItem = id;
				document.getElementById("image"+strItem[4]).style.visibility = "Visible";
			}
			
			function webLink(id)
			{
				strItem = id;
				newWindow = window.open(webArrary[strItem[5]]);
				setTimeout(function(){newWindow.close();},5000);
			}
			
			function openwindow(i){
				var mywindow = window.open(webArrary[i],"mywindow");
				setTimeout(function(){mywindow.close()},5000);
			}
		</script>
		
	</head>