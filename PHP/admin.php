<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin.css" type="text/css" rel="stylesheet" />

    <style>
 .logo{
         height: 50px;
        }
        .btn{
            height: 50px;
        }
        #login{
            font-size: 12px;
         
        }
        .slide{
            height: 20%;
            width:100%;
        }
div.about{
        width: 80%;  
        float: left;
        }
        .panel{
             margin: 0%;
        }
div.calender{
        height: 100%;
        width: 20%;
        float: left;
    }
        /*for calender*/
  .calender * {box-sizing:border-box;}
.calender ul {list-style-type: none;}
. calender body {font-family: Verdana,sans-serif;}
.month {
    padding: 70px 25px;
    width: 100%;
    background: green;
}
.month ul {
    margin: 0;
    padding: 0;
}
.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}
.month .prev {
    float: left;
    padding-top: 10px;
}
.month .next {
    float: right;
    padding-top: 10px;
}
.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}
.weekdays li {
    display: inline-block;
    width: 12%;
    color: #666;
    text-align: center;
}
.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}
.days li {
    list-style-type: none;
    display: inline-block;
    width: 12%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}
.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}
/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 10.2%; font-size: 10px}
}
@media screen and (max-width: 600px) {
    .weekdays li, .days li {width: 12%;}
    .days li .active {padding: 2px;}
}
@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
/*div five*/
div.five{
      height: 35%;
      background-color: white;
    color:black;
    float: left;
}
div.five_left{
       height: 100%;
        width: 33.33%;
        float: left;  
    }
div.five_middle{
       height: 100%;
        width:33.33%;
        float: left;  
    }
div.five_right{
       height: 100%;
        width: 33.33%;
        float: left;  
    }
div.six{
      height: 100%;
    width: 20%;
      background-color: #f9f8f8;
        color:black;
  float: left;
    margin: 0%;
}
div.seven{
    height: 30%;
    width: 100%;
    background-color: #555555;
    color:white;
    float: left;
}
div.eight{
      height: 8%;
    width:100%;
      background-color: black;
    color:white;
    float: left;
     margin: 0%;
}
      
body{
    font-family: Arial;
    background color : #555555;
}
.top{
   width: 100%;
   height: 20%;
    float: left;
}
.click{
   text-align: center;
    
}
        .fleft{
            width: 50%;
            float: left;
        }
        
        .fright{
            width: 50%;
            float: left;
        }
        .logo2{
            width: 25%;
            float: left;
        }
        .copy_right{
            width: 75%;
            float: left;
        }
        .prev{
            cursor: pointer;
        }
        .next{
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container black right-align">
        <p id="login">Hi guest, <a href="login.html"> <b>Logout</b></a></p>
    </div>
    <div class="container dark-gray">
        <img class="logo mobile" src="GreenLMS2.png" alt="LMS logo" >
         
<div class="dropdown-hover  right mobile">
    <button class=" btn button dark-gray">Faculties</button>
    <div class="dropdown-content bar-block border" style="right:0">
      <a href="computing.html" class="bar-item button">Computing</a>
      <a href="Engineering.html" class="bar-item button">Engineering</a>
      <a href="Medicine.html" class="bar-item button">Medicine</a>
    </div>
  </div>      
        <a href="FAQ.html">
        <button class=" btn bar-item button dark-gray right mobile">FAQ's</button>
        </a>
        <a href="lms2.html">
            <button class=" btn bar-item button dark-gray right mobile">Green LMS</button>
        </a>
        <a href="home.html">
        <button class=" btn bar-item button dark-gray right mobile">Home</button>
     
        </a>
    </div>
    <div class=" slide">

  <div class=" display-container text-white">
      <div>
    <img  src="adminview.jpg"  style="width:100% ">
    
   <div class="display-middle large center">
        <div class="panel dark-gray opacity-min">    
            <h1><b>Complaints & Ideas</b></h1>
            <p><i>Ready to listen..Here to help..</i></p>
       </div>  
      </div>
     </div>
  

  </div>

</div>
    


    <div class="about mobile white"><h2 class="panel green"><b>View complaints and ideas...</b></h2>
<div class="container">

  <div class="bar black">
    <button class="bar-item button tablink pale-green" onclick="openCity(event,'University')">About University</button>
    <button class="bar-item button tablink" onclick="openCity(event,'Computing')">About Computing Faculty</button>
    <button class="bar-item button tablink" onclick="openCity(event,'Engineering')">About Engineerring Faculty</button>
      <button class="bar-item button tablink" onclick="openCity(event,'Medical')">About Medical Faculty</button>
  </div>
  
  <div id="University" class="container border city">
   <table border="1">
    <?php
    $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'knmtuniversity');
        $sel="SELECT * FROM com_ideas WHERE about='uni'";
        $res=mysqli_query($con,$sel);
        while($row=mysqli_fetch_array($res)){
            echo "<tr>"."<td>$row[0]</td>".
                "<td>$row[1]</td>"."</tr>";
            
        }
       ?>
    </table>
  </div>

  <div id="Computing" class="container border city" style="display:none">
    <table border="1">
    <?php
    $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'knmtuniversity');
        $sel="SELECT * FROM com_ideas WHERE about='cf'";
        $res=mysqli_query($con,$sel);
        while($row=mysqli_fetch_array($res)){
            echo "<tr>"."<td>$row[0]</td>".
                "<td>$row[1]</td>"."</tr>";
            
        }
       ?>
    </table>
  </div>

  <div id="Engineering" class="container border city" style="display:none">
    <table border="1">
    <?php
    $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'knmtuniversity');
        $sel="SELECT * FROM com_ideas WHERE about='ef'";
        $res=mysqli_query($con,$sel);
        while($row=mysqli_fetch_array($res)){
            echo "<tr>"."<td>$row[0]</td>".
                "<td>$row[1]</td>"."</tr>";
            
        }
       ?>
    </table>
  </div>
    <div id="Medical" class="container border city" style="display:none">
    <table border="1">
    <?php
    $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'knmtuniversity');
        $sel="SELECT * FROM com_ideas WHERE about='mf'";
        $res=mysqli_query($con,$sel);
        while($row=mysqli_fetch_array($res)){
            echo "<tr>"."<td>$row[0]</td>".
                "<td>$row[1]</td>"."</tr>";
            
        }
       ?>
    </table>
  </div>
    
