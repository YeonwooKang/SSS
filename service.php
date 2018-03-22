<?php
	// Service class
	// These classes content DAO instance to access Database
	// These clasee use DAO instance's methods such as insert(), delete() and etc.

	// include DAO
	require_once 'dao.php';

	// User service
	class UserService {
		private $dao;

		public function __construct(){
			$this->dao = new UserDao(); // create DAO for User
		}

		// join method
		public function join($u) {
			$this->dao->insert($u); // insert user info to DB
		}

		// login method
		public function login($id, $pw) {
			$u = $this->dao->select($id);

			if($u==null){
				return 1;

			} else { // password check
				if($u->getPw()==$pw) {
					session_start(); // session start
					$_SESSION['id']=$id;

					return 3;
				} else {
					return 2;
				}
			}
		}

		public function logout() {
			if(session_status()!=PHP_SESSION_ACTIVE){
				session_start();
			}

			session_unset();
			session_cache_expire(60);
			session_destroy();
		}

		public function out(){
			if(session_status()!=PHP_SESSION_ACTIVE){
				session_start();
			}

			if(isset($_SESSION['id'])){
				$this->dao->delete($_SESSION['id']);
				$this->logout();
			}
		}	

		public function editInfo($u) {
			$this->dao->update($u);
		}

		public function getUser($id) {
			return $this->dao->select($id);
		}
	}
?>