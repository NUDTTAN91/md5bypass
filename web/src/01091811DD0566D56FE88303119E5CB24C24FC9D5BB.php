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
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;if(isset(
        </span>
        <span style="color: #0000BB">$_GET</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">"pass"</span>
        <span style="color: #007700">
            ])){<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(
        </span>
        <span style="color: #0000BB">$_GET</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">"pass"</span>
        <span style="color: #007700">]!=</span>
        <span style="color: #0000BB">hash</span>
        <span style="color: #007700">(</span>
        <span style="color: #DD0000">"md4"</span>
        <span style="color: #007700">,</span>
        <span style="color: #0000BB">$_GET</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">"pass"</span>
        <span style="color: #007700">
            ])){<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die(
        </span>
        <span style="color: #DD0000">'fail~~~'</span>
        <span style="color: #007700">
            );<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
        </span>
        <span style="color: #DD0000">"success!!!"</span>
        <span style="color: #007700">
        </span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;}else{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
        </span>
        <span style="color: #DD0000">"please input the pass"</span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br/>
        </span>
        <span style="color: #0000BB">?&gt;</span>
    </span>
</code>
<?php
	error_reporting(0);
	// highlight_file("pass-01.php");

	if(isset($_GET["pass"])){
		if($_GET["pass"] != hash("md4", $_GET["pass"])){
			die('fail~~~');
		}else{
			echo "success!!!<br>";
			echo "<a href='0209EE4668C3229DF9A0A0D5AAF99DD1F419DA4B20E.php'>下一关</a>";
		}
	}else{
		echo "please input the pass";
	}
?>