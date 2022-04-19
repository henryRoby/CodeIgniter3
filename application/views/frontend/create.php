
<div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Insert data now
                                <a href="<?php echo base_url('Employee') ?>" class="btn btn-danger float-right">Back</a>
                            </h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('Employee/store') ?>" method="post">
                               <div class="form-group">
                                   <label for="">First Name</label>
                                   <input type="text" name="first_name" class="form-control">
                                   <small><?php echo form_error('first_name') ?></small>
                               </div>
                               <div class="form-group">
                                   <label for="">Last name</label>
                                   <input type="text" name="last_name" class="form-control">
                                   <small><?php echo form_error('last_name') ?></small>
                               </div>
                               <div class="form-group">
                                   <label for="">Phone number</label>
                                   <input type="text" name="phone" class="form-control">
                                   <small><?php echo form_error('phone') ?></small>
                               </div>
                               <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" class="form-control">
                                   <small><?php echo form_error('email') ?></small>
                               </div>
                               <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Save</button>
                               </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>