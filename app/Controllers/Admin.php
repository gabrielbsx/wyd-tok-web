<?php

namespace App\Controllers;

use App\Models\Configuration;
use App\Models\News;
use App\Models\Donate;
use App\Models\DonateBonus;
use App\Models\Tickets;
use App\Models\MercadopagoRequests;
use App\Models\PicpayRequests;

class Admin extends BaseController
{
    public function index()
    {
        return redirect()->to(base_url('dashboard'));
    }

    public function config()
    {
        if (session()->has('login')) {
            if (session()->get('login')['access'] == 3) {
                $config = new Configuration();
                $this->data['configuration'] = $config->first();
                return view('dashboard/pages/admin/configuration', $this->data);
            }
        }
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function news()
    {
        if (session()->has('login')) {
            if (session()->get('login')['access'] == 3) {
                $news = new News();
                $this->data['paginate_news'] = $news->orderBy('id', 'DESC')->paginate(5, 'news');
                $this->data['pager_news'] = $news->pager;
                return view('dashboard/pages/admin/news', $this->data);
            }
        }
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function createnews()
    {
        if (session()->has('login')) {
            if (session()->get('login')['access'] == 3) {
                return view('dashboard/pages/admin/createnews', $this->data);
            }
        }
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function editnews($id = null)
    {
        if (session()->has('login')) {
            if (session()->get('login')['access'] == 3) {
                if ($id > 0) {
                    $news = new News();
                    $this->data['news'] = $news->where('id', $id)->first();
                }
                return view('dashboard/pages/admin/editnews', $this->data);
            }
        }
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function donate()
    {
        if (session()->has('login')) {
            if (session()->get('login')['access'] == 3) {
                $package = new Donate();
                $this->data['paginate_package'] = $package->orderBy('id', 'DESC')->paginate(5, 'package');
                $this->data['pager_package'] = $package->pager;
                return view('dashboard/pages/admin/donate', $this->data);
            }
        }
    }

    public function editpackage($id = null)
    {
        if (session()->has('login')) {
            if (session()->get('login')['access'] == 3) {
                if ($id > 0) {
                    $package = new Donate();
                    $this->data['package'] = $package->where('id', $id)->first();
                }
                return view('dashboard/pages/admin/editpackage', $this->data);
            }
        }
        return redirect()->to(base_url('site'))->with($this->rettype, $this->data);
    }

    public function packagedonate()
    {
        if (session()->has('login')) {
            if (session()->get('login')['access'] == 3) {

                return view('dashboard/pages/admin/packagedonate', $this->data);
            }
        }
    }
}
