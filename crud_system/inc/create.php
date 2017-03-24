<div class="container-fluid">
    <div class="row">
        <div class="body col-md-12">
            <div class="title">
                <h3>Create Date To Database</h3>
            </div>

            <div class="form col-md-4">
                <form action="" method="post">

<!--For Name -->
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                    </div>

<!--For Roll -->
                    <div class="form-group">
                        <label for="Roll">Roll</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                            <input type="text" name="roll" placeholder="Roll" class="form-control">
                        </div>
                    </div>

<!--For Faculty -->
                    <div class="form-group">
                        <label for="Roll">Faculty</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                            <select name="faculty" class="custom-select">
                                <option selected>select Faculty</option>
                                <option value="bss">BSS</option>
                                <option value="bba">BBA</option>
                                <option value="bsc">BSC</option>
                                <option value="ba">BA</option>
                            </select>
                        </div>
                    </div>

<!--For Subject -->
                    <div class="form-group">
                        <label for="Roll">Subject</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <select name="subject" class="custom-select">
                                <option selected>select Subject</option>
                                <option value="sociology">Sociology</option>
                                <option value="math">Math</option>
                                <option value="biology">Biology</option>
                                <option value="computer">Computer Science</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Roll">Semester</label>
                        <div class="input-group">
                            <label class="custom-control custom-radio">
                              <input id="radio1" name="1" type="radio" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description">1st</span>
                            </label>

                            <label class="custom-control custom-radio">
                              <input id="radio1" name="2" type="radio" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description">2nd</span>
                            </label>

                            <label class="custom-control custom-radio">
                              <input id="radio1" name="3" type="radio" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description">3rd</span>
                            </label>

                            <label class="custom-control custom-radio">
                              <input id="radio1" name="4" type="radio" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description">4th</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>