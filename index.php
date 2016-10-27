<?php
	
	use Belajar\Repositories\UserRepository as UserRepository;
	use Belajar\Filters\AuthFilter as AuthFilter;

	require_once 'app/start.php';

	$AuthFilter = new AuthFilter();

