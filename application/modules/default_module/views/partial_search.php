		
			                <div class="form-group"  style="margin: 5px;">
			                  <label for="<?= $field_name ?>" class="col-sm-4 col-md-4 control-label">
			                      <?= $label ?>
			                  </label>

			                  <div class="col-sm-6 col-md-5 inputGroupContainer">
			                      	<div class="input-group">
			                        <span class="input-group-addon">
			                          <i class="glyphicon glyphicon-<?= $icon ?>"></i>
			                        </span>
			                    	<input type="text"
			                    		   id="<?= $field_name ?>"
			                    		   name="<?= $field_name ?>" 
			                    		   placeholder="<?= $placeholder ?>"
			                    		   class="typeahead form-control"
			                    		   style="margin:0px auto;width:300px;">
			                        </div>

			                        <!-- Show errors here -->
			                        <?= form_error($field_name, '<div class="error" style="color: red;">', '</div>'); ?>
			                  </div>
			                </div>
