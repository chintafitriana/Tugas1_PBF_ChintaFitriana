<!-- <?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Test extends BaseController
{
    public function test()
    {
        return view('test'); // Menggunakan "return" daripada "echo"
    }

    // ...
}