<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $title; ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/fontawesome-free/css/all.min.css");?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/dist/css/adminlte.min.css");?>">
  <!-- Multi Step Form css -->
 <!--   <link rel="stylesheet" href="dist/css/multiform.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/select2/css/select2.min.css"); ?>">
  <link rel="stylesheet" href="<?= base_url("assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css");?>">
   <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/daterangepicker/daterangepicker.css");?>">
  <!-- Notepad View -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/summernote/summernote-bs4.css");?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css");?>">
  <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css");?>">
  <link rel="stylesheet" href="<?= base_url("assets/plugins/DataTables-1.11.3/css/jquery.dataTables.min.css");?>">
  <link rel="stylesheet" href="<?= base_url("assets/plugins/Buttons-2.0.1/css/buttons.dataTables.min.css");?>">
  <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables-select/css/select.bootstrap4.min.css");?>">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/plugins/datatables-checkbox/css/datatable.checkbox.min.css");?>">

  <!-- Multirecord select Plugin -->
<!--     <link rel="stylesheet" type="text/css" href="../../assets/multirecord_plug/css/datatable.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/multirecord_plug/css/datatable.checkbox.min.css"> -->
  <!-- parsley validation -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/parsley-folder/parsley.css");?>">
  <!-- Toast -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/Toast/toastr.min.css");?>">
  <!-- jQuery -->
<script src="<?= base_url("assets/plugins/jquery/jquery.min.js");?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/767f8dca2f.js" crossorigin="anonymous"></script>

  <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

table.dataTable tr th.select-checkbox.selected::after {
    content: "✔";
    margin-top: -11px;
    margin-left: -4px;
    text-align: center;
    cursor:pointer;
    text-shadow: rgb(176, 190, 217) 1px 1px, rgb(176, 190, 217) -1px -1px, rgb(176, 190, 217) 1px -1px, rgb(176, 190, 217) -1px 1px;
}
</style>
</head>