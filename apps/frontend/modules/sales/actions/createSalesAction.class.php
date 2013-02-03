<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of createSalesAction
 *
 * @author jaykrish
 */
class createSalesAction extends sfAction {
    //put your code here
    
   public function execute($request) {
        $this->salesorderform = new SalesOrderForm();
        $this->processForm($request, $this->salesorderform);
        $this->setTemplate('newSales');
    }

    protected function processForm(sfWebRequest $request, sfForm $salesorderform) {
        $salesorderform->bind(
                $request->getParameter($salesorderform->getName()), $request->getFiles($salesorderform->getName())
        );

        if ($salesorderform->isValid()) {
            $salesorder = $salesorderform->save();

            $this->redirect('show_sales',$salesorder);
        }
    }

}

?>
