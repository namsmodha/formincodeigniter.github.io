<!DOCTYPE html>
<html>
<head>
	<title>Manage student</title>
</head>
<body>
								<table border="1">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Name</th>
                                      <th>Email</th> 
                                     
                                      <th>Phone</th>
                                      
                                      <th>Zipcode</th> 
                                      <th>Hobbiess</th>
                                      
                                      
                                  </tr>
                              </thead>
                              <tbody>
                              	<?php 
                              	$count=1;
                              	foreach($list as $users){?>

                              	<tr>
                                  <td><?php echo $count ?></td>
                                  <td><?php echo $users->name;?></td>
                                  <td><?php echo $users->email;?></td>
                                                          
                                  <td><?php echo $users->phone;?></td>
                                  
                                  <td><?php echo $users->zipcode;?></td>
                                  <td><?php echo $users->hobbiess;?></td>
                                  <td><a href="<?php echo base_url("Admin/fetchSingleStudentData/$users->id");?>">
                                  Edit</a></td>
                                  <td><a href="<?php echo base_url("Admin/deleteStudentProfile/$users->id");?>">
                                  Delete</a></td>
            
                                </tr>

                              	<?php $count++; } ?>
                               
                          </tbody>
                      </table>
</body>
</html>