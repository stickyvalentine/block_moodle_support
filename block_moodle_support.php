<?php
class block_moodle_support extends block_base {
    public function init() {

        $this->title = "Moodle Support";
    }
    public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass; 
    $this->content->text   = '
	<p>&nbsp; moodle@wou.edu</p>
	<p style="text-align: left;">&nbsp; 503.838.9300</p>
							  					  
	<div class="needs-js">chat loading...</div>

	<script type="text/javascript">
  	(function() {
   	 var x = document.createElement("script"); x.type = "text/javascript"; x.async = true;
    	x.src = (document.location.protocol === "https:" ? "https://" : "http://") + "libraryh3lp.com/js/libraryh3lp.js?12793";
    	var y = document.getElementsByTagName("script")[0]; y.parentNode.insertBefore(x, y);
  	})();
	</script>';


    
    // $this->content->footer = 'Footer here...';
 
    return $this->content;
}
}
