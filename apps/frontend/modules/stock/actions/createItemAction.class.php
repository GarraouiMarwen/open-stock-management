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
class createItemAction extends sfAction {

    //put your code here

    public function execute($request) {
        $this->form = new ItemForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('newItem');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind(
                $request->getParameter($form->getName()), $request->getFiles($form->getName())
        );

        if ($form->isValid()) {
            $item = $form->save();

            $this->redirect('show_item',$item);
        }
    }

}

?>
