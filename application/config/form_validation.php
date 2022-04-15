<?php
$config = [
     'validate_form'=>[
          
          [
          	'field'=>'name',
          	'label'=>'<b>Name</b>',
          	'rules'=>'trim|required',
          	
          ],
          [
          	'field'=>'father',
          	'label'=>'<b>Father</b>',
          	'rules'=>'trim|required'
          ],
          [
               'field'=>'mother',
               'label'=>'<b>Mother</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'guardian',
               'label'=>'<b>Guardian</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'dob',
               'label'=>'<b>DOB</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'school',
               'label'=>'<b>School</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'nationality',
               'label'=>'<b>Nationality</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'cast',
               'label'=>'<b>Cast</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'aadhar',
               'label'=>'<b>Aadhar</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'mobile1',
               'label'=>'<b>Mobile</b>',
               'rules'=>'trim|required'
          ],
          // [
          //      'field'=>'mobile2',
          //      'label'=>'<b>Mobile</b>',
          //      'rules'=>'trim|required'
          // ],
          [
               'field'=>'address',
               'label'=>'<b>Mobile</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'addmission',
               'label'=>'<b>Addmission</b>',
               'rules'=>'trim|required'
          ],
          [
               'field'=>'photo',
               'label'=>'<b>Photo</b>',
               'rules'=>'trim|callback_photo_check'
          ],
          [
               'field'=>'sig',
               'label'=>'<b>Signature</b>',
               'rules'=>'trim|callback_sig_check'
          ]


     ],

     'validate_admin_login'=>[
          
          [
               'field'=>'username',
               'label'=>'<b>UserName</b>',
               'rules'=>'trim|required',
               
          ],
          [
               'field'=>'password',
               'label'=>'<b>Password</b>',
               'rules'=>'trim|required'
          ]
     ],

     'validate_change_password'=>[

          [
               'field'=>'password',
               'label'=>'<b>Password</b>',
               'rules'=>'trim|required',
               
          ],
          [
               'field'=>'c_password',
               'label'=>'<b>Confirm Password</b>',
               'rules'=>'trim|required|matches[password]'
          ]

     ]

];

?>