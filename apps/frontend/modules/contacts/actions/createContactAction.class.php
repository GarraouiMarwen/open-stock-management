<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of createContactAction
 *
 * @author jaykrish
 */
class createContactAction extends sfAction {

    //put your code here

    public function execute($request) {
        $this->form = new SellerForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('newContact');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind(
                $request->getParameter($form->getName()), $request->getFiles($form->getName())
        );

        if ($form->isValid()) {
            $job = $form->save();

            $this->redirect('contacts/homeContact');
        }
    }

}

?>
