<?php

namespace App\Controllers;

use App\Models\News;
use App\Models\Guides;
use App\Models\GuideArticle;

class Site extends BaseController
{
	public function index()
	{
		$news = new News();
		$this->data['news_paginate'] = $news->paginate(4, 'news');
		$this->data['news_pager'] = $news->pager;
		return view('pages/home', $this->data);
	}

	public function downloads()
	{
		return view('pages/downloads');
	}

	public function ranking()
	{
		return view('pages/ranking');
	}

	public function aboutus()
	{
		return view('pages/aboutus');
	}

	public function faq()
	{
		return view('pages/faq');
	}

	public function guides()
	{
		$guides = new Guides();
		$articles = new GuideArticle();
		$this->data['guides'] = $guides->orderBy('id', 'DESC')->get()->getResult('array');
		foreach ($this->data['guides'] as $key => $value) {
			$this->data['guides'][$key]['articles'] = $articles->where(['id_guide' => $value['id']])->orderBy('id', 'DESC')->get()->getResult('array');
		}
		return view('pages/guides', $this->data);
	}

	public function login()
	{
		if (!session()->has('login'))
			return view('pages/login');
		return redirect()->to(base_url('dashboard'));
	}

	public function register()
	{
		if (!session()->has('login'))
			return view('pages/register');
		return redirect()->to(base_url('dashboard'));
	}

	public function recovery()
	{
		if (!session()->has('login'))
			return view('pages/recovery');
		return redirect()->to(base_url('dashboard'));
	}

	public function news($id = null)
	{
		if ($id > 0) {
			$news = new News();
			$this->data['news'] = $news->where('id', $id)->first();
		} else $this->data['error'] = 'Notícia inexistente!';
		return view('pages/news', $this->data);
	}
}
