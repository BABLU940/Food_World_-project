<?php
/*created connection for created data base and table for store data in database
  server by tech itsolution academy*/ 
  define('server_name','localhost');
  define('username','root');
  define('password','');
  
  $conn = new mysqli(server_name,username,password);
  // check connection that  is created or not created..
        //   if($conn->connect_error){
        //     //die('your Connection is failded'.mysqli_connect_error());
        //     die('your Connection is failded'.$conn->connect_error);
        //   }
        //   if(mysqli_connect_error())
        //   {
        //     die('error connection in mysql database'.mysqli_error());
        //   }
    if($conn ==false){
        //die('your Connection is failded'.mysqli_connect_error());
    }
    else{
       // die('your Connection is Succesfully have Created');
    }

    // <tr>
    //                 <td>John</td>
    //                 <td>Doe</td>
    //                 <td>john@example.com</td>
    //             </tr>
    //             <tr>
    //                 <td>Mary</td>
    //                 <td>Moe</td>
    //                 <td>mary@example.com</td>
    //             </tr>
    //             <tr>
    //                 <td>July</td>
    //                 <td>Dooley</td>
    //                 <td>july@example.com</td>
    //             </tr>



//     <!DOCTYPE html>
// <html lang="en">
// <head>
//   <title>Bootstrap Example</title>
//   <meta charset="utf-8">
//   <meta name="viewport" content="width=device-width, initial-scale=1">
//   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
//   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
//   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
// </head>
// <body>

// <div class="container">
//   <h2>Basic Table</h2>
//   <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
//   <table class="table">
//     <thead>
//       <tr>
//         <th>Firstname</th>
//         <th>Lastname</th>
//         <th>Email</th>
//       </tr>
//     </thead>
//     <tbody>
//       <tr>
//         <td>John</td>
//         <td>Doe</td>
//         <td>john@example.com</td>
//       </tr>
//       <tr>
//         <td>Mary</td>
//         <td>Moe</td>
//         <td>mary@example.com</td>
//       </tr>
//       <tr>
//         <td>July</td>
//         <td>Dooley</td>
//         <td>july@example.com</td>
//       </tr>
//     </tbody>
//   </table>
// </div>

// </body>
// </html>

/*
<table class="table">
  <thead>
    <tr>
      <th scope="col">Class</th>
      <th scope="col">Heading</th>
      <th scope="col">Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Default</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>

    <tr class="table-primary">
      <th scope="row">Primary</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">Secondary</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr class="table-success">
      <th scope="row">Success</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr class="table-danger">
      <th scope="row">Danger</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr class="table-warning">
      <th scope="row">Warning</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr class="table-info">
      <th scope="row">Info</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr class="table-light">
      <th scope="row">Light</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>Cell</td>
      <td>Cell</td>
    </tr>
  </tbody>
</table> -->
  */

?>