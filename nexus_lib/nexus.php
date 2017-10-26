<?php
if(session_id() == '') session_start();

class nexus {
	function nexus() {
		
	}

	function init($a) {
		if (!is_array($a)) developer_msg('INIT need receive a array as parameter on initialization');
		else {
			$_SESSION['nexus_lib']['par']['dev'] = $a['developer'];
			$_SESSION['nexus_lib']['par']['ver'] = $a['version'];
			$_SESSION['nexus_lib']['par']['dat'] = $a['date'];
			$_SESSION['nexus_lib']['par']['nam'] = $a['name'];
			$_SESSION['nexus_lib']['par']['drf'] = $a['dir_forms'];
			$_SESSION['nexus_lib']['par']['dra'] = $a['dir_action'];
		}
	}

	function developer_msg($m) {
		echo '<div id=dv_msg_box>'.$m.'</div>';
		exit;
	}
}
?>