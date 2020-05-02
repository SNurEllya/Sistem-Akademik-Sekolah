<?php

function check_already_login() {
	$ci =& get_instance();
	$tb_user_session = $ci->session->userdata('userid');
	if($tb_user_session) {
		redirect('dashboard');
	}
}

function check_not_login() {
	$ci =& get_instance();
	$tb_user_session = $ci->session->userdata('userid');
	if($tb_user_session) {
		redirect('auth/login');
	}
}