<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    'pegawai.pegawai_id as id',
    'pegawai_nama',
    'pegawai_umur',
    'pegawai_alamat',
    'foto'
    //'is_deleted',
    ];

$sIndexColumn = 'pegawai_id';
$sTable       = 'pegawai';

$where = [];

$join = [];


$result  = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $where, [
    'pegawai.pegawai_id',
    ]);
$output  = $result['output'];
$rResult = $result['rResult'];
$no = 1;
foreach ($rResult as $aRow) {
    $row = [];
    $nomer = $no;
    $row[] = $nomer;

    for ($i = 0; $i < count($aColumns); $i++) {
       if (strpos($aColumns[$i], 'as') !== false && !isset($aRow[$aColumns[$i]])) {
            $_data = $aRow[strafter($aColumns[$i], 'as ')];
        } else {
            $_data = $aRow[$aColumns[$i]];
        }
        if ($aColumns[$i] == 'pegawai_nama') {
            $_data            = '<a href="' . admin_url('pegawai/pegawai/' . $aRow['id']) . '" class="mbot10 display-block">' . $_data . '</a>';
        }
        $row[] = $_data;
    }

    $options = icon_btn('pegawai/pegawai/' . $aRow['id'], 'pencil-square-o');
    $row[]   = $options .= icon_btn('pegawai/delete/' . $aRow['id'], 'remove', 'btn-danger _delete');
    $no ++;
    $output['aaData'][] = $row;
}
