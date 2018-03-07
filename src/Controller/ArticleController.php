<?php
/**
 * Created by PhpStorm.
 * User: yemiwebby
 * Date: 07/03/2018
 * Time: 4:32 PM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! ');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
          'I love symfony',
          'This is just the best of them all',
          'You know excaltly what I am talking about'
        ];

        return $this->render('article/show.html.twig', [
            'title' =>  ucwords(str_replace('-', ' ', $slug)),
            'comments'  => $comments,
        ]);

    }

}