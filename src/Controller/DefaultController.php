<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function defaultAction(Request $request): Response
    {
        return $this->render('default/default.html.twig');
    }


    /**
     * @param Request $request
     * @return Response
     */
    public function headerAction(Request $request): Response
    {
        return $this->render('default/header.html.twig');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function footerAction(Request $request): Response
    {
        return $this->render('default/footer.html.twig');
    }

    /**@Route("/home", name="home", methods={"GET"}
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request): Response
    {
        return $this->render('default/home.html.twig');
    }

    /**@Route("/clothing", name="clothing", methods={"GET"}
     * @param Request $request
     * @return Response
     */
    public function clothingAction(Request $request): Response
    {
        return $this->render('default/clothing.html.twig');
    }





    /**
     *@Route("/beauty", name="beauty", methods={"GET"}
     * @param Request $request
     * @return Response
     */
    public function beautyAction(Request $request): Response
    {   
    $item = new DataObject\Beauty\Listing();
    $item->setOrderKey("productId");
    $item->setOrder('asc');
        return $this->render('default/beauty.html.twig', ['object'=>$item]);
    }
    
    /**
    * @Route("/eyeliner", name="eyeliner", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function eyelinerAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $eyeliner = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Eyeliner') {
                array_push($eyeliner, $item);
            }
        }
    return $this->render('default/beauty.html.twig', ['object'=>$eyeliner]);
    }

    /**
    * @Route("/lipstick", name="lipstick", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function lipstickAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $lipstick = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Lipstick') {
                array_push($lipstick, $item);
            }
        }
    return $this->render('default/beauty.html.twig', ['object'=>$lipstick]);
 
     }

    /**
    * @Route("/perfume", name="perfume", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function perfumeAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $perfume = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Perfume') {
                array_push($perfume, $item);
            }
        }
    return $this->render('default/beauty.html.twig', ['object'=>$perfume]);
 
     }

    /**
    * @Route("/shampoo", name="shampoo", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function shampooAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $shampoo = [];
        foreach ($items as $item){
            if ($item->getbeautyType()=='Shampoo') {
                array_push($shampoo, $item);
            }
        }
        return $this->render('default/beauty.html.twig', ['object'=>$shampoo]);
     }







     /**
     * @Route("/footwear", name="footwear", methods={"GET"}
     * @param Request $request
     * @return Response
     */
    public function footwearAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productName");
        $items->setOrder('asc');
        return $this->render('default/footwear.html.twig', ['object'=>$items]);
    }

     /**
    * @Route("/boots", name="boots", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function bootsAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $boots = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Boots') {
                array_push($boots, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$boots]);
    }

    /**
    * @Route("/heels", name="heels", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function heelsAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $heels = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Heels') {
                array_push($heels, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$heels]);
    }

    /**
    * @Route("/sandals", name="sandals", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function sandalsAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $sandals = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='Sandals') {
                array_push($sandals, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$sandals]);
    }

    /**
    * @Route("/formalshoes", name="formalshoes", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function formalshoesAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $formalshoes = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='FormalShoes') {
                array_push($formalshoes, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$formalshoes]);
    }

    /**
    * @Route("/sportsshoes", name="sportsshoes", methods={"GET"})
    * @param Request $request
    * @return Response
    */
    public function sportsshoesAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("productID", false);
        $items->setOrder('asc');
        $sportsshoes = [];
        foreach ($items as $item){
            if ($item->getfootwearType()=='SportsShoes') {
                array_push($sportsshoes, $item);
            }
        }
    return $this->render('default/footwear.html.twig', ['object'=>$sportsshoes]);
    }









    /**
     * @param Request $request
     * @return Response
     */
    public function feedbackAction(Request $request): Response
    {
        return $this->render('default/feedback.html.twig');
    }
}
