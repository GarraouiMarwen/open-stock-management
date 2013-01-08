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
class updateSellerAction extends sfAction {

    //put your code here
        private $sellerService;

    /**
     * 
     * @return SellerService 
     */
    public function getSellerService() {
        if (!($this->sellerService instanceof SellerService)) {
            $this->sellerService = new SellerService();
        }
        return $this->sellerService;
    }
    
    
    public function execute($request) {
        $this->seller = ($this->getSellerService()->getSellerById($request->getParameter('id')));
        $this->forward404Unless($this->seller);
        $this->form = new SellerForm($this->seller);
        $this->processForm($request, $this->form);
        $this->setTemplate('editSeller');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind(
                $request->getParameter($form->getName()), $request->getFiles($form->getName())
        );

        if ($form->isValid()) {
            $seller = $form->save();

            $this->redirect('seller/showSeller?id='.$seller->getId()."'");
        }
    }

}

?>
