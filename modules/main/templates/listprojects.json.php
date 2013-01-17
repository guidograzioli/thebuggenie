<?php

	foreach ($projects as $key => $name) {
		$projectlist[] = array("projectKey"=>$key, "projectName"=>$name);
	}

	echo json_encode(array("count"=>count($projectlist), "projects"=>$projectlist));
