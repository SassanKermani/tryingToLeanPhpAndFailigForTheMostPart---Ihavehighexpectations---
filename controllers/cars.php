<?php
		require('../models/car.php');

		Class CarController {

			/*----------  indexPage  ----------*/
			public function indexPage(){
				$cars = Car::find();
				require('../views/cars/index.php');
			}

			/*----------  newPage  ----------*/
			public function newPage(){
				require('../views/cars/new.php');
			}

			/*----------  createAction  ----------*/
			public function createAction() {
				Car::create($_POST['car'], $_POST['owner']);
				header('Location: ./');
			}

			/*----------  deleteAction  ----------*/
			public function deleteAction() {
				Car::delete($_POST['id']);
				header('Location: ./');
			}

			/*----------  updateAction  ----------*/
			public function updateAction() {
				Car::update($_POST['id'], $_POST['car'], $_POST['owner']);
				header('Location: ./');
			}

		}

		$new_car_controller = new CarController();

		if($_GET['action'] == 'index') {
			$new_car_controller->indexPage();
		}else if($_GET['action']=='new') {
			$new_car_controller->newPage();
		} else if($_GET['action']=='create') {
			$new_car_controller->createAction();
		}elseif ($_GET['action']=='delete') {
			$new_car_controller->deleteAction();
		}else if($_GET['action'] == 'update') {
			$new_car_controller->updateAction();
		}

	?>