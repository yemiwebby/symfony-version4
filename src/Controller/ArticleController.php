<?php
/**
 * Created by PhpStorm.
 * User: yemiwebby
 * Date: 07/03/2018
 * Time: 4:32 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
        return new Response(sprintf('Future page to show space article!: %s',
        $slug
        ));

    }

}