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
class updateItemAction extends sfAction {

    //put your code here
        private $itemService;

    /**
     * 
     * @return ItemService 
     */
    public function getItemService() {
        if (!($this->itemService instanceof ItemService)) {
            $this->itemService = new ItemService();
        }
        return $this->itemService;
    }
    
    
    public function execute($request) {
        $this->item = ($this->getItemService()->getItemById($request->getParameter('id')));
        $this->forward404Unless($this->item);
        $this->form = new ItemForm($this->item);
        $this->processForm($request, $this->form);
        $this->setTemplate('editItem');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind(
                $request->getParameter($form->getName()), $request->getFiles($form->getName())
        );

        if ($form->isValid()) {
            $item = $form->save();

            $this->redirect('stock/showItem?id='.$item->getId()."'");
        }
    }

}

?>
