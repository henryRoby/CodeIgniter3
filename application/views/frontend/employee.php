<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Fetch data from database here
                                <a href="<?php echo base_url('Employee/add') ?>" class="btn btn-primary float-right">Add employee</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Last name</th>
                                        <th>Phone number</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($h as $row){?>
                                    <tr>
                                        <td><?php  echo $row->id;?></td>
                                        <td><?= $row->first_name;?></td>
                                        <td><?= $row->last_name;?></td>
                                        <td><?= $row->phone;?></td>
                                        <td><?= $row->email;?></td>
                                        <td>
                                            <a href="<?php echo base_url('Employee/edit/'.$row->id) ?>" class="btn btn-success btm-sm">edit</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('Employee/delete/'.$row->id) ?>" class="btn btn-danger btm-sm">delete</a>
                                        </td>
                                    </tr>
                                     <?php   }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   