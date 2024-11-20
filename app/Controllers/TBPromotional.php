<?php

namespace App\Controllers;

use App\Models\TBPromotionalModel;

class TBPromotional extends BaseController
{
    public function index()
    {
        $data['title'] = 'Viewing Users List';
        $data['page_title'] = 'Viewing Users List';

        $user_model = new UserModel();

        $data['users'] = $user_model->where('active', 1)->findAll();

        return view('welcome_message', $data);
    }

    public function success()
    {
        $promotionalModel = new TBPromotionalModel();

        $promotional = [];
        $message = session()->getFlashdata('message'); // Retrieve the flash message from the session

        try {
            $promotional = $promotionalModel->where('title !=', '')->findAll();
            $message = $message ?: (count($promotional) > 0 ? 'Users retrieved successfully.' : 'No users found.');
        } catch (\Exception $e) {
            $message = 'Error retrieving users: ' . $e->getMessage();
        }

        $data = [
            'title' => 'Landing Page',
            'promotional' => $promotional,
            'message' => $message
        ];

        return view('welcome_message', $data);
    }
}