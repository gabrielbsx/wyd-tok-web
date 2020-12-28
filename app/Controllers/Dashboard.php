<?php

namespace App\Controllers;

use App\Models\TicketAnswers;
use App\Models\Users;
use App\Models\Configuration;
use App\Models\News;
use App\Models\Tickets;
use App\Models\MercadopagoRequests;
use App\Models\PicpayRequests;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->has('login')) {
            return view('dashboard/pages/home', $this->data);
        }
        $this->data['error'] = 'Efetue o login para acessar o dashboard!';
        return redirect()->to(base_urL('site'))->with($this->rettype, $this->data);
    }

    public function alterpass()
    {
        if (session()->has('login')) {
            return view('dashboard/pages/alterpass', $this->data);
        }
        $this->data['error'] = 'Efetue o login para acessar a alteração de senha!';
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function numericpass()
    {
        if (session()->has('login')) {
            return view('dashboard/pages/numericpass', $this->data);
        }
        $this->data['error'] = 'Você precisa estar logado para recuperar a senha numérica!';
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function guildmark()
    {
        if (session()->has('login')) {
            return view('dashboard/pages/guildmark', $this->data);
        }
        $this->data['error'] = 'Você precisa estar logado para enviar guildmark!';
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function donate()
    {
        if (session()->has('login')) {
            return view('dashboard/pages/donate', $this->data);
        }
        $this->data['error'] = 'Você precisa estar logado para doar!';
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function answerticket($id = null)
    {
        if (session()->has('login')) {
            if ($id > 0) {
                $ticket = new Tickets();
                $answers = new TicketAnswers();
                $userid = session()->get('login')['id'];
                if (session()->get('login')['access'] == 3)
                    $this->data['ticket'] = $ticket->select('users.username, tickets.*')->join('users', 'users.id = tickets.id_user')->where(['tickets.id' => $id])->first();
                else
                    $this->data['ticket'] = $ticket->select('users.username, tickets.*')->join('users', 'users.id = tickets.id_user')->where(['tickets.id' => $id, 'tickets.id_user' => $userid])->first();
                $this->data['answers_paginate'] = $answers->select('users.username, users.access, ticket_answers.*')->join('users', 'users.id = ticket_answers.id_user')->where('ticket_answers.id_ticket', $id)->paginate(2, 'answers');
                $this->data['answers_pager'] = $answers->pager;
            }
            return view('dashboard/pages/answerticket', $this->data);
        }
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function createticket()
    {
        if (session()->has('login')) {
            return view('dashboard/pages/createticket', $this->data);
        }
        $this->data['error'] = 'Você precisa estar logado criar um ticket!';
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function tickets()
    {
        if (session()->has('login')) {
            $tickets = new Tickets();
            $this->data['paginate_tickets'] = session()->get('login')['access'] == 3 ? $tickets->paginate(5, 'tickets') : $tickets->where('id_user', session()->get('login')['id'])->paginate(5, 'tickets');
            $this->data['pager_tickets'] = $tickets->pager;
            return view('dashboard/pages/tickets', $this->data);
        }
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function donation()
    {
        if (session()->has('login')) {
            $donate = new Users();
            //$this->data['donate_paginate'] = $donate->join('picpay_requests', 'picpay_requests.id_user = mercadopago_requests.id_user')->where(['mercadopago_requests.id_user' => session()->get('login')['id'], 'picpay_requests.id_user' => session()->get('login')['id']])->orderBy('mercadopago_requests.id', 'DESC')->paginate(3, 'donate');
            $this->data['donate_paginate'] = $donate->join('picpay_requests', 'picpay_requests.id_user = users.id', 'left')->join('mercadopago_requests', 'mercadopago_requests.id_user = users.id', 'left')->where(['users.id' => session()->get('login')['id']])->paginate(3, 'donate');
            $this->data['donate_pager'] = $donate->pager;
            return view('dashboard/pages/donation', $this->data);
        } else $this->data['error'] = 'Você precisa estar logado para doar!';
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function logout()
    {
        if (session()->has('login')) {
            session()->remove('login');
            $this->rettype = 'success';
            $this->data['success'] = 'Você deslogou com sucesso!';
        } else $this->data['error'] = 'Você precisa estar logado para encerrar a sessão!';
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }
}
