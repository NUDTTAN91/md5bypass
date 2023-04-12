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
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;class
        </span>
        <span style="color: #0000BB">auth</span>
        <span style="color: #007700">
            {<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public
        </span>
        <span style="color: #0000BB">$user</span>
        <span style="color: #007700">
            ;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public
        </span>
        <span style="color: #0000BB">$pass</span>
        <span style="color: #007700">
            ;<br/>
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function
        </span>
        <span style="color: #0000BB">__destruct</span>
        <span style="color: #007700">
            (){<br/>
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">user</span>
        <span style="color: #007700">=(string)</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">user</span>
        <span style="color: #007700">
            ;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(
        </span>
        <span style="color: #0000BB">strlen</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">user</span>
        <span style="color: #007700">);&gt;</span>
        <span style="color: #0000BB">3</span>
        <span style="color: #007700">||</span>
        <span style="color: #0000BB">strlen</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">pass</span>
        <span style="color: #007700">)&gt;</span>
        <span style="color: #0000BB">3</span>
        <span style="color: #007700">
            ){<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
        </span>
        <span style="color: #DD0000">"level1 is fail~~~"</span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(
        </span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">user</span>
        <span style="color: #007700">!==</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">pass</span>
        <span style="color: #007700">&amp;&amp;</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">user</span>
        <span style="color: #007700">!=</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">pass</span>
        <span style="color: #007700">&amp;&amp;</span>
        <span style="color: #0000BB">md5</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">user</span>
        <span style="color: #007700">)===</span>
        <span style="color: #0000BB">md5</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$this</span>
        <span style="color: #007700">-&gt;</span>
        <span style="color: #0000BB">pass</span>
        <span style="color: #007700">
            )){<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo
        </span>
        <span style="color: #DD0000">"success!"</span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &nbsp;
        </span>
        <span style="color: #DD0000">"level2 is fail~~~"</span>
        <span style="color: #007700">
            ;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br/>&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <span style="color: #0000BB">unserialize</span>
        <span style="color: #007700">(</span>
        <span style="color: #0000BB">$_POST</span>
        <span style="color: #007700">[</span>
        <span style="color: #DD0000">'auth'</span>
        <span style="color: #007700">
            ]);<br/>
        </span>
        <span style="color: #0000BB">?&gt;</span>
    </span>
</code>

<?php
	error_reporting(0);
	// highlight_file("pass-08.php");

	class auth{
		public $user;
		public $pass;

		public function __destruct(){

			$this->user = (string)$this->user;
			if(strlen($this->user) > 3 || strlen($this->pass) >3){
				echo "level1 is fail~~~";
			}
			if($this->user !== $this->pass && $this->user != $this->pass && md5($this->user) === md5($this->pass)){
				echo "success!<br>";
				echo file_get_contents("/flag");
			}else{
				echo "level2 is fail~~~";
			}
		}
	}
	unserialize($_POST['auth']);
?>