<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main(Request $request, $page = null)
    {
        if ($page !== null && $page !== 'plus' && $page !== 'minus') {
            switch ($page) {
                case 'repetition':
                    $response = $this->getRepetition(false);
                    $count = 2;
                    break;
                case 'self-referential':
                    $response = $this->getSelfReferential(false);
                    $count = 3;
                    break;
                case 'minimalist':
                    $response = $this->getMinimalist(false);
                    $count = 4;
                    break;
                case 'incompleteness':
                    $response = $this->getIncompleteness(false);
                    $count = 1;
                    break;
                default:
                    $response = redirect('/');
                    $count = null;
                    break;
            }
            return $response->withCookie(cookie()->forever('count',$count));
        }

        $count = $request->cookie('count');

        if ($page === 'minus') {
            $count -= 2;
        }

        switch ($count) {
            case NULL:
                $count = 1;
            case 1:
                $response = $this->getRepetition(true);
                break;
            case 2:
                $response = $this->getSelfReferential(true);
                break;
            case 3:
                $response = $this->getMinimalist(true);
                break;
            case 4:
                $response = $this->getIncompleteness(true);
                $count = 0;
                break;
            default:
                $response = redirect('/');
                $count = 0;
                break;

        }
        $count = $count % 4 + 1;
        return $response->withCookie(cookie()->forever('count',$count));
    }

    /**
     * @return mixed
     */
    public function getSelfReferential($sequential)
    {
        if ($sequential) {
            return response()->view('tour/self-referential');
        }
        return response()->view('tour/self-referential');
    }

    /**
     * @return mixed
     */
    public function getRepetition($sequential)
    {
        if ($sequential) {
            return response()->view('tour/repetition');
        }
        return response()->view('tour/repetition');
    }

    public function getMinimalist($sequential)
    {
        if ($sequential) {
            return response()->view('tour/minimalist');
        }
        return response()->view('tour/minimalist');
    }

    public function getIncompleteness($sequential)
    {
        if ($sequential) {
            return response()->view('tour/incompleteness');
        }
        return response()->view('tour/incompleteness');
    }
}
