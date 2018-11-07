<?php
/**
 * Created by PhpStorm.
 * User: BL
 * Date: 2018/11/1
 * Time: 17:46
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display the dashboard page.
     *
     * @return mixed
     */
    public function index()
    {
        $pdo     = \DB::connection()->getPdo();

        $version = $pdo->query('select version()')->fetchColumn();

        $data = [
            'server'        => $_SERVER['SERVER_SOFTWARE'],
            'http_host'     => $_SERVER['HTTP_HOST'],
            'remote_host'   => isset($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : $_SERVER['REMOTE_ADDR'],
            'user_agent'    => $_SERVER['HTTP_USER_AGENT'],
            'php'           => phpversion(),
            'sapi_name'     => php_sapi_name(),
            'extensions'    => implode(", ", get_loaded_extensions()),
            'db_connection' => isset($_SERVER['DB_CONNECTION']) ? $_SERVER['DB_CONNECTION'] : 'Secret',
            'db_database'   => isset($_SERVER['DB_DATABASE']) ? $_SERVER['DB_DATABASE'] : 'Secret',
            'db_version'    => $version,
        ];

        return view('system.index', $data);
    }
}