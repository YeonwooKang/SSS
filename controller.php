<?php
	// Controller Class

	// include Service
	require_once'service.php';

	// this class would be used at the index.php
	class UserController {
		private $uService;
		private $action;
		private $data;
		private $view;
		private $u;

		// Constructor
		public function __construct($action) {
			$this->uService = new UserService();
			$this->action = $action;
		}

		public function run() {
			switch ($this->action) {
				case "join":
					$this->join();
					break;

				case "joinform":
					$this->joinform();
					break;

				case "login":
					$this->login();
					break;

				case "loginform":
					$this->loginform();
					break;

				case "main":
					$this->main();
					break;

				case "mypage":
					$this->mypage();
					break;

				case "editinfo":
					$this->editinfo();
					break;

				case "logout":
					$this->logout();
					break;

				case "out":
					$this->out();
					break;

				default:
					# code...
					break;
			}
			require $this->view;
		}

		// join method
		public function join() {
			$u = new User($_POST['id'], $_POST['pw'], $_POST['name']);
			$this->uService->join($u);
			$this->view="login.php";
		}

		// join form method
		public function joinform() {
			$this->view="join.php";
		}


		// idCheck method
		// would be used to check id duplication
		public function idCheck() {

		}

		// login method
		public function login() {
			$code = $this->uService->login($_POST['id'], $_POST['pw']);

			switch ($code) {
				case 1:
					$this->data = "ID does not exist.";
					$this->view = "login.php";
					break;

				case 2:
					$this->data = "Password is not correct.";
					$this->view = "login.php";
					break;

				case 3:
					$this->data = "User " . $_POST['id'] . " has been logined. Hi!";
					$this->view = "main.php";
					break;
				
				default:
					# code...
					break;
			}
		}

		// logout method
		public function logout() {
			$this->uService->logout();
			$this->view = 'login.php';
		}

		public function out(){
			$this->uService->out();
			$this->view = 'login.php';
		}

		public function loginform() {
			$this->view="login.php";
		}

		public function main() {
			$this->view="main.php";
		}

		public function mypage() {
			$id = $_GET['id'];
			$this->u = $this->uService->getUser($id);
			$this->data = $this->u;
			$this->view="mypage.php";
		}

		public function editinfo() {
			$id = $_POST['id'];
			$this->u = $this->uService->getUser($id);
			$this->data = $this->u;

			$this->u->setPw($_POST['pw']);
			$this->u->setName($_POST['name']);

			$this->u->setTopLength($_POST['toplength']);
			$this->u->setShoulder($_POST['shoulder']);
			$this->u->setChest($_POST['chest']);
			$this->u->setArmhole($_POST['armhole']);
			$this->u->setArm($_POST['arm']);

			$this->u->setBottomLength($_POST['bottomlength']);
			$this->u->setWaist($_POST['waist']);
			$this->u->setHip($_POST['hip']);
			$this->u->setThigh($_POST['thigh']);
			$this->u->setCrotch($_POST['crotch']);

			$this->u->setHeight($_POST['height']);
			$this->u->setWeight($_POST['weight']);

			$this->uService->editInfo($this->u);
			$this->view="mypage.php";
		}
	}

?>