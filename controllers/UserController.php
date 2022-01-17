<?php


namespace controllers;

require_once '../vendor/autoload.php';

use base\Application;

class UserController extends Controller
{

    public function actionLogin()
    {
        echo $this->render('loginForm');
    }

    public function actionAccount()
    {
        $user = Application::getInstance()->session->get('user');

        $userData = Application::getInstance()->user->getBy($user['id'], 'id');
        echo $this->render('userAccount', [
                'user' => $user,
                'data' => $userData
            ]
        );
    }

    public function actionAuthentication()
    {
        $req = Application::getInstance()->request->req('auth');
        $userLogin = $req['login'];
        $userPassword = $req['password'];
        $userDB = Application::getInstance()->userRepository->getBy($userLogin, 'login');
//        password_hash();
        if (isset($userDB) && $userDB->password == $userPassword) {
            $sessionUser = [
                'id' => $userDB->id,
                'login' => $userDB->login,
            ];
            Application::getInstance()->session->set('user', $sessionUser);
            Application::getInstance()->path->redirect('account');
        } else {
            echo 'Error login or password';
        }
    }

    public function actionRegistration()
    {
        echo $this->render('registrationForm');
    }

    public function actionAdd()
    {
        $req = Application::getInstance()->request->req('reg');
//        password_hash();
        if (!empty($req['login']) && !empty($req['password']) && !empty($req['name']) && !empty($req['phone'])) {
            Application::getInstance()->user->add($req);
            $userDB = Application::getInstance()->userRepository->getBy($req['login'], 'login');
            if (isset($userDB)) {
                $sessionUser = [
                    'id' => $userDB->id,
                    'login' => $userDB->login,
                ];
                Application::getInstance()->session->set('user', $sessionUser);
                Application::getInstance()->path->redirect('account');
            }
        }
        echo 'ERROR VALIDATION';
    }

    public function actionUpdate()
    {
        $params = Application::getInstance()->request->req('params');
        Application::getInstance()->user->update($params);
        Application::getInstance()->path->redirect('account');
    }

    public function actionOut()
    {
        Application::getInstance()->session->delete('user');
        Application::getInstance()->path->redirect('/');
    }
}