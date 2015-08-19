<?php

namespace Controller\V1;

use \Controller\BaseController as BaseController;

class User extends BaseController
{
    public function run()
    {
        $this->app->get('/v1/user', function() {
            $this->getUserList();
        });

        $this->app->get('/v1/user/:id', function($id) {
            $this->getUser($id);
        });

        $this->app->put('/v1/user/:id', function($id) {
            $this->editprofile($id);
        });

        $this->app->post('/v1/user', function() {
            $this->register();
        });

        $this->app->post('/v1/user/login', function() {
            $this->login();
        });

        $this->app->post('/v1/user/logout', function() {
            $this->logout();
        });

        $this->app->post('/v1/user/forgotpassword', function() {
            $this->forgotpassword();
        });

        $this->app->post('/v1/user/changepassword/:id', function($id) {
            $this->changepassword($id);
        });
    }

    /**
     * Get all users in system
     * @return bool
     */
    private function getUserList()
    {
        $items = array();
        for ($i = 0; $i < 30; $i++) {
            $items[] = array(
                'id' => $this->faker->randomNumber,
                'fullname' => $this->faker->name,
                'avatar' => $this->faker->imageUrl
            );
        }

        $jsondata = array(
            'total' => 10,
            'limit' => 30,
            'items' => $items
        );
        $this->renderJson($jsondata);
    }

    private function getUser($id)
    {

    }

    /**
     * Login user by email & password
     */
    private function login()
    {

    }

    /**
     * Logout user (remove access token)
     */
    private function logout()
    {
        $jsondata = array(
            'success' => true,
            'message' => '',
        );

        $this->renderJson($jsondata);
    }

    /**
     * Create new user
     */
    private function register()
    {

    }

    /**
     * Edit user profile
     * @param int $id : User ID
     */
    private function editprofile($id)
    {

    }

    /**
     * Edit user profile
     */
    private function forgotpassword()
    {

    }

    /**
     * Edit user password
     * @param int $id
     */
    private function changepassword($id)
    {

    }
}
