<!DOCTYPE html>
<html>
<head>
   <title> 좌석</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>   
   <script>
   $(function(){
      <?php
         $mysql = new mysqli("localhost","root","654654","seat");
         $req = "SELECT * FROM seat";
         $result = mysqli_query($mysql,$req);
      ?>
         var seat = new Array();
         var uses = new Array();                 
            <?php
            for($i=1;$i<53;$i++){
            $row = mysqli_fetch_array($result);
            $usings=$row['usings'];
            echo "uses[".$i."]=".$usings.";";
            $shit="seat[".$i."]=";       
            if($usings){
               $id=$row['id'];
               $name=$row['name'];
               $time=$row['time'];               
               $shit.="'".$id."번<br>".$name."<br>".$time."';";
               echo $shit;
            }
            else{
               $id=$row['id'];
               $shit.="'".$id."번<br>"."빈자리<br>';";
               echo $shit;
            }
         }
            ?>;
            for(var i=1;i<53;i++){
            $("#sit"+i).html(seat[i]);
            if(uses[i]==0){
               $('#sit'+i).css("background-color","white");
               $('#sit'+i).css("color","black");
            }
            $('#sitt').css("background-color","black");
         }
         
   })
   </script>
   <div id ='testout'></div>
   <div style="border: 1px solid black; float: left; width: 1000px; height: 100%; background-color: #585858;color:white">      
      <div style="border: 1px solid red; float: left; width: 100%; text-align: right">
         <table border="1" width = 1000 height = 100 float: left>
            <tr>
               <td width = 100 id='sit1' style=" background-color: gray">1</td>
               <td width = 100 id='sit2' style=" background-color: gray">2</td>
               <td width = 100 id='sit3' style=" background-color: gray">3</td>
               <td width = 100 id='sit4' style=" background-color: gray">4</td>
               <td width = 100 id='sit5' style=" background-color: gray">5</td>
               <td width = 100 id='sit6' style=" background-color: gray">6</td>
               <td width = 100 id='sit7' style=" background-color: gray">7</td>
               <td width = 100 id='sit8' style=" background-color: gray">8</td>
               <td width = 100 id='sit9' style=" background-color: gray">9</td>
               <td width = 100 id='sit10' style=" background-color: gray">10</td>   
            </tr>
         </table>
         <br><br>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit11' style=" background-color: gray">11</td>
                  <td width = 20% id='sit12' style=" background-color: gray">12</td>
                  <td width = 20% id='sit13' style=" background-color: gray">13</td>
                  <td width = 20% id='sit14' style=" background-color: gray">14</td>   
               </tr>
            </table>
         </div>
         <div style="border: 1px solid dimgray; float: left; width: 194px;"></div>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit15' style=" background-color: gray">15</td>
                  <td width = 20% id='sit16' style=" background-color: gray">16</td>
                  <td width = 20% id='sit17' style=" background-color: gray">17</td>
                  <td width = 20% id='sit18' style=" background-color: gray">18</td>        
               </tr>
            </table>
         </div>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit19' style=" background-color: gray">19</td>
                  <td width = 20% id='sit20' style=" background-color: gray">20</td>
                  <td width = 20% id='sit21' style=" background-color: gray">21</td>
                  <td width = 20% id='sit22' style=" background-color: gray">22</td>   
               </tr>
            </table>
         </div>
         <div style="border: 1px solid dimgray; float: left; width: 194px;"></div>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit23' style=" background-color: gray">23</td>
                  <td width = 20% id='sit24' style=" background-color: gray">24</td>
                  <td width = 20% id='sit25' style=" background-color: gray">25</td>
                  <td width = 20% id='sit26' style=" background-color: gray">26</td>        
               </tr>
            </table>
         <br><br>            
         </div>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit27' style=" background-color: gray">27</td>
                  <td width = 20% id='sit28' style=" background-color: gray">28</td>
                  <td width = 20% id='sit29' style=" background-color: gray">29</td>
                  <td width = 20% id='sit30' style=" background-color: gray">30</td>   
               </tr>
            </table>
         </div>
         <div style="border: 1px solid dimgray; float: left; width: 194px;"></div>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit31' style=" background-color: gray">31</td>
                  <td width = 20% id='sit32' style=" background-color: gray">32</td>
                  <td width = 20% id='sit33' style=" background-color: gray">33</td>
                  <td width = 20% id='sit34' style=" background-color: gray">34</td>        
               </tr>
            </table>      
         </div>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit35' style=" background-color: gray">35</td>
                  <td width = 20% id='sit36' style=" background-color: gray">36</td>
                  <td width = 20% id='sit37' style=" background-color: gray">37</td>
                  <td width = 20% id='sit38' style=" background-color: gray">38</td>   
               </tr>
            </table>
         </div>
         <div style="border: 1px solid dimgray; float: left; width: 194px;"></div>
         <div style="border: 1px solid dimgray; float: left; width: 400px;">
            <table border="1" width = 100% height = 100 float: left>
               <tr>
                  <td width = 20% id='sit39' style=" background-color: gray">39</td>
                  <td width = 20% id='sit40' style=" background-color: gray">40</td>
                  <td width = 20% id='sit41' style=" background-color: gray">41</td>
                  <td width = 20% id='sit42' style=" background-color: gray">42</td>        
               </tr>
            </table>
         <br><br>            
         </div>
         <table border="1" width = 1000 height = 100 float: left>
            <tr>
               <td width = 100 id='sit43' style=" background-color: gray">43</td>
               <td width = 100 id='sit44' style=" background-color: gray">44</td>
               <td width = 100 id='sit45' style=" background-color: gray">45</td>
               <td width = 100 id='sit46' style=" background-color: gray">46</td>
               <td width = 100 id='sit47' style=" background-color: gray">47</td>
               <td width = 100 id='sit48' style=" background-color: gray">48</td>
               <td width = 100 id='sit49' style=" background-color: gray">49</td>
               <td width = 100 id='sit50' style=" background-color: gray">50</td>
               <td width = 100 id='sit51' style=" background-color: gray">51</td>
               <td width = 100 id='sit52' style=" background-color: gray">52</td>   
            </tr>
         </table>
      </div>
   </div>
   <br><br>   
</body>
</html>