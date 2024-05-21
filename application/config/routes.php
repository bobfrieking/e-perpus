<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



	/*Admin Login*/
		$route['Admin/Login']  	  = 'Backend/Login';
		$route['Admin/Dashboard'] = 'Backend/Dashboard';
		$route['Admin/proses_login'] = 'Backend/Login/admin_login';
		$route['user_log-out']    = 'Backend/Login/user_log_out';

		$route['Admin/Data_petugas'] = 'Backend/Master_data';
		$route['Admin/Data_anggota'] = 'Backend/Master_data/tampil_data_anggota';

		$route['Admin/Data_buku'] = 'Backend/Buku';
		$route['Admin/Buku/Kategori-buku'] = 'Backend/Buku/kategori_buku';
		$route['Admin/Buku/Penerbit-buku'] = 'Backend/Buku/penerbit_buku';
		$route['Admin/Buku/Pengarang-buku'] = 'Backend/Buku/pengarang_buku';

		$route['Admin/Peminjaman-Buku']  	= 'Backend/Peminjaman_buku';

		$route['Admin/Pengembalian-Buku']   = 'Backend/Pengembalian_buku';

		$route['Admin/Profile'] 		= 'Backend/Profile';

		$route['Admin/Konfigurasi_halaman'] = 'Backend/Config_admin';

		$route['Admin/Kontak'] = 'Backend/Kontak';

		$route['Admin/Testimoni'] = 'Backend/Testimoni';

		$route['Admin/TxtBase'] = 'Backend/Textbase';

		$route['Admin/Blog'] = 'Backend/Blog';







	/*Front Beranda*/
		$route['Beranda'] = 'Frontend/Home';
		$route['process_tmp'] = 'Frontend/Login/process_tmp';
		$route['Kontak_kami'] = 'Frontend/Kontak';
		$route['User_Profile'] = 'Frontend/Profile';

		$route['Front/Buku'] = 'Frontend/Buku';

		$route['Front/Invoice'] = 'Frontend/Invoice';

		$route['Front/History'] = 'Frontend/History';


		/*Proses Front End*/
			$route['Proses-Pinjam-Buku'] = 'Frontend/Buku/proses_pinjam_buku';
