<?php

namespace Src\Controllers\AdminControllers;

use ORM;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Src\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $application = ORM::forTable('applications')
            ->select('applications.*')
            ->select('goods.name', 'good')
            ->leftOuterJoin('goods', 'goods.id = applications.good_id')
            ->findMany();
        return $this->renderer->render($response, 'admin/applications/index.php', [
            'applications' => $application,
        ]);
    }

    public function create(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $good = ORM::forTable('goods')->where('slug', $args['goodSlug'])->findOne();

        if(isset($_SESSION['user_id'])){
            $userPhone = ORM::forTable('users')->findOne($_SESSION['user_id'])['login'];
        }

        return $this->renderer->render($response, 'admin/applications/create.php', [
            'good' => $good,
            'userPhone' => $userPhone ?? '',
        ]);
    }

    public function store(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $userPhone = $request->getParsedBody()['user-phone'];
        $good = ORM::forTable('goods')->where('slug',$args['goodSlug'])->findOne()['id'];
        $time = $request->getParsedBody() ['time'];
        $status = 'Новое';

        ORM::forTable('applications')->create([
            'user_phone' => $userPhone,
            'good_id' => $good,
            'time' => $time,
            'status' => $status,
        ])->save();

        return $response->withHeader('Location', '/')->withStatus(302);
    }

    public function edit(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $application = ORM::forTable('applications')->findOne($args['id']);

        return $this->renderer->render($response, 'admin/applications/edit.php', [
            'application' => $application,
        ]);
    }
    public function update(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $userPhone = $request->getParsedBody()['user-phone'];
        $time = $request->getParsedBody()['time'];
        $status = $request->getParsedBody()['status'];

        ORM::forTable('applications')->findOne($args['id'])->set([
            'user_phone' => $userPhone,
            'time' => $time,
            'status' => $status,
        ])->save();

        return $response->withHeader('Location', '/applications')->withStatus(302);
    }

    public function delete(RequestInterface $request, ResponseInterface $response, array $args)
    {
        ORM::forTable('applications')->findOne($args['id'])->delete();
        return $response->withHeader('Location', '/applications')->withStatus(302);
    }
}