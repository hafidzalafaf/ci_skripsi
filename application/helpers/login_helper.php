<?php
function cek_login()
{
    $ci = get_instance();
    // cek dia udah login atau belum
    if (!$ci->session->userdata('username')) {
        redirect('home/Login');
    } else {
        $role_id = $ci->session->userdata('role_id');
        // mengambil url
        $a = $ci->uri->segment(1);
        $b = $ci->uri->segment(2);
        $c = $ci->uri->segment(3);
        $menu = $a . '/' . $b . '/' . $c;
        echo $menu;

        // mengambil id user_sub_menu berdasrkan url menu
        $queryMenu = $ci->db->get_where('user_sub_menu', ['url' => $menu])->row_array();
        $menu_id = $queryMenu['id_menu'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('home/Login/blocked');
        }
    }
    // jika udah, cek role dia apakah boleh akses atau belum
}
