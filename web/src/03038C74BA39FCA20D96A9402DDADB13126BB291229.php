<code>
    <span style="color: #000000">
        <span style="color: #0000BB">
            &lt;?php<br/>&nbsp;&nbsp;&nbsp;&nbsp;error_reporting
        </span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">0</span>
        <span style="color: #007700">
            );<br/>&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <span style="color: #007700">
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;if(isset(
        </span>
        <span style="color: #0000BB">$_GET</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">'user'</span>
        <span style="color: #007700">]) &amp;&amp; isset(</span>
        <span style="color: #0000BB">$_GET</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">'pass'</span>
        <span style="color: #007700">
            ])){<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <span style="color: #0000BB">$user</span>
        <span style="color: #007700">=</span>
        <span style="color: #0000BB">$_GET</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">'user'</span>
        <span style="color: #007700">
            ];<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <span style="color: #0000BB">$pass</span>
        <span style="color: #007700">=</span>
        <span style="color: #0000BB">$_GET</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">'pass'</span>
        <span style="color: #007700">
            ];<br/>
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!
        </span>
        <span style="color: #0000BB">ctype_alpha</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$user</span>
        <span style="color: #007700">) &amp;&amp; !</span>
        <span style="color: #0000BB">is_numeric</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$pass</span>
        <span style="color: #007700">)&amp;&amp;</span>
        <span style="color: #0000BB">md5</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$user</span>
        <span style="color: #007700">)==</span>
        <span style="color: #0000BB">md5</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$pass</span>
        <span style="color: #007700">
            )){<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
        </span>
        <span style="color: #DD0000">"success!"</span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
        </span>
        <span style="color: #DD0000">"fail~~~"</span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;}else{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
        </span>
        <span style="color: #DD0000">"please input the user and pass!"</span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br/>
        </span>
        <span style="color: #0000BB">?&gt;</span>
    </span>
</code>

<?php
	error_reporting(0);
	// highlight_file("pass-03.php");

	if(isset($_GET['user']) && isset($_GET['pass'])){
		$user = $_GET['user'];
		$pass = $_GET['pass'];

		if(!ctype_alpha($user) && !is_numeric($pass) && md5($user) == md5($pass)){
			echo "success!<br>";
			// echo file_get_contents('flag.txt')."\n";
			echo "<a href='04038AE570B21C9506F5E443D719B72BBF5585CAF74.php'>下一关</a>";
		}else{
			echo "fail~~~";
		}

	}else{
		echo "please input the user and pass!"."\n";
	}
?>