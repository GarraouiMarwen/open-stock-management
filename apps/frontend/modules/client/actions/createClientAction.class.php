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
class createClientAction extends sfAction {

    //put your code here

    public function execute($request) {
        $this->form = new ClientForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('newClient');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind(
                $request->getParameter($form->getName()), $request->getFiles($form->getName())
        );

        if ($form->isValid()) {
            $client = $form->save();

            $this->redirect('show_client', $client);
        }
    }

}

?>
