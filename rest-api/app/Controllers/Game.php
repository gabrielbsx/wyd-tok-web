<?php

namespace app\Controllers;

use app\Controllers\Base;

class Game extends Base
{
    public function index($request, $response)
    {
        try {
            $this->data['status'] = 'success';
            $this->data['message'] = 'Requisição validada com sucesso!';
        } catch (Exception $e) {
            $this->data['message'] = 'Houve algum erro ao validar a requisição!';
        }
        $this->setDataJson();
        $response->getBody()->write($this->data);
        return $response;
    }

    public function login($request, $response, $args)
    {
        try {
            $data = json_decode($request->getBody());
            if (isset($data->username)) {
                $username = $data->username;
                $account = $this->game . $this->dbsrv . 'account/' . $this->getInitial($username) . '/' . $username;
                if (file_exists($account)) {
                    $this->data['status'] = 'success';
                    $this->data['message'] = 'Login efetuado com sucesso!';
                } else $this->data['message'] = 'Conta inexistente!';
            } else $this->data['message'] = 'Requisição inválida!';
        } catch (Exception $e) {
            $this->data['message'] = 'Houve algum erro ao verificar se a conta existe no jogo!';
        }
        $this->setDataJson();
        $response->getBody()->write($this->data);
        return $response;
    }

    public function register($request, $response, $args)
    {
        try {
            $data = json_decode($request->getBody());
            if (isset($data->username, $data->password)) {
                $username = $data->username;
                $password = $data->password;
                $account = $this->game . $this->dbsrv . 'account/' . $this->getInitial($username) . '/' . $username;
                if (!file_exists($account)) {
                    $path = $this->game . $this->dbsrv . $this->importUser . '/' . rand() . time() . '.txt';
                    if (!file_exists($path)) {
                        $fp = fopen($path, 'w');
                        $write = fwrite($fp, $username . ' ' . $password);
                        fclose($fp);
                        if ($write) {
                            $this->data['status'] = 'success';
                            $this->data['message'] = 'Conta criada com sucesso!';
                        } else {
                            $this->data['message'] = 'Não foi possível cadastrar a conta!';
                        }
                    } else $this->data['message'] = 'Não foi possível cadastrar a conta!';
                } else {
                    $this->data['message'] = 'Conta existente!';
                }
            } else {
                $this->data['message'] = 'Requisição inválida!';
            }
        } catch (Exception $e) {
            $this->data['message'] = 'Houve algum erro ao cadastrar a conta!';
        }
        $this->setDataJson();
        $response->getBody()->write($this->data);
        return $response;
    }

    public function donate($request, $response, $args)
    {
        try {
            $data = json_decode($request->getBody());
            if (isset($data->user, $data->donate)) {
                $path = $this->ingame . $this->dbsrv . $this->importCash . '/' . rand() . time() . '.txt';
                if (!file_exists($path)) {
                    $fp = fopen($path, 'w');
                    if (fwrite($fp, $data->user . ' ' . $data->donate)) {
                        if (is_array($data->item_bonus)) {
                            foreach ($data->item_bonus as $key => $item) {
                                $itempath = $this->ingame . $this->dbsrv . $this->importItem . '/' . rand() . time() . '.txt';
                                $reward['id'] = $item['itemid'];
                                $reward['EF1'] = $item['effect1'];
                                $reward['EFV1'] = $item['effect_value1'];
                                $reward['EF2'] = $item['effect2'];
                                $reward['EFV2'] = $item['effect_value2'];
                                $reward['EF3'] = $item['effect3'];
                                $reward['EFV3'] = $item['effect_value3'];
                                $import_info = $data->user . ' ' . implode('_', $reward);
                                if(!file_exists($itempath)) {
                                    $fp = fopen($itempath, 'w');
                                    fwrite($fp, $import_info);
                                    fclose($fp);
                                } else {
                                    $date = date("Y-m-d H:i:s");
                                    $stmt = $this->conn->prepare(
                                        'INSERT INTO log_donate (`id`, `user`, `donate`, `err_type`, `created_at`) VALUES (NULL, ?, ?, ?, ?)'
                                    );
                                    $stmt->bind_param('siss', $data->user, $this->donate, $import_info, $date);
                                    if (!$stmt->execute()) {
                                        //caso não insira no db
                                        array_push($this->data['error'], $import_info);
                                    }
                                    $stmt->close();
                                }
                            }
                            $this->data['status'] = 'success';
                            $this->data['message'] = 'Doação inserida com sucesso!';
                        }
                    }
                    fclose($fp);
                } else $this->data['message'] = 'Não foi possível enviar o donate!';
            }
        } catch (Exception $e) {
            $this->data['message'] = 'Houve algum erro ao donatar a conta!';
        }
        $this->setDataJson();
        $response->getBody()->write($this->data);
        return $response;
    }

    

    public function alterpass($request, $response, $args)
    {
        try {
            $data = json_decode($request->getBody());
            if (isset($data->username, $data->password)) {
                $username = $data->username;
                $password = $data->password;
                $account = $this->game . $this->dbsrv . 'account/' . $this->getInitial($username) . '/' . $username;
                if (file_exists($account)) {
                    $path = $this->ingame . $this->dbsrv . $this->importPass . '/' . rand() . time() . '.txt';
                    if (!file_exists($path)) {
                        $fp = fopen($path, 'w');
                        if (fwrite($fp, $username . ' ' . $password)) {
                            $this->data['status'] = 'success';
                            $this->data['message'] = 'Senha alterada com sucesso!';
                        } else $this->data['message'] = 'Não foi possível alterar a senha';
                        fclose($fp);
                    } else $this->data['message'] = 'Não foi possível alterar a senha';
                } else $this->data['message'] = 'Conta inexistente!';
            } else $this->data['message'] = 'Requisição inválida!';
        } catch (Exception $e) {
            $this->data['message'] = 'Houve algum erro ao alterar a senha!';
        } 
        $this->setDataJson();
        $response->getBody()->write($this->data);
        return $response;
    }

    public function droplist($request, $response, $args)
    {
        try {
            $data = json_decode($request->getBody());
            $path = $this->game . $this->tmsrv . 'MobDropList.txt';
            if (file_exists($path)) {
                $this->data['status'] = 'success';
                $this->data['droplist'] = base64_encode(file_get_contents($path));
            } else $this->data['message'] = 'Não há droplist!';
        } catch (Exception $e) {
            $this->data['message'] = 'Houve algum erro ao ler o droplist!';
        }
        $this->setDataJson();
        $response->getBody()->write($this->data);
        return $response;
    }

    public function guild($request, $response, $args)
    {
        try {
            $data = json_decode($request->getBody());
            if (isset($data->guildid)) {
                $path = $this->game . $this->dbsrv . 'guild/' . $data->guildid . '.bin';
                if (file_exists($path)) {
                    $this->data['status'] = 'success';
                    $this->data['guild'] = bin2hex(file_get_contents($$path));
                } else $this->data['message'] = 'Não há guild com esse id!';
            }
        } catch (Exception $e) {
            $this->data['message'] = 'Hou algum erro ao ler a guild!';
        }
        $this->setDataJson();
        $response->getBody()->write($this->data);
        return $response;
    }
}