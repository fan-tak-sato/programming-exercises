<?php

require_once("db/db.php");
require_once("models/base.php");
require_once("models/anagraficaValidator.php");

/**
 * Main Controller
 */
class ControllerIndex extends ControllerBase {

	public function index() {
		$this->view->assign('indexPath', $this->getIndexPath());
		return $this->view->fetch();
	}

	/**
	 * Show form
	 *
	 * @return mixed
	 */
	public function form() {
		$this->view->assign('indexPath', $this->getIndexPath());
		return $this->view->fetch();
	}

	/**
	 * Validate and confirm form data
	 *
	 * @return mixed
	 */
	public function confirm() {
		$formPost = $this->sanitizeFormInput($_POST);

		$anagraficaValidator = new ModelAnagraficaValidator();
		$formErrors 		 = $anagraficaValidator->validateFormData($formPost);
		if ($formErrors and !empty($formPost)) {
			$this->view->assign('formError', $formErrors);
		}

		$this->view->assign('formPost', $formPost);
		$this->view->assign('indexPath', $this->getIndexPath());
		return $this->view->fetch();
	}

	/**
	 * Check accept and insert into the db
	 *
	 * @return mixed
	 */
	public function process() {
		$formPost = $this->sanitizeFormInput($_POST);

		// Validate checkbox
		if (!isset($formPost['chkaccept'])) {

			$this->view->assign('errorUncheck', 1);

			$this->assignFormPostAndIndexPath($formPost);

			return $this->view->fetch();
		}

		$modelBase = new ModelBase();
		// $modelBase->setData($formPost); // set sanitized form data
		if ($modelBase->save() ) {
			$this->view->assign('saved', 1);
		}

		$this->assignFormPostAndIndexPath($formPost);

		return $this->view->fetch();
	}

		/**
		 * @param array $formPost
		 */
		private function assignFormPostAndIndexPath($formPost)
		{
			$this->view->assign('formPost', $formPost);
			$this->view->assign('indexPath', $this->getIndexPath());
		}

		/**
		 * Sanitize input variables
		 *
		 * @param $post
		 *
		 * @return mixed|array
		 */
		private function sanitizeFormInput($post)
		{
			$modelBase = new ModelBase();

			if (isset($post['name'])) {
				$post['name'] = $modelBase->cleanString($post['name']);
			}

			if (isset($post['cognome'])) {
				$post['cognome'] = $modelBase->cleanString($post['cognome']);
			}

			if (isset($post['email'])) {
				$post['email'] = $modelBase->cleanString($post['email']);
			}

			return $post;
		}
}
