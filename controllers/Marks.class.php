<?php
	namespace controllers;

	require_once \core\FileManager::getCorePath('Controller');
	require_once \core\FileManager::getPersistencePath('Mark');
	/*require_once \core\FileManager::getPersistencePath('Option');*/

	class Marks extends \core\Controller {

		/**
		 * Affiche la liste des notes
		 */
		public function actionDefault()
		{
			$datas['marks'] = \persistences\Mark::getAll();

			$this->_view->setFile('marks/list');
			$this->_view->setTitle('Liste des notes');
			$this->_view->setDatas($datas);
		}

		/**
		 * Affiche le formulaire d'ajout d'une note / Ajoute une note
		 */
		public function actionAjouter()
		{
			if(\libs\http\Request::postExists('validateMark'))
			{
				$params = array(
						'idApprentice' => \libs\http\Request::postData('idApprentice'),
						'idFormer' => \libs\http\Request::sessionData('id_former'), 
						'idTest' => \libs\http\Request::postData('idTest'), 
						'mark' => \libs\http\Request::postData('mark'),
						'comment' => \libs\http\Request::postData('comment')
					);

				$mark = new \models\Mark($params);

				\persistences\Mark::insert($mark);
			}

			\libs\http\Response::redirect('?ctrl=marks');

			$this->_view->setFile('marks/ajouter');
			$this->_view->setTitle('Ajouter une note');
			$this->_view->setDatas($datas);
		}

		/**
		 * Supprime une note
		 */
		public function actionSupprimer()
		{
			if(\libs\http\Request::postExists('id_apprentice'))
			{
				$params = array(
						'idApprentice' => \libs\http\Request::postData('id_apprentice'), 
						'idFormer' => \libs\http\Request::postData('id_former')
					);

				$mark = new \models\Mark($params);
				\persistences\Mark::delete($mark);
			}

			\libs\http\Response::redirect('?ctrl=marks');
		}

		/**
		* Modifie une note
		*/
		public function actionUpdate()
		{
			if(\libs\http\Request::postExists('modifier'))
			{
				$params = array(
						'idApprentice' => \libs\http\Request::postData('idApprentice'),
						'idFormer' => \libs\http\Request::sessionData('id_former'), 
						'idTest' => \libs\http\Request::postData('idTest'), 
						'mark' => \libs\http\Request::postData('mark'),
						'comment' => \libs\http\Request::postData('comment')
					);
				$mark = new \models\Mark($params);

				\persistences\Mark::update($marks);

				\libs\http\Response::redirect('?ctrl=marks');
			}
			else if(\libs\http\Request::postExists('mark'))
			{
				$datas['marks'] = \persistences\Mark::getById(\libs\http\Request::postData('marks'));
				$datas['options'] = \persistences\Option::getAll();

				$this->_view->setFile('marks/update');
				$this->_view->setTitle('Modifier une note');
				$this->_view->setDatas($datas);
			}
			else
			{
				\libs\http\Response::redirect('?ctrl=marks');
			}
		}

		/*
		 * Remplir la combo avec les candidats dans la base
		 */
		public function remplirCombo()
		{
			$apprentices = \libs\DB::query('SELECT * FROM apprentices INNER JOIN options ON apprentices.id_option = options.id_option');

			$apprenticesObj = array();

			foreach($apprentices as $apprentice)
			{
				$params = array(
						'idApprentice' => $apprentice['id_apprentice'],
						'firstName' => $apprentice['first_name'],
						'lastName' => $apprentice['last_name']
					);
				$apprenticesObj[] = new \models\Apprentice($params);
			}

			return $apprenticesObj;
		}
	}
?>