<?php
	namespace models;

	require_once \core\FileManager::getCorePath('Model');

	class Mark extends \core\Model {

		private $_idApprentice;
		private $_firstName;
		private $_lastName;
		private $_idFormer;
		private $_name;
		private $_idTest;
		private $_mark;
		private $_comment;
		private $_published;

		public function getIdApprentice() { return $this->_idApprentice; }
		public function getFirstName() { return $this->_firstName; }
		public function getLastName() { return $this->_lastName; }
		public function getIdFormer() { return $this->_idFormer; }
		public function getName() { return $this->_name; }
		public function getIdTest() { return $this->_idTest; }
		public function getMark() { return $this->_mark; }
		public function getComment() { return $this->_comment; }
		public function getPublished() { return $this->_published; }

		public function setIdApprentice(int $idApprentice)
		{ 
			$this->_idApprentice = $idApprentice;
		}
		public function setFirstName(string $firstName)
		{ 
			$this->_firstName = $firstName;
		}
		public function setLastName(string $lastName)
		{ 
			$this->_lastName = $lastName;
		}
		public function setIdFormer(int $idFormer)
		{ 
			$this->_idFormer = $idFormer;
		}
		public function setName(string $name)
		{
			$this->_name = $name;
		}
		public function setIdTest(int $idTest)
		{ 
			$this->_idTest = $idTest;
		}
		public function setMark(float $mark)
		{ 
			$this->_mark = $mark;
		}
		public function setComment(string $comment)
		{ 
			$this->_comment = $comment;
		}
		public function setPublished(bool $published)
		{ 
			$this->_published = $published;
		}
		
	}
?>