</div>


    </div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      January<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>
<span class="slide">
<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>30</li>
  <li>31</li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
</ul>
    </span>
</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      February<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>
<span class="slide">
<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li></li>
  <li></li>
  <li></li>
</ul>
</span>
</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      March<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>
<span class="slide">
<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</span>
</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      April<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>
<span class="slide">
<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
</ul>
</span>
</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      May<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      June<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li></li>
</ul>

</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      July<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li>31</li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li><span class="active">6</span></li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>

</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      August<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      september<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
</ul>

</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      octomber<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li>30</li>
  <li>31</li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
</ul>

</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      November<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li></li>
</ul>

</div>
<div class="calender mobile">
<div class="month">      
  <ul>
    <li class="prev" onclick="plusDivs(-1)">&#10094;</li>
    <li class="next" onclick="plusDivs(1)">&#10095;</li>
    <li style="text-align:center">
      December<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

</div>


    <div class="seven">
        <div class=lms>
        <h6 class="blue padding" style="text-shadow:1px 1px 0 #444">For more details.. join with us on..</h6>
        <br/>
        <div class="fleft left-align padding">
        <a href="https://www.facebook.com/" >
        <img src="facebook.PNG" class="margin-left" alt="Facebook" width="45px" height="45px">
        </a>
        <a href="https://www.youtube.com">
     <img src="y.png" class="margin-left" alt="youtube_icon" width="45px" height="45px"/>  
        </a>
    <a href="https://twitter.com/?lang=en">
      <img src="twitter.PNG" class="margin-left" alt="twitter_icon" width="45px" height="45px"/>
        </a>
        <a href="https://plus.google.com/collections/featured" >
        <img src="google+.PNG" class="margin-left" alt="Google+" width="45px" height="45px"/>
        </a>
        <a href="https://www.linkedin.com/uas/login">
        <img src="linkedin.png" class="margin-left" alt="LinkedIn" width="45px" height="45px"/>
        </a>
        </div>
        <div class="fright right-align padding">
        <img src="telephone-phone-icon-6.png" alt="telephone_icon" width="45px" height="45px"/>
            <b>0114598785 / 6 / 7</b>
        <h6>No:7,Highlevel Road,<br/>Kirulapana,Colombo,<br/>Sri Lanka.<br/></h6></div>
        </div>
    
    <div class="eight panel padding-24 black">
        <div class="logo2">
        <img src="logo.png" alt="KNMT GREEN UNI" width="100%" height="10%" >
            </div>
   <div class="copy_right right-align">
        
        <font size="2px" >This website and its content is a property of Kusal_Nirosh Melani_Thisarani. Any redistribution or reproduction of part or all of the contents in any form is strictly prohibited.<br/> Copyright © 2017 KNMT Green University.<br/> All Rights Reserved.</font>
        </div>
        </div>
               <script src="admin.js"></script>
        </body>
</html>
